<?php

ob_start();

require_once("preset.php");


	 


if(!permission("adminpanel")) { 
	
	header("Location: ../index.php"); 
	
		} else {
		
	header("Location: admin.php"); }

?>
