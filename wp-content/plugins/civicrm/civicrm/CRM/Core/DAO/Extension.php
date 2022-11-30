<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/Extension.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:656c09d287b577cae3fe232f5693428a)
 */

/**
 * Database access object for the Extension entity.
 */
class CRM_Core_DAO_Extension extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '4.2';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_extension';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Local Extension ID
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * @var string
   *   (SQL type: varchar(8))
   *   Note that values will be retrieved from the database as a string.
   */
  public $type;

  /**
   * Fully qualified extension name
   *
   * @var string
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $full_name;

  /**
   * Short name
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $name;

  /**
   * Short, printable name
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $label;

  /**
   * Primary PHP file
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $file;

  /**
   * Revision code of the database schema; the format is module-defined
   *
   * @var string|null
   *   (SQL type: varchar(63))
   *   Note that values will be retrieved from the database as a string.
   */
  public $schema_version;

  /**
   * Is this extension active?
   *
   * @var bool|string|null
   *   (SQL type: tinyint)
   *   Note that values will be retrieved from the database as a string.
   */
  public $is_active;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_extension';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Extensions') : ts('Extension');
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Extension ID'),
          'description' => ts('Local Extension ID'),
          'required' => TRUE,
          'where' => 'civicrm_extension.id',
          'table_name' => 'civicrm_extension',
          'entity' => 'Extension',
          'bao' => 'CRM_Core_BAO_Extension',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '4.2',
        ],
        'type' => [
          'name' => 'type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Type'),
          'required' => TRUE,
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'where' => 'civicrm_extension.type',
          'table_name' => 'civicrm_extension',
          'entity' => 'Extension',
          'bao' => 'CRM_Core_BAO_Extension',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::getExtensionTypes',
          ],
          'add' => '4.2',
        ],
        'full_name' => [
          'name' => 'full_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Key'),
          'description' => ts('Fully qualified extension name'),
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_extension.full_name',
          'table_name' => 'civicrm_extension',
          'entity' => 'Extension',
          'bao' => 'CRM_Core_BAO_Extension',
          'localizable' => 0,
          'add' => '4.2',
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Name'),
          'description' => ts('Short name'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'import' => TRUE,
          'where' => 'civicrm_extension.name',
          'export' => TRUE,
          'table_name' => 'civicrm_extension',
          'entity' => 'Extension',
          'bao' => 'CRM_Core_BAO_Extension',
          'localizable' => 0,
          'add' => '4.2',
        ],
        'label' => [
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Label'),
          'description' => ts('Short, printable name'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'import' => TRUE,
          'where' => 'civicrm_extension.label',
          'export' => TRUE,
          'table_name' => 'civicrm_extension',
          'entity' => 'Extension',
          'bao' => 'CRM_Core_BAO_Extension',
          'localizable' => 0,
          'add' => '4.2',
        ],
        'file' => [
          'name' => 'file',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('File'),
          'description' => ts('Primary PHP file'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'import' => TRUE,
          'where' => 'civicrm_extension.file',
          'export' => TRUE,
          'table_name' => 'civicrm_extension',
          'entity' => 'Extension',
          'bao' => 'CRM_Core_BAO_Extension',
          'localizable' => 0,
          'add' => '4.2',
        ],
        'schema_version' => [
          'name' => 'schema_version',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Schema Version'),
          'description' => ts('Revision code of the database schema; the format is module-defined'),
          'maxlength' => 63,
          'size' => CRM_Utils_Type::BIG,
          'import' => TRUE,
          'where' => 'civicrm_extension.schema_version',
          'export' => TRUE,
          'table_name' => 'civicrm_extension',
          'entity' => 'Extension',
          'bao' => 'CRM_Core_BAO_Extension',
          'localizable' => 0,
          'add' => '4.2',
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Extension is Active?'),
          'description' => ts('Is this extension active?'),
          'where' => 'civicrm_extension.is_active',
          'default' => '1',
          'table_name' => 'civicrm_extension',
          'entity' => 'Extension',
          'bao' => 'CRM_Core_BAO_Extension',
          'localizable' => 0,
          'add' => '4.2',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'extension', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'extension', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'UI_extension_full_name' => [
        'name' => 'UI_extension_full_name',
        'field' => [
          0 => 'full_name',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_extension::1::full_name',
      ],
      'UI_extension_name' => [
        'name' => 'UI_extension_name',
        'field' => [
          0 => 'name',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_extension::0::name',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
