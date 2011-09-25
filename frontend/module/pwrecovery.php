<?php 

// pwrecovery.php

// Info:
//
// n/A
//

	
	$step = $_GET["step"]; 
	
	if ( $step == "2" ) {
	
		$vemail = $_POST["vemail"]; 
		
		$sql = $db->Query("SELECT email FROM " . prefix_cpmin . "members WHERE email = '" . $vemail . "' LIMIT 1");
		$result = $sql->fetchrow();

		$email = $result->email;

		if ( $email != "" ) {
			 
			$verify = (generatePassword($length=25));
			
			$sql = $db->Query("UPDATE " . prefix_cpmin . "members SET verify = '" . $verify . "' WHERE email = '" . $vemail . "' LIMIT 1");
		
			// Zugangsdaten E-Mail versenden
	
    		$email_to = $email; // Empfänger
	 
    		$email_from_mail = $SITE_EMAIL_INFO; // Absender-E-Mailadresse
    
    		$email_from_name = "$SITE_URL - System";  // Absender-Name
     
   	 		$email_betreff = "--- Passwort Wiederherstellung - Bestaetigung - $SITE_URL ---";  // Betreff
	 
   	 		$text = "Sehr geehrter Kunde,\n\ndu hast deine Zugangsdaten vergessen. Um dich als Inhaber dieses Accounts zu verifizieren, musst du den unten stehenden Bestaetigungscode in das Formular auf $SITE_URL eintragen.\n\n\nBestaetigungscode: " . $verify . "\n\n\nSolltest du kein neues Passwort angefordert haben, kannst du diese E-Mail als gegenstandslos ansehen.\n\n\nBei Fragen stehen wir dir jederzeit zur Verfuegung.\n\n\nTeamspeak 3 Server Webinterface\n";
				
    		$header="From:$email_from_name<$email_from_mail>\n";   
    		$header .= "X-Mailer: PHP/" . phpversion(). "\n";          
    		$header .= "X-Sender-IP: $REMOTE_ADDR\n"; 
    		$header .= "Content-Type: text/plain"; 
	
    		if ( mail($email_to,$email_betreff,$text,$header) ) { $sendmail = TRUE; }
	
   			$tmpl->assign("vemail", $vemail);
			
		} else { 
		
		 $step = "0";
		}
		
	}
	
	if ( $step == "3" ) {
	
		$vemail = $_POST["vemail"]; 
		$vcode = $_POST["vcode"]; 
		
		$sql = $db->Query("SELECT verify FROM " . prefix_cpmin . "members WHERE email = '" . $vemail . "' LIMIT 1");
		$result = $sql->fetchrow();

		$verify = $result->verify;
		
		if ( $vcode == $verify ) {
		
			$password = (generatePassword($length=5));
	
			$sql = $db->Query("UPDATE " . prefix_cpmin . "members SET password = '" . md5($password) . "' WHERE email = '" . $vemail . "'");
			
			// Zugangsdaten E-Mail versenden
	
    		$email_to = $vemail; // Empfänger
	 
    		$email_from_mail = $SITE_EMAIL_INFO; // Absender-E-Mailadresse
    
    		$email_from_name = "$SITE_URL - System";  // Absender-Name
     
   	 		$email_betreff = "--- Deine Zugangsdaten - Erneute Zusendung - $SITE_URL ---";  // Betreff
	 
   	 		$text = "Sehr geehrter Kunde,\n\nim folgendem erhaelst du die Zugangsdaten um dich in das Webinterface einloggen zu koennen:\n\n\nLogin Seite: http://www.$SITE_URL\nE-Mail: ".$vemail."\nPasswort: ".$password."\n\n\nTeamspeak 3 Server Webinterface\n";
				
    		$header="From:$email_from_name<$email_from_mail>\n";   
    		$header .= "X-Mailer: PHP/" . phpversion(). "\n";          
    		$header .= "X-Sender-IP: $REMOTE_ADDR\n"; 
    		$header .= "Content-Type: text/plain"; 
	
    		if ( mail($email_to,$email_betreff,$text,$header) ) { $sendmail = TRUE; }
	
   			$tmpl->assign("vemail", $vemail);
			
		} else { 
		
		 $step = "0";
		}
	}
	
	
    $tmpl->assign("step", $step);
	
	$tmpl->assign("theme", $THEME);
    $tmpl->assign("pages", $nav);
	
	$tmpl->assign("content", parsetrue("container/".container("static"), "Password Wiederherstellung" , $tmpl->fetch("pwrecovery/pwrecovery.tpl")));

?>