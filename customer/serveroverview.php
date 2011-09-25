<?php 

// serveroverview.php

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

	// Benötigte Datensätze auslesen	
	
	
	// Summen Anfang
	
	$sql_vc = $db->Query("SELECT * FROM " . prefix_nexmin . "voiceserver WHERE memberid = '$USERID' ORDER BY id ASC");
	$num = $sql_vc->numrows();
	$num_voiceserver = $num;

	$vc_array = array();
    
	while ($row = $sql_vc->fetchrow()) {
        array_push($vc_array,array(
			    'id' => $row->id,
                'memberid' => $row->memberid,
                'masterid' => $row->masterid,
                'serverip' => $row->serverip,
                'udpport' => $row->udpport,
                'tcpport' => $row->tcpport,
                'slots' => $row->slots,
                'typ' => $row->typ,
                'apasswd' => $row->apasswd ) 
		); 
	
	
	$vc_array_count = $vc_array_count + 1;
	
	if ( $row->typ == 'TS2' ) {
	
		$cyts->connect($row->serverip, $row->tcpport);
		if ( $cyts->select($row->udpport) ) 

		{ $online = 1; $cyts->disconnect(); } else { $online = 0; };
		
	} else {
	
	 	if ( $ts3->connect($row->serverip, $row->tcpport) ) 

			{ $online = 1; $ts3->disconnect(); } else { $online = 0; };
			
	}
	
	
	$vc_array[$vc_array_count-1]['online'] = $online;
	
	
	 }
	 
	 
	
    $tmpl->assign("id", $id);
	
	$tmpl->assign("theme", $THEME);
    $tmpl->assign("vc_array", $vc_array);
	
	
	$tmpl->assign("content", parsetrue("container/".container("static"), "Serverübersicht" , $tmpl->fetch("serveroverview/serveroverview.tpl"))); 
	
?>