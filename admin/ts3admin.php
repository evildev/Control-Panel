<?php 

// ts3admin.php

// Info:
//
// n/A
//


// Prüfe ob Aktion folgen soll

	
	require("../backend/class/ts3.class.php");
	
	$ts3 = new ts3;


	$sid = $_GET['sid']; 
	$do = $_REQUEST["do"]; 
	$act = $_REQUEST["act"]; 
	

 
$sql = $db->Query("SELECT * FROM " . prefix_cpmin . "voiceserver WHERE id = '$sid'");
$result = $sql->fetchrow();

$masterid = $result->masterid;
$udpport = $result->udpport;
$memberid = $result->memberid;

if ($memberid != $UID && $ADMIN != 1) { exit(); };

$sql = $db->Query("SELECT * FROM " . prefix_cpmin . "voiceserver_master WHERE id = '$masterid'");
$result = $sql->fetchrow();
	
$serverip = $result->serverip;
$tcpport = $result->tcpport;
$sadmin = $result->sadmin;
$spasswd = $result->spasswd;
	

$ts3->connect($serverip, $tcpport);
$ts3->login($sadmin, $spasswd);

$serverquery = $ts3->serverquery("serveridgetbyport virtualserver_port=" . $udpport);
$server_id = $serverquery["server_id"];

$ts3->fastcall("use sid=" . $server_id);


