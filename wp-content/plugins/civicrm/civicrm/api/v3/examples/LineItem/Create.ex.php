<?php

/**
 * @file
 */

/**
 * Test Generated example demonstrating the LineItem.create API.
 *
 * @return array
 *   API result array
 */
function line_item_create_example() {
  $params = [
    'price_field_value_id' => 1,
    'price_field_id' => 1,
    'entity_table' => 'civicrm_contribution',
    'entity_id' => 3,
    'qty' => 1,
    'unit_price' => 50,
    'line_total' => 50,
  ];

  try {
    $result = civicrm_api3('LineItem', 'create', $params);
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
function line_item_create_expectedresult() {

  $expectedResult = [
    'is_error' => 0,
    'version' => 3,
    'count' => 1,
    'id' => 6,
    'values' => [
      '6' => [
        'id' => '6',
        'entity_table' => 'civicrm_contribution',
        'entity_id' => '3',
        'contribution_id' => '',
        'price_field_id' => '1',
        'label' => 'line item',
        'qty' => '1',
        'unit_price' => '50',
        'line_total' => '50',
        'participant_count' => '',
        'price_field_value_id' => '1',
        'financial_type_id' => '',
        'non_deductible_amount' => '',
        'tax_amount' => '',
        'membership_num_terms' => '',
      ],
    ],
  ];

  return $expectedResult;
}

/*
 * This example has been generated from the API test suite.
 * The test that created it is called "testCreateLineItem"
 * and can be found at:
 * https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/LineItemTest.php
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
