<?php

/**
 * @file
 */

/**
 * Test Generated example demonstrating the Grant.get API.
 *
 * @return array
 *   API result array
 */
function grant_get_example() {
  $params = [
    'rationale' => 'Just Because',
  ];

  try {
    $result = civicrm_api3('Grant', 'get', $params);
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
function grant_get_expectedresult() {

  $expectedResult = [
    'is_error' => 0,
    'version' => 3,
    'count' => 1,
    'id' => 1,
    'values' => [
      '1' => [
        'id' => '1',
        'contact_id' => '3',
        'application_received_date' => '20130728084957',
        'decision_date' => '20130805000000',
        'grant_type_id' => '1',
        'amount_total' => '500.00',
        'currency' => 'USD',
        'rationale' => 'Just Because',
        'status_id' => '1',
      ],
    ],
  ];

  return $expectedResult;
}

/*
 * This example has been generated from the API test suite.
 * The test that created it is called "testGetGrant"
 * and can be found at:
 * https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/GrantTest.php
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
