<?php

/**
 * @file
 */

/**
 * Test Generated example demonstrating the CustomValue.create API.
 *
 * @return array
 *   API result array
 */
function custom_value_create_example() {
  $params = [
    'custom_1' => 'customString',
    'entity_id' => 3,
  ];

  try {
    $result = civicrm_api3('CustomValue', 'create', $params);
  }
  catch (CRM_Core_Exception $e) {
    // Handle error here.
    $errorMessage = $e->getMessage();
    $errorCode = $e->getErrorCode();
    $errorData = $e->getExtraParams();
    return [
      'error' => $errorMessage,
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
function custom_value_create_expectedresult() {

  $expectedResult = [
    'is_error' => 0,
    'version' => 3,
    'count' => 1,
    'values' => TRUE,
  ];

  return $expectedResult;
}

/*
 * This example has been generated from the API test suite.
 * The test that created it is called "testCreateCustomValue"
 * and can be found at:
 * https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/CustomValueTest.php
 *
 * You can see the outcome of the API tests at
 * https://test.civicrm.org/job/CiviCRM-master-git/
 *
 * To Learn about the API read
 * http://wiki.civicrm.org/confluence/display/CRMDOC/Using+the+API
 *
 * Browse the api on your own site with the api explorer
 * http://MYSITE.ORG/path/to/civicrm/api
 *
 * Read more about testing here
 * http://wiki.civicrm.org/confluence/display/CRM/Testing
 *
 * API Standards documentation:
 * http://wiki.civicrm.org/confluence/display/CRM/API+Architecture+Standards
 */
