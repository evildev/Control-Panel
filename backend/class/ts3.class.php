<?php

class ts3 {
  
	function connect($ip, $tcp, $timeout = 3) {
		
		$this->__construct();
    	
		if(!$this->connection = fsockopen($ip, $tcp, $errno, $errstr, $timeout))		
        	return false;
    			
		$this->server = $sIP;
		$this->tcp    = $sTCP;
				
		return true;
	}
	
	
	function login($name, $password) {
		if(!$this->_fastcall("login client_login_name=$name client_login_password=$password"))
			return false;
		$this->isadmin  = true;
		$this->issadmin = true;
		$this->name = $name;
		$this->password = $password;
		return true;
	}
	
	
	function version() {
	
		$res = $this->_fastcall("version");
		
		$sRead = explode(" ", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
				$rLine = str_replace("error", "", $rLine);
			if (strstr($rLine, "=")) {
				$match = explode("=", trim($rLine), 2);
				$key = $match[0];
				$val = $match[1];
				$sInfo[$key] = $val;
			}
		}
		
		return $sInfo;
	}
	
	
	function serverquery($command) {
	
		$res = $this->_fastcall($command);
		
		$sRead = explode(" ", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
				$rLine = str_replace("error", "", $rLine);
				$rLine = str_replace("\s", " ", $rLine);
			if (strstr($rLine, "=")) {
				
				$match = explode("=", trim($rLine), 2);
				$key = $match[0];
				$val = $match[1];
				$sInfo[$key] = $val;
			}
		}
		
		return $sInfo;
	}
	
	
	
	
	function hostinfo() {
	
		$res = $this->_fastcall("hostinfo");
		
		$sRead = explode(" ", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			if (strstr($rLine, "=")) {
				$match = explode("=", trim($rLine), 2);
				$key = $match[0];
				$val = $match[1];
				$sInfo[$key] = $val;
			}
		}
		
		return $sInfo;
	}
	
	
	function serverinfo() {
	
		$res = $this->_fastcall("serverinfo");
		
		$sRead = explode(" ", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
				$rLine = str_replace("\s", " ", $rLine);
				$rLine = str_replace("\p", "|", $rLine);
				$rLine = str_replace("\/", "/", $rLine);
				$rLine = str_replace("error", "", $rLine);
			if (strstr($rLine, "=")) {
				$match = explode("=", trim($rLine), 2);
				$key = $match[0];
				$val = $match[1];
				$sInfo[$key] = $val;
			}
		}
		
		return $sInfo;
	}
	
	
	function instanceinfo() {
	
		$res = $this->_fastcall("instanceinfo");
		
		$sRead = explode(" ", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
				$rLine = str_replace("\s", " ", $rLine);
				$rLine = str_replace("\p", "|", $rLine);
				$rLine = str_replace("\/", "/", $rLine);
				$rLine = str_replace("error", "", $rLine);
			if (strstr($rLine, "=")) {
				$match = explode("=", trim($rLine), 2);
				$key = $match[0];
				$val = $match[1];
				$sInfo[$key] = $val;
			}
		}
		
		return $sInfo;
	}
	
	
	function channellist() {
	
		$res = $this->_fastcall("channellist");
				
		$sRead = explode("|", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			$a = $a + 1;
				
				$uRead = explode(" ", $rLine);
		
				foreach ($uRead as $uLine) {
			
						$uLine = str_replace("\s", " ", $uLine);
						$uLine = str_replace("\p", "|", $uLine);
						$uLine = str_replace("\/", "/", $uLine);
						
						$match = explode("=", trim($uLine), 2);
						$key = $match[0];
						$val = $match[1];
						$sInfo[$a-1][$key] = $val;
						
				}
		}
		
	return $sInfo;
	}
	
	
	function clientdblist_simple($start,$duration) {
	
		$res = $this->_fastcall("clientdblist start=$start duration=$duration");
				
		$sRead = explode("|", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			$a = $a + 1;
				
				$uRead = explode(" ", $rLine);
		
				foreach ($uRead as $uLine) {
			
						$match = explode("=", trim($uLine), 2);
						$key = $match[0];
						$val = $match[1];
						$sInfo[$a-1][$key] = $val;
						
				}
		}
		
	return $sInfo;
	}
	
	
	function channelgroup($cgid) {
	
		$res = $this->_fastcall("channelgrouplist");
				
		$sRead = explode("|", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			$a = $a + 1;
				
				$uRead = explode(" ", $rLine);
				

				if (in_array('cgid='.$cgid, $uRead)) {
				foreach ($uRead as $uLine) {
			
						
						$uLine = str_replace("\s", " ", $uLine);
						$uLine = str_replace("\p", "|", $uLine);
						$uLine = str_replace("\/", "/", $uLine);
				
						$match = explode("=", trim($uLine), 2);
						$key = $match[0];
						$val = $match[1];
						
						$sInfo[$key] = $val;
						
				}
				}
		}
		
	return $sInfo;
	}
	
	
	
