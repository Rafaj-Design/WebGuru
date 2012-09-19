<?php
/**
 * Database class for table system_language
 * 
 * @warning !!! this file is automaticaly generated, please do not change anything in this file if you don't want to loose your work !!!
 * 
 * @package      WebGuru3
 * @subpackage   wgframework/model/base/system_language
 * @author       Ondrej Rafaj ()
 * @author       WebGuruCMS3 Framework CMS dbModel generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @since        19. September 2012 17:05:26
 */

class BaseSystemLanguageModel extends DbModel {

	/**
	 * name
	 */
	const TABLE_NAME = 'system_language';
	
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
	const TABLE_COMMENT = 'InnoDB free: 11264 kB; (`system_websites_id`) REFER `wg3/sys';
	
	
	/**
	 * id -> int(3)
	 */
	const PRIMARY_KEY = 'id';
	
	const FULL_PRIMARY_KEY = '`system_language`.`id`';
	
	/**
	 * id -> int(3)
	 */
	const FULL_ID = '`system_language`.`id`';
	
	const COL_ID = 'id';
	
	/**
	 * name -> varchar(32)
	 */
	const FULL_NAME = '`system_language`.`name`';
	
	const COL_NAME = 'name';
	
	/**
	 * code -> char(3)
	 */
	const FULL_CODE = '`system_language`.`code`';
	
	const COL_CODE = 'code';
	
	/**
	 * image -> varchar(15)
	 */
	const FULL_IMAGE = '`system_language`.`image`';
	
	const COL_IMAGE = 'image';
	
	/**
	 * directory -> varchar(15)
	 */
	const FULL_DIRECTORY = '`system_language`.`directory`';
	
	const COL_DIRECTORY = 'directory';
	
	/**
	 * sort -> int(3)
	 */
	const FULL_SORT = '`system_language`.`sort`';
	
	const COL_SORT = 'sort';
	
	/**
	 * isdefault -> tinyint(1)
	 */
	const FULL_ISDEFAULT = '`system_language`.`isdefault`';
	
	const COL_ISDEFAULT = 'isdefault';
	
	/**
	 * system_websites_id -> int(4)
	 */
	const FULL_SYSTEM_WEBSITES_ID = '`system_language`.`system_websites_id`';
	
	const COL_SYSTEM_WEBSITES_ID = 'system_websites_id';
	
	/**
	 * added -> datetime
	 */
	const FULL_ADDED = '`system_language`.`added`';
	
	const COL_ADDED = 'added';
	
	/**
	 * changed -> datetime
	 */
	const FULL_CHANGED = '`system_language`.`changed`';
	
	const COL_CHANGED = 'changed';
	
	
	/**
	 * Count (on primary key)
	 */
	const COUNT_TABLE = 'COUNT(`system_language`.`id`)';
	
	/**
	 * Count (on primary key) with Distinct
	 */
	const COUNT_DISTINCT_TABLE = 'COUNT(DISTINCT `system_language`.`id`)';
	
	
	/**
	 * @var array $_tableNames Array with column names translated to php
	 */
	private static $_tableNames = array('Id'=>0, 'Name'=>1, 'Code'=>2, 'Image'=>3, 'Directory'=>4, 'Sort'=>5, 'Isdefault'=>6, 'SystemWebsitesId'=>7, 'Added'=>8, 'Changed'=>9);
	
	/**
	 * @var array $_tableValues Array with key values of the columns
	 */
	private static $_tableValues = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
	
	/**
	 * @var array $_fullTblFields Array with real column names in table
	 */
	private static $_fullTblFields = array('`system_language`.`Id`'=>0, '`system_language`.`Name`'=>1, '`system_language`.`Code`'=>2, '`system_language`.`Image`'=>3, '`system_language`.`Directory`'=>4, '`system_language`.`Sort`'=>5, '`system_language`.`Isdefault`'=>6, '`system_language`.`SystemWebsitesId`'=>7, '`system_language`.`Added`'=>8, '`system_language`.`Changed`'=>9);
	
