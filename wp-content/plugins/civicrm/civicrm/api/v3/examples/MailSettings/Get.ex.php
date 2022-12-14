<?php

/**
 * @file
 */

/**
 * Test Generated example demonstrating the MailSettings.get API.
 *
 * @return array
 *   API result array
 */
function mail_settings_get_example() {
  $params = [
    'domain_id' => 1,
    'name' => 'my mail setting',
    'domain' => 'setting.com',
    'localpart' => 'civicrm+',
    'server' => 'localhost',
    'username' => 'sue',
    'password' => 'pass',
    'is_default' => 1,
  ];

  try {
    $result = civicrm_api3('MailSettings', 'get', $params);
  }
  catch (CRM_Core_Exception $e) {
    // Handle error here.
    $errorMessage = $e->getMessage();
    $errorCode = $e->getErrorCode();
    $errorData = $e->getExtraParams();
    return [
      'is_error' => 1,
      'error_message' => $errorMessage,
      'error_code' => $errorCode,
      'error_data' => $errorData,
    ];
  }

  return $result;
}

/**
 * Function returns array of result expected from previous function.
 *
 * @return array
 *   API result array
 */
function mail_settings_get_expectedresult() {

  $expectedResult = [
    'is_error' => 0,
    'version' => 3,
    'count' => 1,
    'id' => 6,
    'values' => [
      '6' => [
        'id' => '6',
        'domain_id' => '1',
        'name' => 'my mail setting',
        'is_default' => '1',
        'domain' => 'setting.com',
        'localpart' => 'civicrm+',
        'server' => 'localhost',
        'username' => 'sue',
        'password' => 'pass',
        'is_ssl' => 0,
        'is_non_case_email_skipped' => 0,
        'is_contact_creation_disabled_if_no_match' => 0,
      ],
    ],
  ];

  return $expectedResult;
}

/*
 * This example has been generated from the API test suite.
 * The test that created it is called "testGetMailSettings"
 * and can be found at:
 * https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/MailSettingsTest.php
 *
 * You can see the outcome of the API tests at
 * https://test.civicrm.org/job/CiviCRM-Core-Matrix/
 *
 * To Learn about the API read
 * https://docs.civicrm.org/dev/en/latest/api/
 *
 * Browse the API on your own site with the API Explorer. It is in the main
 * CiviCRM menu, under: Support > Development > API Explorer.
 *
 * Read more about testing here
 * https://docs.civicrm.org/dev/en/latest/testing/
 *
 * API Standards documentation:
 * https://docs.civicrm.org/dev/en/latest/framework/api-architecture/
 */