	function channel($cid) {
	
		$res = $this->_fastcall("channellist");
				
		$sRead = explode("|", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			$a = $a + 1;
				
				$uRead = explode(" ", $rLine);
				

				if (in_array('cid='.$cid, $uRead)) {
				foreach ($uRead as $uLine) {
			
						
						$uLine = str_replace("\s", " ", $uLine);
						$uLine = str_replace("\p", "|", $uLine);
						$uLine = str_replace("\/", "/", $uLine);
				
						$match = explode("=", trim($uLine), 2);
						$key = $match[0];
						$val = $match[1];
						
						$sInfo[$key] = $val;
						
				}
				}
		}
		
	return $sInfo;
	}
	
	
	function servergroup($sgid) {
	
		$res = $this->_fastcall("servergrouplist");
				
		$sRead = explode("|", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			$a = $a + 1;
				
				$uRead = explode(" ", $rLine);
				

				if (in_array('sgid='.$sgid, $uRead)) {
				foreach ($uRead as $uLine) {
			
						
						$uLine = str_replace("\s", " ", $uLine);
						$uLine = str_replace("\p", "|", $uLine);
						$uLine = str_replace("\/", "/", $uLine);
				
						$match = explode("=", trim($uLine), 2);
						$key = $match[0];
						$val = $match[1];
						
						$sInfo[$key] = $val;
						
				}
				}
		}
		
	return $sInfo;
	}
	
	
	
	function servergroup_copy($sgid,$template_sgid) {
	
		$res = $this->_fastcall("permissionlist");
		
		$servergrouppermlist = $this->servergrouppermlist($template_sgid);
		$permissionlist_simple =  $this->permissionlist_simple($template_sgid);
		
		
		$sRead = explode("|", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			$a = $a + 1;
				
								
				$uRead = explode(" ", $rLine);
				
				foreach ($uRead as $uLine) {
									
						$match = explode("=", trim($uLine), 2);
						$key = $match[0];
						$val = $match[1];
						
						$sInfo[$a-1][$key] = $val;
						
						if ($key == "permid") { 
							
							$this->fastcall("servergroupdelperm sgid=$sgid permid=$val");
							
							foreach ($servergrouppermlist as $permission) { 
							
								foreach ($permission as $permkey => $permvalue) { 
									if ($permission['permid'] == $val) {
									
										$this->fastcall("servergroupaddperm sgid=$sgid permid=$val permvalue=" . $permission['permvalue'] . " permnegated=" . $permission['permnegated'] . " permskip=" . $permission['permskip']);
									
									}
								}
							}
							
							foreach ($permissionlist_simple as $grantpermission) { 
							
								foreach ($grantpermission as $grantpermkey => $grantpermvalue) { 
									
									
									if(substr($grantpermvalue, 22) == substr($val, 2) && $grantpermission['permvalue'] != "") {
																		
										$this->fastcall("servergroupaddperm sgid=$sgid permid=$val permvalue=" . $grantpermission['permvalue'] . " permnegated=" . $grantpermission['permnegated'] . " permskip=" . $grantpermission['permskip']);
										
									} elseif ($grantpermission['permid'] == $val && $grantpermission['permvalue'] == "") {
									
										$this->fastcall("servergroupdelperm sgid=$sgid permid=$val");
									}
								}
							}
							
							
						}
						
				}
				
		}
		
	return $sInfo;
	}
	
	
	
	function permissionlist_simple($sgid) {
	
		$res = $this->_fastcall("permissionlist");
		
		$servergrouppermlist = $this->servergrouppermlist($sgid);
		
		$sRead = explode("|", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			$a = $a + 1;
				
				
				if(strpos($rLine, 'i_needed_modify_power_') == TRUE ) {
				
				$uRead = explode(" ", $rLine);
				
				foreach ($uRead as $uLine) {
			
						
						$uLine = str_replace("\s", " ", $uLine);
						$uLine = str_replace("\p", "|", $uLine);
						$uLine = str_replace("\/", "/", $uLine);
						
						$match = explode("=", trim($uLine), 2);
						$key = $match[0];
						$val = $match[1];
						
						$sInfo[$a-1][$key] = $val;
						if ($key == "permname") { 
							
							if(substr($val, 0, 2)=='i_') {
							
								$sInfo[$a-1]["datatype"] = "integer"; 
								
							} else {
							
								$sInfo[$a-1]["datatype"] = "boolean"; 
							
							}
			
			
						}
						
						if ($key == "permid") { 
							
							
							foreach ($servergrouppermlist as $permission) { 
							
								foreach ($permission as $permkey => $permvalue) { 
									if ($permission['permid'] == $val ) {
									
									if ($permkey == "permvalue") {
								
										$sInfo[$a-1]["permvalue"] = $permvalue; 
										
									}
									
									if ($permkey == "permnegated") {
								
										$sInfo[$a-1]["permnegated"] = $permvalue; 
										
									}
									
									if ($permkey == "permskip") {
								
										$sInfo[$a-1]["permskip"] = $permvalue; 
										
									}
									
									if ($permvalue == $val) {
								
										$sInfo[$a-1]["set"] = "1"; 
							
									}
									}
								}
							}
						}
						
				}
				}
				
		}
		
	return $sInfo;
	}
	
	
	
