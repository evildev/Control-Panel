<?php 

// customer.php

// Info:
//
// n/A
//


// Prüfe ob Aktion folgen soll



require_once("../backend/class/ts3.class.php");
	
$ts3 = new ts3;
	

$sortby = "id";
$sortorder = "asc";

$pp = $_REQUEST["pp"];
$sortorder_page = $_GET["sortorder"];

$do = $_REQUEST["do"]; 
$cid = $_REQUEST["cid"];
$ref = $_REQUEST["ref"];


if (isset($_GET["page"]) ? $page = $_REQUEST["page"] : $page = 1);
if (isset($_GET["sortby"]) ? $sortby = $_GET["sortby"] : $sortby = "id");
if ($_GET["sortorder"] == "desc" ? $sortorder = "asc" : $sortorder = "desc");


	
		
		
// Benötigte Datensätze auslesen
	
	
if ($act == "delete") {

	$id = $_GET["id"];
	
	
	$sql = $db->Query("DELETE FROM " . prefix_nexmin . "members WHERE id = '$id'");
	
	$now = time();
	
	$sql = $db->Query("INSERT " . prefix_nexmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$USERID', '$id', '$now', '2', 'Kunde', 'customer')");
	
	
		
	$sql_vo = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver WHERE memberid = '$id'");
	$num = $sql_vo->numrows();
	$count_member = $num;
	
	$vo_array = array();
    $count_payment = 0;
	 
	while ($row = $sql_vo->fetchrow()) {
        
	
	$id = $row->id;
	$serverip = $row->serverip;
	$udpport = $row->udpport;
	$tcpport = $row->tcpport;
	$httpport = $row->httpport;
	$masterid = $row->masterid;
		
	$sql = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver_master WHERE id = '$masterid'");
	$result = $sql->fetchrow();
	
	$typ = $result->typ;
	$sadmin = $result->sadmin;
	$spasswd = $result->spasswd;
	
	$sql = $db->Query("DELETE FROM " . prefix_nexmin . "voiceserver WHERE memberid = '$mid' AND udpport = '$udpport' LIMIT 1");
	
		
	if ( $typ == "TS2" OR $typ == "1" ) {
	
		$cyts->connect($serverip, $tcpport, $udpport);
		$cyts->slogin($sadmin, $spasswd);
	
	
		$cyts->sadmin_serverStop();
	
		$cyts->disconnect(); 
	
	
	
		$cyts->connect($serverip, $tcpport);
		$cyts->slogin($sadmin, $spasswd);
	
	
		foreach($cyts->sadmin_dbServerList() as $server) {

	  	if($server[2] == $udpport) $server_dbid = $server[1];

		}
		
		$cyts->sadmin_serverDelete($server_dbid);
	
		$cyts->disconnect(); 
	
	
		$delete = TRUE;
	
	} else {
	
	$ts3->connect($serverip, $tcpport);
	$ts3->login($sadmin, $spasswd);
	
	foreach($ts3->serverlist() as $server) {

	  	if($server["virtualserver_port"] == $udpport) $server_dbid = $server["virtualserver_id"];

	}
	
	
	$ts3->fastcall("serverstop sid=" . $server_dbid);
	
	sleep(3);
	
	$ts3->fastcall("serverdelete sid=" . $server_dbid);
	
		$delete = TRUE;
	}
	}
	}
	
	
	
	if ($act == "showcust" OR $act == "pre-edit") {
	
	
	
	if ($do == "edit") {

	$cid = $_GET["cid"];
	
	
	$surname = $_POST["surname"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$ftppasswd = $_POST["ftppasswd"];
	$ugroup = $_POST["ugroup"];
	
	
	$sql = $db->Query("SELECT * FROM " . prefix_nexmin . "members WHERE id = $cid");
	$result = $sql->fetchrow();
	
	$password = $result->password;
	
	
	if ( $_POST["ftppasswd"] != "password" ? $password = md5($_POST["ftppasswd"]) : $password = $password );
	
	$sql = $db->Query("UPDATE " . prefix_nexmin . "members SET surname = '$surname', name = '$name', email = '$email', password = '$password', ugroup = '$ugroup' WHERE id = '$cid'");
	
	$now = time();
	
	$sql = $db->Query("INSERT " . prefix_nexmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$USERID', '$cid', '$now', '3', 'Kunde', 'customer')");
	
	
	$saveok = TRUE;
	
	}
	
	if ($do == "delete-voiceserver") {

	$mid = $_GET["id"];
	$sid = $_GET["sid"];
	
	
	$sql_vo = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver WHERE id = '$sid'");
	$num = $sql_vo->numrows();
	$count_member = $num;
	
	$vo_array = array();
    $count_payment = 0;
	 
	while ($row = $sql_vo->fetchrow()) {
        
	
	$id = $row->id;
	$serverip = $row->serverip;
	$udpport = $row->udpport;
	$tcpport = $row->tcpport;
	$httpport = $row->httpport;
	$masterid = $row->masterid;
		
	$sql = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver_master WHERE id = '$masterid'");
	$result = $sql->fetchrow();
	
	$typ = $result->typ;
	$sadmin = $result->sadmin;
	$spasswd = $result->spasswd;
	
	$sql = $db->Query("DELETE FROM " . prefix_nexmin . "voiceserver WHERE memberid = '$mid' AND udpport = '$udpport' LIMIT 1");
	
		
	if ( $typ == "TS2" OR $typ == "1" ) {
	
		$cyts->connect($serverip, $tcpport, $udpport);
		$cyts->slogin($sadmin, $spasswd);
	
	
		$cyts->sadmin_serverStop();
	
		$cyts->disconnect(); 
	
	
	
		$cyts->connect($serverip, $tcpport);
		$cyts->slogin($sadmin, $spasswd);
	
	
		foreach($cyts->sadmin_dbServerList() as $server) {

	  	if($server[2] == $udpport) $server_dbid = $server[1];

		}
		
		$cyts->sadmin_serverDelete($server_dbid);
	
		$cyts->disconnect(); 
	
	
		$delete = TRUE;
	
	} else {
	
	$ts3->connect($serverip, $tcpport);
	$ts3->login($sadmin, $spasswd);
	
	foreach($ts3->serverlist() as $server) {

	  	if($server["virtualserver_port"] == $udpport) $server_dbid = $server["virtualserver_id"];

	}
	
	
	$ts3->fastcall("serverstop sid=" . $server_dbid);
	
	sleep(3);
	
	$ts3->fastcall("serverdelete sid=" . $server_dbid);
	
		$delete = TRUE;
	}
	}
	}
	
	if ($do == "server-start") {

	
	$sid = $_REQUEST["sid"]; 
	
	
	$sql_sl = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver WHERE id = '$sid'");
	$result = $sql_sl->fetchrow();
	
	$id = $result->id;
	$serverip = $result->serverip;
	$udpport = $result->udpport;
	$tcpport = $result->tcpport;
	$httpport = $result->httpport;
	$typ = $result->typ;
	$masterid = $result->masterid;
	
	$sql = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver_master WHERE id = '$masterid'");
	$result = $sql->fetchrow();
	
	$sadmin = $result->sadmin;
	$spasswd = $result->spasswd;
	
		
	if ( $typ == "TS2" OR $typ == "1" ) {
	
		$cyts = new cyts;
	
		$cyts->connect($serverip, $tcpport);
		$cyts->slogin($sadmin, $spasswd);
	
	
		foreach($cyts->sadmin_dbServerList() as $server) {

	  	if($server[2] == $udpport) $server_dbid = $server[1];

		}
	
	
		$cyts->sadmin_serverStart($server_dbid);
	
		$cyts->disconnect(); 
	
	
		$startok = TRUE;
	
	
		$now = time();
	
		$sql = $db->Query("INSERT " . prefix_nexmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$USERID', '$sid', '$now', '7', 'Voiceserver', 'customer')");
	
	
		$tmpl->assign("startok", $startok);
		
		} else {
	
		$ts3 = new ts3;
		$ts3->connect($serverip, $tcpport);
		$ts3->login($sadmin, $spasswd);
	
		
		$cmd = $ts3->serverquery("serveridgetbyport virtualserver_port=$udpport");
		$server_dbid = $cmd["server_id"];
	
		$ts3->fastcall("use sid=$server_dbid");
	
		$ts3->fastcall("serveredit virtualserver_autostart=1");
		
		$ts3->fastcall("serverstop sid=$server_dbid");
		
		sleep(1);
	
		$ts3->fastcall("serverstart sid=$server_dbid");
	
	
		$ts3->disconnect(); 
	
	
		$stopok = TRUE;
	
	
		$now = time();
	
		$sql = $db->Query("INSERT " . prefix_nexmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$USERID', '$sid', '$now', '7', 'Voiceserver', 'customer')");
	
	
		$tmpl->assign("start", $start);
	}	
		
}


if ($do == "server-stop") {

	
	$sid = $_REQUEST["sid"]; 
	
	
	$sql_sl = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver WHERE id = '$sid'");
	$result = $sql_sl->fetchrow();
	
	$id = $result->id;
	$serverip = $result->serverip;
	$udpport = $result->udpport;
	$tcpport = $result->tcpport;
	$httpport = $result->httpport;
	$typ = $result->typ;
	$masterid = $result->masterid;
	
	$sql = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver_master WHERE id = '$masterid'");
	$result = $sql->fetchrow();
	
	$sadmin = $result->sadmin;
	$spasswd = $result->spasswd;
	
	
	if ( $typ == "TS2" OR $typ == "1" ) {
	
		$cyts = new cyts;
	
		$cyts->connect($serverip, $tcpport, $udpport);
		$cyts->slogin($sadmin, $spasswd);
	
	
		$cyts->sadmin_serverStop();
	
		$cyts->disconnect(); 
	
	
		$stopok = TRUE;
	
	
		$now = time();
	
		$sql = $db->Query("INSERT " . prefix_nexmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$USERID', '$sid', '$now', '8', 'Voiceserver', 'customer')");
	
	
		$tmpl->assign("stopok", $stopok);
		
	} else {
	
		$ts3 = new ts3;
		$ts3->connect($serverip, $tcpport);
		$ts3->login($sadmin, $spasswd);
	
		foreach($ts3->serverlist() as $server) {

	  		if($server["virtualserver_port"] == $udpport) $server_dbid = $server["virtualserver_id"];

		}
	
		$ts3->fastcall("use sid=" . $server_dbid);
	
		$ts3->fastcall("serveredit virtualserver_autostart=0");
		
		$ts3->fastcall("serverstop sid=" . $server_dbid);
	
	
		$ts3->disconnect(); 
	
	
		$stopok = TRUE;
	
	
		$now = time();
	
		$sql = $db->Query("INSERT " . prefix_nexmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$USERID', '$sid', '$now', '8', 'Voiceserver', 'customer')");
	
	
		$tmpl->assign("stopok", $stopok);
	}	

}
	
	
	if ($cid == "" ? $cid = "0" : $cid = $cid);
	
	if ($cid != "0") {
	
	$sql_cu = $db->Query("SELECT * FROM " . prefix_nexmin . "members WHERE id = '$cid'");
	$result = $sql_cu->fetchrow();
	
	$id = $result->id;
	$member = $result->member;
    $password = $result->password;
    $ugroup = $result->ugroup;
    $email = $result->email;
	$surname = $result->surname;
	$name = $result->name;
	$street = $result->street;
	$city = $result->city;
	$zipcode = $result->zipcode;
	$country = $result->country;
	$regdate = $result->regdate;
	$lastip = $result->lastip;
	$user_lastonline = $result->user_lastonline;
	
	switch ($ugroup) {
    case 1:
        $ugroup = "Administrator";
        break;
    case 5:
        $ugroup = "Kunde";
        break;
    default:
        $ugroup = "Kunde";
        break;
	}
	
	
	$sql_vc3 = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver WHERE memberid = '$cid' AND typ = 'TS3' ORDER BY id ASC");
	$num = $sql_vc3->numrows();
	$num_voiceserver3 = $num;

	$vc3_array = array();
    
	while ($row = $sql_vc3->fetchrow()) {
        array_push($vc3_array,array(
			    'id' => $row->id,
                'memberid' => $row->memberid,
                'masterid' => $row->masterid,
                'serverip' => $row->serverip,
                'udpport' => $row->udpport,
                'tcpport' => $row->tcpport,
                'slots' => $row->slots,
                'typ' => $row->typ ) 
		); 
	
	$vc3_array_count = $vc3_array_count + 1;
	
	
	$sql = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver_master WHERE id = '$row->masterid'");
	$result = $sql->fetchrow();
	
	$typ = $result->typ;
	
	
	if ( $typ == "TS2" ) {
	
		$cyts->connect($row->serverip, $row->tcpport);
		if ( $cyts->select($row->udpport) ) 

		{ $online = 1; $cyts->disconnect(); } else { $online = 0; };
		
	} else {
	
	 	if ( $ts3->connect($row->serverip, $row->tcpport) ) { 
		
			foreach($ts3->serverlist() as $server) {

	  			if($server["virtualserver_port"] == $row->udpport) $server_status = $server["virtualserver_status"];

			}
			
			if ( $server_status != "none" ) {
			
				$online = 1; 
			
			} else {
			
				$online = 0; 
			
			}
			
			$ts3->disconnect(); 
			
		} else { 
		
			$online = 0; 
			
		};
			
	}
	
	
	$vc3_array[$vc3_array_count-1]['online'] = $online;
	
	
	}
	 	 
	 // Log Anfang
	 
	$sql_log = $db->Query("SELECT * FROM " . prefix_nexmin . "log WHERE member_id = '$cid' OR target_id = '$cid' ORDER BY date DESC");
	$num = $sql_log->numrows();
	$num_logs = $num;
	
	$limit = 20;
	$seiten = ceil($num / $limit);
	$start = prepage() * $limit - $limit;
	
	
	$sql_log = $db->Query("SELECT * FROM " . prefix_nexmin . "log WHERE member_id = '$cid' OR target_id = '$cid' ORDER BY date DESC LIMIT $start,$limit");
	$num = $sql_log->numrows();

	$log_array = array();
    
	while ($row = $sql_log->fetchrow()) {
        array_push($log_array,array(
			    'member_id' => $row->member_id,
                'target_id' => $row->target_id,
                'date' => $row->date,
                'action' => $row->action,
                'what' => $row->what,
                'module' => $row->module ) 
		); 
	
	$a = $a + 1;
	
	
	$sql = $db->Query("SELECT * FROM " . prefix_nexmin . "members WHERE id = '$row->member_id' LIMIT 1");
	$result = $sql->fetchrow();
	
	$log_name = $result->name;
	$log_surname = $result->surname;
	$log_array[$a-1]['name'] = $log_name;
	$log_array[$a-1]['surname'] = $log_surname;
	
	
	
	switch ($row->action) {
    case 1:
        $action_desc = "fügt hinzu";
        break;
    case 2:
        $action_desc = "löscht";
        break;
    case 3:
        $action_desc = "editiert";
        break;
    case 4:
        $action_desc = "versendet";
        break;
    case 5:
        $action_desc = "verschiebt";
        break;
    case 6:
        $action_desc = "schliesst";
        break;
    case 7:
        $action_desc = "startet";
        break;
    case 8:
        $action_desc = "stoppt";
        break;
    case 9:
        $action_desc = "loggt ein";
        break;
    case 10:
        $action_desc = "loggt aus";
        break;
	}
	
	
	$log_array[$a-1]['action_desc'] = $action_desc;
	
	} 
	
	// Log Ende
	 
	
    $tmpl->assign("id", $id);
    $tmpl->assign("member", $member);
    $tmpl->assign("password", $password);
    $tmpl->assign("ugroup", $ugroup);
    $tmpl->assign("email", $email);
    $tmpl->assign("surname", $surname);
    $tmpl->assign("name", $name);
    $tmpl->assign("street", $street);
    $tmpl->assign("city", $city);
    $tmpl->assign("zipcode", $zipcode);
    $tmpl->assign("country", $country);
    $tmpl->assign("phone", $phone);
    $tmpl->assign("regdate", $regdate);
    $tmpl->assign("lastip", $lastip);
    $tmpl->assign("user_lastonline", $user_lastonline);
	
    $tmpl->assign("num_voiceserver3", $num_voiceserver3);
    $tmpl->assign("num_logs", $num_logs);
	
	} 

		
	$tmpl->assign('pages', pagenav($seiten, prepage(), " <a href=\"admin.php?m=customer&amp;pp=$limit&amp;page={s}&sortorder=$sortorder_page&sortby=$sortby\">{t}</a> "));
	
	$tmpl->assign("theme", $THEME);
    $tmpl->assign("cu_array", $cu_array);
    $tmpl->assign("vc3_array", $vc3_array);
    $tmpl->assign("log_array", $log_array);
    $tmpl->assign("act", $act);
    $tmpl->assign("navi", $navi);
	
    $tmpl->assign("notfound", $notfound);
    $tmpl->assign("sortorder", $sortorder);
    $tmpl->assign("pp", $pp);
    $tmpl->assign("page", $page);
    $tmpl->assign("pagecount", $seiten);
	
		
    $tmpl->assign("delete", $delete);
    $tmpl->assign("do", $do);
	
	$tmpl->assign("cid", $cid);
    $tmpl->assign("saveok", $saveok);
    $tmpl->assign("notsend", $notsend);
	
	}
	
	if ($ref == "search") {
		
		$search = $_REQUEST["search"];
		$search = explode("$SITE_PREFIX_FIRMA-", $search);
		
		if ( $search[1] != "" ? $search = $search[1] : $search = $search[0] );
			
			$sql_cu = $db->Query("SELECT * FROM " . prefix_nexmin . "members WHERE id = '$search' OR email LIKE '%$search%' OR name LIKE '%$search%' OR surname LIKE '%$search%' OR phone = '$search' ORDER BY $sortby $sortorder");
			
		$seiten = 1;
	
			
	} else {
		
		$sql = $db->Query("SELECT * FROM " . prefix_nexmin . "members ORDER BY $sortby $sortorder");
		
		$num = $sql->numrows();
	
		$limit = 20;
		$seiten = ceil($num / $limit);
		$start = prepage() * $limit - $limit;
	
	
		$sql_cu = $db->Query("SELECT * FROM " . prefix_nexmin . "members ORDER BY $sortby $sortorder LIMIT $start,$limit");
	
	
	}
	
	
	
	$num = $sql_cu->numrows();
	$count_member = $num;
	
	$cu_array = array();
    $count_payment = 0;
	 
	while ($row = $sql_cu->fetchrow()) {
        array_push($cu_array,array(
			    'id' => $row->id,
                'member' => $row->member,
                'email' => $row->email,
                'name' => $row->name,
                'surname' => $row->surname,
                'country' => $row->country,
                'money' => $row->money,
                'regdate' => $row->regdate,
                'lastip' => $row->lastip,
                'loggedin' => $row->loggedin,
                'user_lastonline' => $row->user_lastonline ) 
		); 
	$a = $a + 1;
		
	$payment = $result->payment;
	$cu_array[$a-1]['payment'] = $payment;
	
	$custid = leading_zero($row->id, 6, 0);
	$cu_array[$a-1]['custid'] = $custid;
	
	$now = time();
	
	if ($row->loggedin == "0")
	{
	
		$activenow = "0";
		
	} elseif ($now-$row->user_lastonline < 60) {
	
		$activenow = "1";
		
	} elseif($now-$row->user_lastonline > 60 && $now-$row->user_lastonline < $SITE_SESSION_TIMEOUT) {
	
		$activenow = "2";
		
	} else {
	
		$activenow = "0";
		
	}
		
	
	$cu_array[$a-1]['activenow'] = $activenow;
	
	
	
	if ( $payment == '0' ) { $count_payment = $count_payment + 1; };
	
	
	
	} 
	
	
	
	
	$tmpl->assign('pages', pagenav($seiten, prepage(), " <a href=\"admin.php?m=customer_overview&amp;pp=$limit&amp;page={s}&sortorder=$sortorder_page&sortby=$sortby\">{t}</a> "));
	
	$tmpl->assign("theme", $THEME);
	$tmpl->assign("lang", $lang);
    $tmpl->assign("cu_array", $cu_array);
    $tmpl->assign("vc_array", $vc_array);
    $tmpl->assign("act", $act);
    $tmpl->assign("navi", $navi);
	
    $tmpl->assign("notfound", $notfound);
    $tmpl->assign("sortorder", $sortorder);
    $tmpl->assign("pp", $pp);
    $tmpl->assign("page", $page);
    $tmpl->assign("pagecount", $seiten);
	
		
    $tmpl->assign("delete", $delete);
    $tmpl->assign("do", $do);
	
    $tmpl->assign("saveok", $saveok);
    $tmpl->assign("notsend", $notsend);
	$tmpl->assign("content", parsetrue("container/".container("static"), "Kundenübersicht" , $tmpl->fetch("customer/customer.tpl"))); 
	
?>
