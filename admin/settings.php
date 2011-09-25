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

	
if ($act = "edit") {

	
	$sitename =  $_POST["sitename"];
	$url =  $_POST["url"];
	$infoemail =  $_POST["infoemail"];
	$theme =  $_POST["theme"];
	$language =  $_POST["language"];
	
	
	$firma =  $_POST["firma"];
	$name =  $_POST["name"];
	$street =  $_POST["street"];
	$city =  $_POST["city"];
	$zipcode =  $_POST["zipcode"];
	$country =  $_POST["country"];
	$taxnumber =  $_POST["taxnumber"];
	$phone =  $_POST["phone"];
	$prefix_firma =  $_POST["prefix_firma"];
	$maintenance =  $_POST["maintenance"];
	$session_timeout =  $_POST["session_timeout"];
	
		
	$sql =  $db->Query("UPDATE " . prefix . "settings SET sitename =  '$sitename', url =  '$url', infoemail =  '$infoemail', firma =  '$firma', name =  '$name', street =  '$street', city =  '$city', zipcode =  '$zipcode', country =  '$country', taxnumber =  '$taxnumber', phone = '$phone', prefix_firma = '$prefix_firma', maintenance = '$maintenance',  theme = '$theme', lang = '$language', session_timeout = '$session_timeout' WHERE id = '1'");
	
	$saveok =  TRUE;

	}
}

	
// Benötigte Datensätze auslesen


	$folder = "../templates";
	$dir_array = scandir($folder);


	$langfolder = "../backend/inc/lang";
	$lang_array = scandir($langfolder);
	
	$lang_array = array_slice($lang_array, 2);
										
	foreach ($lang_array as $row_lang) { 
	
			$nex_lang = array();
			
			include(BASEDIR . "/backend/inc/lang/" . $row_lang);
			
			
				$la_array[$nex_lang["LANGUAGE_SHORT"]]["language"] = $nex_lang["LANGUAGE"];
				$la_array[$nex_lang["LANGUAGE_SHORT"]]["language_short"] = $nex_lang["LANGUAGE_SHORT"];
				$la_array[$nex_lang["LANGUAGE_SHORT"]]["file"] = $row_lang;
			
		
	}

	$sql =  $db->Query("SELECT * FROM " . prefix . "settings WHERE id =  '1'");
	$result =  $sql->fetchrow();
	
	$sitename = $result->sitename;
	$url = $result->url;
	$infoemail = $result->infoemail;
	$theme = $result->theme;
	$firma = $result->firma;
	$name = $result->name;
	$street = $result->street;
	$city = $result->city;
	$zipcode = $result->zipcode;
	$country = $result->country;
	$taxnumber = $result->taxnumber;
	$phone = $result->phone;
	$prefix_firma = $result->prefix_firma;
	$maintenance = $result->maintenance;
	$session_timeout = $result->session_timeout;
	$language = $result->lang;
	
	
    $tmpl->assign("sitename", $sitename);
    $tmpl->assign("url", $url);
    $tmpl->assign("infoemail", $infoemail);
    $tmpl->assign("firma", $firma);
    $tmpl->assign("name", $name);
    $tmpl->assign("street", $street);
    $tmpl->assign("city", $city);
    $tmpl->assign("zipcode", $zipcode);
    $tmpl->assign("country", $country);
    $tmpl->assign("taxnumber", $taxnumber);
    $tmpl->assign("phone", $phone);
    $tmpl->assign("prefix_firma", $prefix_firma);
    $tmpl->assign("maintenance", $maintenance);
    $tmpl->assign("session_timeout", $session_timeout);
    $tmpl->assign("language", $language);
	

	
	$tmpl->assign("theme", $THEME);
    $tmpl->assign("se_array", $se_array);
    $tmpl->assign("la_array", $la_array);
    $tmpl->assign("dir_array", $dir_array);
    $tmpl->assign("act", $act);
	
    $tmpl->assign("lang", $lang);
	
    $tmpl->assign("saveok", $saveok);
	
	$tmpl->assign("content", parsetrue("container/".container("static"), "Einstellungen" , $tmpl->fetch("settings/settings.tpl"))); 
	
?>