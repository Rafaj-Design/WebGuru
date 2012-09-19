<?php
/**
 * 
 * 
 * @package      WebGuru3
 * @subpackage   modules/pages/actions
 * @author       System Administrator
 * @author       WebGuruCMS3 Framework CMS admin generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @wgdeveloper  1.0.0.0
 * @since        11. December 2008
 */
final class templatescssadminActionsPages extends BaseActions {
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
		// setup callback parameters after redirection
		parent::$_onSaveParam = NULL;       // After save
		parent::$_onApplyParam = NULL;      // After apply
		parent::$_onDeleteParam = NULL;     // After delete
		
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
		if (wgSystem::isSave() || wgSystem::isApply()) {
			$mand = true;
			if (!(bool) wgPost::getValue('name')) { wgError::add('noname');
				$mand = false;
			}
		if (!(bool) wgPost::getValue('identifier')) {
				wgSystem::setPostValue('identifier', wgPost::getValue('name'));
			}
		
			if ($mand) {
				$ok = (bool) self::doSavePagesTemplatesGroups();
				if ($ok) wgError::add('saved', 2);
				else wgError::add('cantsave');
			}
		}
		if ((bool) wgGet::getValue('delete')) {
			$ok = (bool) self::doDeletePagesTemplatesGroups(wgGet::getValue('delete'));
			if ($ok) wgError::add('deleted', 2);
			else wgError::add('cantdelete');
		}
		return $ok;
	}
	
	// functions ---------------------------------------------------------------------------
	
	/**
	 * Save/Update function for table "pages_templates_groups"
	 *
	 * @return bool Success
	 */
	private static function doSavePagesTemplatesGroups() {
		$save = array();
		$save['name'] = wgPost::getValue('name');
		$save['identifier'] = valid::safeText(wgPost::getValue('identifier'));
		$save['folder'] = wgPost::getValue('folder');
		
		if ((bool) wgPost::getValue('edit')) {
			$save['where'] = wgPost::getValue('edit');
			return (bool) PagesTemplatesGroupsModel::doUpdate($save);
		}
		else return (bool) PagesTemplatesGroupsModel::doInsert($save);
	}

	/**
	 * Delete function for table "pages_templates_groups"
	 *
	 * @param int Id of the item (primary key)
	 * @return bool Success
	 */
	private static function doDeletePagesTemplatesGroups($id) {
		$id = (int) $id;
		if (!(bool) $id) return false;
		//$conn = new wgConnector();
		//$conn->where(PagesTemplatesGroupsModel::PRIMARY_KEY, $id);
		//return (bool) PagesTemplatesGroupsModel::doDelete($conn);
		return (bool) PagesTemplatesGroupsModel::doDelete($id);
	}
	
}

?>