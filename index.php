<?php

// index.php

// Info:
//
/*

	evilInterface Copyright (C) 2011 evilDEV.de

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
	
*/
//


define("BASEDIR", dirname(__FILE__));


include(BASEDIR . "/backend/inc/constant.php");

ob_start();
session_start();
session_name('eCP');

include(BASEDIR . "/backend/inc/preset.php");

$now = time();
		
if ( $SITE_MAINTENANCE == "1" && $ADMIN != 1) { $m = "maintenance"; }

if ($now > $LASTONLINE_LOGOUT && $LOGGEDIN == 1 && $LASTONLINE != "0" && $_COOKIE['ecpid'] != '') {
		
	header("Location: ../index.php?m=logout&reason=timeout");
	exit(); }
	
if ( $GLOBALS['IP'] != $LASTIP && $LOGGEDIN == 1 ) {
	
	$sql = $db->Query("UPDATE " . prefix_nexmin . "members SET loggedin = '0' WHERE id ='" . $USERID . "'");
	header("Location: ../index.php?m=logout&reason=ipconflict");
	exit(); }
	

$buffer = str_replace(array(":", "/", "..", ".", ";", "\\", "http", "https", "ftp", "/\/"), "", $m);


$tmpl = new eCP("templates/$THEME/");
$tmpl->assign('theme', $THEME);
$tmpl->assign('lang', $lang);
$tmpl->assign('set', $set);

if (!include("frontend/module/$buffer.php")) 
{
    $EOUT = msg("error_once", "modulenotfound", str_replace("__URL__", "index.php", $lang['redirect']), "index.php");
    $NOOUT = 1;
} 


// Templates zuweisen

switch ($m) {
    case "misc" : $template = fetchmaintemplate("13"); break;
	case "static" : $template = fetchmaintemplate("24"); break;
    case "faq" : $template = fetchmaintemplate("26"); break;
    case "suche" : $template = fetchmaintemplate("26"); break;
    case "news" : $template = fetchmaintemplate("34"); break;
    case "index" : $template = fetchmaintemplate("12"); break;
    case "forum" : $template = fetchmaintemplate("10"); break;
    case "maintenance" : $template = fetchmaintemplate("56"); break;
    break;
    default : $template = fetchmaintemplate("12");
} 

if (!$template) $template = fetchmaintemplate("12");


if ( $islogged == 1 && $ADMIN == 1  ) {
    $tmpl->assign("login", 1);
    $tmpl->assign("wi", "admin");
    $tmpl->assign("admin", $ADMIN);
    $tmpl->assign("name", $BENUTZER); }
	
elseif ( $islogged == 1 ) {

    $tmpl->assign("login", 1);
    $tmpl->assign("wi", "customer");
    $tmpl->assign("name", $BENUTZER);	
	
} else {

    $tmpl->assign("login", 0);
    $tmpl->assign("gast", $GROUPSINGLE); } 


$temp = time() - 43200;

if ( $REGDATE > $temp && $LOGGEDIN == 1) { $tmpl->assign("logininfo", 1); }


// Templates vorbereiten


if ((!empty($NOOUT) && isset($NOOUT) && $NOOUT == 1) || (isset($MISC) && $MISC == 1) || (defined("NOOUT") && (NOOUT==1)) )
{
    if(!isset($EOUT))
	{
		$tmpl->assign("content", EOUT);
	}
	else
	{
		$tmpl->assign("content", $EOUT);
	}
} 

// Ausgabe vorbereiten

$tmpl->assign("SITE_SITENAME", $SITE_SITENAME);
$tmpl->assign("SITE_MAINTENANCE", $SITE_MAINTENANCE);
$tmpl->assign("SITE_URL", $SITE_URL);
$tmpl->assign("SITE_FIRMA", $SITE_FIRMA);
$tmpl->assign("SITE_VERSION", $SITE_VERSION);
$tmpl->assign("footer", $footer);
$tmpl->assign("url", $url);

$prepage = $tmpl->fetch($template);

echo $prepage;

?>