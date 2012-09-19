<?php
/**
 * Database class for table pages_templates
 * 
 * @warning !!! this file is automaticaly generated, please do not change anything in this file if you don't want to loose your work !!!
 * 
 * @package      WebGuru3
 * @subpackage   wgframework/model/base/pages_templates
 * @author       Ondrej Rafaj ()
 * @author       WebGuruCMS3 Framework CMS dbModel generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @since        19. September 2012 17:05:26
 */

class BasePagesTemplatesModel extends DbModel {

	/**
	 * name
	 */
	const TABLE_NAME = 'pages_templates';
	
	/**
	 * engine
	 */
	const TABLE_ENGINE = 'MyISAM';
	
	/**
	 * collation
	 */
	const TABLE_COLLATION = 'utf8_general_ci';
	
	/**
	 * row_format
	 */
	const TABLE_ROW_FORMAT = 'Dynamic';
	
	/**
	 * comment
	 */
	const TABLE_COMMENT = '';
	
	
	/**
	 * id -> int(11) unsigned
	 */
	const PRIMARY_KEY = 'id';
	
	const FULL_PRIMARY_KEY = '`pages_templates`.`id`';
	
	/**
	 * id -> int(11) unsigned
	 */
	const FULL_ID = '`pages_templates`.`id`';
	
	const COL_ID = 'id';
	
	/**
	 * revision -> int(11)
	 */
	const FULL_REVISION = '`pages_templates`.`revision`';
	
	const COL_REVISION = 'revision';
	
	/**
	 * name -> varchar(255)
	 */
	const FULL_NAME = '`pages_templates`.`name`';
	
	const COL_NAME = 'name';
	
	/**
	 * identifier -> varchar(255)
	 */
	const FULL_IDENTIFIER = '`pages_templates`.`identifier`';
	
	const COL_IDENTIFIER = 'identifier';
	
	/**
	 * master -> tinyint(1) unsigned
	 */
	const FULL_MASTER = '`pages_templates`.`master`';
	
	const COL_MASTER = 'master';
	
	/**
	 * registered -> tinyint(1)
	 */
	const FULL_REGISTERED = '`pages_templates`.`registered`';
	
	const COL_REGISTERED = 'registered';
	
	/**
	 * system_language_id -> int(3)
	 */
	const FULL_SYSTEM_LANGUAGE_ID = '`pages_templates`.`system_language_id`';
	
	const COL_SYSTEM_LANGUAGE_ID = 'system_language_id';
	
	/**
	 * pages_templates_groups_id -> int(4) unsigned
	 */
	const FULL_PAGES_TEMPLATES_GROUPS_ID = '`pages_templates`.`pages_templates_groups_id`';
	
	const COL_PAGES_TEMPLATES_GROUPS_ID = 'pages_templates_groups_id';
	
	/**
	 * template -> longtext
	 */
	const FULL_TEMPLATE = '`pages_templates`.`template`';
	
	const COL_TEMPLATE = 'template';
	
	/**
	 * note -> text
	 */
	const FULL_NOTE = '`pages_templates`.`note`';
	
	const COL_NOTE = 'note';
	
	
	/**
	 * Count (on primary key)
	 */
	const COUNT_TABLE = 'COUNT(`pages_templates`.`id`)';
	
	/**
	 * Count (on primary key) with Distinct
	 */
	const COUNT_DISTINCT_TABLE = 'COUNT(DISTINCT `pages_templates`.`id`)';
	
	
	/**
	 * @var array $_tableNames Array with column names translated to php
	 */
	private static $_tableNames = array('Id'=>0, 'Revision'=>1, 'Name'=>2, 'Identifier'=>3, 'Master'=>4, 'Registered'=>5, 'SystemLanguageId'=>6, 'PagesTemplatesGroupsId'=>7, 'Template'=>8, 'Note'=>9);
	
	/**
	 * @var array $_tableValues Array with key values of the columns
	 */
	private static $_tableValues = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
	
	/**
	 * @var array $_fullTblFields Array with real column names in table
	 */
	private static $_fullTblFields = array('`pages_templates`.`Id`'=>0, '`pages_templates`.`Revision`'=>1, '`pages_templates`.`Name`'=>2, '`pages_templates`.`Identifier`'=>3, '`pages_templates`.`Master`'=>4, '`pages_templates`.`Registered`'=>5, '`pages_templates`.`SystemLanguageId`'=>6, '`pages_templates`.`PagesTemplatesGroupsId`'=>7, '`pages_templates`.`Template`'=>8, '`pages_templates`.`Note`'=>9);
	
