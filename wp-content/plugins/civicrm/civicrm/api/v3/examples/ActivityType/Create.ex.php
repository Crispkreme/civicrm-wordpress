<?php

/**
 * @file
 */

/**
 * Test Generated example demonstrating the ActivityType.create API.
 *
 * @deprecated
 * The ActivityType api is deprecated. Please use the OptionValue api instead.
 *
 * @return array
 *   API result array
 */
function activity_type_create_example() {
  $params = [
    'weight' => '2',
    'label' => 'send out letters',
    'filter' => 0,
    'is_active' => 1,
    'is_optgroup' => 1,
    'is_default' => 0,
  ];

  try {
    $result = civicrm_api3('ActivityType', 'create', $params);
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
function activity_type_create_expectedresult() {

  $expectedResult = [
    'is_error' => 0,
    'version' => 3,
    'count' => 1,
    'id' => 859,
    'values' => [
      '859' => [
        'id' => '859',
        'option_group_id' => '2',
        'label' => 'send out letters',
        'value' => '55',
        'name' => 'send out letters',
        'grouping' => '',
        'filter' => 0,
        'is_default' => 0,
        'weight' => '2',
        'description' => '',
        'is_optgroup' => '1',
        'is_reserved' => '',
        'is_active' => '1',
        'component_id' => '',
        'domain_id' => '',
        'visibility_id' => '',
        'icon' => '',
        'color' => '',
      ],
    ],
    'deprecated' => 'The ActivityType api is deprecated. Please use the OptionValue api instead.',
  ];

  return $expectedResult;
}

/*
 * This example has been generated from the API test suite.
 * The test that created it is called "testActivityTypeCreate"
 * and can be found at:
 * https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/ActivityTypeTest.php
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
