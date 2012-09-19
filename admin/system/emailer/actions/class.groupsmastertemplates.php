<?php
/**
 * 
 * 
 * @package      WebGuru3
 * @subpackage   modules/emailer/actions
 * @author       Ondrej Rafaj
 * @author       WebGuruCMS3 Framework CMS admin generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @wgdeveloper  1.0.0.0
 * @since        27. January 2009
 */
final class groupsmastertemplatesActionsEmailer extends BaseActions {
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
		
			if ($mand) {
				$ok = (bool) self::doSaveEmailsTemplates();
				if ($ok) wgError::add('saved', 2);
				else wgError::add('cantsave');
			}
		}
		if ((bool) wgGet::getValue('delete')) {
			$ok = (bool) self::doDeleteEmailsTemplates(wgGet::getValue('delete'));
			if ($ok) wgError::add('deleted', 2);
			else wgError::add('cantdelete');
		}
		return $ok;
	}
	
	// functions ---------------------------------------------------------------------------
	
	/**
	 * Save/Update function for table "emails_templates"
	 *
	 * @return bool Success
	 */
	private static function doSaveEmailsTemplates() {
		$save = array();
		$save['name'] = wgPost::getValue('name');
		$save['system_encoding_id'] = wgPost::getValue('system_encoding_id');
		$save['system_language_id'] = wgPost::getValue('system_language_id');
		$save['system_websites_id'] = wgPost::getValue('system_websites_id');
		$save['emails_groups_id'] = wgPost::getValue('emails_groups_id');
		$save['html'] = wgPost::getValue('html');
		$save['text'] = wgPost::getValue('text');
		
		if ((bool) wgPost::getValue('edit')) {
			$save['where'] = wgPost::getValue('edit');
			return (bool) EmailsTemplatesModel::doUpdate($save);
		}
		else return (bool) EmailsTemplatesModel::doInsert($save);
	}

	/**
	 * Delete function for table "emails_templates"
	 *
	 * @param int Id of the item (primary key)
	 * @return bool Success
	 */
	private static function doDeleteEmailsTemplates($id) {
		$id = (int) $id;
		if (!(bool) $id) return false;
		//$conn = new wgConnector();
		//$conn->where(EmailsTemplatesModel::PRIMARY_KEY, $id);
		//return (bool) EmailsTemplatesModel::doDelete($conn);
		return (bool) EmailsTemplatesModel::doDelete($id);
	}
	
}

?>