<?php
/**
 * Database class for table campaign_pages
 * 
 * @warning !!! this file is automaticaly generated, please do not change anything in this file if you don't want to loose your work !!!
 * 
 * @package      WebGuru3
 * @subpackage   wgframework/model/base/campaign_pages
 * @author       Ondrej Rafaj ()
 * @author       WebGuruCMS3 Framework CMS dbModel generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @since        12. November 2009 17:04:01
 */

class BaseCampaignPagesModel extends DbModel {

	/**
	 * name
	 */
	const TABLE_NAME = 'campaign_pages';
	
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
	
	const FULL_PRIMARY_KEY = '`campaign_pages`.`id`';
	
	/**
	 * id -> int(11) unsigned
	 */
	const FULL_ID = '`campaign_pages`.`id`';
	
	const COL_ID = 'id';
	
	/**
	 * campaign_id -> int(11)
	 */
	const FULL_CAMPAIGN_ID = '`campaign_pages`.`campaign_id`';
	
	const COL_CAMPAIGN_ID = 'campaign_id';
	
	/**
	 * name -> varchar(255)
	 */
	const FULL_NAME = '`campaign_pages`.`name`';
	
	const COL_NAME = 'name';
	
	/**
	 * identifier -> varchar(255)
	 */
	const FULL_IDENTIFIER = '`campaign_pages`.`identifier`';
	
	const COL_IDENTIFIER = 'identifier';
	
	/**
	 * title -> varchar(255)
	 */
	const FULL_TITLE = '`campaign_pages`.`title`';
	
	const COL_TITLE = 'title';
	
	/**
	 * heading1 -> varchar(255)
	 */
	const FULL_HEADING1 = '`campaign_pages`.`heading1`';
	
	const COL_HEADING1 = 'heading1';
	
	/**
	 * heading2 -> varchar(255)
	 */
	const FULL_HEADING2 = '`campaign_pages`.`heading2`';
	
	const COL_HEADING2 = 'heading2';
	
	/**
	 * heading3 -> varchar(255)
	 */
	const FULL_HEADING3 = '`campaign_pages`.`heading3`';
	
	const COL_HEADING3 = 'heading3';
	
	/**
	 * rewrite -> varchar(255)
	 */
	const FULL_REWRITE = '`campaign_pages`.`rewrite`';
	
	const COL_REWRITE = 'rewrite';
	
	/**
	 * keywords -> text
	 */
	const FULL_KEYWORDS = '`campaign_pages`.`keywords`';
	
	const COL_KEYWORDS = 'keywords';
	
	/**
	 * description -> text
	 */
	const FULL_DESCRIPTION = '`campaign_pages`.`description`';
	
	const COL_DESCRIPTION = 'description';
	
	/**
	 * addtext1 -> varchar(255)
	 */
	const FULL_ADDTEXT1 = '`campaign_pages`.`addtext1`';
	
	const COL_ADDTEXT1 = 'addtext1';
	
	/**
	 * addtext2 -> varchar(255)
	 */
	const FULL_ADDTEXT2 = '`campaign_pages`.`addtext2`';
	
	const COL_ADDTEXT2 = 'addtext2';
	
	/**
	 * enabled -> tinyint(1) unsigned
	 */
	const FULL_ENABLED = '`campaign_pages`.`enabled`';
	
	const COL_ENABLED = 'enabled';
	
	/**
	 * parentid -> int(10) unsigned
	 */
	const FULL_PARENTID = '`campaign_pages`.`parentid`';
	
	const COL_PARENTID = 'parentid';
	
	/**
	 * home -> tinyint(1) unsigned
	 */
	const FULL_HOME = '`campaign_pages`.`home`';
	
	const COL_HOME = 'home';
	
	/**
	 * sort -> int(8) unsigned
	 */
	const FULL_SORT = '`campaign_pages`.`sort`';
	
	const COL_SORT = 'sort';
	
	/**
	 * head -> text
	 */
	const FULL_HEAD = '`campaign_pages`.`head`';
	
