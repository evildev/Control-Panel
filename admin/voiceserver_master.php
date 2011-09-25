<?php 

// customer.php

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
	
	require_once("../backend/class/ts3.class.php");
	$ts3 = new ts3;
	
if (isset($act)) {


if ($act == "delete") {

	$id = $_GET["id"];
	
	
	$sql = $db->Query("DELETE FROM " . prefix_cpmin . "voiceserver_master WHERE id = '$id'");
	
	$delete = TRUE;
	
	$now = time();
	
	$sql = $db->Query("INSERT " . prefix_cpmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$USERID', '$id', '$now', '2', 'Voiceserver Master', 'voiceserver_master')");
	
	
	}
	
	
if ($act == "do-savedata") {

	$rootserverid = $_POST["rootserverid"];
	$tcpport = $_POST["tcpport"];
	$httpport = "1000";
	$sadmin = $_POST["sadmin"];
	$spasswd = $_POST["spasswd"];
	$typ = $_POST["typ"];
	
	$sql_sl = $db->Query("SELECT * FROM " . prefix_cpmin . "rootserver WHERE id = '$rootserverid'");
	$result = $sql_sl->fetchrow();
	
	$serverip = $result->serverip;
		
		
	$sql = $db->Query("INSERT " . prefix_cpmin . "voiceserver_master (rootserverid, serverip, tcpport, httpport, sadmin, spasswd, typ ) VALUES ('$rootserverid', '$serverip', '$tcpport', '$httpport', '$sadmin', '$spasswd', '$typ')");
	
	
	$now = time();
	
	$sql = $db->Query("INSERT " . prefix_cpmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$USERID', '" . mysql_insert_id() . "', '$now', '1', 'Voiceserver Master', 'voiceserver_master')");
	
	
	$saveok = TRUE;
	
	}



if ($act == "do-savedata-voiceserver") {

	
	$voiceservermasterid = $_POST["voiceservermasterid"];
	$server_maxusers = $_POST["server_maxusers"];
	$server_port = $_POST["server_port"];
	
	if ( $server_port != "" ) {
	
		$virtualserver_port = "virtualserver_port=$server_port";
		
	}
	
	$sql_sl = $db->Query("SELECT * FROM " . prefix_cpmin . "voiceserver_master WHERE id = '$voiceservermasterid'");
	$result = $sql_sl->fetchrow();
	
	$serverip = $result->serverip;
	$tcpport = $result->tcpport;
	$sadmin = $result->sadmin;
	$spasswd = $result->spasswd;
		
	
	
	// Freien Master-Voiceserver suchen
	
	$sql_vo = $db->Query("SELECT * FROM " . prefix_cpmin . "voiceserver_master WHERE typ = 'TS3' AND active = '1'");
	$num = $sql_vo->numrows();

	$vo_array = array();
    
	while ($row = $sql_vo->fetchrow()) {
        array_push($vo_array,array(
			    'id' => $row->id,
                'serverip' => $row->serverip,
                'tcpport' => $row->tcpport,
                'httpport' => $row->httpport,
                'sadmin' => $row->sadmin,
                'spasswd' => $row->spasswd) 
		); 
	
		$i = $i + 1;
		
		$count_voiceserver = 0;
	  

		$ts3->connect($row->serverip, $row->tcpport);
		$serverinfo = $ts3->hostinfo();
		$vo_array[$i-1]['count_voiceserver'] = $serverinfo["virtualservers_running_total"];
		
	}
	
	function cmp($a, $b) {
    return ($a["count_voiceserver"] - $b["count_voiceserver"]); }  

	usort($vo_array, "cmp");
	
	
	
	// Voiceserver hinzuf&uuml;gen
	
	$ts3->connect($vo_array[0]['serverip'], $vo_array[0]['tcpport']);
	$ts3->login($vo_array[0]['sadmin'], $vo_array[0]['spasswd']);
	$server = $ts3->servercreate("servercreate virtualserver_name=Teamspeak\s3\sServer $virtualserver_port virtualserver_maxclients=$server_maxusers virtualserver_max_download_total_bandwidth=819200000 virtualserver_max_upload_total_bandwidth=51200000 virtualserver_max_download_individual_bandwidth=819200000 virtualserver_max_upload_individual_bandwidth=51200000 virtualserver_download_quota=8053063680 virtualserver_upload_quota=8053063680 virtualserver_max_download_transfers_total=10 virtualserver_max_download_transfers_individual=2 virtualserver_max_upload_transfers_total=10 virtualserver_max_upload_transfers_individual=2");
	$token = $server["token"];
	$sid = $server["sid"];

	$token = str_replace("error", "", $token);
	$token = trim($token);
	
	$ts3->fastcall("use sid="  . $sid);
	$serverinfo = $ts3->serverinfo();
	$udpport = $serverinfo["virtualserver_port"];

	// Voiceserver dem Kunden zuweisen

	$id = $vo_array[0]['id'];
	$serverip = $vo_array[0]['serverip'];
	$tcpport = $vo_array[0]['tcpport'];
	$httpport = $vo_array[0]['httpport'];
	
		
	$now = time();
	
	$sql = $db->Query("INSERT " . prefix_cpmin . "log (member_id, target_id, date, action, what, module ) VALUES ('0', '" . mysql_insert_id() . "', '$now', '1', 'Voiceserver', 'order')");
	
	
	
	// Verbindung zum Master-Voiceserver trennen

	$ts3->disconnect();
		
	
	$saveok = TRUE;
	
	}

}



	
// Benötigte Datensätze auslesen

	$sql_mv = $db->Query("SELECT * FROM " . prefix_cpmin . "voiceserver_master ORDER BY typ DESC, tcpport ASC");
	$num = $sql_mv->numrows();

	$mv_array = array();
    
	while ($row = $sql_mv->fetchrow()) {
        array_push($mv_array,array(
			    'id' => $row->id,
                'rootserverid' => $row->rootserverid,
                'serverip' => $row->serverip,
                'tcpport' => $row->tcpport,
                'httpport' => $row->httpport,
                'sadmin' => $row->sadmin,
                'spasswd' => $row->spasswd,
                'typ' => $row->typ ) 
		); 
		
	$server_total_users_maximal = 0;
	$server_total_users_online = 0;
	
	$mv_array_count = $mv_array_count + 1;
	
	if ( $row->typ == "TS2" ) {
	
		if ( $cyts->connect($row->serverip, $row->tcpport, "", 2 ) ) 

			{ $online = 1; $cyts->disconnect(); } else { $online = 0; };
		
	
	
			$cyts->connect($row->serverip, $row->tcpport);
			$info_server = $cyts->info_globalInfo();
			$server_total_users_maximal = $info_server["total_users_maximal"];
			$server_total_users_online = $info_server["total_users_online"];
	
			$mv_array[$mv_array_count-1]['server_total_users_maximal'] = $server_total_users_maximal;
			$mv_array[$mv_array_count-1]['server_total_users_online'] = $server_total_users_online;
			
			$users_maximal = $users_maximal + $server_total_users_maximal;
			$users_online = $users_online + $server_total_users_online;
			
			$cyts->disconnect(); 
			
	} else {
		
	
		if ( $ts3->connect($row->serverip, $row->tcpport) ) 

			{ $online = 1; } else { $online = 0; };
		
	
			$ts3->login($row->sadmin,$row->spasswd);
			$serverlist = $ts3->serverlist();
			
			foreach ($serverlist as $server) {
				$server_total_users_maximal = $server_total_users_maximal + $server["virtualserver_maxclients"];
				$server_total_users_online = $server_total_users_online + $server["virtualserver_clientsonline"];
			}
			
			$mv_array[$mv_array_count-1]['server_total_users_maximal'] = $server_total_users_maximal;
			$mv_array[$mv_array_count-1]['server_total_users_online'] = $server_total_users_online;
			
			$users_maximal = $users_maximal + $server_total_users_maximal;
			$users_online = $users_online + $server_total_users_online;
	
			$ts3->disconnect(); 
			
	}
	
	$mv_array[$mv_array_count-1]['online'] = $online;
	} 
	
	
	$sql_rs = $db->Query("SELECT * FROM " . prefix_cpmin . "rootserver WHERE typ = 1 ORDER BY id ASC");
	$num = $sql_rs->numrows();

	$rs_array = array();
    
	while ($row = $sql_rs->fetchrow()) {
        array_push($rs_array,array(
			    'id' => $row->id,
                'name' => $row->name ) 
		); 
	} 
	


	$tmpl->assign("theme", $THEME);
    $tmpl->assign("rs_array", $rs_array);
    $tmpl->assign("mv_array", $mv_array);
    $tmpl->assign("act", $act);
    $tmpl->assign("test", $test);
	
    $tmpl->assign("users_maximal", $users_maximal);
    $tmpl->assign("users_online", $users_online);
	
    $tmpl->assign("apasswd", (generatePassword($length=5)));
	
    $tmpl->assign("delete", $delete);
	
	$tmpl->assign("content", parsetrue("container/".container("static"), "Master Voiceserververwaltung" , $tmpl->fetch("voiceserver_master/voiceserver_master.tpl"))); 
	
?>