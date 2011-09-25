<?php 

// customer_add.php

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

if (isset($act)) {

if ($act == "do-savedata") {

	$memberid = $_POST["memberid"];
	$masterid = $_POST["masterid"];
	$udpport = $_POST["udpport"];
	$typ = $_POST["typ"];
		
	if ($_POST["typ"] == 0) {
	
	
	$slots = "0";
	
	$sql = $db->Query("SELECT * FROM " . prefix_cpmin . "voiceserver_master WHERE id = '$masterid' LIMIT 1");
	$result = $sql->fetchrow();
	
	$serverip = $result->serverip;
	$tcpport = $result->tcpport;
	$httpport = $result->httpport;
	
	
	$sql = $db->Query("INSERT " . prefix_cpmin . "voiceserver (memberid, masterid, serverip, udpport, tcpport, httpport, typ, slots, auser, apasswd ) VALUES ('$memberid', '$masterid', '$serverip', '$udpport', '$tcpport', '$httpport', 'TS3', '$slots', 'admin', 'Keine Token vorhanden!' )");
	
	$saveok = TRUE;
	
	
	
	$now = time();
	
	$sql = $db->Query("INSERT " . prefix_cpmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$USERID', '" . mysql_insert_id() . "', '$now', '1', 'Voiceserver', 'voiceserver_assign')");
	
	 } 
	
	
	}

}

	
// Benötigte Datensätze auslesen

	$sql_mv = $db->Query("SELECT * FROM " . prefix_cpmin . "voiceserver_master ORDER BY id ASC");
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
                'spasswd' => $row->spasswd ) 
		); 
	}
	
	$sql_cu = $db->Query("SELECT * FROM " . prefix_cpmin . "members ORDER BY surname ASC");
	$num = $sql_cu->numrows();
	
	$cu_array = array();
	 
	while ($row = $sql_cu->fetchrow()) {
        array_push($cu_array,array(
			    'id' => $row->id,
                'member' => $row->member,
                'email' => $row->email,
                'name' => $row->name,
                'surname' => $row->surname,
                'country' => $row->country,
                'money' => round($row->money,2),
                'regdate' => $row->regdate,
                'lastip' => $row->lastip ) 
		); 
	} 
	
	
	
	$tmpl->assign("theme", $THEME);
	$tmpl->assign("lang", $lang);
    $tmpl->assign("mv_array", $mv_array);
    $tmpl->assign("cu_array", $cu_array);
    $tmpl->assign("act", $act);
	
	
    $tmpl->assign("delete", $delete);
    $tmpl->assign("saveok", $saveok);
	
	$tmpl->assign("content", parsetrue("container/".container("static"), "Voiceserver eintragen" , $tmpl->fetch("voiceserver_assign/voiceserver_assign.tpl"))); 
	
?>