	function permissionlist($sgid) {
	
		$res = $this->_fastcall("permissionlist");
		
		$servergrouppermlist = $this->servergrouppermlist($sgid);
		$permissionlist_simple =  $this->permissionlist_simple($sgid);
		
		
		$sRead = explode("|", $res);
		$sInfo = array();
		
		
		
		$english = "Read ServerQuery help files|Retrieve global server version|Retrieve global server information|List virtual servers|List IP bindings|List permissions available|Find permissions|Create virtual servers|Delete virtual servers|Start any virtual server|Stop any virtual server|
Change a virtual servers machine ID|Login to ServerQuery|Send text messages to all virtual servers at once|Retrieve global server log|Write to global server log|Shutdown the server process|Edit global settings|Edit global ServerQuery groups|Edit global template groups|Select a virtual server|Retrieve virtual server information|Retrieve virtual server connection information|List channels on a virtual server|Search for channels on a virtual server|List clients online on a virtual server|Search for clients online on a virtual server|List client identities known by the virtual server|Search for client identities known by the virtual server|Find permissions|Find custom fields|Start own virtual server|Stop own virtual server|List tokens available|Create new tokens|Use a token to gain privileges|Delete a token|Retrieve virtual server log|Write to virtual server log|Join virtual server ignoring its password|Register for server notifications|Unregister from server notifications|Create server snapshots|Deploy server snapshots|Modify server name|Modify welcome message|Modify servers max clients|Modify server password|Modify default Server Group|Modify default Channel Group|Modify default Channel Admin Group|Modify channel force silence value|Modify individual complain settings|Modify individual antiflood settings|Modify file transfer settings|Modify file transfer quotas|Modify individual hostmessage settings|Modify individual hostbanner settings|Modify individual hostbutton settings|Modify server port|Modify server autostart|Modify required identity security level|Modify priority speaker dimm modificator|Modify log settings|Modify min client version|Retrieve channel information|Create sub-channels|Create permanent channels|Create semi-permanent channels|Create temporary channels|Create channels with a topic|Create channels with a description|Create password protected channels|Create channels using Speex Narrowband (8 kHz) codecs|Create channels using Speex Wideband (16 kHz) codecs|Create channels using Speex Ultra-Wideband (32 kHz) codecs|Create channels using the CELT Mono (48 kHz) codec|Create channels with custom codec quality|Create channels with custom max clients|Create channels with custom max family clients|Create channels with custom sort order|Create default channels|Create channels with needed talk power|Move channels|Make channel default|Make channel permanent|Make channel semi-permanent|Make channel temporary|Modify channel name|Modify channel topic|Modify channel description|Modify channel password|Modify channel codec|Modify channel codec quality|Modify channels max clients|Modify channels max family clients|Modify channel sort order|Change needed channel talk power|Channel modify power|Needed channel modify power|Delete permanent channels|Delete semi-permanent channels|Delete temporary channels|Force channel delete|Join permanent channels|Join semi-permanent channels|Join temporary channels|Join channel ignoring its password|Ignore channels max clients limit|
Channel join power|Needed channel join power|Channel subscribe power|Needed channel subscribe power|Min channel creation depth in hierarchy|Max channel creation depth in hierarchy|Stop inheritance of Channel Group permissions|List server groups|List server group permissions|List clients from a server group|List channel groups|List channel group permissions|List clients from a channel group|List client permissions|List channel permissions|List channel client permissions|Create server groups|Create channel groups|Group modify power|Needed group modify power|Group member add power|Needed group member add power|Group member delete power|Needed group member delete power|Permission modify power|Delete server groups|Delete channel groups|Group icon identifier|Group is permanent|Retrieve client information|Retrieve client permissions overview|View client IP address and port|ServerQuery view power|Needed ServerQuery view power|Client kick power|Needed client kick power|Client ban power|Needed client ban power|Client move power|Needed client move power|Complain power|Needed complain power|Show complain list|Delete own complains|Delete complains|Show banlist|Add a ban|Delete own bans|Delete bans|Max bantime|Client private message power|Needed client private message power|Send text messages to virtual server|Send text messages to channel|Send offline messages to clients|Client talk power|Needed client talk power|Client poke power|Needed client poke power|Set the talker flag for clients and allow them to speak|Edit a clients description|Edit a clients properties in the database|Delete a clients properties in the database|Create or modify own ServerQuery account|Max additional connections per client identity|Max idle time in seconds|Max avatar filesize in bytes|Max channel subscriptions|Client is priority speaker|Ignore channel group permissions|Force Push-To-Talk capture mode|Ignore bans|Ignore antiflood measurements|Issue query commands from client|Browse files without channel password|Retrieve list of running filetransfers|File upload power|Needed file upload power|File download power|Needed file download power|File delete power|Needed file delete power|File rename power|Needed file rename power|File browse power|Needed file browse power|Create directory power|Needed create directory power|Download quota per client in MByte|Upload quota per client in MByte|";

		$german = "ServerQuery Hilfedateien auslesen|globale Serverversion abrufen|globale Serverinformationen abrufen|virtuelle Server auflisten|IP Verknüpfungen auflisten|verfügbare Genehmigungen auflisten|Genehmigungen ermitteln|virtuellen Server erstellen|virtuellen Server entfernen|jeglichen virtuellen Server starten|jeglichen virtuellen Server stoppen|die Kennnummer eines virtuellen Servers verändern|im ServerQuery anmelden|gleichzeitig an alle virtuellen Server eine Textnachricht senden|globalen Serverprotokoll abrufen|in globalen Serverprotokoll schreiben|den Serverprozess beenden|globale Einstellungen ändern|globale ServerQuery Gruppen ändern|globale Vorlagegruppen ändern|einen virtuellen Server wählen|virtuelle Serverinformationen abrufen|virtuelle Serververbindungsinformationen abrufen|Channel auf einem virtuellen Server auflisten|Channel auf einem virtuellen Server suchen|
verbundene Clients auf einem virtuellen Server auflisten|verbundene Clients auf einem virtuellen Server suchen|vom virtuellen Server bekannte Clientidentitäten auflisten|vom virtuellen Server bekannte Clientidentitäten suchen|Genehmigungen ermitteln|angepasste Bereiche ermitteln|eigenen virtuellen Server starten|eigenen virtuellen Server stoppen|verfügbare Tokens auflisten|neue Tokens erstellen|ein Token benutzen, um Privilegien zu erhalten|ein Token löschen|virtuellen Serverprotokoll abrufen|in virtuellen Serverprotokoll schreiben|passwortgeschützte Sever betreten, ohne das Passwort zu kennen|für Serverbenachrichtigungen registrieren|von Serverbenachrichtigungen löschen|Speicherauszug vom Server erstellen|Speicherauszug vom Server anwenden|Servernamen ändern|Willkommensnachricht ändern|maximale Clients ändern|Serverpasswort ändern|Standard Servergruppe ändern|Standard Channelgruppe ändern|Standard Channeladmingruppe ändern|erzwungenen Channelstillewert ändern|Beschwerdeeinstellungen ändern|Antifloodeinstellungen ändern|Datentransfereinstellungen ändern|Datentransferquota ändern|Hostnachrichteinstellungen ändern|Hostbannereinstellungen ändern|Hostbuttoneinstellungen ändern|Serverport ändern|Server automatisch starten|benötigte Sicherheitsstufe ändern|Gesprächsleiter Dimm Stufe ändern|Protokolleinstellungen ändern|minimale Clientversion ändern|Channelinformationen abrufen|Sub-Channel erstellen|permanente Channel erstellen|semi-permanente Channel erstellen|temporäre Channel erstellen|Channel mit einem Thema erstellen|Channel mit einer Beschreibung erstellen|passwortgeschützte Channel erstellen|Channel mit Speex Schmalband (8 kHz) Codec erstellen|Channel mit Speex Breitband (16 kHz) Codec erstellen|Channel mit Speex Ultra-Breitband (32 kHz) Codec erstellen|Channel mit CELT Mono (48 kHz) Codec erstellen|Channel mit angepasster Codecqualität erstellen|Channel mit max. Clients erstellen|Channel mit max. familiären Clients erstellen|Channel mit angepasster Einordnung erstellen|Standard Channel erstellen|Channel mit benötigter Talk-Power erstellen|Channel bewegen|Channel zu Standard machen|Channel permanent machen|Channel semi-permanent machen|Channel temporär machen|Channelnamen ändern|Channelthemen ändern|Channelbeschreibungen ändern|Channelpasswörter ändern|Channelcodecs ändern|Channelcodecqualitäten ändern|max. Clients eines Channels ändern|max. familiäre Clients eines Channels ändern|Channeleinordnung ändern|benötigte Talk-Power eines Channels ändern|Channeländerungs-Stufe|Benötigte Channeländerungs-Stufe|permanente Channel löschen|semi-permanente Channel löschen|temporäre Channel löschen|Channellöschung erzwingen|permanenten Channeln beitreten|semi-permanenten Channeln beitreten|temporären Channeln beitreten|passwortgeschützten Channeln beitreten, ohne das Passwort zu kennen|max. Clients Limit eines Channels ignorieren|Channelbeitret-Stufe|Benötigte Channelbeitret-Power|Channelabonnier-Stufe|Benötigte Channelabonnier-Stufe|Min. Channelerstellungstiefe in Hierarchie|Max. Channelerstellungstiefe in Hierarchie|Überschneidungen von Genehmigungen einer Channelgruppe ignorieren|Servergruppen auflisten|Genehmigungen von Servergruppen auflisten|Clients einer Servergruppe auflisten|Channelgruppen auflisten|Genehmigungen von Channelgruppen auflisten|Clients einer Channelgruppe auflisten|Genehmigungen von Clients auflisten|Genehmigungen in Channels auflisten|Genehmigungen von Clients in Channels auflisten|Servergruppen erstellen|Channelgruppen erstellen|Gruppenänderungs-Power|Benötigte Gruppenänderungs-Power|Gruppenmitgliederhinzufüg-Power|Benötigte Gruppenmitgliederhinzufüg-Power|Gruppenmitgliederlösch-Power|Benötigte Gruppenmitgliederlösch-Power|Genehmigungsänderungs-Power|Servergruppen löschen|Channelgruppen löschen|Gruppenlogokennung|Gruppe ist permanent|Clientinformationen abfragen|Clientgenehmigungenübersicht abfragen|IP Adresse und Port eines Clients einsehen|ServerQuery Einsicht-Power|Benötigte ServerQuery Einsicht-Power|Client-Kick-Power|Benötigte Client-Kick-Power|Client-Bann-Power|Benötigte Client-Bann-Power|Client-Bewegen-Power|Benötigte Client-Bewegen-Power|Beschwerde-Power|Benötigte Beschwerde-Power|Beschwerden anzeigen|eigene Beschwerden löschen|Beschwerden löschen|Bannliste ansehen|Banne hinzufügen|eigene Banne löschen|Banne löschen|Max. Bannzeit|Client-Text-Chat-Power|Benötigte Client-Text-Chat-Power|Textnachrichten zum virtuellen Server senden|Textnachrichten zum Channel senden|Nachrichten zu offline Clients senden|Client-Talk-Power|Benötigte Client-Talk-Power|Client-Anstupsen-Power|Benötigte Client-Anstupsen-Power|Talk-Power vergeben|Beschreibungen von Clients ändern|Optionen von Clients in der Datenbank ändern|Eigenschaften von Clients aus der Datenbank löschen|eigenen ServerQuery Account erstellen oder ändern|Max. zusätzliche Verbindungen pro Clientidentität|Max. untätige Zeit in Sekunden|Max. Avatargröße in Bytes|Max. Channelabonnements|Client ist Gesprächsleiter|Channelgruppengenehmigungen ignorieren|Push-To-Talk Modus erzwingen|Banne ignorieren|Anti-Floodwerte ignorieren|Querykommandos vom Client erlassen|Dateien durchsuchen, ohne das Channelpasswort zu kennen|Listen von laufenden Datentransfers abrufen|Dateien-Upload-Power|Benötigte Dateien-Upload-Power|Dateien-Download-Power|Benötigte Dateien-Download-Power|Dateien-Lösch-Power|Benötigte Dateien-Lösch-Power|Dateien-Umbenenn-Power|Benötigte Dateien-Umbenenn-Power|Dateien-Durchsuchen-Power|Benötigte Dateien-Durchsuchen-Power|Ordner-Erstellen-Power|Benötigte Ordner-Erstellen-Power|Downloadquota pro Client in Megabytes|Uploadquota pro Client im Megabytes|";

		
	
    	$permdesc_english = array();
	
    	$permdesc_english = explode('|',$english);
		
		
	
    	$permdesc_german = array();
	
    	$permdesc_german = explode('|',$german);
		

		foreach ($sRead as $rLine) {
			$a = $a + 1;
			$pos = $pos + 1;
				
				if(strpos($rLine, 'i_needed_modify_power_') != TRUE ) {
				
				$uRead = explode(" ", $rLine);
				
				foreach ($uRead as $uLine) {
			
						
						$uLine = str_replace("\s", " ", $uLine);
						$uLine = str_replace("\p", "|", $uLine);
						$uLine = str_replace("\/", "/", $uLine);
						
						$match = explode("=", trim($uLine), 2);
						$key = $match[0];
						$val = $match[1];
						
						$sInfo[$a-1][$key] = $val;
						if ($pos == 15) { 
						
							$sInfo[$a-1]["pos"] = $pos; 
							$pos = 0;
							
						}
						
						if ($key == "permdesc") { 
						
							$val_german = str_replace($permdesc_english, $permdesc_german, $val);
							
							$sInfo[$a-1]["permdesc_german"] = $val_german; 
							
						}
						if ($key == "permname") { 
							
							if(substr($val, 0, 2)=='i_') {
							
								$sInfo[$a-1]["datatype"] = "integer"; 
								
							} else {
							
								$sInfo[$a-1]["datatype"] = "boolean"; 
							
							}
		
							foreach ($permissionlist_simple as $grantpermission) { 
							
								foreach ($grantpermission as $grantpermkey => $grantpermvalue) { 
									
									
									if(substr($grantpermvalue, 22) == substr($val, 2)) {
								
										$sInfo[$a-1]["grantvalue"] = $grantpermission['permvalue']; 
										$sInfo[$a-1]["grantpermid"] = $grantpermission['permid']; 
							
									}
								}
							}
							
							
						}
						
						if ($key == "permid") { 
							
							
							foreach ($servergrouppermlist as $permission) { 
							
								foreach ($permission as $permkey => $permvalue) { 
									if ($permission['permid'] == $val ) {
									
									if ($permkey == "permvalue") {
								
										$sInfo[$a-1]["permvalue"] = $permvalue; 
										
									}
									
									if ($permkey == "permnegated") {
								
										$sInfo[$a-1]["permnegated"] = $permvalue; 
										
									}
									
									if ($permkey == "permskip") {
								
										$sInfo[$a-1]["permskip"] = $permvalue; 
										
									}
									
									if ($permvalue == $val) {
								
										$sInfo[$a-1]["set"] = "1"; 
							
									}
									}
								}
							}
						}
						
						}
						
				}
		}
		
	return $sInfo;
	}
	
	
	
