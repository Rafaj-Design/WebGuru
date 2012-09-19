<?php
/**
 * 
 * 
 * @package      WebGuru3
 * @subpackage   modules/databazedluzniku/actions
 * @author       Ondrej Rafaj
 * @author       WebGuruCMS3 Framework CMS admin generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @wgdeveloper  1.0.0.1
 * @since        10. May 2009
 */
final class settingsptypesActionsDatabazedluzniku extends BaseActions {
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
			if (!(bool) wgPost::getValue('name')) { wgError::add('noname');
				$mand = false;
			}
		
			if ($mand) {
				$ok = (bool) self::doSaveDdaPaymentTypes();
				if ($ok) wgError::add('saved', 2);
				else wgError::add('cantsave');
			}
		}
		if ((bool) wgGet::getValue('delete')) {
			$ok = (bool) self::doDeleteDdaPaymentTypes(wgGet::getValue('delete'));
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
	 * Save/Update function for table "dda_payment_types"
	 *
	 * @return bool Success
	 */
	private static function doSaveDdaPaymentTypes() {
		$save = array();
		$save['name'] = wgPost::getValue('name');
		$save['cost'] = wgPost::getValue('cost');
		$save['sort'] = wgPost::getValue('sort');
		$save['default'] = wgPost::getValue('default');
		
		if ((bool) wgPost::getValue('edit')) {
			$save['where'] = wgPost::getValue('edit');
			$id = (int) $save['where'];
			self::$_par['edit'] = $id;
			return (bool) DdaPaymentTypesModel::doUpdate($save);
		}
		else {
			$id = (int) DdaPaymentTypesModel::doInsert($save);
			self::$_par['edit'] = $id;
			return (bool) $id;
		}
	}

	/**
	 * Delete function for table "dda_payment_types"
	 *
	 * @param int Id of the item (primary key)
	 * @return bool Success
	 */
	private static function doDeleteDdaPaymentTypes($id) {
		$id = (int) $id;
		if (!(bool) $id) return false;
		return (bool) DdaPaymentTypesModel::doDelete($id);
	}
	
}

?>