<?php

/**
 * @file
 */

/**
 * Test Generated example demonstrating the Setting.create API.
 *
 * Shows setting a variable for all domains.
 *
 * @return array
 *   API result array
 */
function setting_create_example() {
  $params = [
    'domain_id' => 'all',
    'uniq_email_per_site' => 1,
  ];

  try {
    $result = civicrm_api3('Setting', 'create', $params);
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
function setting_create_expectedresult() {

  $expectedResult = [
    'is_error' => 0,
    'version' => 3,
    'count' => 4,
    'values' => [
      '37' => [
        'uniq_email_per_site' => '1',
      ],
      '38' => [
        'uniq_email_per_site' => '1',
      ],
      '1' => [
        'uniq_email_per_site' => '1',
      ],
      '2' => [
        'uniq_email_per_site' => '1',
      ],
    ],
  ];

  return $expectedResult;
}

/*
 * This example has been generated from the API test suite.
 * The test that created it is called "testCreateSettingMultipleDomains"
 * and can be found at:
 * https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/SettingTest.php
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