	function clientdblist_find($start,$duration,$methode,$value) {
	
		$res = $this->_fastcall("clientdblist start=$start duration=$duration");
		
		$clientlist = $this->clientlist();
		
		if ( $methode == "uniqueid" ) {
		
			$cldbid = $this->serverquery("clientdbfind pattern=$value -uid");
			$cldbid = $cldbid["cldbid"];
		
		}
		
		if ( $methode == "databaseid" ) {
		
			$cldbid = $value;
			
		}
				
		$sRead = explode("|", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			$a = $a + 1;
				
				
				$uRead = explode(" ", $rLine);
		
				$pos = strpos($rLine, 'cldbid=' . $cldbid );
				
				if ($pos !== FALSE) {
				
				foreach ($uRead as $uLine) {
			
						$uLine = str_replace("\s", " ", $uLine);
						$uLine = str_replace("\p", "|", $uLine);
						$uLine = str_replace("\/", "/", $uLine);
						
						$match = explode("=", trim($uLine), 2);
						$key = $match[0];
						$val = $match[1];
						$sInfo[$a-1][$key] = $val;
						if ($key == "cldbid") { 
							$res = $this->serverquery("servergroupsbyclientid cldbid=" . $val);
							$sInfo[$a-1]["sgname"] = $res["name"]; 
							
							
							foreach ($clientlist as $client) { 
							
								foreach ($client as $clkey => $clvalue) { 
									
									
									if ($clvalue == $val) {
								
										$sInfo[$a-1]["status"] = "online"; 
							
									}
								}
							}
						}
						}
				}
		}
		
	return $sInfo;
	}
	
	
	
