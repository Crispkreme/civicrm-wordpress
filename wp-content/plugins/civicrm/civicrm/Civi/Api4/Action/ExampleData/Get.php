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

namespace Civi\Api4\Action\ExampleData;

use Civi\Api4\Generic\BasicGetAction;
use Civi\Api4\Generic\Result;
use Civi\Test\ExampleDataLoader;

/**
 * Get a list of example data-sets.
 *
 * Examples are generated by scanning `ExampleDataInterface` files. The scanner caches
 * metadata fields (`name`, `title`, `tags`, `file`) to avoid extraneous scanning, but
 * substantive fields (`data`) are computed as-needed.
 *
 * FIXME: When we have an update for dev-docs, include a `@link` here.
 */
class Get extends BasicGetAction {

  public function _run(Result $result) {
    if ($this->select !== [] && !in_array('name', $this->select)) {
      $this->select[] = 'name';
    }
    parent::_run($result);
  }

  protected function getRecords() {
    return \Civi\Test::examples()->getMetas();
  }

  protected function selectArray($values) {
    $result = parent::selectArray($values);

    $heavyFields = array_intersect(
      explode(',', ExampleDataLoader::HEAVY_FIELDS),
      $this->select ?: []
    );
    if (!empty($heavyFields)) {
      foreach ($result as &$item) {
        $heavy = \Civi\Test::examples()->getFull($item['name']);
        $item = array_merge($item, \CRM_Utils_Array::subset($heavy, $heavyFields));
      }
    }

    return $result;
  }

}
