<?php

/**
 * @file
 */

/**
 * Test Generated example demonstrating the Membership.get API.
 *
 * Demonstrates use of 'filter' active_only' param.
 *
 * @return array
 *   API result array
 */
function membership_get_example() {
  $params = [
    'contact_id' => 3,
    'filters' => [
      'is_current' => 1,
    ],
  ];

  try {
    $result = civicrm_api3('Membership', 'get', $params);
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
function membership_get_expectedresult() {

  $expectedResult = [
    'is_error' => 0,
    'version' => 3,
    'count' => 1,
    'id' => 1,
    'values' => [
      '1' => [
        'id' => '1',
        'contact_id' => '3',
        'membership_type_id' => '1',
        'join_date' => '2009-01-21',
        'start_date' => '2013-07-29 00:00:00',
        'end_date' => '2013-08-04 00:00:00',
        'source' => 'Payment',
        'status_id' => '23',
        'is_override' => '1',
        'is_test' => 0,
        'is_pay_later' => 0,
        'membership_name' => 'General',
        'relationship_name' => 'Child of',
      ],
    ],
  ];

  return $expectedResult;
}

/*
 * This example has been generated from the API test suite.
 * The test that created it is called "testGetOnlyActive"
 * and can be found at:
 * https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/MembershipTest.php
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
