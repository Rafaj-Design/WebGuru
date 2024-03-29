<?php
/**
 * Database class for table motocatalogue_images
 * 
 * @warning !!! this file is automaticaly generated, please do not change anything in this file if you don't want to loose your work !!!
 * 
 * @package      WebGuru3
 * @subpackage   wgframework/model/base/motocatalogue_images
 * @author       Ondrej Rafaj ()
 * @author       WebGuruCMS3 Framework CMS dbModel generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @since        10. October 2012 11:04:36
 */

class BaseMotocatalogueImagesModel extends DbModel {

	/**
	 * name
	 */
	const TABLE_NAME = 'motocatalogue_images';
	
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
		}
	 * id -> bigint(20) unsigned
	 */
	const PRIMARY_KEY = 'id';
	
	const FULL_PRIMARY_KEY = '`motocatalogue_images`.`id`';
	
	/**
	 * id -> bigint(20) unsigned
	 */
	const FULL_ID = '`motocatalogue_images`.`id`';
	
	const COL_ID = 'id';
	
	/**
	 * smallid -> bigint(20)
	 */
	const FULL_SMALLID = '`motocatalogue_images`.`smallid`';
	
	const COL_SMALLID = 'smallid';
	
	/**
	 * projects_items_id -> int(11) unsigned
	 */
	const FULL_PROJECTS_ITEMS_ID = '`motocatalogue_images`.`projects_items_id`';
	
	const COL_PROJECTS_ITEMS_ID = 'projects_items_id';
	
	/**
	 * name -> varchar(255)
	 */
	const FULL_NAME = '`motocatalogue_images`.`name`';
	
	const COL_NAME = 'name';
	
	/**
	 * identifier -> varchar(255)
	 */
	const FULL_IDENTIFIER = '`motocatalogue_images`.`identifier`';
	
	const COL_IDENTIFIER = 'identifier';
	
	/**
	 * filename -> varchar(255)
	 */
	const FULL_FILENAME = '`motocatalogue_images`.`filename`';
	
	const COL_FILENAME = 'filename';
	
	/**
	 * type -> varchar(20)
	 */
	const FULL_TYPE = '`motocatalogue_images`.`type`';
	
	const COL_TYPE = 'type';
	
	/**
	 * h1 -> varchar(255)
	 */
	const FULL_H1 = '`motocatalogue_images`.`h1`';
	
	const COL_H1 = 'h1';
	
	/**
	 * title -> varchar(255)
	 */
	const FULL_TITLE = '`motocatalogue_images`.`title`';
	
	const COL_TITLE = 'title';
	
	/**
	 * mdescription -> text
	 */
	const FULL_MDESCRIPTION = '`motocatalogue_images`.`mdescription`';
	
	const COL_MDESCRIPTION = 'mdescription';
	
	/**
	 * mkeywords -> text
	 */
	const FULL_MKEYWORDS = '`motocatalogue_images`.`mkeywords`';
	
	const COL_MKEYWORDS = 'mkeywords';
	
	/**
	 * h2 -> varchar(255)
	 */
	const FULL_H2 = '`motocatalogue_images`.`h2`';
	
	const COL_H2 = 'h2';
	
	/**
	 * h3 -> varchar(255)
	 */
	const FULL_H3 = '`motocatalogue_images`.`h3`';
	
	const COL_H3 = 'h3';
	
	/**
	 * text1 -> text
	 */
	const FULL_TEXT1 = '`motocatalogue_images`.`text1`';
	
	const COL_TEXT1 = 'text1';
	
	/**
	 * text2 -> text
	 */
	const FULL_TEXT2 = '`motocatalogue_images`.`text2`';
	
	const COL_TEXT2 = 'text2';
	
	/**
	 * text3 -> text
	 */
	const FULL_TEXT3 = '`motocatalogue_images`.`text3`';
	
	const COL_TEXT3 = 'text3';
	
	/**
	 * text4 -> text
	 */
	const FULL_TEXT4 = '`motocatalogue_images`.`text4`';
	
	const COL_TEXT4 = 'text4';
	
	/**
	 * views -> bigint(20)
	 */
	const FULL_VIEWS = '`motocatalogue_images`.`views`';
	
	const COL_VIEWS = 'views';
	
	/**
	 * downloads -> bigint(20)
	 */
	const FULL_DOWNLOADS = '`motocatalogue_images`.`downloads`';
	
	const COL_DOWNLOADS = 'downloads';
	
	/**
	 * size -> int(11)
	 */
	const FULL_SIZE = '`motocatalogue_images`.`size`';
	
	const COL_SIZE = 'size';
	
	/**
	 * itemtype -> tinyint(1)
	 */
	const FULL_ITEMTYPE = '`motocatalogue_images`.`itemtype`';
	
	const COL_ITEMTYPE = 'itemtype';
	
	/**
	 * sort -> int(11)
	 */
	const FULL_SORT = '`motocatalogue_images`.`sort`';
	
	const COL_SORT = 'sort';
	
	/**
	 * variable1 -> varchar(255)
	 */
	const FULL_VARIABLE1 = '`motocatalogue_images`.`variable1`';
	
	const COL_VARIABLE1 = 'variable1';
	
	/**
	 * variable2 -> varchar(255)
	 */
	const FULL_VARIABLE2 = '`motocatalogue_images`.`variable2`';
	
	const COL_VARIABLE2 = 'variable2';
	
	/**
	 * variable3 -> varchar(255)
	 */
	const FULL_VARIABLE3 = '`motocatalogue_images`.`variable3`';
	
	const COL_VARIABLE3 = 'variable3';
	
	
	/**
		}
	 * Count (on primary key)
	 */
	const COUNT_TABLE = 'COUNT(`motocatalogue_images`.`id`)';
	
	/**
	 * Count (on primary key) with Distinct
	 */
	const COUNT_DISTINCT_TABLE = 'COUNT(DISTINCT `motocatalogue_images`.`id`)';
	
	
	/**
	 * @var array $_tableNames Array with column names translated to php
	 */
	private static $_tableNames = array('Id'=>0, 'Smallid'=>1, 'ProjectsItemsId'=>2, 'Name'=>3, 'Identifier'=>4, 'Filename'=>5, 'Type'=>6, 'H1'=>7, 'Title'=>8, 'Mdescription'=>9, 'Mkeywords'=>10, 'H2'=>11, 'H3'=>12, 'Text1'=>13, 'Text2'=>14, 'Text3'=>15, 'Text4'=>16, 'Views'=>17, 'Downloads'=>18, 'Size'=>19, 'Itemtype'=>20, 'Sort'=>21, 'Variable1'=>22, 'Variable2'=>23, 'Variable3'=>24);
	
	/**
	 * @var array $_tableValues Array with key values of the columns
	 */
	private static $_tableValues = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24);
	
	/**
	 * @var array $_fullTblFields Array with real column names in table
	 */
	private static $_fullTblFields = array('`motocatalogue_images`.`Id`'=>0, '`motocatalogue_images`.`Smallid`'=>1, '`motocatalogue_images`.`ProjectsItemsId`'=>2, '`motocatalogue_images`.`Name`'=>3, '`motocatalogue_images`.`Identifier`'=>4, '`motocatalogue_images`.`Filename`'=>5, '`motocatalogue_images`.`Type`'=>6, '`motocatalogue_images`.`H1`'=>7, '`motocatalogue_images`.`Title`'=>8, '`motocatalogue_images`.`Mdescription`'=>9, '`motocatalogue_images`.`Mkeywords`'=>10, '`motocatalogue_images`.`H2`'=>11, '`motocatalogue_images`.`H3`'=>12, '`motocatalogue_images`.`Text1`'=>13, '`motocatalogue_images`.`Text2`'=>14, '`motocatalogue_images`.`Text3`'=>15, '`motocatalogue_images`.`Text4`'=>16, '`motocatalogue_images`.`Views`'=>17, '`motocatalogue_images`.`Downloads`'=>18, '`motocatalogue_images`.`Size`'=>19, '`motocatalogue_images`.`Itemtype`'=>20, '`motocatalogue_images`.`Sort`'=>21, '`motocatalogue_images`.`Variable1`'=>22, '`motocatalogue_images`.`Variable2`'=>23, '`motocatalogue_images`.`Variable3`'=>24);
	
	/**
	 * @var array $_tableFields Array with real column names
	 */
	private static $_tableFields = array('id'=>0, 'smallid'=>1, 'projects_items_id'=>2, 'name'=>3, 'identifier'=>4, 'filename'=>5, 'type'=>6, 'h1'=>7, 'title'=>8, 'mdescription'=>9, 'mkeywords'=>10, 'h2'=>11, 'h3'=>12, 'text1'=>13, 'text2'=>14, 'text3'=>15, 'text4'=>16, 'views'=>17, 'downloads'=>18, 'size'=>19, 'itemtype'=>20, 'sort'=>21, 'variable1'=>22, 'variable2'=>23, 'variable3'=>24);
	
	/**
	 * @var array $_tableFieldsByKey Array with real column names
	 */
	private static $_tableFieldsByKey = array('id', 'smallid', 'projects_items_id', 'name', 'identifier', 'filename', 'type', 'h1', 'title', 'mdescription', 'mkeywords', 'h2', 'h3', 'text1', 'text2', 'text3', 'text4', 'views', 'downloads', 'size', 'itemtype', 'sort', 'variable1', 'variable2', 'variable3');
	
	
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
			throw new WgException("MotocatalogueImages could not be found in the field names. These are: ".print_r(self::$$fromType, true));
		}
		return $toNames[$key];
	}

	public static function getFieldNames($type=DbModel::FIELD_PHPNAME) {
		if (!isset(self::$$type)) {
			throw new WgException('Method ModelMotocatalogueImages::getFieldNames() expects the parameter $type to be one of the class constants FIELD_PHPNAME, FIELD_COLVALUE, FIELD_FIELDNAME. '.$type.' was given.');
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
			else parent::throwGetColException('MotocatalogueImagesModel::getPrimaryKey', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('MotocatalogueImagesModel::getPrimaryKey', __LINE__, __FILE__);
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
			else parent::throwGetColException('MotocatalogueImagesModel::getFieldByName', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('MotocatalogueImagesModel::getFieldByName', __LINE__, __FILE__);
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
			else parent::throwGetColException('trying to get non existing data ('.$field.') in MotocatalogueImagesModel::getFieldByName', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('trying to get non existing data ('.$field.') in MotocatalogueImagesModel::getFieldByName', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of id -> bigint(20) unsigned
	 * 
	 * @name getId
	 * @return bigint
	 */
	public function getId() {
		if ((bool) $this->_result) {
			if (array_key_exists(0, $this->_result)) return (int) $this->_result[0];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getId', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getId', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of smallid -> bigint(20)
	 * 
	 * @name getSmallid
	 * @return bigint
	 */
	public function getSmallid() {
		if ((bool) $this->_result) {
			if (array_key_exists(1, $this->_result)) return (int) $this->_result[1];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getSmallid', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getSmallid', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of projects_items_id -> int(11) unsigned
	 * 
	 * @name getProjectsItemsId
	 * @return int
	 */
	public function getProjectsItemsId() {
		if ((bool) $this->_result) {
			if (array_key_exists(2, $this->_result)) return (int) $this->_result[2];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getProjectsItemsId', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getProjectsItemsId', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of name -> varchar(255)
	 * 
	 * @name getName
	 * @return varchar
	 */
	public function getName() {
		if ((bool) $this->_result) {
			if (array_key_exists(3, $this->_result)) return (string) $this->_result[3];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getName', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getName', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of identifier -> varchar(255)
	 * 
	 * @name getIdentifier
	 * @return varchar
	 */
	public function getIdentifier() {
		if ((bool) $this->_result) {
			if (array_key_exists(4, $this->_result)) return (string) $this->_result[4];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getIdentifier', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getIdentifier', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of filename -> varchar(255)
	 * 
	 * @name getFilename
	 * @return varchar
	 */
	public function getFilename() {
		if ((bool) $this->_result) {
			if (array_key_exists(5, $this->_result)) return (string) $this->_result[5];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getFilename', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getFilename', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of type -> varchar(20)
	 * 
	 * @name getType
	 * @return varchar
	 */
	public function getType() {
		if ((bool) $this->_result) {
			if (array_key_exists(6, $this->_result)) return (string) $this->_result[6];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getType', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getType', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of h1 -> varchar(255)
	 * 
	 * @name getH1
	 * @return varchar
	 */
	public function getH1() {
		if ((bool) $this->_result) {
			if (array_key_exists(7, $this->_result)) return (string) $this->_result[7];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getH1', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getH1', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of title -> varchar(255)
	 * 
	 * @name getTitle
	 * @return varchar
	 */
	public function getTitle() {
		if ((bool) $this->_result) {
			if (array_key_exists(8, $this->_result)) return (string) $this->_result[8];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getTitle', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getTitle', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of mdescription -> text
	 * 
	 * @name getMdescription
	 * @return text
	 */
	public function getMdescription() {
		if ((bool) $this->_result) {
			if (array_key_exists(9, $this->_result)) return (string) $this->_result[9];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getMdescription', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getMdescription', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of mkeywords -> text
	 * 
	 * @name getMkeywords
	 * @return text
	 */
	public function getMkeywords() {
		if ((bool) $this->_result) {
			if (array_key_exists(10, $this->_result)) return (string) $this->_result[10];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getMkeywords', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getMkeywords', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of h2 -> varchar(255)
	 * 
	 * @name getH2
	 * @return varchar
	 */
	public function getH2() {
		if ((bool) $this->_result) {
			if (array_key_exists(11, $this->_result)) return (string) $this->_result[11];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getH2', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getH2', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of h3 -> varchar(255)
	 * 
	 * @name getH3
	 * @return varchar
	 */
	public function getH3() {
		if ((bool) $this->_result) {
			if (array_key_exists(12, $this->_result)) return (string) $this->_result[12];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getH3', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getH3', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of text1 -> text
	 * 
	 * @name getText1
	 * @return text
	 */
	public function getText1() {
		if ((bool) $this->_result) {
			if (array_key_exists(13, $this->_result)) return (string) $this->_result[13];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getText1', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getText1', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of text2 -> text
	 * 
	 * @name getText2
	 * @return text
	 */
	public function getText2() {
		if ((bool) $this->_result) {
			if (array_key_exists(14, $this->_result)) return (string) $this->_result[14];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getText2', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getText2', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of text3 -> text
	 * 
	 * @name getText3
	 * @return text
	 */
	public function getText3() {
		if ((bool) $this->_result) {
			if (array_key_exists(15, $this->_result)) return (string) $this->_result[15];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getText3', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getText3', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of text4 -> text
	 * 
	 * @name getText4
	 * @return text
	 */
	public function getText4() {
		if ((bool) $this->_result) {
			if (array_key_exists(16, $this->_result)) return (string) $this->_result[16];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getText4', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getText4', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of views -> bigint(20)
	 * 
	 * @name getViews
	 * @return bigint
	 */
	public function getViews() {
		if ((bool) $this->_result) {
			if (array_key_exists(17, $this->_result)) return (int) $this->_result[17];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getViews', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getViews', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of downloads -> bigint(20)
	 * 
	 * @name getDownloads
	 * @return bigint
	 */
	public function getDownloads() {
		if ((bool) $this->_result) {
			if (array_key_exists(18, $this->_result)) return (int) $this->_result[18];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getDownloads', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getDownloads', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of size -> int(11)
	 * 
	 * @name getSize
	 * @return int
	 */
	public function getSize() {
		if ((bool) $this->_result) {
			if (array_key_exists(19, $this->_result)) return (int) $this->_result[19];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getSize', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getSize', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of itemtype -> tinyint(1)
	 * 
	 * @name getItemtype
	 * @return tinyint
	 */
	public function getItemtype() {
		if ((bool) $this->_result) {
			if (array_key_exists(20, $this->_result)) return (int) $this->_result[20];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getItemtype', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getItemtype', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of sort -> int(11)
	 * 
	 * @name getSort
	 * @return int
	 */
	public function getSort() {
		if ((bool) $this->_result) {
			if (array_key_exists(21, $this->_result)) return (int) $this->_result[21];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getSort', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getSort', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of variable1 -> varchar(255)
	 * 
	 * @name getVariable1
	 * @return varchar
	 */
	public function getVariable1() {
		if ((bool) $this->_result) {
			if (array_key_exists(22, $this->_result)) return (string) $this->_result[22];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getVariable1', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getVariable1', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of variable2 -> varchar(255)
	 * 
	 * @name getVariable2
	 * @return varchar
	 */
	public function getVariable2() {
		if ((bool) $this->_result) {
			if (array_key_exists(23, $this->_result)) return (string) $this->_result[23];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getVariable2', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getVariable2', __LINE__, __FILE__);
	}
	
	/**
	 * Get value of variable3 -> varchar(255)
	 * 
	 * @name getVariable3
	 * @return varchar
	 */
	public function getVariable3() {
		if ((bool) $this->_result) {
			if (array_key_exists(24, $this->_result)) return (string) $this->_result[24];
			else parent::throwGetColException('Not set MotocatalogueImagesModel::getVariable3', __LINE__, __FILE__);
		}
		else return parent::throwNoResException('No result From MotocatalogueImagesModel::getVariable3', __LINE__, __FILE__);
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
			else throw new Exception('Call to undefined method/class function: MotocatalogueImagesModel::'.$function.'()');
		}
		else throw new Exception('Call to undefined method/class function: MotocatalogueImagesModel::'.$function.'()');
	}
	
	
	/**
	 * Basic select function from table motocatalogue_images
	 * 
	 * @name doSelect
	 * @param array $params
	 * @return array Array of the items from database
	 */
	public static function doSelect($params=NULL, $fields=array()) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$what = parent::_getSelectFields($fields);
		$conn->select(self::TABLE_NAME, $what);
		return DbModel::doSelect($conn, new MotocatalogueImagesModel());
	}
	
	/** Left join select function from table motocatalogue_images
	 * 
	 * @name doLeftJoin
	 * @param array $params
	 * @return array Array of the items from database
	 */
	public static function doLeftJoin($table2, $params=NULL, $fields=array()) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$what = parent::_getSelectFields($fields);
		$conn->leftJoin(self::TABLE_NAME, $table2, $what);
		return DbModel::doSelect($conn, new MotocatalogueImagesModel());
	}
	
	/** Right join select function from table motocatalogue_images
	 * 
	 * @name doRightJoin
	 * @param array $params
	 * @return array Array of the items from database
	 */
	public static function doRightJoin($table2, $params=NULL, $fields=array()) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$what = parent::_getSelectFields($fields);
		$conn->rightJoin(self::TABLE_NAME, $table2, $what);
		return DbModel::doSelect($conn, new MotocatalogueImagesModel());
	}
	
	/** Inner join select function from table motocatalogue_images
	 * 
	 * @name doInnerJoin
	 * @param array $params
	 * @return array Array of the items from database
	 */
	public static function doInnerJoin($table2, $params=NULL, $fields=array()) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$what = parent::_getSelectFields($fields);
		$conn->innerJoin(self::TABLE_NAME, $table2, $what);
		return DbModel::doSelect($conn, new MotocatalogueImagesModel());
	}
	
	/**
	 * Select one item function from table motocatalogue_images
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
		$ret = DbModel::doSelect($conn, new MotocatalogueImagesModel());
		if (isset($ret[0]) && is_a($ret[0], 'MotocatalogueImagesModel')) return $ret[0];
		else {
			$class = new MotocatalogueImagesModel();
			$class->setNullResults();
			return $class;
		}
	}
	
	/**
	 * Basic select count function from table motocatalogue_images
	 * 
	 * @name doCount
	 * @param array $params
	 * @return int Number of items in database
	 */
	public static function doCount($params=NULL) {
		$conn = parent::_initwgConnector($params, self::PRIMARY_KEY);
		$conn->select(self::TABLE_NAME, self::COUNT_TABLE);
		return (int) DbModel::doSelectOne($conn, new MotocatalogueImagesModel());
	}
	
	/**
	 * Basic pager function from table motocatalogue_images
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
		return DbModel::doPager($conn, new MotocatalogueImagesModel(), $itemsPerPage, $selectPage, $count, $params);
	}
	
	/**
	 * Basic delete function from table motocatalogue_images
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
		return (int) DbModel::doAffected($conn, new MotocatalogueImagesModel());
	}
	
	/**
	 * Basic update function for table motocatalogue_images
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
		$af = (int) DbModel::doAffected($conn, new MotocatalogueImagesModel());
		if (!(bool) $af) $af = 1;
		return (int) $af;
	}
	
	/**
	 * Basic insert function for table motocatalogue_images
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
		return (int) DbModel::doInsert($conn, new MotocatalogueImagesModel());
	}
	
	/**
	 * Basic reader create function from table motocatalogue_images
	 * 
	 * @name doReader
	 * @param object $conn wgConnector class instance or NULL
	 * @param mixed $params
	 * @return object Data reader
	 */
	public static function doReader($params=NULL) {
		
	}
	
	/**
	 * Truncate table function for table motocatalogue_images
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
	 * Drop table function for table motocatalogue_images
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