<?php
/**
 * Example AJAX file for module New module
 * 
 * @package      WebGuru3
 * @subpackage   modules/newmodule/ajax/
 * @author       Ondra Rafaj
 * @author       WebGuruCMS3 Framework CMS admin generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @wgdeveloper  1.0.0.0
 * @since        28. October 2008
 */

chdir('../../../');
require('init/init.basic.php');
require('init/init.admin.php');

$par = wgGet::getValue('parameter');

echo $par;

$db = NULL;
?>