if (isset($act)) {

	
	if ($act == "overview" ) {

		$serverinfo = $ts3->serverinfo();
		
		
		foreach($serverinfo as $name => $value) {
			
    		$tmpl->assign($name, $value);
			
		}
		
		
		$virtualserver_clientsonline = $serverinfo["virtualserver_clientsonline"] - $serverinfo["virtualserver_queryclientsonline"];
    	$tmpl->assign("virtualserver_clientsonline", $virtualserver_clientsonline);
		
		if ($serverinfo["virtualserver_flag_password"] == 1) {
		
			$virtualserver_flag_password = "Ja";
			
		} else {
		
			$virtualserver_flag_password = "Nein";
		
		}
		
    	$tmpl->assign("virtualserver_flag_password", $virtualserver_flag_password);
		
		
		$virtualserver_uptime = format_time_ts3($serverinfo["virtualserver_uptime"]);
    	$tmpl->assign("virtualserver_uptime", $virtualserver_uptime);
		
		
		$virtualserver_max_download_total_bandwidth = format_datasize($serverinfo["virtualserver_max_download_total_bandwidth"]);
    	$tmpl->assign("virtualserver_max_download_total_bandwidth", $virtualserver_max_download_total_bandwidth);
		
		
		$virtualserver_max_upload_total_bandwidth = format_datasize($serverinfo["virtualserver_max_upload_total_bandwidth"]);
    	$tmpl->assign("virtualserver_max_upload_total_bandwidth", $virtualserver_max_upload_total_bandwidth);
		
		
		$virtualserver_download_quota = format_datasize($serverinfo["virtualserver_download_quota"]);
    	$tmpl->assign("virtualserver_download_quota", $virtualserver_download_quota);
		
		
		$virtualserver_upload_quota = format_datasize($serverinfo["virtualserver_upload_quota"]);
    	$tmpl->assign("virtualserver_upload_quota", $virtualserver_upload_quota);
		
		
		$connection_bytes_sent_total = format_datasize($serverinfo["connection_bytes_sent_total"]);
    	$tmpl->assign("connection_bytes_sent_total", $connection_bytes_sent_total);
		
		
		$connection_bytes_received_total = format_datasize($serverinfo["connection_bytes_received_total"]);
    	$tmpl->assign("connection_bytes_received_total", $connection_bytes_received_total);
		
		
		$virtualserver_month_bytes_downloaded = format_datasize($serverinfo["virtualserver_month_bytes_downloaded"]);
    	$tmpl->assign("virtualserver_month_bytes_downloaded", $virtualserver_month_bytes_downloaded);
		
		
		$virtualserver_month_bytes_uploaded = format_datasize($serverinfo["virtualserver_month_bytes_uploaded"]);
    	$tmpl->assign("virtualserver_month_bytes_uploaded", $virtualserver_month_bytes_uploaded);
		
		
		$virtualserver_total_bytes_downloaded = format_datasize($serverinfo["virtualserver_total_bytes_downloaded"]);
    	$tmpl->assign("virtualserver_total_bytes_downloaded", $virtualserver_total_bytes_downloaded);
		
		
		$virtualserver_total_bytes_uploaded = format_datasize($serverinfo["virtualserver_total_bytes_uploaded"]);
    	$tmpl->assign("virtualserver_total_bytes_uploaded", $virtualserver_total_bytes_uploaded);
		
	}
	
	
	if ($act == "ts-viewer" ) {

		$serverinfo = $ts3->serverinfo();
		
		
		foreach($serverinfo as $name => $value) {
			
    		$tmpl->assign($name, $value);
			
		}
	}
		
	if ($act == "user" ) {
		
		// Aktivitäten abfragen
		
		if ($do == "pre-edit") {
		
			$uid = $_GET['uid'];
		
		
			$servergrouplist = $ts3->servergrouplist();
			$servergrouplist = array_slice($servergrouplist, 5);
			
			$res = $ts3->serverquery("servergroupsbyclientid cldbid=" . $uid);
			$sgid = $res["sgid"];
			
			$tmpl->assign('uid', $uid);
			$tmpl->assign('sgid', $sgid);
			
		}
		
		if ($do == "edit") {
		
			$uid = $_GET['uid'];
			$sgid = $_POST['servergroup'];
		
			$res = $ts3->serverquery("servergroupsbyclientid cldbid=" . $uid);
			$clsgid = $res["sgid"];
			
			
			$ts3->fastcall("servergroupdelclient sgid=" . $clsgid . " cldbid=" . $uid);
			
			$ts3->fastcall("servergroupaddclient sgid=" . $sgid . " cldbid=" . $uid);
			
		}
		
		if ($do == "delete") {
		
			$uid = $_GET['uid'];
		
			$ts3->fastcall("clientdbdelete cldbid=" . $uid);
			
		}
		
		// Benötigte Daten abrufen
		
		if (isset($_GET["page"]) ? $page = $_REQUEST["page"] : $page = 1);

		if ($_GET["find"] == 1) {
		
			$methode = $_GET["methode"];
			$value = $_POST["value"];
			
			$clientdblist = $ts3->clientdblist_find(0,1000,$methode,$value);
		
			$clientdblist_count = count ( $clientdblist ); 
		
			$num = $clientdblist_count;
		
			$duration = 25;
			$seiten = ceil($num / $duration);
			$start = prepage() * $duration - $duration;
		
			$clientdblist = $ts3->clientdblist_find($start,$duration,$methode,$value);
		
			$tmpl->assign('pages', pagenav($seiten, prepage(), "<a href=\"admin.php?m=ts3admin&act=user&sid={$sid}&amp;pp=$duration&amp;page={s}\">{t}</a> "));
		
			$tmpl->assign("pp", $pp);
			$tmpl->assign("page", $page);
			$tmpl->assign("pagecount", $seiten);
			
			
		} else {
		
			$clientdblist = $ts3->clientdblist_simple(0,1000);
		
			$clientdblist_count = count ( $clientdblist ); 
		
			$num = $clientdblist_count;
		
			$duration = 25;
			$seiten = ceil($num / $duration);
			$start = prepage() * $duration - $duration;
		
			$clientdblist = $ts3->clientdblist($start,$duration);
		
			$tmpl->assign('pages', pagenav($seiten, prepage(), "<a href=\"admin.php?m=ts3admin&act=user&sid={$sid}&amp;pp=$duration&amp;page={s}\">{t}</a> "));
		
			$tmpl->assign("pp", $pp);
			$tmpl->assign("page", $page);
			$tmpl->assign("pagecount", $seiten);
			
		}
	}
	
	
	if ($act == "settings" ) {
		
		// Aktivitäten abfragen
		
		if ($do == "edit") {
		
			$settings = $_POST['settings'];
			$set_password = $_POST['set_password'];
			$virtualserver_password = $_POST['virtualserver_password'];	
			
				
			foreach($settings as $setting => $value) {
				
				$value = str_replace(" ", "\s", $value);
				$value = str_replace("|", "\p", $value);
				$value = str_replace("/", "\/", $value);
				
				$ts3->fastcall("serveredit " . $setting . "=" . $value);
				
			}
			
			
			if ($set_password == "1") {
					
				$ts3->fastcall("serveredit virtualserver_password=$virtualserver_password");
			}
			
		}
		
		if ($do == "upload") {
		
			$serverinfo = $ts3->serverinfo();
			$virtualserver_unique_identifier = $serverinfo["virtualserver_unique_identifier"];
				
			$uploads_dir = '../uploads/customer/' . $virtualserver_unique_identifier . '/';
			
			$temp = $_FILES['gfx']['tmp_name']; 
			$gfx = $_FILES['gfx']['name'];
			
			$type = $_FILES['gfx']['type']; 
			$size = $_FILES['gfx']['size']; 
	
			if ( !is_dir ( $uploads_dir ) ) { mkdir ( $uploads_dir, 0755 );  } 
	
		
			if (move_uploaded_file($temp, $uploads_dir . $gfx)) {
							
				
				$virtualserver_hostbanner_gfx_url = "http://www.". $SITE_URL . "/uploads/customer/$virtualserver_unique_identifier/$gfx";
				
				$ts3->fastcall("serveredit virtualserver_hostbanner_gfx_url=$virtualserver_hostbanner_gfx_url");
			}
			
		}
	
		$serverinfo = $ts3->serverinfo();
	
		foreach($serverinfo as $name => $value) {
			
    		$tmpl->assign($name, $value);
			
		}
		
		$virtualserver_name = $serverinfo["virtualserver_name"];
    	$tmpl->assign("virtualserver_name", $virtualserver_name);
	
		$virtualserver_welcomemessage = $serverinfo["virtualserver_welcomemessage"];
    	$tmpl->assign("virtualserver_welcomemessage", $virtualserver_welcomemessage);
	
		$virtualserver_maxclients = $serverinfo["virtualserver_maxclients"];
    	$tmpl->assign("virtualserver_maxclients", $virtualserver_maxclients);
	
		$virtualserver_password = $serverinfo["virtualserver_password"];
    	$tmpl->assign("virtualserver_password", $virtualserver_password);
	
		$virtualserver_hostmessage = $serverinfo["virtualserver_hostmessage"];
    	$tmpl->assign("virtualserver_hostmessage", $virtualserver_hostmessage);
	
		$virtualserver_hostmessage_mode = $serverinfo["virtualserver_hostmessage_mode"];
    	$tmpl->assign("virtualserver_hostmessage_mode", $virtualserver_hostmessage_mode);
	
		$virtualserver_hostbanner_url = $serverinfo["virtualserver_hostbanner_url"];
    	$tmpl->assign("virtualserver_hostbanner_url", $virtualserver_hostbanner_url);
	
		$virtualserver_hostbanner_gfx_url = $serverinfo["virtualserver_hostbanner_gfx_url"];
    	$tmpl->assign("virtualserver_hostbanner_gfx_url", $virtualserver_hostbanner_gfx_url);
	
		$virtualserver_hostbanner_gfx_interval = $serverinfo["virtualserver_hostbanner_gfx_interval"];
    	$tmpl->assign("virtualserver_hostbanner_gfx_interval", $virtualserver_hostbanner_gfx_interval);
	
		$virtualserver_complain_autoban_count = $serverinfo["virtualserver_complain_autoban_count"];
    	$tmpl->assign("virtualserver_complain_autoban_count", $virtualserver_complain_autoban_count);
	
		$virtualserver_complain_autoban_time = $serverinfo["virtualserver_complain_autoban_time"];
    	$tmpl->assign("virtualserver_complain_autoban_time", $virtualserver_complain_autoban_time);
	
		$virtualserver_complain_remove_time = $serverinfo["virtualserver_complain_remove_time"];
    	$tmpl->assign("virtualserver_complain_remove_time", $virtualserver_complain_remove_time);
		
		$virtualserver_min_clients_in_channel_before_forced_silence = $serverinfo["virtualserver_min_clients_in_channel_before_forced_silence"];
    	$tmpl->assign("virtualserver_min_clients_in_channel_before_forced_silence", $virtualserver_min_clients_in_channel_before_forced_silence);
		
		$virtualserver_needed_identity_security_level = $serverinfo["virtualserver_needed_identity_security_level"];
    	$tmpl->assign("virtualserver_needed_identity_security_level", $virtualserver_needed_identity_security_level);
		
	}
	
	if ($act == "logs" ) {
		
		$logview = $ts3->logview();
		
	}
	
	
	if ($act == "servergroups" ) {
		
		// Aktivitäten abfragen
		
		if ($do == "pre-copy") {
		
			$sgid = $_GET['sgid'];
		
		
			$servergrouplist_copy = $ts3->servergrouplist();
			$servergrouplist_copy = array_slice($servergrouplist_copy, 2);
			
			$servergroup = $ts3->servergroup($sgid);
		
			$servergroupname = $servergroup["name"];
		
			
			$tmpl->assign('sgid', $sgid);
			$tmpl->assign('servergroupname', $servergroupname);
			$tmpl->assign('servergrouplist_copy', $servergrouplist_copy);
			
		}
		
		if ($do == "copy") {
		
			$sgid = $_GET['sgid'];
			$template_servergroup = $_POST['template_servergroup'];
			
			$ts3->servergroup_copy($sgid,$template_servergroup);
			
		}
		
		if ($do == "pre-rename") {
		
			$sgid = $_GET['sgid'];
		
			
			$servergroup = $ts3->servergroup($sgid);
		
			$servergroupname = $servergroup["name"];
		
			
			$tmpl->assign('sgid', $sgid);
			$tmpl->assign('servergroupname', $servergroupname);
			
		}
		
		if ($do == "rename") {
		
			$sgid = $_GET['sgid'];
			$groupname = $_POST['groupname'];
			
			$ts3->fastcall("servergrouprename sgid=$sgid name=$groupname");
			
		}
		
		if ($do == "delete") {
		
			$sgid = $_GET['sgid'];
			
			$ts3->fastcall("servergroupdel sgid=" . $sgid);
			
		}
		
		if ($do == "add") {
		
			$sgname = $_POST['sgname'];
			
			if ($sgname != "") {
			
				$ts3->fastcall("servergroupadd name=" . $sgname);
			}
		}
		
		
		$servergrouplist = $ts3->servergrouplist();
		
	}
	
	
	if ($act == "message" ) {
		
		
		if ($do == "send") {
		
		$sid = $_GET['sid'];
		$message = $_POST['message'];
		
		$message = str_replace(" ", "\s", $message);
		$message = str_replace("|", "\p", $message);
		$message = str_replace("/", "\/", $message);
		$message = utf8_encode($message);
		
			if ($ts3->fastcall("sendtextmessage targetmode=3 target=$sid msg=$message")) { $msg = $lang['message_send_message']; }
		
		}
	}
	
	
	if ($act == "servergroupclients" ) {
	
		$sgid = $_GET['sgid'];
		$cldbid = $_GET['cldbid'];
		
		if ($do == "delete") {
		
			$ts3->fastcall("servergroupdelclient sgid=" . $sgid . " cldbid=" . $cldbid);
		
		}		
			
		if (isset($_GET["page"]) ? $page = $_REQUEST["page"] : $page = 1);

				
		$servergroupclients = $ts3->servergroupclients($sgid);
					
		$servergroup = $ts3->servergroup($sgid);
		
		$servergroupname = $servergroup["name"];
		
			
		$tmpl->assign('sgid', $sgid);
		$tmpl->assign('servergroupname', $servergroupname);
		
	}
	
	if ($act == "tokenmanager" ) {
		
		// Aktivitäten abfragen
		
		if ($do == "delete") {
		
			$token = $_GET['token'];
			
			$ts3->fastcall("tokendelete token=$token");
			
		}
		
		if ($do == "add") {
		
			$type = $_POST['typ'];
			$servergroup = $_POST['servergroup'];
			$channelgroup = $_POST['channelgroup'];
			$channel = $_POST['channel'];
			
			if ($type == "0") {
			
				$ts3->fastcall("tokenadd tokentype=$type tokenid1=$servergroup tokenid2=0");
			}
			
			if ($type == "1") {
			
				$ts3->fastcall("tokenadd tokentype=$type tokenid1=$channelgroup tokenid2=$channel");
			}
		}
		
		$tokenlist = $ts3->tokenlist();
		
		$servergrouplist = $ts3->servergrouplist();
		$servergrouplist = array_slice($servergrouplist, 5);
		
		$channelgrouplist = $ts3->channelgrouplist();
		
		$channellist = $ts3->channellist();
		
	}
	
	
	if ($act == "permissionlist" ) {
		
		$sgid = $_GET['sgid'];
		
		// Aktivitäten abfragen
		
		if ($do == "pre-edit") {
		
			$permid = $_GET['permid'];
			$datatype = $_GET['datatype'];
			$permvalue = $_GET['permvalue'];
			$permskip = $_GET['permskip'];
			$permnegated = $_GET['permnegated'];
			$permname = $_GET['permname'];
					
			$tmpl->assign('permid', $permid);
			$tmpl->assign('sgid', $sgid);
			$tmpl->assign('datatype', $datatype);
			$tmpl->assign('permvalue', $permvalue);
			$tmpl->assign('permskip', $permskip);
			$tmpl->assign('permnegated', $permnegated);
			$tmpl->assign('permname', $permname);
			
		}
		
		if ($do == "edit") {
		
			$permid = $_GET['permid'];
			$sgid = $_GET['sgid'];
			$permvalue = $_POST['permvalue'];
			$permskip = $_POST['permskip'];
			$permnegated = $_POST['permnegated'];
			$permname = $_POST['permname'];
			
			$servergrouplist = $ts3->servergrouplist();
			$servergrouplist = array_slice($servergrouplist, 2);
			
			foreach ($servergrouplist as $servergroup) { 
			
			$permissionlist_simple = $ts3->permissionlist_simple($servergroup["sgid"]);
			
			
			foreach ($permissionlist_simple as $grantpermission) { 
							
				foreach ($grantpermission as $grantpermkey => $grantpermvalue) { 
									
									
					if(substr($grantpermvalue, 22) == substr($permname, 2)) {
						
						if($grantpermission['permvalue'] > $grantvalue) {
						
							$grantvalue = $grantpermission['permvalue']; 
						}
					}
				}
			}
			}
			
			if($grantvalue <= 75) { 
			
				$ts3->fastcall("servergroupaddperm sgid=$sgid permid=$permid permvalue=$permvalue permnegated=$permnegated permskip=$permskip");
				
				$message = "Das Recht wurde erfolgreich editiert!";
				$done = 1;
				
			} else {
			
				$message = "Du hast keine Berechtigung dieses Recht zu editieren!";
				$done = 0;
			
			}
					
			$tmpl->assign('permid', $permid);
			$tmpl->assign('sgid', $sgid);	
			$tmpl->assign('message', $message);	
			$tmpl->assign('done', $done);	
				
		}
		
		if ($do == "delete") {
		
			$permid = $_GET['permid'];
		
			$ts3->fastcall("servergroupdelperm sgid=" . $sgid . " permid=". $permid);
			
		}
		
		$permissionlist = $ts3->permissionlist($sgid);
		
		$servergroup = $ts3->servergroup($sgid);
		
		$servergroupname = $servergroup["name"];
		
    	$tmpl->assign("servergroupname", $servergroupname);
    	$tmpl->assign("servergroupid", $sgid);
	}
}
//$ausgabe = print_r($servergroupclients, true);

