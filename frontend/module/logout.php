<?php 

ob_start (); 

$id = escs($_COOKIE['ecpid']);
$now = time();

if ($_GET["reason"]) { $sql = $db->Query("INSERT " . prefix_cpmin . "log (member_id, target_id, date, action, what, module ) VALUES ('0', '$USERID', '$now', '10', 'User ( " . $_GET["reason"] . " )', 'logout')"); } else { $sql = $db->Query("INSERT " . prefix_cpmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$USERID', '$USERID', '$now', '10', 'Webinterface', 'logout')"); }

$sql = $db->Query("UPDATE " . prefix_cpmin . "members SET loggedin = '0' WHERE id ='$id'");

if ($_GET["reason"] ? $reason = $_GET["reason"] : $reason = "user" );
 
session_start (); 
session_unset (); 
session_destroy (); 

setcookie("ecpid", FALSE, -86400, '/');
setcookie("ecppass", FALSE, -86400, '/');
				
header ("Location: ./index.php?do=signout&reason=" . $reason); 
ob_end_flush (); 

?> 