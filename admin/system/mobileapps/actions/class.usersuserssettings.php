<?php
/**
 * 
 * 
 * @package      WebGuru3
 * @subpackage   modules/mobileapps/actions
 * @author       Ondrej Rafaj
 * @author       WebGuruCMS3 Framework CMS admin generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @wgdeveloper  1.0.0.1
 * @since        20. September 2012
 */
final class usersuserssettingsActionsMobileapps extends BaseActions {
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
		
		self::$_par = array();
		self::$_par['edit'] = 0;
		
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
			
			if ($mand) {
				$ok = (bool) self::doSaveUsers();
				if ($ok) wgError::add('saved', 2);
				else wgError::add('cantsave');
			}
		}
		if ((bool) wgGet::getValue('delete')) {
			$ok = (bool) self::doDeleteUsers(wgGet::getValue('delete'));
			if ($ok) wgError::add('deleted', 2);
			else wgError::add('cantdelete');
		}
		// setup callback parameters after redirection
		parent::$_onSaveParam = NULL;       // After save
		parent::$_onApplyParam = 'edit='.self::$_par['edit'];      // After apply
		parent::$_onDeleteParam = NULL;     // After delete
		return $ok;
	}
	
	// functions ---------------------------------------------------------------------------
	
	/**
	 * Save/Update function for table "users"
	 *
	 * @return bool Success
	 */
	private static function doSaveUsers() {
		$save = array();
		$save['users_id'] = (int)wgPost::getValue('edit');
		self::$_par['edit'] = $save['users_id'];
		if (!$save['users_id']) return false;
		MobileappsUsersModel::deleteAllEntriesForUser($save['users_id']);
		foreach (wgPost::getValue('checkbox') as $companyId) {
			$save['companies_id'] = $companyId;
			MobileappsUsersModel::doInsert($save);
		}
		return true;
	}

	/**
	 * Delete function for table "users"
	 *
	 * @param int Id of the item (primary key)
	 * @return bool Success
	 */
	private static function doDeleteUsers($id) {
		$id = (int) $id;
		if (!(bool) $id) return false;
		return (bool) UsersModel::doDelete($id);
	}
	
}

?>