$tmpl->assign('ausgabe', $ausgabe);

$ts3->disconnect();


// Benötigte Datensätze auslesen	
	
	$customer = TRUE;
	
	$tmpl->assign("shownavi", "ts3admin");
	$tmpl->assign("customer", $customer);
	$tmpl->assign("id", $id);
    $tmpl->assign("masterid", $masterid);
    $tmpl->assign("serverip", $serverip);
    $tmpl->assign("udpport", $udpport);
    $tmpl->assign("tcpport", $tcpport);
    $tmpl->assign("httpport", $httpport);
    $tmpl->assign("typ", $typ);
    $tmpl->assign("slots", $slots);
    $tmpl->assign("auser", $auser);
    $tmpl->assign("auser", $auser);
    $tmpl->assign("apasswd", $apasswd);
	

    $tmpl->assign("server_version", $server_version);
	
	
	$tmpl->assign("theme", $THEME);
    $tmpl->assign("act", $act);
    $tmpl->assign("do", $do);
    $tmpl->assign("saveok", $saveok);
    $tmpl->assign("msg", $msg);
    $tmpl->assign("notfound", $notfound);

    $tmpl->assign("log_array", $log_array);
    $tmpl->assign("clientdblist", $clientdblist);
    $tmpl->assign("servergrouplist", $servergrouplist);
    $tmpl->assign("logview", $logview);
    $tmpl->assign("servergrouplist", $servergrouplist);
    $tmpl->assign("channelgrouplist", $channelgrouplist);
    $tmpl->assign("channellist", $channellist);
    $tmpl->assign("permissionlist", $permissionlist);
    $tmpl->assign("servergroupclients", $servergroupclients);
    $tmpl->assign("tokenlist", $tokenlist);
    $tmpl->assign("banlist", $banlist);
	
    $tmpl->assign("sid", $sid);
    $tmpl->assign("mid", $mid);
    $tmpl->assign("udpport", $udpport);
	
    $tmpl->assign("lang", $lang);

    $tmpl->assign("admin", $ADMIN);
    $tmpl->assign("CUSTID", $CUSTID);

	$tmpl->assign("content", parsetrue("container/".container("static"), "Servermanagement" , $tmpl->fetch("ts3admin/ts3admin.tpl"))); 
	
?>