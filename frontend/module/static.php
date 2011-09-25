<?php

// static.php

// Info:
//
// Diese Datei ist unbedingt notwenig für die
// Funktionalität von statischen Seiten. Es
// wird dringend davon abgeraten diese Datei
// zu editieren.
//

if (!isset($_REQUEST['page'])) { $page = "suche"; } else { $page = $_REQUEST['page']; }

if(!defined("BASEDIR")) exit;
ob_start();


$sql = $db->Query("SELECT * FROM " . prefix . "statischeseiten WHERE name='$page'");
$row = $sql->fetchrow();


if( (!$row) || (!file_exists("frontend/static/$page/$page.tpl"))) { 
	$EOUT = msg("error_once", "docnotfound" , str_replace("__URL__", "index.php", $lang['redirect']), "index.php");
	$NOOUT = 1;
}

$ptitle = $row->name;
$tmpl->assign("location", $ptitle);

$t = $tmpl->fetch("../../frontend/static/$page/$page.tpl");
$t = str_replace('__TITLE__', stripslashes($ptitle), $t);

$tmpl->assign("content", parsetrue("container/". (@!container("static") ? @container("news") : @container("static")) , $row->name, $t));
?>