<?php
/**
 * Database class for table aaaaaaaaa_test
 * 
 * @warning !!! this file is automaticaly generated, please do not change anything in this file if you don't want to loose your work !!!
 * 
 * @package      WebGuru3
 * @subpackage   wgframework/model/base/aaaaaaaaa_test
 * @author       Ondrej Rafaj
 * @author       WebGuruCMS3 Framework CMS dbModel generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @since        1. July 2009 17:49:51
 */

class BaseAaaaaaaaaTestModel extends DbModel {

	/**
	 * name
	 */
	const TABLE_NAME = 'aaaaaaaaa_test';
	
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
	
	const FULL_PRIMARY_KEY = '`aaaaaaaaa_test`.`id`';
	
	/**
	 * id -> int(11) unsigned
	 */
	const FULL_ID = '`aaaaaaaaa_test`.`id`';
	
	const COL_ID = 'id';
	
	/**
	 * integer -> int(11)
	 */
	const FULL_INTEGER = '`aaaaaaaaa_test`.`integer`';
	
	const COL_INTEGER = 'integer';
	
	/**
	 * varchar -> varchar(255)
	 */
	const FULL_VARCHAR = '`aaaaaaaaa_test`.`varchar`';
	
	const COL_VARCHAR = 'varchar';
	
	/**
	 * text -> text
	 */
	const FULL_TEXT = '`aaaaaaaaa_test`.`text`';
	
	const COL_TEXT = 'text';
	
	/**
	 * datetime -> datetime
	 */
	const FULL_DATETIME = '`aaaaaaaaa_test`.`datetime`';
	
	const COL_DATETIME = 'datetime';
	
	
	/**
	 * Count (on primary key)
	 */
	const COUNT_TABLE = 'COUNT(`aaaaaaaaa_test`.`id`)';
	
	/**
	 * Count (on primary key) with Distinct
	 */
	const COUNT_DISTINCT_TABLE = 'COUNT(DISTINCT `aaaaaaaaa_test`.`id`)';
	
	
	/**
	 * @var array $_tableNames Array with column names translated to php
	 */
	private static $_tableNames = array('Id'=>0, 'Integer'=>1, 'Varchar'=>2, 'Text'=>3, 'Datetime'=>4);
	
	/**
	 * @var array $_tableValues Array with key values of the columns
	 */
	private static $_tableValues = array(0, 1, 2, 3, 4);
	
	/**
	 * @var array $_fullTblFields Array with real column names in table
	 */
	private static $_fullTblFields = array('`aaaaaaaaa_test`.`Id`'=>0, '`aaaaaaaaa_test`.`Integer`'=>1, '`aaaaaaaaa_test`.`Varchar`'=>2, '`aaaaaaaaa_test`.`Text`'=>3, '`aaaaaaaaa_test`.`Datetime`'=>4);
	
	/**
	 * @var array $_tableFields Array with real column names
	 */
	private static $_tableFields = array('id'=>0, 'integer'=>1, 'varchar'=>2, 'text'=>3, 'datetime'=>4);
	
	/**
	 * @var array $_tableFieldsByKey Array with real column names
	 */
	private static $_tableFieldsByKey = array('id', 'integer', 'varchar', 'text', 'datetime');
	
	
	protected $_result = array();
	
	protected $_query  = NULL;
	