	const COL_HEAD = 'head';
	
	/**
	 * page -> longtext
	 */
	const FULL_PAGE = '`campaign_pages`.`page`';
	
	const COL_PAGE = 'page';
	
	/**
	 * note -> text
	 */
	const FULL_NOTE = '`campaign_pages`.`note`';
	
	const COL_NOTE = 'note';
	
	/**
	 * redirect1 -> int(11) unsigned
	 */
	const FULL_REDIRECT1 = '`campaign_pages`.`redirect1`';
	
	const COL_REDIRECT1 = 'redirect1';
	
	/**
	 * redirect2 -> int(11) unsigned
	 */
	const FULL_REDIRECT2 = '`campaign_pages`.`redirect2`';
	
	const COL_REDIRECT2 = 'redirect2';
	
	/**
	 * redirect3 -> varchar(255)
	 */
	const FULL_REDIRECT3 = '`campaign_pages`.`redirect3`';
	
	const COL_REDIRECT3 = 'redirect3';
	
	/**
	 * redirect4 -> varchar(255)
	 */
	const FULL_REDIRECT4 = '`campaign_pages`.`redirect4`';
	
	const COL_REDIRECT4 = 'redirect4';
	
	
	/**
	 * Count (on primary key)
	 */
	const COUNT_TABLE = 'COUNT(`campaign_pages`.`id`)';
	
	/**
	 * Count (on primary key) with Distinct
	 */
	const COUNT_DISTINCT_TABLE = 'COUNT(DISTINCT `campaign_pages`.`id`)';
	
	
	/**
	 * @var array $_tableNames Array with column names translated to php
	 */
	private static $_tableNames = array('Id'=>0, 'CampaignId'=>1, 'Name'=>2, 'Identifier'=>3, 'Title'=>4, 'Heading1'=>5, 'Heading2'=>6, 'Heading3'=>7, 'Rewrite'=>8, 'Keywords'=>9, 'Description'=>10, 'Addtext1'=>11, 'Addtext2'=>12, 'Enabled'=>13, 'Parentid'=>14, 'Home'=>15, 'Sort'=>16, 'Head'=>17, 'Page'=>18, 'Note'=>19, 'Redirect1'=>20, 'Redirect2'=>21, 'Redirect3'=>22, 'Redirect4'=>23);
	
