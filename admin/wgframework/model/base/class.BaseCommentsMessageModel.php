<?php
/**
 * Database class for table comments_message
 * 
 * @warning !!! this file is automaticaly generated, please do not change anything in this file if you don't want to loose your work !!!
 * 
 * @package      WebGuru3
 * @subpackage   wgframework/model/base/comments_message
 * @author       Ondrej Rafaj
 * @author       WebGuruCMS3 Framework CMS dbModel generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @since        26. February 2009 16:39:27
 */

class BaseCommentsMessageModel extends DbModel {

	/**
	 * name
	 */
	const TABLE_NAME = 'comments_message';
	
	/**
	 * engine
	 */
	const TABLE_ENGINE = 'InnoDB';
	
	/**
	 * collation
	 */
	const TABLE_COLLATION = 'utf8_general_ci';
	
	/**
	 * row_format
	 */
	const TABLE_ROW_FORMAT = 'Compact';
	
	/**
	 * comment
	 */
	const TABLE_COMMENT = 'InnoDB free: 16384 kB; (`comments_groups_id`) REFER `wg3/comments_groups`(`id`) ';
	
	
	/**
	 * id -> int(11) unsigned
	 */
	const PRIMARY_KEY = 'id';
	
	const FULL_PRIMARY_KEY = '`comments_message`.`id`';
	
	/**
	 * id -> int(11) unsigned
	 */
	const FULL_ID = '`comments_message`.`id`';
	
	const COL_ID = 'id';
	
	/**
	 * users_id -> int(11) unsigned
	 */
	const FULL_USERS_ID = '`comments_message`.`users_id`';
	
	const COL_USERS_ID = 'users_id';
	
	/**
	 * comments_groups_id -> int(8) unsigned
	 */
	const FULL_COMMENTS_GROUPS_ID = '`comments_message`.`comments_groups_id`';
	
	const COL_COMMENTS_GROUPS_ID = 'comments_groups_id';
	
	/**
	 * ip -> varchar(17)
	 */
	const FULL_IP = '`comments_message`.`ip`';
	
	const COL_IP = 'ip';
	
	/**
	 * added -> datetime
	 */
	const FULL_ADDED = '`comments_message`.`added`';
	
	const COL_ADDED = 'added';
	
	/**
	 * name -> varchar(255)
	 */
	const FULL_NAME = '`comments_message`.`name`';
	
	const COL_NAME = 'name';
	
	/**
	 * lastname -> varchar(255)
	 */
	const FULL_LASTNAME = '`comments_message`.`lastname`';
	
	const COL_LASTNAME = 'lastname';
	
	/**
	 * mail -> varchar(255)
	 */
	const FULL_MAIL = '`comments_message`.`mail`';
	
	const COL_MAIL = 'mail';
	
	/**
	 * subject -> varchar(255)
	 */
	const FULL_SUBJECT = '`comments_message`.`subject`';
	
	const COL_SUBJECT = 'subject';
	
	/**
	 * message -> text
	 */
	const FULL_MESSAGE = '`comments_message`.`message`';
	
	const COL_MESSAGE = 'message';
	
	
	/**
	 * Count (on primary key)
	 */
	const COUNT_TABLE = 'COUNT(`comments_message`.`id`)';
	
	/**
	 * Count (on primary key) with Distinct
	 */
	const COUNT_DISTINCT_TABLE = 'COUNT(DISTINCT `comments_message`.`id`)';
	
	
	/**
	 * @var array $_tableNames Array with column names translated to php
	 */
	private static $_tableNames = array('Id'=>0, 'UsersId'=>1, 'CommentsGroupsId'=>2, 'Ip'=>3, 'Added'=>4, 'Name'=>5, 'Lastname'=>6, 'Mail'=>7, 'Subject'=>8, 'Message'=>9);
	
	/**
	 * @var array $_tableValues Array with key values of the columns
	 */
	private static $_tableValues = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
	
