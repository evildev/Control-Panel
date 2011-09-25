<?php

ob_start();

require_once("preset.php");

if(!permission("customerpanel")) { 
	
	header("Location: ../index.php"); 
	
		} else {
		
	header("Location: customer.php"); }

?>
