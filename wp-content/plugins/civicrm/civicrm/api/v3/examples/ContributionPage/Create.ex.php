<?php

/**
 * @file
 */

/**
 * Test Generated example demonstrating the ContributionPage.create API.
 *
 * @return array
 *   API result array
 */
function contribution_page_create_example() {
  $params = [
    'title' => 'Test Contribution Page',
    'financial_type_id' => 1,
    'currency' => 'NZD',
    'goal_amount' => 34567,
    'is_pay_later' => 1,
    'pay_later_text' => 'Send check',
    'is_monetary' => TRUE,
    'is_email_receipt' => TRUE,
    'receipt_from_email' => 'yourconscience@donate.com',
    'receipt_from_name' => 'Ego Freud',
  ];

  try {
    $result = civicrm_api3('ContributionPage', 'create', $params);
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
function contribution_page_create_expectedresult() {

  $expectedResult = [
    'is_error' => 0,
    'version' => 3,
    'count' => 1,
    'id' => 1,
    'values' => [
      '1' => [
        'id' => '1',
        'title' => 'Test Contribution Page',
        'intro_text' => '',
        'financial_type_id' => '1',
        'payment_processor' => '',
        'is_credit_card_only' => '',
        'is_monetary' => '1',
        'is_recur' => '',
        'is_confirm_enabled' => '',
        'recur_frequency_unit' => '',
        'is_recur_interval' => '',
        'is_recur_installments' => '',
        'adjust_recur_start_date' => '',
        'is_pay_later' => '1',
        'pay_later_text' => 'Send check',
        'pay_later_receipt' => '',
        'is_partial_payment' => '',
        'initial_amount_label' => '',
        'initial_amount_help_text' => '',
        'min_initial_amount' => '',
        'is_allow_other_amount' => '',
        'default_amount_id' => '',
        'min_amount' => '',
        'max_amount' => '',
        'goal_amount' => '34567',
        'thankyou_title' => '',
        'thankyou_text' => '',
        'thankyou_footer' => '',
        'is_email_receipt' => '1',
        'receipt_from_name' => 'Ego Freud',
        'receipt_from_email' => 'yourconscience@donate.com',
        'cc_receipt' => '',
        'bcc_receipt' => '',
        'receipt_text' => '',
        'is_active' => '1',
        'footer_text' => '',
        'amount_block_is_active' => '',
        'start_date' => '',
        'end_date' => '',
        'created_id' => '',
        'created_date' => '',
        'currency' => 'NZD',
        'campaign_id' => '',
        'is_share' => '',
        'is_billing_required' => '',
        'frontend_title' => '',
        'contribution_type_id' => '1',
      ],
    ],
  ];

  return $expectedResult;
}

/*
 * This example has been generated from the API test suite.
 * The test that created it is called "basicCreateTest"
 * and can be found at:
 * https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/CiviUnitTestCase.php
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
