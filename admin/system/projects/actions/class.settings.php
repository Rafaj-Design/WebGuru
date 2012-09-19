<?php
/**
 * Page Settings in the Projects module
 * 
 * @package      WebGuru3
 * @subpackage   modules/projects/pages/
 * @author       Ondrej Rafaj
 * @author       WebGuruCMS3 Framework CMS admin generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @wgdeveloper  1.0.0.1
 * @since        13. June 2009
 */

final class settingsActionsProjects extends BaseActions {
	/**
	 * All variables neccessary for module
	 *
	 * @var array
	 */
	private static $_par = array();
	
	/**
	 * Object constructor, assigning variables to the class from post
	 *
	 */
	public function __construct() {
		$ok = false;
		if ((bool) wgPost::isValue('submitconfig')) {
			$path = wgPaths::getAdminPath().'config/';
			if (!is_writable($path)) wgError::add('confignotwritable');
			else $ok = wgConfig::saveConfiguration('projects', wgPost::getValue('conf'));
		}
		if ((bool) wgPost::isValue('submitdefpic')) {
			global $mod;
			$mod->runModule('projects');
			if ((bool) $_FILES['defpic']['name']) $ok = true;
			$conf = moduleProjects::getConfiguration();
			$path = wgPaths::getUserfilesPath().'projects-items-def-%s.jpg';
			$img = new wgImages($_FILES['defpic'], 'upload');
			$img->setQuality($conf['images']['quality']);
			$img->resize($conf['images']['xsmall'][0], $conf['images']['xsmall'][1]);
			$img->save(sprintf($path, 'xsmall'));
			$img->resize($conf['images']['small'][0], $conf['images']['small'][1]);
			$img->save(sprintf($path, 'small'));
			$img->resize($conf['images']['medium'][0], $conf['images']['medium'][1]);
			$img->save(sprintf($path, 'medium'));
			$img->resize($conf['images']['large'][0], $conf['images']['large'][1]);
			$img->save(sprintf($path, 'large'));
			$img->clear();
		}
		if ((bool) wgPost::isValue('regenerate')) {
			//print ':)';
			set_time_limit(0);
			global $mod;
			$mod->runModule('projects');
			//if ((bool) $_FILES['defpic']['name']) $ok = true;
			$conf = moduleProjects::getConfiguration();
			$c = &$conf['images'];
			
			$arr = ProjectsImagesModel::doSelect();
			$x = 0;
			if (!empty($arr)) foreach ($arr as $v) {
				$path = wgPaths::getUserfilesPath().'projects.'.$v->getProjectsItemsId().'.'.$v->getSmallid().'.images-%s.jpg';
				if (file_exists(wgPaths::getUserfilesPath().$v->getFilename()) && $v->getItemtype() == 0) {
					$img = new wgImages(wgPaths::getUserfilesPath().$v->getFilename());
					$img->setQuality(80);
					$img->resize($c['xsmall'][0], $c['xsmall'][1]);
					$img->save(sprintf($path, 'xsmall'));
					$img->resize($c['small'][0], $c['small'][1]);
					$img->save(sprintf($path, 'small'));
					$img->resize($c['medium'][0], $c['medium'][1]);
					$img->save(sprintf($path, 'medium'));
					$img->resize($c['large'][0], $c['large'][1]);
					$img->save(sprintf($path, 'large'));
					$img->clear();
					print $x.' + :) - '.(memory_get_usage() / 1024).'<br />';
					//if ($x == 50) exit();
					$x++;
				}
			}
			$arr = ProjectsItemsModel::doSelect();
			if (!empty($arr)) foreach ($arr as $v) {
				$filename = 'projects.'.(int) $v->getId().'.main.images-%s.jpg';
				$path = wgPaths::getUserfilesPath().$filename;
				if (file_exists(sprintf($path, 'original'))) {
					$img = new wgImages(sprintf($path, 'original'));
					$img->setQuality(80);
					$img->resize($c['large'][0], $c['large'][1]);
					$img->save(sprintf($path, 'large'));
					$img->resize($c['medium'][0], $c['medium'][1]);
					$img->save(sprintf($path, 'medium'));
					$img->resize($c['small'][0], $c['small'][1]);
					$img->save(sprintf($path, 'small'));
					$img->resize($c['xsmall'][0], $c['xsmall'][1]);
					$img->save(sprintf($path, 'xsmall'));
					$img->clear();
					print '- :) <br />';
				}
			}
			parent::$_ok = true; wgError::add('done', 2);
			return;
		}
		if ($ok) wgError::add('saved', 2);
		else wgError::add('cantsave');
		parent::$_ok = $ok;
	}

}	
?>