<?php
/**
 * Main class for module Databaze dluzniku
 * 
 * @package      WebGuru3
 * @subpackage   modules/databazedluzniku/
 * @author       Ondrej Rafaj
 * @author       WebGuruCMS3 Framework CMS admin generator (http://www.webgurucms.com)
 * @version      1.0.0.0
 * @wgversion    3.0.0.0
 * @wgdeveloper  1.0.0.1
 * @since        9. May 2009
 */

class moduleDatabazedluzniku {
	
	public $name            = NULL;
	public $version         = NULL;
	public $author          = NULL;
	
	private static $_path   = NULL;
	private static $_module = NULL;
	
	
	public function __construct() {
		$this->_init();
	}
	
	
	private function _init() {
		$this->name    = 'Databaze dluzniku';
		$this->code    = 'databazedluzniku';
		$this->version = '0.0.0.0';
		$this->author  = 'Ondrej Rafaj';
		
		$this->_module = dbSystem::getModulesByName($this->code);
		$this->_path   = wgPaths::getAdminPath().$this->_module['part'].'/';
		
		
	}
	
	// ------------------------- class functions -------------------------
	
	public function myFirstFunction() { wgError::add('Hello world :-)');
	}
}
		
?>