<?php
/**
 * 
 * 
 * @package      WebGuru3
 * @subpackage   modules/blog/actions
 * @author       Ondrej Rafaj
 * @author       WebGuruCMS3 Framework CMS admin generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @wgdeveloper  1.0.0.1
 * @since        23. June 2009
 */
final class editarticleblogpostsActionsBlog extends BaseActions {
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
			if (!(bool) wgPost::getValue('title')) { wgError::add('notitle');
				$mand = false;
			}
			if (!(bool) wgPost::getValue('blog_categories_id')) { wgError::add('nocategory');
				$mand = false;
			}
			if ($mand) {
				$ok = (bool) self::doSaveBlogPosts();
				if ($ok) wgError::add('saved', 2);
				else wgError::add('cantsave');
			}
		}
		if ((bool) wgGet::getValue('delete')) {
			if (wgGet::getValue('type') == 'file') {
				wgModules::runModule('blog');
				$ok = moduleBlog::deleteFile(wgGet::getValue('delete'));
				self::$_par['edit'] = wgGet::getValue('edit');
				if ($ok) wgError::add('filedeleted', 2);
				else wgError::add('cantdeletefile');
			}
			else {
				$ok = (bool) self::doDeleteBlogPosts(wgGet::getValue('delete'));
				if ($ok) wgError::add('deleted', 2);
				else wgError::add('cantdelete');
			}
		}
		// setup callback parameters after redirection
		parent::$_onSaveParam = array('page'=>'articles', 'myblog'=>wgPost::getValue('blog_id'), 'mycat'=>wgPost::getValue('blog_categories_id'));       // After save
		parent::$_onApplyParam = 'edit='.self::$_par['edit'];      // After apply
		parent::$_onDeleteParam = 'edit='.self::$_par['edit'];     // After delete
		return $ok;
	}
	
	// functions ---------------------------------------------------------------------------

	/**
	 * Save/Update function for table "blog_posts"
	 *
	 * @return bool Success
	 */
	private static function doSaveBlogPosts() {
		$save = array();
		//$save['blog_id'] = wgPost::getValue('blog_id');
		$save['blog_id'] = wgSessions::getModuleValue('myblog');
		//$save['users_id'] = (int) wgPost::getValue('users_id');
		$save['system_users_id'] = (int) wgUsers::getId();
		$save['blog_categories_id'] = (int) wgPost::getValue('blog_categories_id');
		$save['blog_groups_id'] = (int) wgPost::getValue('blog_groups_id');
		if (!(bool) wgPost::getValue('edit')) $save['added'] = 'NOW()';
		$save['added_gmt'] = 'NOW()';
		$save['content'] = wgPost::getValue('content');
		$save['title'] = wgPost::getValue('title');
		$save['identifier'] = valid::safeText(wgPost::getValue('title'));
		$save['category'] = wgPost::getValue('category');
		$save['excerpt'] = wgPost::getValue('excerpt');
		$save['status'] = wgPost::getValue('status');
		$save['password'] = wgPost::getValue('password');
		$save['name'] = wgPost::getValue('name');
		$save['changed'] = 'NOW()';
		$save['changed_gmt'] = 'NOW()';
		$cf = wgPost::getValue('title').' '.wgPost::getValue('excerpt').' '.wgPost::getValue('content');
		$save['content_filtered'] = wgText::doFilter($cf);
		$save['parent'] = wgPost::getValue('parent');
		$save['menu_order'] = (int) wgPost::getValue('menu_order');
		$save['post_type'] = (int) wgPost::getValue('post_type');
		$save['featured'] = (int) wgPost::getValue('featured');
		if ((bool) wgPost::getValue('edit')) {
			$save['where'] = wgPost::getValue('edit');
			$id = (int) $save['where'];
			self::$_par['edit'] = $id;
			$ok = (bool) BlogPostsModel::doUpdate($save);
		}
		else {
			$id = (int) BlogPostsModel::doInsert($save);
			self::$_par['edit'] = $id;
			$ok = (bool) $id;
		}
		//print_r($_FILES);
		if ($ok && !empty($_FILES['artimage']['name'])) {
			$art = BlogPostsModel::doSelectPKey($id);
			if (!wgIo::uploadModuleImage($_FILES['artimage'], 'article-'.$id, 'blog', $art->getAdded())) wgError::add('cantuploadimage');
		}
		if ($ok) {
			$arr = backendHelper::saveMultipleFiles('blog', 'files', $id, 'blogFiles', array(), BlogFilesModel::getLastFreeId());
			if (!empty($arr) && is_array($arr)) {
				wgModules::runModule('blog');
				foreach ($arr as $file=>$v) {
					$save = array();
					$save['name'] = $v['original'];
					$save['filename'] = $file;
					$save['added'] = 'NOW()';
					$save['blog_posts_id'] = $id;
					$save['size'] = $v['size'];
					$save['mime'] = $v['mime'];
					$iid = BlogFilesModel::doInsert($save);
				}
			}
		}
		return $ok;
	}

	/**
	 * Delete function for table "blog_posts"
	 *
	 * @param int Id of the item (primary key)
	 * @return bool Success
	 */
	private static function doDeleteBlogPosts($id) {
		$id = (int) $id;
		if (!(bool) $id) return false;
		return (bool) BlogPostsModel::doDelete($id);
	}
	
}

?>