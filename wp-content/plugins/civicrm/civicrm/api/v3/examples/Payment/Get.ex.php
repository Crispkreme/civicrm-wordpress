<?php

/**
 * @file
 */

/**
 * Test Generated example demonstrating the Payment.get API.
 *
 * @return array
 *   API result array
 */
function payment_get_example() {
  $params = [
    'contribution_id' => 1,
    'check_permissions' => TRUE,
  ];

  try {
    $result = civicrm_api3('Payment', 'get', $params);
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
function payment_get_expectedresult() {

  $expectedResult = [
    'is_error' => 0,
    'version' => 3,
    'count' => 1,
    'id' => 1,
    'values' => [
      '1' => [
        'id' => '1',
        'to_financial_account_id' => '6',
        'trxn_date' => '2010-01-20 00:00:00',
        'total_amount' => '100.00',
        'fee_amount' => '0.00',
        'net_amount' => '100.00',
        'currency' => 'USD',
        'is_payment' => '1',
        'trxn_id' => '23456',
        'status_id' => '1',
        'payment_instrument_id' => '4',
        'contribution_id' => '1',
      ],
    ],
  ];

  return $expectedResult;
}

/*
 * This example has been generated from the API test suite.
 * The test that created it is called "testGetPayment"
 * and can be found at:
 * https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/PaymentTest.php
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
