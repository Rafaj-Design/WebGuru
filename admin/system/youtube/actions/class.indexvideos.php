<?php
/**
 * 
 * 
 * @package      WebGuru3
 * @subpackage   modules/youtube/actions
 * @author       Ondrej Rafaj
 * @author       WebGuruCMS3 Framework CMS admin generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @wgdeveloper  1.0.0.0
 * @since        3. March 2009
 */
final class indexvideosActionsYoutube extends BaseActions {
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
		self::$_par['edit'] = 0;
		if (wgSystem::isSave() || wgSystem::isApply()) {
			$mand = true;
			if (!(bool) wgPost::getValue('name')) { wgError::add('noname');
				$mand = false;
			}
		
			if ($mand) {
				$ok = (bool) self::doSaveYoutubeVideos();
				if ($ok) wgError::add('saved', 2);
				else wgError::add('cantsave');
			}
		}
		if ((bool) wgGet::getValue('delete')) {
			$ok = (bool) self::doDeleteYoutubeVideos(wgGet::getValue('delete'));
			if ($ok) wgError::add('deleted', 2);
			else wgError::add('cantdelete');
		}
		// setup callback parameters after redirection
		parent::$_onSaveParam = 'cat='.wgPost::getValue('youtube_categories_id');       // After save
		parent::$_onApplyParam = 'edit='.self::$_par['edit'].'&cat='.wgPost::getValue('youtube_categories_id');      // After apply
		parent::$_onDeleteParam = NULL;     // After delete
		
		return $ok;
	}
	
	// functions ---------------------------------------------------------------------------
	
	/**
	 * Save/Update function for table "youtube_videos"
	 *
	 * @return bool Success
	 */
	private static function doSaveYoutubeVideos() {
		global $mod;
		$mod->runModule('youtube');
		$save = array();
		$save['name'] = wgPost::getValue('name');
		if (!(bool) wgPost::getValue('edit')) $save['added'] = 'NOW()';
		$save['changed'] = 'NOW()';
		$save['description'] = wgPost::getValue('description');
		$save['code'] = moduleYoutube::parseCode(wgPost::getValue('code'));
		$save['youtube_categories_id'] = (int) wgPost::getValue('youtube_categories_id');
		
		if ((bool) wgPost::getValue('edit')) {
			$save['where'] = wgPost::getValue('edit');
			$id = (int) $save['where'];
			self::$_par['edit'] = $id;
			return (bool) YoutubeVideosModel::doUpdate($save);
		}
		else {
			$id = (int) YoutubeVideosModel::doInsert($save);
			self::$_par['edit'] = $id;
			return (bool) $id;
		}
	}

	/**
	 * Delete function for table "youtube_videos"
	 *
	 * @param int Id of the item (primary key)
	 * @return bool Success
	 */
	private static function doDeleteYoutubeVideos($id) {
		$id = (int) $id;
		if (!(bool) $id) return false;
		return (bool) YoutubeVideosModel::doDelete($id);
	}
	
}

?>