	/**
	 * @var array $_tableFields Array with real column names
	 */
	private static $_tableFields = array('id'=>0, 'name'=>1, 'code'=>2, 'image'=>3, 'directory'=>4, 'sort'=>5, 'isdefault'=>6, 'system_websites_id'=>7, 'added'=>8, 'changed'=>9);
	
	/**
	 * @var array $_tableFieldsByKey Array with real column names
	 */
	private static $_tableFieldsByKey = array('id', 'name', 'code', 'image', 'directory', 'sort', 'isdefault', 'system_websites_id', 'added', 'changed');
	
	
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
			throw new WgException("SystemLanguage could not be found in the field names. These are: ".print_r(self::$$fromType, true));
		}
		return $toNames[$key];
	}

	public static function getFieldNames($type=DbModel::FIELD_PHPNAME) {
		if (!isset(self::$$type)) {
			throw new WgException('Method ModelSystemLanguage::getFieldNames() expects the parameter $type to be one of the class constants FIELD_PHPNAME, FIELD_COLVALUE, FIELD_FIELDNAME. '.$type.' was given.');
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
			else parent::throwGetColException('SystemLanguageModel::getPrimaryKey', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('SystemLanguageModel::getPrimaryKey', __LINE__, __FILE__);
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
			else parent::throwGetColException('SystemLanguageModel::getFieldByName', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('SystemLanguageModel::getFieldByName', __LINE__, __FILE__);
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
			else parent::throwGetColException('trying to get non existing data ('.$field.') in SystemLanguageModel::getFieldByName', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('trying to get non existing data ('.$field.') in SystemLanguageModel::getFieldByName', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of id -> int(3)
	 * 
	 * @name getId
	 * @return int
	 */
	public function getId() {
		if ((bool) $this->_result) {
			if (array_key_exists(0, $this->_result)) return (string) $this->_result[0];
			else parent::throwGetColException('Not set SystemLanguageModel::getId', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From SystemLanguageModel::getId', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of name -> varchar(32)
	 * 
	 * @name getName
	 * @return varchar
	 */
	public function getName() {
		if ((bool) $this->_result) {
			if (array_key_exists(1, $this->_result)) return (string) $this->_result[1];
			else parent::throwGetColException('Not set SystemLanguageModel::getName', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From SystemLanguageModel::getName', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of code -> char(3)
	 * 
	 * @name getCode
	 * @return char
	 */
	public function getCode() {
		if ((bool) $this->_result) {
			if (array_key_exists(2, $this->_result)) return (string) $this->_result[2];
			else parent::throwGetColException('Not set SystemLanguageModel::getCode', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From SystemLanguageModel::getCode', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of image -> varchar(15)
	 * 
	 * @name getImage
	 * @return varchar
	 */
	public function getImage() {
		if ((bool) $this->_result) {
			if (array_key_exists(3, $this->_result)) return (string) $this->_result[3];
			else parent::throwGetColException('Not set SystemLanguageModel::getImage', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From SystemLanguageModel::getImage', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of directory -> varchar(15)
	 * 
	 * @name getDirectory
	 * @return varchar
	 */
	public function getDirectory() {
		if ((bool) $this->_result) {
			if (array_key_exists(4, $this->_result)) return (string) $this->_result[4];
			else parent::throwGetColException('Not set SystemLanguageModel::getDirectory', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From SystemLanguageModel::getDirectory', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of sort -> int(3)
	 * 
	 * @name getSort
	 * @return int
	 */
	public function getSort() {
		if ((bool) $this->_result) {
			if (array_key_exists(5, $this->_result)) return (string) $this->_result[5];
			else parent::throwGetColException('Not set SystemLanguageModel::getSort', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From SystemLanguageModel::getSort', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of isdefault -> tinyint(1)
	 * 
	 * @name getIsdefault
	 * @return tinyint
	 */
	public function getIsdefault() {
		if ((bool) $this->_result) {
			if (array_key_exists(6, $this->_result)) return (string) $this->_result[6];
			else parent::throwGetColException('Not set SystemLanguageModel::getIsdefault', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From SystemLanguageModel::getIsdefault', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of system_websites_id -> int(4)
	 * 
	 * @name getSystemWebsitesId
	 * @return int
	 */
	public function getSystemWebsitesId() {
		if ((bool) $this->_result) {
			if (array_key_exists(7, $this->_result)) return (string) $this->_result[7];
			else parent::throwGetColException('Not set SystemLanguageModel::getSystemWebsitesId', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From SystemLanguageModel::getSystemWebsitesId', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of added -> datetime
	 * 
	 * @name getAdded
	 * @return datetime
	 */
	public function getAdded() {
		if ((bool) $this->_result) {
			if (array_key_exists(8, $this->_result)) return (int) strtotime($this->_result[8]);
			else parent::throwGetColException('Not set SystemLanguageModel::getAdded', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From SystemLanguageModel::getAdded', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of changed -> datetime
	 * 
	 * @name getChanged
	 * @return datetime
	 */
	public function getChanged() {
		if ((bool) $this->_result) {
			if (array_key_exists(9, $this->_result)) return (int) strtotime($this->_result[9]);
			else parent::throwGetColException('Not set SystemLanguageModel::getChanged', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From SystemLanguageModel::getChanged', __LINE__, __FILE__);
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
			else throw new Exception('Call to undefined method/class function: SystemLanguageModel::'.$function.'()');
		}
		else throw new Exception('Call to undefined method/class function: SystemLanguageModel::'.$function.'()');
	}
	
	
	/**
	 * Basic select function from table system_language
	 * 
	 * @name doSelect
	 * @param array $params
	 * @return array Array of the items from database
	 */
	public static function doSelect($params=NULL, $fields=array()) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$what = parent::_getSelectFields($fields);
		$conn->select(self::TABLE_NAME, $what);
		return DbModel::doSelect($conn, new SystemLanguageModel());
	}
	
	/**
	 * Select one item function from table system_language
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
		$ret = DbModel::doSelect($conn, new SystemLanguageModel());
		if (isset($ret[0]) && is_a($ret[0], 'SystemLanguageModel')) return $ret[0];
		else {
			$class = new SystemLanguageModel();
			$class->setNullResults();
			return $class;
		}
	}
	
	/**
	 * Basic select count function from table system_language
	 * 
	 * @name doCount
	 * @param array $params
	 * @return int Number of items in database
	 */
	public static function doCount($params=NULL) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$conn->select(self::TABLE_NAME, self::COUNT_TABLE);
		return (int) DbModel::doSelectOne($conn, new SystemLanguageModel());
	}
	
	/**
	 * Basic pager function from table system_language
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
		return DbModel::doPager($conn, new SystemLanguageModel(), $itemsPerPage, $selectPage, $count, $params);
	}
	
	/**
	 * Basic delete function from table system_language
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
		return (int) DbModel::doAffected($conn, new SystemLanguageModel());
	}
	
	/**
	 * Basic update function for table system_language
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
		$af = (int) DbModel::doAffected($conn, new SystemLanguageModel());
		if (!(bool) $af) $af = 1;
		return (int) $af;
	}
	
	/**
	 * Basic insert function for table system_language
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
		return (int) DbModel::doInsert($conn, new SystemLanguageModel());
	}
	
	/**
	 * Basic reader create function from table system_language
	 * 
	 * @name doReader
	 * @param object $conn wgConnector class instance or NULL
	 * @param mixed $params
	 * @return object Data reader
	 */
	public static function doReader($params=NULL) {
		
	}
	
	/**
	 * Truncate table function for table system_language
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
	 * Drop table function for table system_language
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