	/**
	 * @var array $_tableFields Array with real column names
	 */
	private static $_tableFields = array('id'=>0, 'revision'=>1, 'name'=>2, 'identifier'=>3, 'master'=>4, 'registered'=>5, 'system_language_id'=>6, 'pages_templates_groups_id'=>7, 'template'=>8, 'note'=>9);
	
	/**
	 * @var array $_tableFieldsByKey Array with real column names
	 */
	private static $_tableFieldsByKey = array('id', 'revision', 'name', 'identifier', 'master', 'registered', 'system_language_id', 'pages_templates_groups_id', 'template', 'note');
	
	
	protected $_result = array();
	
	protected $_query  = NULL;
	
	protected $_data   = array();
	
	protected $_resultFields  = array();
	
	
	/**
	 * Returns name of the table
	 * 
	 * @name __toString
	 * @param mixed $params
	 * @return string Name of the class table
	 */
	/*
	public function __toString() {
		if ((bool) self::$_result && method_exists($this, 'getPrimaryKey')) return $this->getPrimaryKey();
		else return self::TABLE_NAME;
	}
	//*/
	
	public function __construct() {
		$this->setNullResults();
	}
	
	public static function getField($name, $inputType=DbModel::FIELD_FIELDNAME) {
		if ((bool) self::$_result) {
			$field = self::getFieldNames($toType, $inputType);
			return self::$_result[$field];
		}
		else throw new WgException("There are no results from the database.");
	}

