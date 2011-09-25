<?php 

// preset.php

// Info:
//
// n/A
//


unset($USERARRAY, $PERMS, $GROUPSINGLE, $UID, $MAXPN, $UNAME);

if (!isset($_GET['m'])) { $m = "main"; } else { $m = $_GET['m']; }

// Kompatibilität der Variablen zu älteren PHP Versionen gewährleisten

if (isset($HTTP_POST_VARS)) {

	$_POST     = $HTTP_POST_VARS;
	$_GET      = $HTTP_GET_VARS;
	$_REQUEST  = array_merge($_POST, $_GET);
	$_COOKIE   = $HTTP_COOKIE_VARS;
	
	if (isset($HTTP_SESSION_VARS)) { $_SESSION  = $HTTP_SESSION_VARS; } 
}


include_once(BASEDIR . "/backend/inc/constant.php");
include_once(BASEDIR . "/backend/class/db.class.php");


$db = new DB($db_host, $db_user, $db_pass, $db_name);


include_once(BASEDIR . "/backend/inc/function.php");
include_once(BASEDIR . "/backend/class/tpl/ecp.class.php");


// Bereite IP des Clients vor

if ( isset($_SERVER['REMOTE_ADDR']) ) { $GLOBALS['IP'] = $_SERVER['REMOTE_ADDR']; } 

else { $GLOBALS['IP'] = getenv('REMOTE_ADDR'); };
	
	
// Prüfe und setze Systemvariablen

if ( isset($_GET["show"]) ) { $show = $_GET["show"]; };

if ( isset($_GET["act"]) ) { $act = $_GET["act"]; };

if ( isset($_POST["seite"]) ) { $reason = $_POST["seite"]; };

if ( isset($_POST["inhalt"]) ) { $reason = $_POST["inhalt"]; };

$titel = "";

$ADMIN = "";


// Lese CMS Variablen aus der Datenbank

$sql = $db->Query("SELECT * FROM " . $db_prefix . "settings");
$result = $sql->fetchrow();

$SITE_SITENAME = $result->sitename;
$SITE_EMAIL_INFO = $result->infoemail;
$SITE_URL = $result->url;
$SITE_FIRMA = $result->firma;
$SITE_PREFIX_FIRMA = $result->prefix_firma;
$SITE_VERSION = $result->version;
$SITE_SESSION_TIMEOUT = $result->session_timeout;
$SITE_MAINTENANCE = $result->maintenance;
$THEME = $result->theme;
$LANG = $result->lang;

if ($LANG != "") {

	$LANG =   "lang_" . strtolower($LANG) . ".php";
	
} else {

	$LANG =   "lang_de.php";
	
}
	

include_once(BASEDIR . "/backend/inc/lang/" . $LANG);

foreach ($nex_lang as $key => $val) { 

	$lang[$key] = $val;
			
}

define("prefix", $db_prefix);
define("prefix_nexmin", $db_prefix_nexmin);

$footer = "<a class=\"copyright\" href=\"http://www.nex-network.de/content/cms/\">ECPmin by evilDEV.de</a>";


if (isset($_COOKIE['ecpid']) && $_COOKIE['ecpid'] != '')
{
	$sql = $db->Query("SELECT * FROM " . prefix_nexmin . "members LEFT JOIN " . prefix . "usergroup USING (ugroup) WHERE ( id='" . escs($_COOKIE['ecpid']) . "' AND password='" . escs($_COOKIE['ecppass']) . "' ) LIMIT 1");
	$USERARRAY = $sql->fetchrow();
	
	$control = false; 
	if(is_object($USERARRAY))
	{
		$LASTIP = $USERARRAY->lastip;
		$LOGGEDIN = $USERARRAY->loggedin;
		$USERID = $USERARRAY->id;
		$BENUTZER = $USERARRAY->name;
		$ORDERDATE = $USERARRAY->orderdate;
		$NAME = $USERARRAY->name;
		$REGDATE = $USERARRAY->regdate;
		$LASTONLINE = $USERARRAY->user_lastonline;
		$LASTONLINE_TEMP = $USERARRAY->user_lastonline_temp;
		$SURNAME = $USERARRAY->surname;
		$MAXPN = $USERARRAY->groupmaxpn;
		$MAXSIG = $USERARRAY->groupmaxsig;
		$MAXPNLENTH = $USERARRAY->maxpnlength;
		$MAXCOMMLENGTH = $USERARRAY->maxcommlength;
		$UTIMEFORMAT = (isset($USERARRAY->tformat) && isset($USERARRAY->tformat_h)) ? $USERARRAY->tformat . $USERARRAY->tformat_h : ""; 
		$MAXPICDOWNLOAD = $USERARRAY->maxpicdownload;
		$MAXLENGTH_POST = $USERARRAY->maxlength_post;
		$MAXATTACHMENT = $USERARRAY->max_attachments;
		$DEDUCTION = $USERARRAY->deductions;
		$UEMAIL = $USERARRAY->email;
		$AFFILIATE_APPLIED = $USERARRAY->affiliate_applied;
		$AFFILIATE_ONLY = $USERARRAY->affiliate_only;
		$CHECK_VIEWED = $USERARRAY->check_viewed;
		$q_perms = $db->Query("SELECT permissions FROM " . prefix . "permissions WHERE group_id = '" . $USERARRAY->ugroup . "' AND section_id = '1'");
		$perms = $q_perms->fetchrow();
		$control = "";
		$control = $sql->numrows();
		
		
		$SITE_SESSION_TIMEOUT = $SITE_SESSION_TIMEOUT * 60;
		
		$LASTONLINE_LOGOUT = $LASTONLINE + $SITE_SESSION_TIMEOUT;
		
			
		if($control)
		{
			$HTTP_SESSION_VARS['loggedin'] = 'yes';
			$HTTP_SESSION_VARS['uname'] = $BENUTZER;
		}
			
			
		$USERRIGHTS = explode("|", $perms->permissions);
		$area = 1;
		foreach ($USERRIGHTS AS $VAL) $HTTP_SESSION_VARS[$VAL] = 1;
		$sql = $db->Query("UPDATE " . prefix_nexmin . "members SET user_lastonline = '" . time() . "' WHERE id ='" . $USERID . "'");
	}
}

if (!empty($USERARRAY) && is_object($USERARRAY) && $USERARRAY->id) {
	$islogged = 1;
	$UID = $USERARRAY->id;
	$CUSTID = leading_zero($USERID, 6, 0);
	$UNAME = $USERARRAY->nickname;
	$UMAIL = $USERARRAY->email;
	$UGROUP = $USERARRAY->groupname_single;
	$UGROUPID = $USERARRAY->ugroup;
	define("UEMAIL", $UEMAIL);
	define("UNAME", $UNAME);
	define("UID", $UID);
	define("UGROUP", $USERARRAY->ugroup);
	define("ISLOGGED", 1);
	
	if ($USERARRAY->ugroup == 1) {
		$ADMIN = 1;
	}
	}
?>
