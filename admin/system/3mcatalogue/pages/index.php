<?php
/**
 * Page Index in the 3M Catalogue module
 * 
 * @package      WebGuru3
 * @subpackage   modules/3mcatalogue/pages/
 * @author       Ondrej Rafaj (FiftyFootSquid)
 * @author       WebGuruCMS3 Framework CMS admin generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @wgdeveloper  1.0.0.1
 * @since        24. September 2009
 */

$system['parse']['head'] = '';
$system['parse']['editor'] = false;
$tab = new myTabs('myTabs');
// ----------- encoding (Block: index) start -----------
$tpl = new wgParse($temp, $path);
$tpl->setCurrentBlock($block);

if (file_exists(wgPaths::getModulePath().'/menu.xml')) $arr = xml::xmlFileToArray(wgPaths::getModulePath().'/menu.xml');
else {
	$arr = wgIo::getFiles(wgPaths::getModulePath().'/pages/');
	sort($arr);
}
$su = (bool) wgUsers::isSu();
if (!empty($arr) && is_array($arr)) foreach ($arr as $k=>$page) {
	if (is_array($page)) {
		if ((bool) $page['su'] && !$su) {
			$enabled = false;
		}
		else $enabled = true;
		if ((bool) $page['show'] && $k != 'index' && (bool)  $enabled) {
			if (isset($page['ajax']) && (bool) $page['ajax']) $ajax = ' ajax';
			else $ajax = NULL;
			$link = wgPaths::makeModuleLink(wgSystem::getModule(), $k);
			$pagename = wgLang::get($page['name']);
			$page = $k;
			$tpl->setCurrentBlock('functions');
			$var['LINK'] = $link;
			$var['PAGENAME'] = $pagename;
			$var['FUNCIMAGE'] = wgIcons::getPageIcon($page, $pagename);
			$var['DESCRIPTION'] = wgLang::get('desc'.$page);
			$tpl->setVariable($var);
			$tpl->parseBlock('functions');
		}
	}
	else if ($page != 'index.php') {
		$name = explode('.', $page);
		$link = wgPaths::makeModuleLink(wgSystem::getModule(), $name[0]);
		$pagename = wgLang::get($name[0]);
		$page = $name[0];
		$tpl->setCurrentBlock('functions');
		$var['LINK'] = $link;
		$var['PAGENAME'] = $pagename;
		$var['FUNCIMAGE'] = wgIcons::getPageIcon($page, $pagename);
		$var['DESCRIPTION'] = wgLang::get('desc'.$page);
		$tpl->setVariable($var);
		$tpl->parseBlock('functions');
	}
}
$var = array();
$tpl->parseBlock($block);
// ----------- countries end -----------
$system['parse']['content'] = $tpl->getBlock($block);
?>