<?php

define ("BASE_DIR", substr(dirname(__FILE__), 0, -9));

if(!defined("SMARTY_DIR")) define ("SMARTY_DIR", BASE_DIR . "class/tpl/");

if(!defined("SMARTY")) {

include_once SMARTY_DIR . "Smarty.class.php"; }


class eCP extends Smarty {

	function eCP($template_dir) {
	
	global $set, $area, $THEME;
		
		
		$this->template_dir = $template_dir;
		$this->compile_dir = BASE_DIR . "temp/$area";
		$this->cache_dir = BASE_DIR . "temp/$area";

		//$this->force_compile = 0;
		//$this->caching = 0;
		//$this->cache_lifetime = 20; // define cache life time for 20sec
		//$this->caching = 2; // cache will expire after user defined time
		
		$f_id = (isset($_REQUEST['fid']) && $_REQUEST['fid'] != "") ? (int)$_REQUEST['fid'] : "";
		$is_logged = (defined("ISLOGGED")) ? ISLOGGED : "";
		
		$this->register_modifier("sslash", "stripslashes");
		
		if($is_logged==1) $this->assign('logged_in', 1);
		
	}
}
?>