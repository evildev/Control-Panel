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

	$name = $_POST["name"];
	$surname = $_POST["surname"];
	$country = $_POST["country"];
	$orderdate = $_POST["orderdate"];
	$email = $_POST["email"];
	$rank = $_POST["rank"];
	$password = $_POST["password"];
	
	$password = md5($password);
	
	$now = time();
	
	$birthday = mktime(0,0,0,$mm,$tt,$yyyy);
	
	$orderdate = explode(".", $orderdate);
	$orderdate = mktime(0, 0, 0, $orderdate[1], $orderdate[0], $orderdate[2]);
		
		
	$sql = $db->Query("INSERT " . prefix_nexmin . "members (member, password, email, surname, name, country, regdate, lastip, ugroup, status, user_lastonline, user_lastonline_temp, loggedin, verify ) VALUES ('1', '$password', '$email', '$surname', '$name', '$country', '$orderdate', '0', '$rank', '$rank', '0', '0', '0', '1')");
	
	$now = time();
	
	$sql = $db->Query("INSERT " . prefix_nexmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$USERID', '" . mysql_insert_id() . "', '$now', '1', 'Kunde', 'customer_add')");
	
	$saveok = TRUE;
	
	}

}

	
// Benötigte Datensätze auslesen


	$tmpl->assign("theme", $THEME);
	$tmpl->assign("lang", $lang);
    $tmpl->assign("act", $act);
	
	
    $tmpl->assign("saveok", $saveok);
	
	$tmpl->assign("content", parsetrue("container/".container("static"), "Kunden eintragen" , $tmpl->fetch("customer_add/customer_add.tpl"))); 
	
?>