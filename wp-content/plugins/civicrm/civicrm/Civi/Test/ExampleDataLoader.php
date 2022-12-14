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

namespace Civi\Test;

use Civi\Core\ClassScanner;

class ExampleDataLoader {

  /**
   * These are "heavy" properties which are not cached. i.e.
   *  - They are generated by `$ex->build($example);`
   *  - They are not generated by '$ex->getExamples();'
   *  - They are returned by `$this->getFull()`
   *  - They are not returned by `$this->getMeta()`.
   */
  const HEAVY_FIELDS = 'data,asserts';

  /**
   * @var array|null
   */
  private $metas;

  /**
   * Get a list of all examples, including basic metadata (name, title, workflow).
   *
   * @return array
   *   Ex: ['my_example' => ['title' => ..., 'workflow' => ..., 'tags' => ...]]
   * @throws \ReflectionException
   */
  public function getMetas(): array {
    if ($this->metas === NULL) {
      // $cache = new \CRM_Utils_Cache_NoCache([]);
      $cache = \CRM_Utils_Constant::value('CIVICRM_TEST') ? new \CRM_Utils_Cache_NoCache([]) : \Civi::cache('long');
      $cacheKey = \CRM_Utils_String::munge(__CLASS__);
      $this->metas = $cache->get($cacheKey);
      if ($this->metas === NULL) {
        $this->metas = $this->findMetas();
        $cache->set($cacheKey, $this->metas);
      }
    }
    return $this->metas;
  }

  public function getMeta(string $name): ?array {
    $all = $this->getMetas();
    return $all[$name] ?? NULL;
  }

  /**
   * @param string $name
   *
   * @return array|null
   */
  public function getFull(string $name): ?array {
    $example = $this->getMeta($name);
    if ($example === NULL) {
      return NULL;
    }

    $obj = $this->createObj($example['class']);
    $obj->build($example);
    return $example;
  }

  /**
   * Get a list of all examples, including basic metadata (name, title, workflow).
   *
   * @return array
   *   Ex: ['my_example' => ['title' => ..., 'workflow' => ..., 'tags' => ...]]
   * @throws \ReflectionException
   */
  protected function findMetas(): array {
    $classes = ClassScanner::get(['interface' => ExampleDataInterface::class]);

    $all = [];
    foreach ($classes as $class) {
      $reflClass = new \ReflectionClass($class);
      $obj = $this->createObj($class);
      $offset = 0;
      foreach ($obj->getExamples() as $example) {
        $example['file'] = \CRM_Utils_File::relativize($reflClass->getFileName(), \Civi::paths()->getPath('[civicrm.root]/'));
        $example['class'] = $class;
        if (!isset($example['name'])) {
          $example['name'] = $example['class'] . '#' . $offset;
        }
        $all[$example['name']] = $example;
        $offset++;
      }
    }

    return $all;
  }

  private function createObj(?string $class): ExampleDataInterface {
    if (!class_exists($class)) {
      throw new \CRM_Core_Exception("Failed to read example (class '{$class}')");
    }

    return new $class();
  }

}
