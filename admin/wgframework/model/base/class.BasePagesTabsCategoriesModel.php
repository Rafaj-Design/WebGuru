<?php
/**
 * Database class for table pages_tabs_categories
 * 
 * @warning !!! this file is automaticaly generated, please do not change anything in this file if you don't want to loose your work !!!
 * 
 * @package      WebGuru3
 * @subpackage   wgframework/model/base/pages_tabs_categories
 * @author       Ondrej Rafaj ()
 * @author       WebGuruCMS3 Framework CMS dbModel generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @since        26. November 2009 13:21:25
 */

class BasePagesTabsCategoriesModel extends DbModel {

	/**
	 * name
	 */
	const TABLE_NAME = 'pages_tabs_categories';
	
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
	 * id_ptc -> int(8) unsigned
	 */
	const PRIMARY_KEY = 'id_ptc';
	
	const FULL_PRIMARY_KEY = '`pages_tabs_categories`.`id_ptc`';
	
	/**
	 * id_ptc -> int(8) unsigned
	 */
	const FULL_ID_PTC = '`pages_tabs_categories`.`id_ptc`';
	
	const COL_ID_PTC = 'id_ptc';
	
	/**
	 * name_ptc -> varchar(255)
	 */
	const FULL_NAME_PTC = '`pages_tabs_categories`.`name_ptc`';
	
	const COL_NAME_PTC = 'name_ptc';
	
	/**
	 * identifier_ptc -> varchar(255)
	 */
	const FULL_IDENTIFIER_PTC = '`pages_tabs_categories`.`identifier_ptc`';
	
	const COL_IDENTIFIER_PTC = 'identifier_ptc';
	
	/**
	 * web_ptc -> int(8)
	 */
	const FULL_WEB_PTC = '`pages_tabs_categories`.`web_ptc`';
	
	const COL_WEB_PTC = 'web_ptc';
	
	
	/**
	 * Count (on primary key)
	 */
	const COUNT_TABLE = 'COUNT(`pages_tabs_categories`.`id_ptc`)';
	
	/**
	 * Count (on primary key) with Distinct
	 */
	const COUNT_DISTINCT_TABLE = 'COUNT(DISTINCT `pages_tabs_categories`.`id_ptc`)';
	
	
	/**
	 * @var array $_tableNames Array with column names translated to php
	 */
	private static $_tableNames = array('IdPtc'=>0, 'NamePtc'=>1, 'IdentifierPtc'=>2, 'WebPtc'=>3);
	
	/**
	 * @var array $_tableValues Array with key values of the columns
	 */
	private static $_tableValues = array(0, 1, 2, 3);
	
	/**
	 * @var array $_fullTblFields Array with real column names in table
	 */
	private static $_fullTblFields = array('`pages_tabs_categories`.`IdPtc`'=>0, '`pages_tabs_categories`.`NamePtc`'=>1, '`pages_tabs_categories`.`IdentifierPtc`'=>2, '`pages_tabs_categories`.`WebPtc`'=>3);
	
	/**
	 * @var array $_tableFields Array with real column names
	 */
	private static $_tableFields = array('id_ptc'=>0, 'name_ptc'=>1, 'identifier_ptc'=>2, 'web_ptc'=>3);
	
