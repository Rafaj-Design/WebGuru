<?php
/**
 * Generate Web file for module Pages
 * 
 * @package      WebGuru3
 * @subpackage   modules/configuration/ajax/
 * @author       Ondrej Rafaj
 * @author       WebGuruCMS3 Framework CMS admin generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @wgdeveloper  1.0.0.0
 * @since        12. December 2009
 */

chdir('../../../');
require('./init/init.basic.php');
require('./init/init.admin.php');
$a=0;
$b=0;
//print_r(wgIo::getFiles('./pear/HTML/Template/'));
$par = wgGet::getValue('parameter');
/*for ($i=0; $i<10*99*99*99*10; $i++) {
	$a++;
	if ($a == 10*99*99*99) {
		$b++;
		wgIo::createTempFile('generate.txt', wgLang::get('genpage').': '.$b.' / 666');
		$a = 0;
	}	
}*/
$gpath = wgPaths::getModulePath('pages');
print $gpath;
require('./system/pages/actions/class.generate.php');
$mPag = $mod->runModule('pages');
//$gPag = new generate();
print generate::generateWeb(wgSystem::getCurrentWebsite());

//print '<br />'.round(memory_get_usage() / 1048576, 4);

//echo ':-)';
//echo $par;
wgIo::createTempFile('generate', wgLang::get('genpage').': 0 / 0');
$db = NULL;
?>