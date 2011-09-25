<?php 

// ts3monitor.php

// Info:
//
// n/A
//


// Prüfe Benutzerrechte

/* if (!isset($_SESSION['loggedin']))
{ 
  header ("Location: ../index.php?reason=notloggedin");
} */


// Prüfe ob Aktion folgen soll

$do = $_REQUEST["do"]; 

require_once("../backend/class/ts3.class.php");

$ts3 = new ts3;

if (isset($act)) {
	
	
	if ($act == "instanceinfo" ) {
		
		
		$mid = $_GET['mid'];
		
		$sql = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver_master WHERE id = '$mid'");
		$result = $sql->fetchrow();
	
		$sadmin = $result->sadmin;
		$spasswd = $result->spasswd;
		$serverip = $result->serverip;
		$tcpport = $result->tcpport;
		
		
		$ts3->connect($serverip, $tcpport);
		$ts3->login($sadmin, $spasswd);
		
		
		if ($do == "edit") {
		
			$settings = $_POST['settings'];
			
				
			foreach($settings as $setting => $value) {
				
				$value = str_replace(" ", "\s", $value);
				$value = str_replace("|", "\p", $value);
				$value = str_replace("/", "\/", $value);
				
				$ts3->fastcall("instanceedit " . $setting . "=" . $value);
				
			}
			
		}
		
		
		$instanceinfo = $ts3->instanceinfo();
		
		
		foreach($instanceinfo as $name => $value) {
			
    		$tmpl->assign($name, $value);
			
		}	
		
		$hostinfo = $ts3->hostinfo();
		
		
		foreach($hostinfo as $name => $value) {
			
    		$tmpl->assign($name, $value);
			
		}	
		
		$version = $ts3->version();
		
		
		foreach($version as $name => $value) {
			
    		$tmpl->assign($name, $value);
			
		}	
		
		$instance_uptime = format_time_ts3($hostinfo["instance_uptime"]);
    	$tmpl->assign("instance_uptime", $instance_uptime);
		
		if ($do != "pre-edit") {
		
			$serverinstance_max_download_total_bandwidth = format_datasize($instanceinfo["serverinstance_max_download_total_bandwidth"]);
    		$tmpl->assign("serverinstance_max_download_total_bandwidth", $serverinstance_max_download_total_bandwidth);
		
			$serverinstance_max_upload_total_bandwidth = format_datasize($instanceinfo["serverinstance_max_upload_total_bandwidth"]);
    		$tmpl->assign("serverinstance_max_upload_total_bandwidth", $serverinstance_max_upload_total_bandwidth);
		
			$connection_bytes_sent_total = format_datasize($hostinfo["connection_bytes_sent_total"]);
    		$tmpl->assign("connection_bytes_sent_total", $connection_bytes_sent_total);
		
			$connection_bytes_received_total = format_datasize($hostinfo["connection_bytes_received_total"]);
    		$tmpl->assign("connection_bytes_received_total", $connection_bytes_received_total);
		
		}
		
		$tmpl->assign('serverip', $serverip);
		$tmpl->assign('tcpport', $tcpport);
		
		
		$ausgabe = print_r($hostinfo, true);

		$tmpl->assign('ausgabe', $ausgabe);
	
	}
		

	if ($do == "sendmessage" ) {
		
		$mid = $_GET['mid'];
		$message = $_POST['message'];
	
		$sql = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver_master WHERE id = '$mid'");
		$result = $sql->fetchrow();
	
		$sadmin = $result->sadmin;
		$spasswd = $result->spasswd;
		$serverip = $result->serverip;
		$tcpport = $result->tcpport;
	
		
		$ts3->connect($serverip, $tcpport);
		$ts3->login($sadmin, $spasswd);
		
		
		$message = str_replace(" ", "\s", $message);
		$message = str_replace("|", "\p", $message);
		$message = str_replace("/", "\/", $message);
		$message = utf8_encode($message);
		
			if ($ts3->fastcall("gm msg=$message")) { $msg = $lang['message_send_message']; }
		
		
		$ts3->disconnect(); 
		
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

if ($do == "server-stop") {
	
	$id = $_GET["id"];
	$udpport = $_GET["udpport"];
	$mid = $_REQUEST["mid"];
		
	
	$sql_sl = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver_master WHERE id = '$mid'");
	$result = $sql_sl->fetchrow();
	
	$serverip = $result->serverip;
	$tcpport = $result->tcpport;
	$sadmin = $result->sadmin;
	$spasswd = $result->spasswd;
	$typ = $row->typ;
	
	
	
	
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
	
		$sql = $db->Query("INSERT " . prefix_nexmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$USERID', '$id', '$now', '8', 'Voiceserver', 'customer')");
	
	
		$tmpl->assign("stopok", $stopok);
	

}


if ($act == "monitor") {
	
	
	if ($do == "delete-voiceserver") {

	$id = $_GET["id"];
	$udpport = $_GET["udpport"];
	$mid = $_REQUEST["mid"];
		
	
	$sql_sl = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver_master WHERE id = '$mid'");
	$result = $sql_sl->fetchrow();
	
	$serverip = $result->serverip;
	$tcpport = $result->tcpport;
	$sadmin = $result->sadmin;
	$spasswd = $result->spasswd;
	$typ = $row->typ;
	
	
	
	
	$ts3->connect($serverip, $tcpport);
	$ts3->login($sadmin, $spasswd);
	
	foreach($ts3->serverlist() as $server) {

	  	if($server["virtualserver_port"] == $udpport) $server_dbid = $server["virtualserver_id"];

	}
	
	
	$ts3->fastcall("serverstop sid=" . $server_dbid);
	
	sleep(3);
	
	$ts3->fastcall("serverdelete sid=" . $server_dbid);
	
	if (isset($_GET["id"])) {
	
		$sql = $db->Query("DELETE FROM " . prefix_nexmin . "members_product WHERE memberid = '$id' AND udpport = '$udpport' LIMIT 1");
		$sql = $db->Query("DELETE FROM " . prefix_nexmin . "voiceserver WHERE memberid = '$id' AND udpport = '$udpport' LIMIT 1");
	
	}
	
	$delete = TRUE;
	
	$now = time();
	
	$sql = $db->Query("INSERT " . prefix_nexmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$USERID', '$server_dbid', '$now', '2', 'Voiceserver', 'ts3monitor')");
	
	
	}
	
	$mid = $_REQUEST["mid"];
	
	
	$sql_cu = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver_master WHERE id = $mid");
	$result = $sql_cu->fetchrow();
	
	$id = $result->id;
	$serverip = $result->serverip;
    $tcpport = $result->tcpport;
    $httpport = $result->httpport;
	$sadmin = $result->sadmin;
	$spasswd = $result->spasswd;
		
	
	$ts3->connect($serverip, $tcpport);
	$ts3->login($sadmin,$spasswd);
	
	$serverlist = $ts3->serverlist();
	
	$vc_array = array();
	
	
	
	
	foreach ($serverlist as $server) {
	
		$ts3->fastcall("use sid=" . $server["virtualserver_id"]);
		
		array_push($vc_array,array(
			    'server_name' => $server["virtualserver_name"],
			    'server_udpport' => $server["virtualserver_port"],
			    'server_maxuser' => $server["virtualserver_maxclients"],
			    'server_uptime' => format_time_ts3($server["virtualserver_uptime"]),
			    'server_currentusers' => $server["virtualserver_clientsonline"] ) 
		);  
		
		$a = $a + 1;
		
		$online = round((int)$server["virtualserver_uptime"] / 3600 / 24 / 1000 );
		
		if ( $online < 1 ) { $online = 1; }
		
		$serverinfo = $ts3->serverinfo();
		
		$traffic = (double)$serverinfo["connection_bytes_sent_total"] + (double)$serverinfo["connection_bytes_received_total"];
		$traffic_per_day = round($traffic/$online, 2);
		
		if ( $traffic_per_day < '12641536' ? $usage = 0 : $usage = 1 );
			
			
		$vc_array[$a-1]['usage'] = $usage;
		
		$virtualserver_total_bytes_downloaded = $serverinfo["virtualserver_total_bytes_downloaded"];
		$virtualserver_total_bytes_uploaded = $serverinfo["virtualserver_total_bytes_uploaded"];
		
		$filetraffic = $virtualserver_total_bytes_downloaded + $virtualserver_total_bytes_uploaded;
		
		$sql = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver WHERE serverip = '$serverip' AND masterid = '$mid' AND udpport = '" . $server["virtualserver_port"] . "' AND tcpport = '" . $tcpport . "'");
		$result = $sql->fetchrow();

		$sid = $result->id;
		$memberid = $result->memberid;
		
		$vc_array[$a-1]['filetraffic'] = format_datasize($filetraffic);
		$vc_array[$a-1]['sid'] = $sid;
		
		$vc_array[$a-1]['traffic'] = format_datasize($traffic);
		$vc_array[$a-1]['traffic_per_day'] = format_datasize($traffic_per_day);
		
		
		$vc_array[$a-1]['memberid'] = $memberid;
		
		if ( $serverinfo["virtualserver_status"] == "online") { 
		
			$online = 1; 
			
		} else { 
		
			$online = 0; 
			
		};
		
	
		$vc_array[$a-1]['online'] = $online;
		
		}
		
	
	$info_global = array();
	
	$info_global = $ts3->hostinfo();
	
	$total_server_uptime = $info_global["instance_uptime"];
	$total_servers = $info_global["virtualservers_running_total"];
	$total_users_online = $info_global["virtualservers_total_clients_online"];
	$total_users_maximal = $info_global["virtualservers_total_maxclients"];
	$total_bytesreceived = $info_global["connection_bytes_received_total"];
	$total_bytessend = $info_global["connection_bytes_sent_total"];
	
	$online = 0;
	$online = round((int)$total_server_uptime /  3600 / 24 / 1000);
	
	if ( $online < 1 ) { $online = 1; }
		
	$traffic = (double)$total_bytessend + (double)$total_bytesreceived;
	$traffic_per_day = round($traffic/$online, 2);
	
	
    $tmpl->assign("serverip", $serverip);
    $tmpl->assign("tcpport", $tcpport);
	
    $tmpl->assign("total_servers", $total_servers);
    $tmpl->assign("total_users_online", $total_users_online);
    $tmpl->assign("total_users_maximal", $total_users_maximal);
    $tmpl->assign("total_channels", $total_channels);
    $tmpl->assign("traffic", format_datasize($traffic));
    $tmpl->assign("traffic_per_day", format_datasize($traffic_per_day));
		
    $tmpl->assign("mid", $id);	
	
	} 

}





// Benötigte Datensätze auslesen

	$sql_vm = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver_master WHERE typ = 'TS3' ORDER BY id ASC");
	$num = $sql_vm->numrows();

	$vm_array = array();
    
	while ($row = $sql_vm->fetchrow()) {
        array_push($vm_array,array(
			    'id' => $row->id,
                'rootserverid' => $row->rootserverid,
                'serverip' => $row->serverip,
                'tcpport' => $row->tcpport,
                'httpport' => $row->httpport,
                'sadmin' => $row->sadmin,
                'spasswd' => $row->spasswd ) 
		); 
	} 
	
	
	$tmpl->assign("theme", $THEME);
    $tmpl->assign("vm_array", $vm_array);
    $tmpl->assign("vc_array", $vc_array);
    $tmpl->assign("vo_array", $vo_array);
    $tmpl->assign("act", $act);
    $tmpl->assign("do", $do);
    $tmpl->assign("mid", $mid);
	
    $tmpl->assign("lang", $lang);
	
    $tmpl->assign("delete", $delete);
	
	$tmpl->assign("content", parsetrue("container/".container("static"), "Teamspeak 3 Monitor" , $tmpl->fetch("ts3monitor/ts3monitor.tpl"))); 
	
?>