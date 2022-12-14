<?php

/**
 * @file
 */

/**
 * Test Generated example demonstrating the Address.create API.
 *
 * @return array
 *   API result array
 */
function address_create_example() {
  $params = [
    'contact_id' => 3,
    'street_name' => 'Ambachtstraat',
    'street_number' => '23',
    'street_address' => 'Ambachtstraat 23',
    'postal_code' => '6971 BN',
    'country_id' => '1152',
    'city' => 'Brummen',
    'is_primary' => 1,
  ];

  try {
    $result = civicrm_api3('Address', 'create', $params);
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
function address_create_expectedresult() {

  $expectedResult = [
    'is_error' => 0,
    'version' => 3,
    'count' => 1,
    'id' => 2,
    'values' => [
      '2' => [
        'id' => '2',
        'contact_id' => '3',
        'location_type_id' => '1',
        'is_primary' => '1',
        'is_billing' => 0,
        'street_address' => 'Ambachtstraat 23',
        'street_number' => '23',
        'street_name' => 'Ambachtstraat',
        'city' => 'Brummen',
        'postal_code' => '6971 BN',
        'country_id' => '1152',
        'manual_geo_code' => 0,
      ],
    ],
  ];

  return $expectedResult;
}

/*
 * This example has been generated from the API test suite.
 * The test that created it is called "testCreateAddressDefaultLocation"
 * and can be found at:
 * https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/AddressTest.php
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