	protected $_data   = array();
	
	
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
			throw new WgException("AaaaaaaaaTest could not be found in the field names. These are: ".print_r(self::$$fromType, true));
		}
		return $toNames[$key];
	}

	public static function getFieldNames($type=DbModel::FIELD_PHPNAME) {
		if (!isset(self::$$type)) {
			throw new WgException('Method ModelAaaaaaaaaTest::getFieldNames() expects the parameter $type to be one of the class constants FIELD_PHPNAME, FIELD_COLVALUE, FIELD_FIELDNAME. '.$type.' was given.');
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
			else parent::throwGetColException('AaaaaaaaaTestModel::getPrimaryKey', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('AaaaaaaaaTestModel::getPrimaryKey', __LINE__, __FILE__);
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
			else parent::throwGetColException('AaaaaaaaaTestModel::getFieldByName', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('AaaaaaaaaTestModel::getFieldByName', __LINE__, __FILE__);
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
			else parent::throwGetColException('Not set AaaaaaaaaTestModel::getId', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From AaaaaaaaaTestModel::getId', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of integer -> int(11)
	 * 
	 * @name getInteger
	 * @return int
	 */
	public function getInteger() {
		if ((bool) $this->_result) {
			if (array_key_exists(1, $this->_result)) return (string) $this->_result[1];
			else parent::throwGetColException('Not set AaaaaaaaaTestModel::getInteger', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From AaaaaaaaaTestModel::getInteger', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of varchar -> varchar(255)
	 * 
	 * @name getVarchar
	 * @return varchar
	 */
	public function getVarchar() {
		if ((bool) $this->_result) {
			if (array_key_exists(2, $this->_result)) return (string) $this->_result[2];
			else parent::throwGetColException('Not set AaaaaaaaaTestModel::getVarchar', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From AaaaaaaaaTestModel::getVarchar', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of text -> text
	 * 
	 * @name getText
	 * @return text
	 */
	public function getText() {
		if ((bool) $this->_result) {
			if (array_key_exists(3, $this->_result)) return (string) $this->_result[3];
			else parent::throwGetColException('Not set AaaaaaaaaTestModel::getText', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From AaaaaaaaaTestModel::getText', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of datetime -> datetime
	 * 
	 * @name getDatetime
	 * @return datetime
	 */
	public function getDatetime() {
		if ((bool) $this->_result) {
			if (array_key_exists(4, $this->_result)) return (int) strtotime($this->_result[4]);
			else parent::throwGetColException('Not set AaaaaaaaaTestModel::getDatetime', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From AaaaaaaaaTestModel::getDatetime', __LINE__, __FILE__);
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
			else throw new Exception('Call to undefined method/class function: AaaaaaaaaTestModel::'.$function.'()');
		}
		else throw new Exception('Call to undefined method/class function: AaaaaaaaaTestModel::'.$function.'()');
	}
	
	
	/**
	 * Basic select function from table aaaaaaaaa_test
	 * 
	 * @name doSelect
	 * @param array $params
	 * @return array Array of the items from database
	 */
	public static function doSelect($params=NULL, $fields=array()) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$what = parent::_getSelectFields($fields);
		$conn->select(self::TABLE_NAME, $what);
		return DbModel::doSelect($conn, new AaaaaaaaaTestModel());
	}
	
	/**
	 * Select one item function from table aaaaaaaaa_test
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
		$ret = DbModel::doSelect($conn, new AaaaaaaaaTestModel());
		if (isset($ret[0]) && is_a($ret[0], 'AaaaaaaaaTestModel')) return $ret[0];
		else {
			$class = new AaaaaaaaaTestModel();
			$class->setNullResults();
			return $class;
		}
	}
	
	/**
	 * Basic select count function from table aaaaaaaaa_test
	 * 
	 * @name doCount
	 * @param array $params
	 * @return int Number of items in database
	 */
	public static function doCount($params=NULL) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$conn->select(self::TABLE_NAME, self::COUNT_TABLE);
		return (int) DbModel::doSelectOne($conn, new AaaaaaaaaTestModel());
	}
	
	/**
	 * Basic pager function from table aaaaaaaaa_test
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
		return DbModel::doPager($conn, new AaaaaaaaaTestModel(), $itemsPerPage, $selectPage, $count, $params);
	}
	
	/**
	 * Basic delete function from table aaaaaaaaa_test
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
		return (int) DbModel::doAffected($conn, new AaaaaaaaaTestModel());
	}
	
	/**
	 * Basic update function for table aaaaaaaaa_test
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
		$af = (int) DbModel::doAffected($conn, new AaaaaaaaaTestModel());
		if (!(bool) $af) $af = 1;
		return (int) $af;
	}
	
	/**
	 * Basic insert function for table aaaaaaaaa_test
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
		return (int) DbModel::doInsert($conn, new AaaaaaaaaTestModel());
	}
	
	/**
	 * Basic reader create function from table aaaaaaaaa_test
	 * 
	 * @name doReader
	 * @param object $conn wgConnector class instance or NULL
	 * @param mixed $params
	 * @return object Data reader
	 */
	public static function doReader($params=NULL) {
		
	}
	
	/**
	 * Truncate table function for table aaaaaaaaa_test
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
	 * Drop table function for table aaaaaaaaa_test
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