	/**
	 * @var array $_fullTblFields Array with real column names in table
	 */
	private static $_fullTblFields = array('`comments_message`.`Id`'=>0, '`comments_message`.`UsersId`'=>1, '`comments_message`.`CommentsGroupsId`'=>2, '`comments_message`.`Ip`'=>3, '`comments_message`.`Added`'=>4, '`comments_message`.`Name`'=>5, '`comments_message`.`Lastname`'=>6, '`comments_message`.`Mail`'=>7, '`comments_message`.`Subject`'=>8, '`comments_message`.`Message`'=>9);
	
	/**
	 * @var array $_tableFields Array with real column names
	 */
	private static $_tableFields = array('id'=>0, 'users_id'=>1, 'comments_groups_id'=>2, 'ip'=>3, 'added'=>4, 'name'=>5, 'lastname'=>6, 'mail'=>7, 'subject'=>8, 'message'=>9);
	
	/**
	 * @var array $_tableFieldsByKey Array with real column names
	 */
	private static $_tableFieldsByKey = array('id', 'users_id', 'comments_groups_id', 'ip', 'added', 'name', 'lastname', 'mail', 'subject', 'message');
	
	
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
			throw new WgException("CommentsMessage could not be found in the field names. These are: ".print_r(self::$$fromType, true));
		}
		return $toNames[$key];
	}

	public static function getFieldNames($type=DbModel::FIELD_PHPNAME) {
		if (!isset(self::$$type)) {
			throw new WgException('Method ModelCommentsMessage::getFieldNames() expects the parameter $type to be one of the class constants FIELD_PHPNAME, FIELD_COLVALUE, FIELD_FIELDNAME. '.$type.' was given.');
		}
		return self::$$type;
	}
	
	public function setNullResults() {
		$this->_result = array();
		foreach (self::$_tableFieldsByKey as $k=>$column) $this->_result[$k] = '';
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
			else parent::throwGetColException('CommentsMessageModel::getPrimaryKey', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('CommentsMessageModel::getPrimaryKey', __LINE__, __FILE__);
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
			else parent::throwGetColException('Not set CommentsMessageModel::getId', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CommentsMessageModel::getId', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of users_id -> int(11) unsigned
	 * 
	 * @name getUsersId
	 * @return int
	 */
	public function getUsersId() {
		if ((bool) $this->_result) {
			if (array_key_exists(1, $this->_result)) return (string) $this->_result[1];
			else parent::throwGetColException('Not set CommentsMessageModel::getUsersId', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CommentsMessageModel::getUsersId', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of comments_groups_id -> int(8) unsigned
	 * 
	 * @name getCommentsGroupsId
	 * @return int
	 */
	public function getCommentsGroupsId() {
		if ((bool) $this->_result) {
			if (array_key_exists(2, $this->_result)) return (string) $this->_result[2];
			else parent::throwGetColException('Not set CommentsMessageModel::getCommentsGroupsId', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CommentsMessageModel::getCommentsGroupsId', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of ip -> varchar(17)
	 * 
	 * @name getIp
	 * @return varchar
	 */
	public function getIp() {
		if ((bool) $this->_result) {
			if (array_key_exists(3, $this->_result)) return (string) $this->_result[3];
			else parent::throwGetColException('Not set CommentsMessageModel::getIp', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CommentsMessageModel::getIp', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of added -> datetime
	 * 
	 * @name getAdded
	 * @return datetime
	 */
	public function getAdded() {
		if ((bool) $this->_result) {
			if (array_key_exists(4, $this->_result)) return (int) strtotime($this->_result[4]);
			else parent::throwGetColException('Not set CommentsMessageModel::getAdded', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CommentsMessageModel::getAdded', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of name -> varchar(255)
	 * 
	 * @name getName
	 * @return varchar
	 */
	public function getName() {
		if ((bool) $this->_result) {
			if (array_key_exists(5, $this->_result)) return (string) $this->_result[5];
			else parent::throwGetColException('Not set CommentsMessageModel::getName', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CommentsMessageModel::getName', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of lastname -> varchar(255)
	 * 
	 * @name getLastname
	 * @return varchar
	 */
	public function getLastname() {
		if ((bool) $this->_result) {
			if (array_key_exists(6, $this->_result)) return (string) $this->_result[6];
			else parent::throwGetColException('Not set CommentsMessageModel::getLastname', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CommentsMessageModel::getLastname', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of mail -> varchar(255)
	 * 
	 * @name getMail
	 * @return varchar
	 */
	public function getMail() {
		if ((bool) $this->_result) {
			if (array_key_exists(7, $this->_result)) return (string) $this->_result[7];
			else parent::throwGetColException('Not set CommentsMessageModel::getMail', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CommentsMessageModel::getMail', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of subject -> varchar(255)
	 * 
	 * @name getSubject
	 * @return varchar
	 */
	public function getSubject() {
		if ((bool) $this->_result) {
			if (array_key_exists(8, $this->_result)) return (string) $this->_result[8];
			else parent::throwGetColException('Not set CommentsMessageModel::getSubject', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CommentsMessageModel::getSubject', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of message -> text
	 * 
	 * @name getMessage
	 * @return text
	 */
	public function getMessage() {
		if ((bool) $this->_result) {
			if (array_key_exists(9, $this->_result)) return (string) $this->_result[9];
			else parent::throwGetColException('Not set CommentsMessageModel::getMessage', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CommentsMessageModel::getMessage', __LINE__, __FILE__);
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
			else throw new Exception('Call to undefined method/class function: CommentsMessageModel::'.$function.'()');
		}
		else throw new Exception('Call to undefined method/class function: CommentsMessageModel::'.$function.'()');
	}
	
	
	/**
	 * Basic select function from table comments_message
	 * 
	 * @name doSelect
	 * @param array $params
	 * @return array Array of the items from database
	 */
	public static function doSelect($params=NULL) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$conn->select(self::TABLE_NAME);
		return DbModel::doSelect($conn, new CommentsMessageModel());
	}
	
	/**
	 * Select one item function from table comments_message
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
		$ret = DbModel::doSelect($conn, new CommentsMessageModel());
		if (isset($ret[0]) && is_a($ret[0], 'CommentsMessageModel')) return $ret[0];
		else {
			$class = new CommentsMessageModel();
			$class->setNullResults();
			return $class;
		}
	}
	
	/**
	 * Basic select count function from table comments_message
	 * 
	 * @name doCount
	 * @param array $params
	 * @return int Number of items in database
	 */
	public static function doCount($params=NULL) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$conn->select(self::TABLE_NAME, self::COUNT_TABLE);
		return (int) DbModel::doSelectOne($conn, new CommentsMessageModel());
	}
	
	/**
	 * Basic pager function from table comments_message
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
		return DbModel::doPager($conn, new CommentsMessageModel(), $itemsPerPage, $selectPage, $count, $params);
	}
	
	/**
	 * Basic delete function from table comments_message
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
		return (int) DbModel::doAffected($conn, new CommentsMessageModel());
	}
	
	/**
	 * Basic update function for table comments_message
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
		return (int) DbModel::doAffected($conn, new CommentsMessageModel());
	}
	
	/**
	 * Basic insert function for table comments_message
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
		return (int) DbModel::doInsert($conn, new CommentsMessageModel());
	}
	
	/**
	 * Basic reader create function from table comments_message
	 * 
	 * @name doReader
	 * @param object $conn wgConnector class instance or NULL
	 * @param mixed $params
	 * @return object Data reader
	 */
	public static function doReader($params=NULL) {
		
	}
	
	/**
	 * Truncate table function for table comments_message
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
	 * Drop table function for table comments_message
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