	/**
	 * @var array $_tableValues Array with key values of the columns
	 */
	private static $_tableValues = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23);
	
	/**
	 * @var array $_fullTblFields Array with real column names in table
	 */
	private static $_fullTblFields = array('`campaign_pages`.`Id`'=>0, '`campaign_pages`.`CampaignId`'=>1, '`campaign_pages`.`Name`'=>2, '`campaign_pages`.`Identifier`'=>3, '`campaign_pages`.`Title`'=>4, '`campaign_pages`.`Heading1`'=>5, '`campaign_pages`.`Heading2`'=>6, '`campaign_pages`.`Heading3`'=>7, '`campaign_pages`.`Rewrite`'=>8, '`campaign_pages`.`Keywords`'=>9, '`campaign_pages`.`Description`'=>10, '`campaign_pages`.`Addtext1`'=>11, '`campaign_pages`.`Addtext2`'=>12, '`campaign_pages`.`Enabled`'=>13, '`campaign_pages`.`Parentid`'=>14, '`campaign_pages`.`Home`'=>15, '`campaign_pages`.`Sort`'=>16, '`campaign_pages`.`Head`'=>17, '`campaign_pages`.`Page`'=>18, '`campaign_pages`.`Note`'=>19, '`campaign_pages`.`Redirect1`'=>20, '`campaign_pages`.`Redirect2`'=>21, '`campaign_pages`.`Redirect3`'=>22, '`campaign_pages`.`Redirect4`'=>23);
	
	/**
	 * @var array $_tableFields Array with real column names
	 */
	private static $_tableFields = array('id'=>0, 'campaign_id'=>1, 'name'=>2, 'identifier'=>3, 'title'=>4, 'heading1'=>5, 'heading2'=>6, 'heading3'=>7, 'rewrite'=>8, 'keywords'=>9, 'description'=>10, 'addtext1'=>11, 'addtext2'=>12, 'enabled'=>13, 'parentid'=>14, 'home'=>15, 'sort'=>16, 'head'=>17, 'page'=>18, 'note'=>19, 'redirect1'=>20, 'redirect2'=>21, 'redirect3'=>22, 'redirect4'=>23);
	
	/**
	 * @var array $_tableFieldsByKey Array with real column names
	 */
	private static $_tableFieldsByKey = array('id', 'campaign_id', 'name', 'identifier', 'title', 'heading1', 'heading2', 'heading3', 'rewrite', 'keywords', 'description', 'addtext1', 'addtext2', 'enabled', 'parentid', 'home', 'sort', 'head', 'page', 'note', 'redirect1', 'redirect2', 'redirect3', 'redirect4');
	
	
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
			throw new WgException("CampaignPages could not be found in the field names. These are: ".print_r(self::$$fromType, true));
		}
		return $toNames[$key];
	}

	public static function getFieldNames($type=DbModel::FIELD_PHPNAME) {
		if (!isset(self::$$type)) {
			throw new WgException('Method ModelCampaignPages::getFieldNames() expects the parameter $type to be one of the class constants FIELD_PHPNAME, FIELD_COLVALUE, FIELD_FIELDNAME. '.$type.' was given.');
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
			else parent::throwGetColException('CampaignPagesModel::getPrimaryKey', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('CampaignPagesModel::getPrimaryKey', __LINE__, __FILE__);
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
			else parent::throwGetColException('CampaignPagesModel::getFieldByName', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('CampaignPagesModel::getFieldByName', __LINE__, __FILE__);
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
			else parent::throwGetColException('trying to get non existing data ('.$field.') in CampaignPagesModel::getFieldByName', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('trying to get non existing data ('.$field.') in CampaignPagesModel::getFieldByName', __LINE__, __FILE__);
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
			else parent::throwGetColException('Not set CampaignPagesModel::getId', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getId', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of campaign_id -> int(11)
	 * 
	 * @name getCampaignId
	 * @return int
	 */
	public function getCampaignId() {
		if ((bool) $this->_result) {
			if (array_key_exists(1, $this->_result)) return (string) $this->_result[1];
			else parent::throwGetColException('Not set CampaignPagesModel::getCampaignId', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getCampaignId', __LINE__, __FILE__);
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
			else parent::throwGetColException('Not set CampaignPagesModel::getName', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getName', __LINE__, __FILE__);
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
			else parent::throwGetColException('Not set CampaignPagesModel::getIdentifier', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getIdentifier', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of title -> varchar(255)
	 * 
	 * @name getTitle
	 * @return varchar
	 */
	public function getTitle() {
		if ((bool) $this->_result) {
			if (array_key_exists(4, $this->_result)) return (string) $this->_result[4];
			else parent::throwGetColException('Not set CampaignPagesModel::getTitle', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getTitle', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of heading1 -> varchar(255)
	 * 
	 * @name getHeading1
	 * @return varchar
	 */
	public function getHeading1() {
		if ((bool) $this->_result) {
			if (array_key_exists(5, $this->_result)) return (string) $this->_result[5];
			else parent::throwGetColException('Not set CampaignPagesModel::getHeading1', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getHeading1', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of heading2 -> varchar(255)
	 * 
	 * @name getHeading2
	 * @return varchar
	 */
	public function getHeading2() {
		if ((bool) $this->_result) {
			if (array_key_exists(6, $this->_result)) return (string) $this->_result[6];
			else parent::throwGetColException('Not set CampaignPagesModel::getHeading2', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getHeading2', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of heading3 -> varchar(255)
	 * 
	 * @name getHeading3
	 * @return varchar
	 */
	public function getHeading3() {
		if ((bool) $this->_result) {
			if (array_key_exists(7, $this->_result)) return (string) $this->_result[7];
			else parent::throwGetColException('Not set CampaignPagesModel::getHeading3', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getHeading3', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of rewrite -> varchar(255)
	 * 
	 * @name getRewrite
	 * @return varchar
	 */
	public function getRewrite() {
		if ((bool) $this->_result) {
			if (array_key_exists(8, $this->_result)) return (string) $this->_result[8];
			else parent::throwGetColException('Not set CampaignPagesModel::getRewrite', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getRewrite', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of keywords -> text
	 * 
	 * @name getKeywords
	 * @return text
	 */
	public function getKeywords() {
		if ((bool) $this->_result) {
			if (array_key_exists(9, $this->_result)) return (string) $this->_result[9];
			else parent::throwGetColException('Not set CampaignPagesModel::getKeywords', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getKeywords', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of description -> text
	 * 
	 * @name getDescription
	 * @return text
	 */
	public function getDescription() {
		if ((bool) $this->_result) {
			if (array_key_exists(10, $this->_result)) return (string) $this->_result[10];
			else parent::throwGetColException('Not set CampaignPagesModel::getDescription', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getDescription', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of addtext1 -> varchar(255)
	 * 
	 * @name getAddtext1
	 * @return varchar
	 */
	public function getAddtext1() {
		if ((bool) $this->_result) {
			if (array_key_exists(11, $this->_result)) return (string) $this->_result[11];
			else parent::throwGetColException('Not set CampaignPagesModel::getAddtext1', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getAddtext1', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of addtext2 -> varchar(255)
	 * 
	 * @name getAddtext2
	 * @return varchar
	 */
	public function getAddtext2() {
		if ((bool) $this->_result) {
			if (array_key_exists(12, $this->_result)) return (string) $this->_result[12];
			else parent::throwGetColException('Not set CampaignPagesModel::getAddtext2', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getAddtext2', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of enabled -> tinyint(1) unsigned
	 * 
	 * @name getEnabled
	 * @return tinyint
	 */
	public function getEnabled() {
		if ((bool) $this->_result) {
			if (array_key_exists(13, $this->_result)) return (string) $this->_result[13];
			else parent::throwGetColException('Not set CampaignPagesModel::getEnabled', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getEnabled', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of parentid -> int(10) unsigned
	 * 
	 * @name getParentid
	 * @return int
	 */
	public function getParentid() {
		if ((bool) $this->_result) {
			if (array_key_exists(14, $this->_result)) return (string) $this->_result[14];
			else parent::throwGetColException('Not set CampaignPagesModel::getParentid', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getParentid', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of home -> tinyint(1) unsigned
	 * 
	 * @name getHome
	 * @return tinyint
	 */
	public function getHome() {
		if ((bool) $this->_result) {
			if (array_key_exists(15, $this->_result)) return (string) $this->_result[15];
			else parent::throwGetColException('Not set CampaignPagesModel::getHome', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getHome', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of sort -> int(8) unsigned
	 * 
	 * @name getSort
	 * @return int
	 */
	public function getSort() {
		if ((bool) $this->_result) {
			if (array_key_exists(16, $this->_result)) return (string) $this->_result[16];
			else parent::throwGetColException('Not set CampaignPagesModel::getSort', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getSort', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of head -> text
	 * 
	 * @name getHead
	 * @return text
	 */
	public function getHead() {
		if ((bool) $this->_result) {
			if (array_key_exists(17, $this->_result)) return (string) $this->_result[17];
			else parent::throwGetColException('Not set CampaignPagesModel::getHead', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getHead', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of page -> longtext
	 * 
	 * @name getPage
	 * @return longtext
	 */
	public function getPage() {
		if ((bool) $this->_result) {
			if (array_key_exists(18, $this->_result)) return (string) $this->_result[18];
			else parent::throwGetColException('Not set CampaignPagesModel::getPage', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getPage', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of note -> text
	 * 
	 * @name getNote
	 * @return text
	 */
	public function getNote() {
		if ((bool) $this->_result) {
			if (array_key_exists(19, $this->_result)) return (string) $this->_result[19];
			else parent::throwGetColException('Not set CampaignPagesModel::getNote', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getNote', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of redirect1 -> int(11) unsigned
	 * 
	 * @name getRedirect1
	 * @return int
	 */
	public function getRedirect1() {
		if ((bool) $this->_result) {
			if (array_key_exists(20, $this->_result)) return (string) $this->_result[20];
			else parent::throwGetColException('Not set CampaignPagesModel::getRedirect1', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getRedirect1', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of redirect2 -> int(11) unsigned
	 * 
	 * @name getRedirect2
	 * @return int
	 */
	public function getRedirect2() {
		if ((bool) $this->_result) {
			if (array_key_exists(21, $this->_result)) return (string) $this->_result[21];
			else parent::throwGetColException('Not set CampaignPagesModel::getRedirect2', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getRedirect2', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of redirect3 -> varchar(255)
	 * 
	 * @name getRedirect3
	 * @return varchar
	 */
	public function getRedirect3() {
		if ((bool) $this->_result) {
			if (array_key_exists(22, $this->_result)) return (string) $this->_result[22];
			else parent::throwGetColException('Not set CampaignPagesModel::getRedirect3', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getRedirect3', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of redirect4 -> varchar(255)
	 * 
	 * @name getRedirect4
	 * @return varchar
	 */
	public function getRedirect4() {
		if ((bool) $this->_result) {
			if (array_key_exists(23, $this->_result)) return (string) $this->_result[23];
			else parent::throwGetColException('Not set CampaignPagesModel::getRedirect4', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From CampaignPagesModel::getRedirect4', __LINE__, __FILE__);
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
			else throw new Exception('Call to undefined method/class function: CampaignPagesModel::'.$function.'()');
		}
		else throw new Exception('Call to undefined method/class function: CampaignPagesModel::'.$function.'()');
	}
	
	
	/**
	 * Basic select function from table campaign_pages
	 * 
	 * @name doSelect
	 * @param array $params
	 * @return array Array of the items from database
	 */
	public static function doSelect($params=NULL, $fields=array()) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$what = parent::_getSelectFields($fields);
		$conn->select(self::TABLE_NAME, $what);
		return DbModel::doSelect($conn, new CampaignPagesModel());
	}
	
	/**
	 * Select one item function from table campaign_pages
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
		$ret = DbModel::doSelect($conn, new CampaignPagesModel());
		if (isset($ret[0]) && is_a($ret[0], 'CampaignPagesModel')) return $ret[0];
		else {
			$class = new CampaignPagesModel();
			$class->setNullResults();
			return $class;
		}
	}
	
	/**
	 * Basic select count function from table campaign_pages
	 * 
	 * @name doCount
	 * @param array $params
	 * @return int Number of items in database
	 */
	public static function doCount($params=NULL) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$conn->select(self::TABLE_NAME, self::COUNT_TABLE);
		return (int) DbModel::doSelectOne($conn, new CampaignPagesModel());
	}
	
	/**
	 * Basic pager function from table campaign_pages
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
		return DbModel::doPager($conn, new CampaignPagesModel(), $itemsPerPage, $selectPage, $count, $params);
	}
	
	/**
	 * Basic delete function from table campaign_pages
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
		return (int) DbModel::doAffected($conn, new CampaignPagesModel());
	}
	
	/**
	 * Basic update function for table campaign_pages
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
		$af = (int) DbModel::doAffected($conn, new CampaignPagesModel());
		if (!(bool) $af) $af = 1;
		return (int) $af;
	}
	
	/**
	 * Basic insert function for table campaign_pages
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
		return (int) DbModel::doInsert($conn, new CampaignPagesModel());
	}
	
	/**
	 * Basic reader create function from table campaign_pages
	 * 
	 * @name doReader
	 * @param object $conn wgConnector class instance or NULL
	 * @param mixed $params
	 * @return object Data reader
	 */
	public static function doReader($params=NULL) {
		
	}
	
	/**
	 * Truncate table function for table campaign_pages
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
	 * Drop table function for table campaign_pages
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