<?php 

// maintenance.php

// Info:
//
// n/A
//



	
	$tmpl->assign("theme", $THEME);
	
	
	$tmpl->assign("content", parsetrue("container/".container("maintenance"), "Wartungsarbeiten" , $tmpl->fetch("maintenance/maintenance.tpl")));

?>