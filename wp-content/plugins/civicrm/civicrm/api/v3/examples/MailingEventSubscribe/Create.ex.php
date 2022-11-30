<?php

/**
 * @file
 */

/**
 * Test Generated example demonstrating the MailingEventSubscribe.create API.
 *
 * @return array
 *   API result array
 */
function mailing_event_subscribe_create_example() {
  $params = [
    'email' => 'test@test.test',
    'group_id' => 2,
    'contact_id' => 3,
    'hash' => 'b15de8b64e2cec34',
    'time_stamp' => '20101212121212',
  ];

  try {
    $result = civicrm_api3('MailingEventSubscribe', 'create', $params);
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
function mailing_event_subscribe_create_expectedresult() {

  $expectedResult = [
    'is_error' => 0,
    'version' => 3,
    'count' => 1,
    'id' => 1,
    'values' => [
      '1' => [
        'contact_id' => '3',
        'subscribe_id' => '1',
        'hash' => '67eac7789eaee00',
      ],
    ],
  ];

  return $expectedResult;
}

/*
 * This example has been generated from the API test suite.
 * The test that created it is called "testMailerGroupSubscribeGivenContactId"
 * and can be found at:
 * https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/MailingGroupTest.php
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
