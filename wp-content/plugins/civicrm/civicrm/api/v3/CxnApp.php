<?php
/*
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC. All rights reserved.                        |
 |                                                                    |
 | This work is published under the GNU AGPLv3 license with some      |
 | permitted exceptions and without any warranty. For full license    |
 | and copyright information, see https://civicrm.org/licensing       |
 +--------------------------------------------------------------------+
 */

use Civi\Cxn\Rpc\Message\AppMetasMessage;
use Civi\Cxn\Rpc\Message\GarbledMessage;

/**
 * The CxnApp API provides a pseudo-entity for exploring the list
 * of published applications. It is a read-only API which
 * downloads and validates the application list from civicrm.org.
 *
 * At time of writing, this API only supports simple filtering on
 * equality. If you'd like more advanced filters, consider updating
 * _civicrm_api3_basic_array_get() and api_v3_UtilsTest::testBasicArrayGet.
 *
 * NOTE: SyntaxConformanceTest is disabled for CxnApp. As a rough
 * equivalent, see api_v3_UtilsTest::testBasicArrayGet.
 */

/**
 * Adjust metadata for "register" action.
 *
 * @param array $spec
 *   List of fields.
 */
function _civicrm_api3_cxn_app_get_spec(&$spec) {
  $spec['appCert'] = [
    'name' => 'appCert',
    'type' => CRM_Utils_Type::T_TEXT,
    'title' => ts('Certificate'),
    'description' => 'PEM-encoded certificate',
  ];
  $spec['appId'] = [
    'name' => 'appId',
    'type' => CRM_Utils_Type::T_STRING,
    'title' => ts('Application GUID'),
    'description' => 'Application GUID',
    'maxlength' => 128,
    'size' => CRM_Utils_Type::HUGE,
  ];
  $spec['appUrl'] = [
    'name' => 'appUrl',
    'type' => CRM_Utils_Type::T_STRING,
    'title' => ts('Registration URL'),
    'description' => 'An endpoint to notify when performing registration',
    'maxlength' => 255,
    'size' => CRM_Utils_Type::HUGE,
  ];
  $spec['desc'] = [
    'name' => 'desc',
    'type' => CRM_Utils_Type::T_TEXT,
    'title' => ts('Description'),
    'description' => 'Description',
  ];
  //$spec['perm'] = array(
  //  'name' => 'perm',
  //  'type' => CRM_Utils_Type::T_TEXT,
  //  'title' => ts('Permissions'),
  //  'description' => 'Permissions expected for the service (struct)',
  //);
}

/**
 * Get a list of applications available for connections.
 *
 * @param array $params
 * @return array
 * @throws CRM_Core_Exception
 * @throws CRM_Core_Exception
 * @throws \Civi\Cxn\Rpc\Exception\InvalidMessageException
 */
function civicrm_api3_cxn_app_get($params) {
  // You should not change CIVICRM_CXN_APPS_URL in production; this is for local development.
  $url = defined('CIVICRM_CXN_APPS_URL') ? CIVICRM_CXN_APPS_URL : \Civi\Cxn\Rpc\Constants::OFFICIAL_APPMETAS_URL;

  list ($headers, $blob, $code) = CRM_Cxn_CiviCxnHttp::singleton()->send('GET', $url, '');
  if ($code != 200) {
    throw new CRM_Core_Exception("Failed to download application list.");
  }

  $agent = new \Civi\Cxn\Rpc\Agent(NULL, NULL);
  $agent->setCertValidator(CRM_Cxn_BAO_Cxn::createCertificateValidator());
  $message = $agent->decode([AppMetasMessage::NAME, GarbledMessage::NAME], $blob);

  if ($message instanceof AppMetasMessage) {
    return _civicrm_api3_basic_array_get('CxnApp', $params, $message->getData(), 'appId',
      ['appId', 'appUrl', 'desc', 'appCert', 'perm']);
  }
  elseif ($message instanceof GarbledMessage) {
    return civicrm_api3_create_error('Received garbled response', [
      'garbled_message' => $message->getData(),
    ]);
  }
  else {
    return civicrm_api3_create_error("Unrecognized message");
  }
}
