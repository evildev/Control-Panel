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

if (isset($act)) {


if ($act == "delete") {

	$id = $_GET["id"];
	
	
	$sql = $db->Query("DELETE FROM " . prefix_cpmin . "rootserver WHERE id = '$id'");
	
	$delete = TRUE;
	
	
	$now = time();
	
	$sql = $db->Query("INSERT " . prefix_cpmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$USERID', '" . mysql_insert_id() . "', '$now', '2', 'Rootserver', 'rootserver')");
	
	
	}
	
if ($act == "do-savedata") {

	$name = $_POST["name"];
	$serverip = $_POST["serverip"];
	$typ = $_POST["typ"];
	$sname = $_POST["sname"];
	$spasswd = $_POST["spasswd"];
	$cpu = $_POST["cpu"];
	$cpuinfo = $_POST["cpuinfo"];
	$ram = $_POST["ram"];
	$board = $_POST["board"];
	$hddisk = $_POST["hddisk"];
	$traffic = $_POST["traffic"];
	
	
	$sql = $db->Query("INSERT " . prefix_cpmin . "rootserver (name, serverip, typ, sname, spasswd, cpu, cpuinfo, ram, board, hddisk, traffic ) VALUES ('$name', '$serverip', '$typ', '$sname', '$spasswd', '$cpu', '$cpuinfo', '$ram', '$board', '$hddisk', '$traffic')");
	
	
	$now = time();
	
	$sql = $db->Query("INSERT " . prefix_cpmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$USERID', '" . mysql_insert_id() . "', '$now', '1', 'Rootserver', 'rootserver')");
	
	
	$saveok = TRUE;
	
	}

}

	
// Benötigte Datensätze auslesen

	$sql_rs = $db->Query("SELECT * FROM " . prefix_cpmin . "rootserver ORDER BY id ASC");
	$num = $sql_rs->numrows();

	$rs_array = array();
    
	while ($row = $sql_rs->fetchrow()) {
        array_push($rs_array,array(
			    'id' => $row->id,
                'name' => $row->name,
                'serverip' => $row->serverip,
                'typ' => $row->typ,
                'sname' => $row->sname,
                'spasswd' => $row->spasswd,
                'cpu' => $row->cpu,
                'cpuinfo' => $row->cpuinfo,
                'ram' => $row->ram,
                'board' => $row->board,
                'hddisk' => $row->hddisk,
                'traffic' => $row->traffic ) 
		); 
	
	
	$a = $a + 1;
		
	if ($result = exec("/bin/ping -c 1 -w 1 $row->serverip") ? $online = 1 : $online = 0);
		
	$rs_array[$a-1]['online'] = $online;
	
	} 
	
	$tmpl->assign("theme", $THEME);
	$tmpl->assign("lang", $lang);
    $tmpl->assign("rs_array", $rs_array);
    $tmpl->assign("vc_array", $vc_array);
    $tmpl->assign("act", $act);
	
    $tmpl->assign("delete", $delete);
	$tmpl->assign("content", parsetrue("container/".container("static"), "Rootserverübersicht" , $tmpl->fetch("rootserver/rootserver.tpl"))); 
	
?>