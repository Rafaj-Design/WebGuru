<?php
/**
 * 
 * 
 * @package      WebGuru3
 * @subpackage   modules/jobnumbers/actions
 * @author       Ondrej Rafaj
 * @author       WebGuruCMS3 Framework CMS admin generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @wgdeveloper  1.0.0.0
 * @since        24. March 2009
 */
final class exportimportexportActionsJobnumbers extends BaseActions {
	/**
	 * All variables neccessary for module should be here
	 *
	 * @var array
	 */
	private static $_par = array();
	
	/**
	 * Object constructor, assigning variables to the class from post, init the class
	 *
	 */
	public function __construct() {
		parent::__construct();
		self::$_par['edit'] = 0;
		// filling parameters with data
		self::$_par = array();
		//Array
		
		// init the process
		parent::$_ok = (bool) $this->_init();
	}
	
	/**
	 * Initialisation of the module creation
	 *
	 * @return bool Success
	 */
	private function _init() {
		$ok = false;
		if (wgSystem::isSave()) {
			$ok = (bool) self::doExportJobnumbers();
			if (!$ok) wgError::add('cantexport');
		}
		// setup callback parameters after redirection
		parent::$_onSaveParam = NULL;       // After save
		return $ok;
	}
	
	// functions ---------------------------------------------------------------------------
	
	/**
	 * Save/Update function for table "jobnumbers"
	 *
	 * @return bool Success
	 */
	private static function doExportJobnumbers() {
		return JobnumbersModel::exportData();
	}
		
}

?>