	public static function getFieldName($name, $fromType, $toType=DbModel::FIELD_COLVALUE) {
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$$fromType[$name]) ? self::$$fromType[$name] : null;
		if ($key === null) {
			throw new WgException("PagesTemplates could not be found in the field names. These are: ".print_r(self::$$fromType, true));
		}
		return $toNames[$key];
	}

	public static function getFieldNames($type=DbModel::FIELD_PHPNAME) {
		if (!isset(self::$$type)) {
			throw new WgException('Method ModelPagesTemplates::getFieldNames() expects the parameter $type to be one of the class constants FIELD_PHPNAME, FIELD_COLVALUE, FIELD_FIELDNAME. '.$type.' was given.');
		}
		return self::$$type;
	}
	
	public function setNullResults() {
		$this->_result = array();
		foreach (self::$_tableFieldsByKey as $k=>$column) $this->_result[$k] = NULL;
		return true;
	}
	
	public function setDefaultResults($values=array()) {
		$this->_result = array();
		foreach (self::$_tableFieldsByKey as $k=>$column) {
			if (isset($values[$column])) $this->_result[$k] = $values[$column];
			else $this->_result[$k] = '';
		}
		return true;
	}
	
	/**
	 * Get value of the primary key
	 * 
	 * @name getPrimaryKey
	 * @return int
	 */
	public function getPrimaryKey() {
		if ((bool) $this->_result) {
			if (isset($this->_result[0])) return (int) $this->_result[0];
			else parent::throwGetColException('PagesTemplatesModel::getPrimaryKey', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('PagesTemplatesModel::getPrimaryKey', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of the field by Key
	 * 
	 * @name getFieldByKey
	 * @return mixed
	 */
	public function getFieldByKey($fieldKey) {
		if ((bool) $this->_result) {
			if (isset($this->_result[$fieldKey])) return $this->_result[$fieldKey];
			else parent::throwGetColException('PagesTemplatesModel::getFieldByName', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('PagesTemplatesModel::getFieldByName', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of the field by column name
	 * 
	 * @name getFieldByName
	 * @return mixed
	 */
	public function getFieldByName($field) {
		if ((bool) $this->_result) {
			if (isset($this->_resultFields[$field]) && isset($this->_result[$this->_resultFields[$field]])) return $this->_result[$this->_resultFields[$field]];
			else parent::throwGetColException('trying to get non existing data ('.$field.') in PagesTemplatesModel::getFieldByName', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('trying to get non existing data ('.$field.') in PagesTemplatesModel::getFieldByName', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of id -> int(11) unsigned
	 * 
	 * @name getId
	 * @return int
	 */
	public function getId() {
		if ((bool) $this->_result) {
			if (array_key_exists(0, $this->_result)) return (string) $this->_result[0];
			else parent::throwGetColException('Not set PagesTemplatesModel::getId', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From PagesTemplatesModel::getId', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of revision -> int(11)
	 * 
	 * @name getRevision
	 * @return int
	 */
	public function getRevision() {
		if ((bool) $this->_result) {
			if (array_key_exists(1, $this->_result)) return (string) $this->_result[1];
			else parent::throwGetColException('Not set PagesTemplatesModel::getRevision', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From PagesTemplatesModel::getRevision', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of name -> varchar(255)
	 * 
	 * @name getName
	 * @return varchar
	 */
	public function getName() {
		if ((bool) $this->_result) {
			if (array_key_exists(2, $this->_result)) return (string) $this->_result[2];
			else parent::throwGetColException('Not set PagesTemplatesModel::getName', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From PagesTemplatesModel::getName', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of identifier -> varchar(255)
	 * 
	 * @name getIdentifier
	 * @return varchar
	 */
	public function getIdentifier() {
		if ((bool) $this->_result) {
			if (array_key_exists(3, $this->_result)) return (string) $this->_result[3];
			else parent::throwGetColException('Not set PagesTemplatesModel::getIdentifier', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From PagesTemplatesModel::getIdentifier', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of master -> tinyint(1) unsigned
	 * 
	 * @name getMaster
	 * @return tinyint
	 */
	public function getMaster() {
		if ((bool) $this->_result) {
			if (array_key_exists(4, $this->_result)) return (string) $this->_result[4];
			else parent::throwGetColException('Not set PagesTemplatesModel::getMaster', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From PagesTemplatesModel::getMaster', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of registered -> tinyint(1)
	 * 
	 * @name getRegistered
	 * @return tinyint
	 */
	public function getRegistered() {
		if ((bool) $this->_result) {
			if (array_key_exists(5, $this->_result)) return (string) $this->_result[5];
			else parent::throwGetColException('Not set PagesTemplatesModel::getRegistered', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From PagesTemplatesModel::getRegistered', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of system_language_id -> int(3)
	 * 
	 * @name getSystemLanguageId
	 * @return int
	 */
	public function getSystemLanguageId() {
		if ((bool) $this->_result) {
			if (array_key_exists(6, $this->_result)) return (string) $this->_result[6];
			else parent::throwGetColException('Not set PagesTemplatesModel::getSystemLanguageId', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From PagesTemplatesModel::getSystemLanguageId', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of pages_templates_groups_id -> int(4) unsigned
	 * 
	 * @name getPagesTemplatesGroupsId
	 * @return int
	 */
	public function getPagesTemplatesGroupsId() {
		if ((bool) $this->_result) {
			if (array_key_exists(7, $this->_result)) return (string) $this->_result[7];
			else parent::throwGetColException('Not set PagesTemplatesModel::getPagesTemplatesGroupsId', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From PagesTemplatesModel::getPagesTemplatesGroupsId', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of template -> longtext
	 * 
	 * @name getTemplate
	 * @return longtext
	 */
	public function getTemplate() {
		if ((bool) $this->_result) {
			if (array_key_exists(8, $this->_result)) return (string) $this->_result[8];
			else parent::throwGetColException('Not set PagesTemplatesModel::getTemplate', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From PagesTemplatesModel::getTemplate', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of note -> text
	 * 
	 * @name getNote
	 * @return text
	 */
	public function getNote() {
		if ((bool) $this->_result) {
			if (array_key_exists(9, $this->_result)) return (string) $this->_result[9];
			else parent::throwGetColException('Not set PagesTemplatesModel::getNote', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From PagesTemplatesModel::getNote', __LINE__, __FILE__);
	}
	
	/**
	 * __call function
	 * 
	 * @name __call
	 * @return mixed
	 */
	public function __call($function, $args) {
		if ((bool) $this->_result) {
			$col = strtolower(str_replace('get', '', $function));
			if (isset($this->_result[$col])) return (int) $this->_result[$col];
			else throw new Exception('Call to undefined method/class function: PagesTemplatesModel::'.$function.'()');
		}
		else throw new Exception('Call to undefined method/class function: PagesTemplatesModel::'.$function.'()');
	}
	
	
	/**
	 * Basic select function from table pages_templates
	 * 
	 * @name doSelect
	 * @param array $params
	 * @return array Array of the items from database
	 */
	public static function doSelect($params=NULL, $fields=array()) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$what = parent::_getSelectFields($fields);
		$conn->select(self::TABLE_NAME, $what);
		return DbModel::doSelect($conn, new PagesTemplatesModel());
	}
	
	/**
	 * Select one item function from table pages_templates
	 * 
	 * @name doSelectOne
	 * @param array $params
	 * @return object This class with or without results
	 */
	public static function doSelectPKey($id, $params=NULL) {
		$conn = new wgConnector();
		$conn->select(self::TABLE_NAME);
		$conn->where(self::PRIMARY_KEY, $id);
		$conn->limit(1);
		parent::doSelectParameters($conn, $params, self::PRIMARY_KEY);
		$ret = DbModel::doSelect($conn, new PagesTemplatesModel());
		if (isset($ret[0]) && is_a($ret[0], 'PagesTemplatesModel')) return $ret[0];
		else {
			$class = new PagesTemplatesModel();
			$class->setNullResults();
			return $class;
		}
	}
	
	/**
	 * Basic select count function from table pages_templates
	 * 
	 * @name doCount
	 * @param array $params
	 * @return int Number of items in database
	 */
	public static function doCount($params=NULL) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$conn->select(self::TABLE_NAME, self::COUNT_TABLE);
		return (int) DbModel::doSelectOne($conn, new PagesTemplatesModel());
	}
	
	/**
	 * Basic pager function from table pages_templates
	 * 
	 * @name doPager
	 * @param array $params
	 * @param int $itemsPerPage How many items you want on one page
	 * @param int $selectPage
	 * @return object Data reader
	 */
	public static function doPager($params=NULL, $selectPage=0, $itemsPerPage=20) {
		$count = (int) self::doCount($params);
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$conn->select(self::TABLE_NAME);
		parent::doSelectParameters($conn, $params, self::PRIMARY_KEY);
		return DbModel::doPager($conn, new PagesTemplatesModel(), $itemsPerPage, $selectPage, $count, $params);
	}
	
	/**
	 * Basic delete function from table pages_templates
	 * 
	 * @name doDelete
	 * @param object $conn wgConnector class instance or NULL
	 * @param mixed $params
	 * @return int Number of deleted items
	 */
	public static function doDelete($params=NULL) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$conn->delete(self::TABLE_NAME);
		parent::doSelectParameters($conn, $params, self::PRIMARY_KEY);
		return (int) DbModel::doAffected($conn, new PagesTemplatesModel());
	}
	
	/**
	 * Basic update function for table pages_templates
	 * 
	 * @name doUpdate
	 * @param object $conn wgConnector class instance or NULL
	 * @param array $updates
	 * @return int Number of updated items
	 */
	public static function doUpdate($params=NULL) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$conn->update(self::TABLE_NAME);
		if (!is_a($params, 'wgConnector') && isset($params['where'])) {
			if (!isset($params['wherecol'])) $params['wherecol'] = self::PRIMARY_KEY;
			$conn->where($params['wherecol'], $params['where']);
			unset($params['where']);
			unset($params['wherecol']);
		}
		if (!empty($params) && is_array($params)) {
			foreach ($params as $key=>$par) {
				if (isset(self::$_tableFields[$key])) $conn->set($key, $par);
				else throw new WgException("Field ".self::TABLE_NAME.".$key does not exist.");
			}
		}
		$af = (int) DbModel::doAffected($conn, new PagesTemplatesModel());
		if (!(bool) $af) $af = 1;
		return (int) $af;
	}
	
	/**
	 * Basic insert function for table pages_templates
	 * 
	 * @name doInsert
	 * @param object $conn wgConnector class instance or NULL
	 * @param array $inserts
	 * @return int Last inserted id
	 */
	public static function doInsert($params=NULL) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$conn->insert(self::TABLE_NAME);
		if (!empty($params) && is_array($params)) {
			foreach ($params as $key=>$par) {
				$conn->data($key, $par);
				//if (isset(self::$_tableFields[$key])) $conn->data($key, $par);
				//else throw new WgException("Field ".self::TABLE_NAME.".$key does not exist.");
			}
		}
		return (int) DbModel::doInsert($conn, new PagesTemplatesModel());
	}
	
	/**
	 * Basic reader create function from table pages_templates
	 * 
	 * @name doReader
	 * @param object $conn wgConnector class instance or NULL
	 * @param mixed $params
	 * @return object Data reader
	 */
	public static function doReader($params=NULL) {
		
	}
	
	/**
	 * Truncate table function for table pages_templates
	 * 
	 * @name doTruncate
	 * @param object $conn wgConnector class instance or NULL
	 * @return bool Success
	 */
	public static function doTruncate() {
		$conn = new wgConnector();
		return (bool) $conn->truncate(self::TABLE_NAME);
	}
	
	/**
	 * Drop table function for table pages_templates
	 * 
	 * @name doDrop
	 * @param mixed $params
	 * @return bool Success
	 */
	public static function doDrop() {
		$conn = new wgConnector();
		return (bool) $conn->drop(self::TABLE_NAME);
	}
	
	
}
?>