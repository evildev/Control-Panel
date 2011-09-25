<?php 

// main.php

// Info:
//
// n/A
//

	
	$tmpl->assign("theme", $THEME);
	$tmpl->assign("lang", $lang);
    $tmpl->assign("pages", $nav);
	
	$tmpl->assign("content", parsetrue("container/".container("static"), "Main" , $tmpl->fetch("main/main.tpl")));

?>