<?php

/*
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC. All rights reserved.                        |
 |                                                                    |
 | This work is published under the GNU AGPLv3 license with some      |
 | permitted exceptions and without any warranty. For full license    |
 | and copyright information, see https://civicrm.org/licensing       |
 +--------------------------------------------------------------------+
 */

namespace Civi\Api4\Service\Spec\Provider;

use Civi\Api4\Service\Spec\FieldSpec;
use Civi\Api4\Service\Spec\RequestSpec;

/**
 * @service
 * @internal
 */
class CustomValueSpecProvider extends \Civi\Core\Service\AutoService implements Generic\SpecProviderInterface {

  /**
   * @inheritDoc
   */
  public function modifySpec(RequestSpec $spec) {
    $action = $spec->getAction();
    if ($action !== 'create') {
      $idField = new FieldSpec('id', $spec->getEntity(), 'Integer');
      $idField->setType('Field');
      $idField->setColumnName('id');
      $idField->setTitle(ts('Custom Value ID'));
      $idField->setReadonly(TRUE);
      $spec->addFieldSpec($idField);
    }
    $entityField = new FieldSpec('entity_id', $spec->getEntity(), 'Integer');
    $entityField->setType('Field');
    $entityField->setColumnName('entity_id');
    $entityField->setTitle(ts('Entity ID'));
    $entityField->setRequired($action === 'create');
    $entityField->setFkEntity('Contact');
    $entityField->setReadonly(TRUE);
    $spec->addFieldSpec($entityField);
  }

  /**
   * @inheritDoc
   */
  public function applies($entity, $action) {
    return strstr($entity, 'Custom_');
  }

}