	function clientdblist($start,$duration) {
	
		$res = $this->_fastcall("clientdblist start=$start duration=$duration");
		
		$clientlist = $this->clientlist();
		
		$sRead = explode("|", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			$a = $a + 1;
				
				$uRead = explode(" ", $rLine);
		
				foreach ($uRead as $uLine) {
			
						$uLine = str_replace("\s", " ", $uLine);
						$uLine = str_replace("\p", "|", $uLine);
						$uLine = str_replace("\/", "/", $uLine);
						
						$match = explode("=", trim($uLine), 2);
						$key = $match[0];
						$val = $match[1];
						$sInfo[$a-1][$key] = $val;
						if ($key == "cldbid") { 
							$res = $this->serverquery("servergroupsbyclientid cldbid=" . $val);
							$sInfo[$a-1]["sgname"] = $res["name"]; 
							
							
							foreach ($clientlist as $client) { 
							
								foreach ($client as $clkey => $clvalue) { 
									
									
									if ($clvalue == $val) {
								
										$sInfo[$a-1]["status"] = "online"; 
							
									}
								}
							}
						}
						
				}
		}
		
	return $sInfo;
	}
	
	
	
	function servergroupclients($sgid) {
	
		$res = $this->_fastcall("servergroupclientlist sgid=$sgid -names");
		
		$clientlist = $this->clientlist();
		
		$sRead = explode("|", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			$a = $a + 1;
				
				$uRead = explode(" ", $rLine);
		
				foreach ($uRead as $uLine) {
			
						$uLine = str_replace("\s", " ", $uLine);
						$uLine = str_replace("\p", "|", $uLine);
						$uLine = str_replace("\/", "/", $uLine);
						$uLine = str_replace("error", "", $uLine);
				
						$match = explode("=", trim($uLine), 2);
						$key = $match[0];
						$val = $match[1];
						$sInfo[$a-1][$key] = $val;
						
				}
		}
		
	return $sInfo;
	}
	
	
	function servergrouppermlist($sgid) {
	
		$res = $this->_fastcall("servergrouppermlist sgid=$sgid");
		
		$sRead = explode("|", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			$a = $a + 1;
				
				$uRead = explode(" ", $rLine);
		
				foreach ($uRead as $uLine) {
			
						$uLine = str_replace("\s", " ", $uLine);
						$uLine = str_replace("\p", "|", $uLine);
						$uLine = str_replace("\/", "/", $uLine);
						
						$match = explode("=", trim($uLine), 2);
						$key = $match[0];
						$val = $match[1];
						$sInfo[$a-1][$key] = $val;
						
				}
		}
		
	return $sInfo;
	}
	
	
	function clientlist() {
	
		$res = $this->_fastcall("clientlist");
		
		$sRead = explode("|", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			$a = $a + 1;
				
				$uRead = explode(" ", $rLine);
		
				foreach ($uRead as $uLine) {
			
						$uLine = str_replace("\s", " ", $uLine);
						$uLine = str_replace("\p", "|", $uLine);
						$uLine = str_replace("\/", "/", $uLine);
						
						$match = explode("=", trim($uLine), 2);
						$key = $match[0];
						$val = $match[1];
						$sInfo[$a-1][$key] = $val;
						
				}
		}
		
	return $sInfo;
	}
	
	
	function logview() {
	
		$res = $this->_fastcall("logview limitcount=50 comparator={=2}");
		
		$sRead = explode("|", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			$a = $a + 1;
				
				$uRead = explode(" ", $rLine);
		
				foreach ($uRead as $uLine) {
			
						$uLine = str_replace("\s", " ", $uLine);
						$uLine = str_replace("\p", "|", $uLine);
						$uLine = str_replace("\/", "/", $uLine);
						
						$match = explode("=", trim($uLine), 2);
						$key = $match[0];
						$val = $match[1];
						$sInfo[$a-1][$key] = $val;
						
				}
		}
		
	return $sInfo;
	}
	
	
	function servergrouplist() {
	
		$res = $this->_fastcall("servergrouplist");
		
		$serverinfo = $this->serverinfo();
	
		$virtualserver_default_server_group = $serverinfo["virtualserver_default_server_group"];
		
		$sRead = explode("|", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			$a = $a + 1;
				
				$uRead = explode(" ", $rLine);
		
				foreach ($uRead as $uLine) {
			
						$uLine = str_replace("\s", " ", $uLine);
						$uLine = str_replace("\p", "|", $uLine);
						$uLine = str_replace("\/", "/", $uLine);
						
						$match = explode("=", trim($uLine), 2);
						$key = $match[0];
						$val = $match[1];
						$sInfo[$a-1][$key] = $val;
						if ($key == "sgid" && $val == $virtualserver_default_server_group) { 
						
							$sInfo[$a-1]["default_server_group"] = "1"; 
							
						}
				}
		}
		
	return $sInfo;
	}
	
	
	function channelgrouplist() {
	
		$res = $this->_fastcall("channelgrouplist");
		
		$serverinfo = $this->serverinfo();
	
		
		$sRead = explode("|", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			$a = $a + 1;
				
				$uRead = explode(" ", $rLine);
		
				foreach ($uRead as $uLine) {
			
						$uLine = str_replace("\s", " ", $uLine);
						$uLine = str_replace("\p", "|", $uLine);
						$uLine = str_replace("\/", "/", $uLine);
						
						$match = explode("=", trim($uLine), 2);
						$key = $match[0];
						$val = $match[1];
						$sInfo[$a-1][$key] = $val;
				}
		}
		
	return $sInfo;
	}
	
	
	function tokenlist() {
	
		$res = $this->_fastcall("tokenlist");
				
		$sRead = explode("|", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			$a = $a + 1;
				
				$uRead = explode(" ", $rLine);
		
				foreach ($uRead as $uLine) {
			
						$uLine = str_replace("\s", " ", $uLine);
						$uLine = str_replace("\p", "|", $uLine);
						$uLine = str_replace("\/", "/", $uLine);
						$rLine = str_replace("error", "", $rLine);
						
						$match = explode("=", trim($uLine), 2);
						$key = $match[0];
						$val = $match[1];
						$sInfo[$a-1][$key] = $val;
						if ($key == "token") { 
							
							$sInfo[$a-1]["token_url"] = urlencode($val); 
						
						}
						if ($key == "token_id1" && $sInfo[$a-1]['token_type'] == "0" ) { 
							
							$servergroup = $this->servergroup($val);
		
							$servergroupname = $servergroup["name"];
			
							$sInfo[$a-1]["token_group"] = $servergroupname; 
							
						}
						
						if ($key == "token_id1" && $sInfo[$a-1]['token_type'] == "1" ) { 
							
							$channelgroup = $this->channelgroup($val);
		
							$channelgroupname = $channelgroup["name"];
			
							$sInfo[$a-1]["token_group"] = $channelgroupname; 
							
						}
						
						
						if ($key == "token_id2" && $sInfo[$a-1]['token_type'] == "1" ) { 
							
							$channel = $this->channel($val);
		
							$channelname = $channel["channel_name"];
			
			
							$sInfo[$a-1]["token_channelname"] = $channelname; 
							
						}
						
						
			
			
				}
		}
		
	return $sInfo;
	}
	
	
	function serverrequestconnectioninfo() {
	
		$res = $this->_fastcall("serverrequestconnectioninfo");
		
		$sRead = explode(" ", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			if (strstr($rLine, "=")) {
				$match = explode("=", trim($rLine), 2);
				$key = $match[0];
				$val = $match[1];
				$sInfo[$key] = $val;
			}
		}
		
		return $sInfo;
	}
	
	
	function serverlist() {
	
		$res = $this->_fastcall("serverlist");
		
		$sRead = explode("|", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			
				$i = $i + 1;
				$var = explode(" ", $rLine);
				foreach ($var as $server) {
				
				$server = str_replace("\s", " ", $server);
				$server = str_replace("\p", "|", $server);
				$server = str_replace("\/", "/", $server);
				$server = str_replace("error", "", $server);
				$match = explode("=", trim($server), 2);
				$key = $match[0];
				$val = $match[1];
				$sInfo[$i][$key] = $val;
			}
		}
		
		return $sInfo;
	}
	
