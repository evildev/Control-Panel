<?php


if(!defined("BASEDIR")) exit;
if (!empty($_POST['email']) && !empty($_POST['pass'])) {
	$sql = $db->Query("SELECT * FROM " . prefix_nexmin . "members WHERE ( email='".escs($_POST['email'])."' AND password='".md5($_POST["pass"])."' AND verify = 1) ");
	$row = $sql->fetchrow();
	$name = $row->name;
	$email = $row->email;
	$id = $row->id;
	$member = $row->member;
	$user_lastonline = $row->user_lastonline;
	
	$now = time();
	$sql = $db->Query("UPDATE " . prefix_nexmin . "members SET user_lastonline_temp = user_lastonline WHERE id ='" . $id . "'");
	
	$sql = $db->Query("UPDATE " . prefix_nexmin . "members SET user_lastonline = " . $now . " WHERE id ='" . $id . "'");
	
	$sql = $db->Query("UPDATE " . prefix_nexmin . "members SET loggedin = '1' WHERE id ='" . $id . "'");
	
	$sql = $db->Query("UPDATE " . prefix_nexmin . "members SET lastip = '". $GLOBALS['IP'] . "' WHERE id ='" . $id . "'");
	
		
	if(!$row->id){
		if($msg) { 
		$msg = $msg; } else {
		$msg = "loginerror_1_t" ;}
		$EOUT = msg("loginerror_1", $msg, str_replace("__URL__", $_REQUEST['redir'], $lang["login_false"]), "./index.php?m=pwrecovery");
		$NOOUT = 1;
		$sname = $lang['loginerror_1']; 
		
		
	} else {
		
		
		if ($row->id > 0) {			
	
			$now = time();
	
			$sql = $db->Query("INSERT " . prefix_nexmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$id', '$id', '$now', '9', 'Webinterface', 'login')");
			
			setcookie("ecpid", $row->id, time()+365*24*3600, '/');
			setcookie("ecppass", $row->password,time()+365*24*3600, '/');
			$login="ok";
			
			
			$EOUT = msg("loginok", "loginok_t", str_replace("__URL__", $_REQUEST['redir'], $lang["login_true"]), $_REQUEST['redir']);
			$NOOUT = 1;
			$sname = "Login OK";
			
			
		}
	}
}

?>