	/**
	 * @var array $_tableFieldsByKey Array with real column names
	 */
	private static $_tableFieldsByKey = array('id_ptc', 'name_ptc', 'identifier_ptc', 'web_ptc');
	
	
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
			throw new WgException("PagesTabsCategories could not be found in the field names. These are: ".print_r(self::$$fromType, true));
		}
		return $toNames[$key];
	}

	public static function getFieldNames($type=DbModel::FIELD_PHPNAME) {
		if (!isset(self::$$type)) {
			throw new WgException('Method ModelPagesTabsCategories::getFieldNames() expects the parameter $type to be one of the class constants FIELD_PHPNAME, FIELD_COLVALUE, FIELD_FIELDNAME. '.$type.' was given.');
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
			else parent::throwGetColException('PagesTabsCategoriesModel::getPrimaryKey', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('PagesTabsCategoriesModel::getPrimaryKey', __LINE__, __FILE__);
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
			else parent::throwGetColException('PagesTabsCategoriesModel::getFieldByName', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('PagesTabsCategoriesModel::getFieldByName', __LINE__, __FILE__);
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
			else parent::throwGetColException('trying to get non existing data ('.$field.') in PagesTabsCategoriesModel::getFieldByName', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('trying to get non existing data ('.$field.') in PagesTabsCategoriesModel::getFieldByName', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of id_ptc -> int(8) unsigned
	 * 
	 * @name getIdPtc
	 * @return int
	 */
	public function getIdPtc() {
		if ((bool) $this->_result) {
			if (array_key_exists(0, $this->_result)) return (string) $this->_result[0];
			else parent::throwGetColException('Not set PagesTabsCategoriesModel::getIdPtc', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From PagesTabsCategoriesModel::getIdPtc', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of name_ptc -> varchar(255)
	 * 
	 * @name getNamePtc
	 * @return varchar
	 */
	public function getNamePtc() {
		if ((bool) $this->_result) {
			if (array_key_exists(1, $this->_result)) return (string) $this->_result[1];
			else parent::throwGetColException('Not set PagesTabsCategoriesModel::getNamePtc', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From PagesTabsCategoriesModel::getNamePtc', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of identifier_ptc -> varchar(255)
	 * 
	 * @name getIdentifierPtc
	 * @return varchar
	 */
	public function getIdentifierPtc() {
		if ((bool) $this->_result) {
			if (array_key_exists(2, $this->_result)) return (string) $this->_result[2];
			else parent::throwGetColException('Not set PagesTabsCategoriesModel::getIdentifierPtc', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From PagesTabsCategoriesModel::getIdentifierPtc', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of web_ptc -> int(8)
	 * 
	 * @name getWebPtc
	 * @return int
	 */
	public function getWebPtc() {
		if ((bool) $this->_result) {
			if (array_key_exists(3, $this->_result)) return (string) $this->_result[3];
			else parent::throwGetColException('Not set PagesTabsCategoriesModel::getWebPtc', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From PagesTabsCategoriesModel::getWebPtc', __LINE__, __FILE__);
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
			else throw new Exception('Call to undefined method/class function: PagesTabsCategoriesModel::'.$function.'()');
		}
		else throw new Exception('Call to undefined method/class function: PagesTabsCategoriesModel::'.$function.'()');
	}
	
	
	/**
	 * Basic select function from table pages_tabs_categories
	 * 
	 * @name doSelect
	 * @param array $params
	 * @return array Array of the items from database
	 */
	public static function doSelect($params=NULL, $fields=array()) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$what = parent::_getSelectFields($fields);
		$conn->select(self::TABLE_NAME, $what);
		return DbModel::doSelect($conn, new PagesTabsCategoriesModel());
	}
	
	/**
	 * Select one item function from table pages_tabs_categories
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
		$ret = DbModel::doSelect($conn, new PagesTabsCategoriesModel());
		if (isset($ret[0]) && is_a($ret[0], 'PagesTabsCategoriesModel')) return $ret[0];
		else {
			$class = new PagesTabsCategoriesModel();
			$class->setNullResults();
			return $class;
		}
	}
	
	/**
	 * Basic select count function from table pages_tabs_categories
	 * 
	 * @name doCount
	 * @param array $params
	 * @return int Number of items in database
	 */
	public static function doCount($params=NULL) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$conn->select(self::TABLE_NAME, self::COUNT_TABLE);
		return (int) DbModel::doSelectOne($conn, new PagesTabsCategoriesModel());
	}
	
	/**
	 * Basic pager function from table pages_tabs_categories
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
		return DbModel::doPager($conn, new PagesTabsCategoriesModel(), $itemsPerPage, $selectPage, $count, $params);
	}
	
	/**
	 * Basic delete function from table pages_tabs_categories
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
		return (int) DbModel::doAffected($conn, new PagesTabsCategoriesModel());
	}
	
	/**
	 * Basic update function for table pages_tabs_categories
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
		$af = (int) DbModel::doAffected($conn, new PagesTabsCategoriesModel());
		if (!(bool) $af) $af = 1;
		return (int) $af;
	}
	
	/**
	 * Basic insert function for table pages_tabs_categories
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
		return (int) DbModel::doInsert($conn, new PagesTabsCategoriesModel());
	}
	
	/**
	 * Basic reader create function from table pages_tabs_categories
	 * 
	 * @name doReader
	 * @param object $conn wgConnector class instance or NULL
	 * @param mixed $params
	 * @return object Data reader
	 */
	public static function doReader($params=NULL) {
		
	}
	
	/**
	 * Truncate table function for table pages_tabs_categories
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
	 * Drop table function for table pages_tabs_categories
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