	function servercreate($cmd) {
	
		$res = $this->_fastcall($cmd);
		
		$sRead = explode(" ", $res);
		$sInfo = array();
		
		foreach ($sRead as $rLine) {
			if (strstr($rLine, "=")) {
				$match = explode("=", trim($rLine), 2);
				$key = $match[0];
				$val = $match[1];
				$sInfo[$key] = $val;
			}
		}
		
		return $sInfo;
	}
	
	
	
	function _fastcall($sCall = "") {
		if (!is_resource($this->connection))
			return false;
		$sCall = chop($sCall);
		if (strstr($sCall, "\n"))
			return false;
		if (!is_array($sCall)) {
			fwrite($this->connection, "$sCall\n");
			$sRead = $this->_readcall();
		} else {
			$sRead = array();
			foreach ($sCall as $sCmd) {
				fwrite($this->connection, "$sCmd\n");
				$cRes = $this->_readcall();
				$sRead[] = $cRes;
				unset($cRes);
			}
		}
		return $sRead;
	}
	
	
	function _readcall() {
		if (!is_resource($this->connection)) 
			return false;
			
		$hcmd = '';
		do {
			$cmd = fgets($this->connection);
			$hcmd .= $cmd;
		} while (strpos($cmd, "error id=") === false);
		
		//$version = explode("\r\n", $hcmd);
		return $hcmd;
		
	}
	
	
	function __construct() {

		$this->connection  	= false;
		$this->debug    	= array();
		$this->isAdmin  	= false;
		$this->isSAdmin 	= false;
		$this->cList    	= false;
		$this->uList    	= false;
		$this->server   	= false;
		$this->user     	= false;
		$this->pass     	= false;
		$this->udp      	= false;
		$this->tcp      	= false;
		
	}
	
	
	function ts3() {
		$this->__construct();
	}
	function disconnect() {
		if (is_resource($this->connection))
			fclose($this->connection);
		$this->__construct();
	}


  	function fastcall($sCall) {
		return $this->_fastcall($sCall);
	}

  	function extendcall($sCall) {
		return $this->_extendcall($sCall);
	}

}
?>