<?php

// admin.php

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


ob_start();

$BASEDIR = substr(dirname(__FILE__),0,-5);
$SMARTYDIR = $BASEDIR . "/backend/class/tpl/";


define("BASEDIR", $BASEDIR);
define("SMARTY", $SMARTYDIR);
define("ADMINTHEME", "eCP");

require_once SMARTY . "Smarty.class.php";
require_once(BASEDIR."/backend/inc/preset.php");

$now = time();
		
		
if ($now > $LASTONLINE_LOGOUT && $LOGGEDIN == 1 && $LASTONLINE != "0") {
		
	header("Location: ../index.php?m=logout&reason=timeout");
	exit(); }
	
if ( $GLOBALS['IP'] != $LASTIP && $LOGGEDIN == 1 ) {
	
	$sql = $db->Query("UPDATE " . prefix_nexmin . "members SET loggedin = '0' WHERE id ='" . $USERID . "'");
	header("Location: ../index.php?m=logout&reason=ipconflict");
	exit(); }
		
if(!permission("adminpanel")) { header("Location: ../index.php"); } else {

if (!isset($_GET['m'])) { $m = "voiceserver_master"; } else { $m = $_GET['m']; }


$buffer = str_replace(array(":", "/", "..", ".", ";", "\\", "http", "https", "ftp", "/\/"), "", $m);


$tmpl = new eCP("templates/".ADMINTHEME."/");
$tmpl->assign("theme", ADMINTHEME);
$tmpl->clear_all_cache();


if (!include("$buffer.php")) 
{
   //  $EOUT = msg("error_once", "modulenotfound", str_replace("__URL__", "index.php", $lang['redirect']), "index.php");
   //  $NOOUT = 1;
} 

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

    
    $tmpl->assign("name", $BENUTZER);
    $tmpl->assign("userid", $USERID);
    $tmpl->assign("theme", $THEME);
    $tmpl->assign("lang", $lang);

    $tmpl->assign("admin", $ADMIN);


// Server auslesen 
	
	
	if (isset($_GET['mid']) && isset($_GET['udpport']) OR isset($_GET['sid'])) {
	
	$sid = $_GET['sid'];
	$mid = $_GET['mid'];
	$udpport = $_GET['udpport'];
	
	$sql_vo = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver WHERE masterid = '$mid' AND udpport = '$udpport' OR id = '$sid'");
	$num = $sql_vo->numrows();

	$vo_array = array();
    
	while ($row = $sql_vo->fetchrow()) {
        array_push($vo_array,array(
			    'id' => $row->id,
			    'masterid' => $row->masterid,
			    'serverip' => $row->serverip,
			    'udpport' => $row->udpport,
			    'tcpport' => $row->tcpport,
			    'httpport' => $row->httpport,
			    'typ' => $row->typ,
			    'slots' => $row->slots,
			    'auser' => $row->auser,
			    'apasswd' => $row->apasswd ) 
		); 
	}
    
	$tmpl->assign("vo_array", $vo_array);
	$tmpl->assign("mid", $mid);
	$tmpl->assign("udpport", $udpport); 
	
	}
	
	
	
// Ausgabe vorbereiten

$tmpl->assign("SITE_SITENAME", $SITE_SITENAME);
$tmpl->assign("footer", $footer);
$tmpl->assign("SITE_URL", $SITE_URL);
$tmpl->assign("SITE_FIRMA", $SITE_FIRMA);
$tmpl->assign("SITE_VERSION", $SITE_VERSION);


$prepage = $tmpl->fetch("main_template.tpl");



echo $prepage;

}
?>