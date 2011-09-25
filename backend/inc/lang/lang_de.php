<?php

// lang_de.php

// Info:
//
/*

	evilInterface Copyright (C) 2011 evilDEV.de

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
	
*/
//
// Modified by:
//
/*

	...
	
*/

// Je nach Sprachdatei editieren!


$cp_lang['LANGUAGE'] = "deutsch";
$cp_lang['LANGUAGE_SHORT'] = "de";


// Allgemein


$cp_lang['message_delete_customer_true'] = "Der Kundeneintrag wurden erfolgreich aus der Datenbank entfernt!";
$cp_lang['message_delete_root_true'] = "Der Rootservereintrag wurden erfolgreich aus der Datenbank entfernt!";
$cp_lang['message_delete_vserver_true'] = "Der Server wurde erfolgreich gelöscht!";
$cp_lang['message_clear_db_log_true'] = "Die Datenbank - log - wurden erfolgreich geleert!";
$cp_lang['message_create_db_backup_true'] = "Das MySQL-Backup wurde erfolgreich erstellt!";
$cp_lang['message_delete_db_backup_true'] = "Das MySQL-Backup wurde erfolgreich gelöscht!";
$cp_lang['message_save_true'] = "Die Daten wurden erfolgreich gespeichert!";
$cp_lang['message_send_message'] = "Die Nachricht wurde erfolgreich gesendet!";

$cp_lang['message_system'] = "Systemnachricht:";

$cp_lang['login_false'] = "Du hast leider falsche Zugangsdaten eingegeben!";
$cp_lang['login_true'] = "Du wurdest erfolgreich eingeloggt!";

$cp_lang['button_save'] = "Speichern!";
$cp_lang['button_reset'] = "Reset";
$cp_lang['button_search'] = "Suchen";
$cp_lang['button_send'] = "Senden!";
$cp_lang['button_login'] = "Lass mich rein!";
$cp_lang['button_copy_perms'] = "Rechte kopieren!";

$cp_lang['page'] = "Seite";
$cp_lang['of'] = "von";

$cp_lang['yes'] = "Ja";
$cp_lang['no'] = "Nein";

$cp_lang['welcome'] = "Willkommen";
$cp_lang['header_text'] = "Hier kannst du dich in das WI einloggen!";
$cp_lang['logout'] = "Ich m&ouml;chte mich wieder abmelden!";
$cp_lang['welcome'] = "Willkommen";
$cp_lang['adminarea'] = "Adminbereich";
$cp_lang['goto_adminarea'] = "Zum Adminbereich";
$cp_lang['customerarea'] = "Kundenbereich";
$cp_lang['goto_customerarea'] = "Zum Kundenbereich";


// Navigation


$cp_lang['overview'] = "Server Status";
$cp_lang['tsviewer'] = "Server Viewer";
$cp_lang['servermessage'] = "Nachricht senden";
$cp_lang['serversettings'] = "Server Settings";
$cp_lang['servergroups'] = "Server Gruppen";
$cp_lang['tokenmanager'] = "Token Manager";
$cp_lang['user'] = "Benutzer";
$cp_lang['clientfind'] = "ID suchen";


// Portal

// main.tpl

$cp_lang['header_main'] = "Teamspeak 3 Webinterface - Login";


// Adminbereich

// admin_navigation.tpl

$cp_lang['customer'] = "Benutzer anzeigen";
$cp_lang['customer_add'] = "Benutzer eintragen";
$cp_lang['rootserver'] = "Rootserver";
$cp_lang['voiceserver_master'] = "Voiceserver";
$cp_lang['voiceserver_assign'] = "Voices. zuweisen";
$cp_lang['cmslog'] = "CMS-Log";
$cp_lang['backup'] = "Backup";
$cp_lang['settings'] = "Einstellungen";
$cp_lang['navi_server'] = "Server";
$cp_lang['navi_permission'] = "Rechte";
$cp_lang['navi_ids'] = "Identitäten";
$cp_lang['navi_user'] = "Benutzer";
$cp_lang['navi_cms'] = "CMS";
$cp_lang['navi_settings'] = "Einstellungen";

// settings.tpl

$cp_lang['cms_settings'] = "CMS Einstellungen";
$cp_lang['cms_sitename'] = "Seiten Name";
$cp_lang['cms_siteurl'] = "Seiten URL";
$cp_lang['cms_emailinfo'] = "Info E-Mail";
$cp_lang['cms_templatedir'] = "Templateordner";
$cp_lang['cms_language'] = "Sprache";
$cp_lang['cms_sessiocppire'] = "Ablauf der Sitzung ( Minuten )";
$cp_lang['cms_maintenance'] = "Wartung Webinterface";
$cp_lang['contact'] = "Betreiber Einstellungen";
$cp_lang['contact_company'] = "Firma";
$cp_lang['contact_prefix'] = "Prefix";
$cp_lang['contact_phone'] = "Telefon";
$cp_lang['contact_name'] = "Kontaktname";
$cp_lang['contact_street_no'] = "Strasse / Hausnummer";
$cp_lang['contact_city'] = "Ort";
$cp_lang['contact_zipcode'] = "PLZ";
$cp_lang['contact_country'] = "Land";
$cp_lang['contact_taxnumber'] = "Umsatzsteuer-Identifikationsnummer";

// backup.tpl

$cp_lang['head_backup_overview'] = "Backup Übersicht";
$cp_lang['id'] = "ID";
$cp_lang['type'] = "Art";
$cp_lang['date'] = "Datum";
$cp_lang['file'] = "Datei";
$cp_lang['unique_id'] = "Unique BAK-ID";
$cp_lang['size'] = "Größe";
$cp_lang['option'] = "Aktion";
$cp_lang['info_create_backup'] = "Backup erstellen";
$cp_lang['info_download_backup'] = "Backup herunterladen";
$cp_lang['info_delete_backup'] = "Backup entfernen";

// cmslog.tpl

$cp_lang['head_cmslog'] = "CMS-Log";
$cp_lang['log'] = "Log";
$cp_lang['log_created_in'] = "Log erstellt im Modul";
$cp_lang['log_delete'] = "Alle Logs löschen!";
$cp_lang['log_info_add'] = "fügt hinzu";
$cp_lang['log_info_delete'] = "löscht";
$cp_lang['log_info_edit'] = "editiert";
$cp_lang['log_info_send'] = "zugesendet";
$cp_lang['log_info_move'] = "verschiebt";
$cp_lang['log_info_close'] = "schliesst";
$cp_lang['log_info_start'] = "startet";
$cp_lang['log_info_stop'] = "stoppt";
$cp_lang['log_info_login'] = "loggt ein";
$cp_lang['log_info_logout'] = "loggt aus";

// cmslog.tpl

$cp_lang['head_voiceserver_assign'] = "Vorhandenen Voiceserver einem Benutzer zuweisen";
$cp_lang['customer'] = "Benutzer";
$cp_lang['master_vc'] = "Master Voiceserver";
$cp_lang['udpport'] = "UDP-Port";
$cp_lang['slots'] = "Slots";
$cp_lang['log_info_logout'] = "loggt aus";
$cp_lang['log_info_logout'] = "loggt aus";
$cp_lang['log_info_logout'] = "loggt aus";
$cp_lang['log_info_logout'] = "loggt aus";
$cp_lang['log_info_logout'] = "loggt aus";
$cp_lang['log_info_logout'] = "loggt aus";

// rootserver.tpl

$cp_lang['head_rootserver'] = "Rootserverübersicht";
$cp_lang['head_add_rootserver'] = "Neuen Rootserver eintragen";
$cp_lang['rootserver_id'] = "ID";
$cp_lang['rootserver_name'] = "Name";
$cp_lang['rootserver_serverip'] = "Server IP";
$cp_lang['rootserver_type'] = "Typ";
$cp_lang['rootserver_traffic'] = "Traffic";
$cp_lang['rootserver_status'] = "Status";
$cp_lang['rootserver_option'] = "Aktion";
$cp_lang['rootserver_online'] = "Server per Ping erreichbar";
$cp_lang['rootserver_offline'] = "Server per Ping nicht erreichbar";
$cp_lang['rootserver_delete'] = "Rootservereintrag entfernen";
$cp_lang['rootserver_user'] = "Benutzer";
$cp_lang['rootserver_password'] = "Passwort";

// customer_add.tpl

$cp_lang['head_customer_add'] = "Neuen Kunden eintragen";
$cp_lang['customer_add_country'] = "Land";
$cp_lang['customer_add_date'] = "Bestelldatum / Reg. Datum";
$cp_lang['customer_add_email'] = "E-Mailadresse";
$cp_lang['customer_add_status'] = "Status";
$cp_lang['customer_add_password'] = "Passwort";

// customer.tpl

$cp_lang['head_edit_customer'] = "Benutzer editieren";
$cp_lang['head_customer'] = "Benutzerdatenbank";
$cp_lang['head_voiceserver_3'] = "Zugewiesene Teamspeak 3 Server";
$cp_lang['customer_name'] = "Name";
$cp_lang['customer_surname'] = "Nachname";
$cp_lang['customer_email'] = "E-Mail";
$cp_lang['customer_password'] = "Passwort";
$cp_lang['customer_status'] = "Status";
$cp_lang['customer_date'] = "Reg. Datum";
$cp_lang['customer_id'] = "ID";
$cp_lang['customer_master_id'] = "Master ID";
$cp_lang['customer_serverip'] = "Server IP";
$cp_lang['customer_udpport'] = "UDP-Port";
$cp_lang['customer_slots'] = "Slots";
$cp_lang['customer_last_online'] = "Zuletzt Online";
$cp_lang['customer_option'] = "Aktion";
$cp_lang['customer_admin'] = "Administrator";
$cp_lang['customer_customer'] = "User";
$cp_lang['info_useroverview'] = "Benutzerübersicht";
$cp_lang['info_edit_user'] = "Benutzer editieren";
$cp_lang['info_delete_user'] = "Benutzer löschen";
$cp_lang['sort_name'] = "Nach Name sortieren";
$cp_lang['sort_id'] = "Nach Kundennummer sortieren";
$cp_lang['sort_regdate'] = "Nach Registrierungsdatum sortieren";
$cp_lang['sort_logindate'] = "Nach Logindatum sortieren";
$cp_lang['info_delete_user'] = "Benutzer komplett aus der Datenbank entfernen";
$cp_lang['info_start_server'] = "Server starten";
$cp_lang['info_stop_server'] = "Server stoppen";
$cp_lang['info_admin_server'] = "Server administrieren";
$cp_lang['info_delete_voiceserver'] = "Voiceserver löschen";

// ts3monitor.tpl

$cp_lang['head_instancesettings'] = "Servereinstellungen";
$cp_lang['head_instanceinfo'] = "Instanzinfo";
$cp_lang['head_vserver_monitoring'] = "Voiceserver Monitoring";
$cp_lang['serverinstance_guest_serverquery_group'] = "Default Guest Serverquery Group ID";
$cp_lang['serverinstance_template_serveradmin_group'] = "Template Serveradmin Group ID";
$cp_lang['serverinstance_template_serverdefault_group'] = "Template Default Server Group ID";
$cp_lang['serverinstance_template_channeladmin_group'] = "Template Channel Admin Group ID";
$cp_lang['serverinstance_template_channeldefault_group'] = "Template Channel Default Group ID";
$cp_lang['serverinstance_filetransfer_port'] = "Datentransfer Port";
$cp_lang['serverinstance_max_download_total_bandwidth'] = "Max. Download Bandbreite pro Sekunde";
$cp_lang['serverinstance_max_upload_total_bandwidth'] = "Max. Upload Bandbreite pro Sekunde";
$cp_lang['serverinstance_serverquery_flood_commands'] = "Serverquery Flood Commands";
$cp_lang['serverinstance_serverquery_flood_time'] = "Serverquery Flood Tim";
$cp_lang['serverinstance_serverquery_ban_time'] = "Serverquery Ban Time";
$cp_lang['host_timestamp_utc'] = "Serverzeit";
$cp_lang['instance_uptime'] = "Instanz Uptime";
$cp_lang['version'] = "Server Version";
$cp_lang['platform'] = "Server OS";
$cp_lang['serverinstance_database_version'] = "Datenbank Version";
$cp_lang['virtualservers_running_total'] = "Server gesamt";
$cp_lang['virtualservers_total_clients_online'] = "Max. User";
$cp_lang['virtualservers_total_channels_online'] = "Channels gesamt";
$cp_lang['connection_packets_sent_total'] = "Pakete gesendet";
$cp_lang['connection_bytes_sent_total'] = "Bytes gesendet";
$cp_lang['connection_packets_received_total'] = "Pakete empfangen";
$cp_lang['connection_bytes_received_total'] = "Bytes empfangen";
$cp_lang['ts3monitor_port'] = "Port";
$cp_lang['ts3monitor_name'] = "Name";
$cp_lang['ts3monitor_user'] = "User";
$cp_lang['ts3monitor_uptime'] = "Uptime";
$cp_lang['ts3monitor_filetraffic'] = "Bandbreite";
$cp_lang['ts3monitor_traffic'] = "Traffic";
$cp_lang['ts3monitor_option'] = "Aktion";
$cp_lang['ts3monitor_info_serveredit'] = "Server administrieren";
$cp_lang['ts3monitor_info_customer_assign'] = "Server muss erst einem Benutzer zugewiesen werden!";
$cp_lang['ts3monitor_info_start'] = "Server starten";
$cp_lang['ts3monitor_info_stop'] = "Server stoppen";
$cp_lang['ts3monitor_info_delete'] = "Voiceserver löschen";
$cp_lang['head_send_message'] = "Nachricht an den Server senden";
$cp_lang['ts3monitor_message'] = "Nachricht";
$cp_lang['head_voiceserver_master'] = "Voiceserver Masterliste";
$cp_lang['ts3monitor_id'] = "ID";
$cp_lang['ts3monitor_root_id'] = "Root ID";
$cp_lang['ts3monitor_serverip'] = "Server IP";
$cp_lang['ts3monitor_tcpport'] = "TCP-Port";
$cp_lang['ts3monitor_httpport'] = "HTTP-Port";
$cp_lang['ts3monitor_serveradmin'] = "Serveradmin";
$cp_lang['ts3monitor_password'] = "Passwort";
$cp_lang['ts3monitor_info_serveroverview'] = "Serverübersicht";

// eviladmin.tpl

$cp_lang['head_serveroverview'] = "Serverübersicht";
$cp_lang['head_banner'] = "Benachrichtigungen / Banner";
$cp_lang['head_limits'] = "Beschr&auml;nkungen";
$cp_lang['head_stats_1'] = "Statistiken - Sprache";
$cp_lang['head_stats_2'] = "Statistiken - Datentransfer";
$cp_lang['head_ts3viewer'] = "TS3-Viewer";
$cp_lang['head_hostbanner'] = "Server Settings - Hostbanner hochladen!";
$cp_lang['head_serversettings'] = "Servereinstellungen";
$cp_lang['head_usermanagement'] = "Benutzerverwaltung";
$cp_lang['head_sendmessagetoserver'] = "Nachricht an den Server senden";
$cp_lang['head_searchforid'] = "Suche nach einem User mit Hilfe der Datenbank ID";
$cp_lang['head_searchforuniqueid'] = "Suche nach einem User mit Hilfe der eindeutigen ID";
$cp_lang['head_servergroups'] = "Server Gruppen";
$cp_lang['head_servergroup'] = "Server Gruppe";
$cp_lang['head_add_servergroup'] = "Neue Server Gruppe anlegen";
$cp_lang['head_tokenmanager'] = "Token Manager";
$cp_lang['head_create_token'] = "Neue Token erstellen";
$cp_lang['head_permissionoverview'] = "Rechteverwaltung";
$cp_lang['head_permission'] = "Recht";
$cp_lang['head_servergroup_perms'] = "Server Gruppen Rechte";
$cp_lang['head_serveroverview'] = "Serverübersicht";
$cp_lang['head_serveroverview'] = "Serverübersicht";
$cp_lang['loading_1'] = "Die Seite wird geladen. Bitte warten!";
$cp_lang['loading_2'] = "Dieser Vorgang kann bis zu 30 Sekunden dauern - Bitte Geduld!";
$cp_lang['virtualserver_id'] = "Server ID";
$cp_lang['virtualserver_unique_identifier'] = "Server Unique ID";
$cp_lang['virtualserver_platform'] = "Server OS";
$cp_lang['virtualserver_version'] = "Version";
$cp_lang['virtualserver_created'] = "Server erstellt am";
$cp_lang['virtualserver_uptime'] = "Server-Uptime";
$cp_lang['virtualserver_name'] = "Server Name";
$cp_lang['serverip'] = "Server IP";
$cp_lang['virtualserver_port'] = "UDP-Port";
$cp_lang['tcpport'] = "TCP- / Queryport";
$cp_lang['virtualserver_clientsonline'] = "Max. User";
$cp_lang['virtualserver_client_connections'] = "Client Verbindungen";
$cp_lang['virtualserver_channelsonline'] = "Aktuelle Channelanzahl";
$cp_lang['virtualserver_needed_identity_security_level'] = "Security Level";
$cp_lang['virtualserver_flag_password'] = "Passwortschutz";
$cp_lang['virtualserver_welcomemessage'] = "Willkommensnachricht";
$cp_lang['virtualserver_hostbanner_url'] = "Hostbanner URL";
$cp_lang['virtualserver_hostbanner_gfx_url'] = "Hostbanner GFX URL";
$cp_lang['virtualserver_hostbanner_gfx_interval'] = "Hostbanner GFX Interval";
$cp_lang['virtualserver_max_download_total_bandwidth'] = "Max. Bandbreite Download";
$cp_lang['virtualserver_max_upload_total_bandwidth'] = "Max. Bandbreite Upload";
$cp_lang['virtualserver_download_quota'] = "Max. Download Quota";
$cp_lang['virtualserver_upload_quota'] = "Max. Upload Quota";
$cp_lang['connection_packets_sent_total'] = "Pakete gesendet";
$cp_lang['connection_bytes_sent_total'] = "Bytes gesendet";
$cp_lang['connection_packets_received_total'] = "Pakete empfangen";
$cp_lang['connection_bytes_received_total'] = "Bytes empfangen";
$cp_lang['connection_bandwidth_received_last_minute_total'] = "Bandbreite In [Bytes/min]";
$cp_lang['connection_bandwidth_sent_last_minute_total'] = "Bandbreite Out [Bytes/min]";
$cp_lang['virtualserver_month_bytes_downloaded'] = "Download Traffic / Monat";
$cp_lang['virtualserver_month_bytes_uploaded'] = "Upload Traffic / Monat";
$cp_lang['virtualserver_total_bytes_downloaded'] = "Download Traffic / Gesamt";
$cp_lang['virtualserver_total_bytes_uploaded'] = "Upload Traffic / Gesamt";
$cp_lang['connection_filetransfer_bandwidth_received'] = "Bandbreite In [Bytes/sec]";
$cp_lang['connection_filetransfer_bandwidth_sent'] = "Bandbreite Out [Bytes/sec]";
$cp_lang['eviladminhostbanner_gfx'] = "Hostbanner GFX";
$cp_lang['virtualserver_maxclients'] = "Maximale Useranzahl";
$cp_lang['virtualserver_hostmessage'] = "Host Nachricht";
$cp_lang['virtualserver_hostmessage_mode'] = "Hostmessage Modus";
$cp_lang['eviladmin_upload_message'] = "Hier hochladen";
$cp_lang['virtualserver_complain_autoban_count'] = "Anzahl Beschwerden bis Autoban";
$cp_lang['virtualserver_complain_autoban_time'] = "Zeit f&uuml;r Autoban";
$cp_lang['virtualserver_complain_autoban_time'] = "Zeit bis L&ouml;schung der Beschwerde";
$cp_lang['virtualserver_min_clients_in_channel_before_forced_silence'] = "Clients pro Channel bis Stille eintritt";
$cp_lang['virtualserver_needed_identity_security_level'] = "Security Level";
$cp_lang['eviladmin_set_new_password'] = "Neues Passwort setzen";
$cp_lang['eviladmin_new_password'] = "Neues Server Passwort";
$cp_lang['eviladmin_userid'] = "User ID";
$cp_lang['servergroup'] = "Server Gruppe";
$cp_lang['eviladmin_id'] = "ID";
$cp_lang['eviladmin_nickname'] = "Nickname";
$cp_lang['eviladmin_group'] = "Gruppe";
$cp_lang['eviladmin_user_created'] = "Benutzer erstellt";
$cp_lang['eviladmin_last_login'] = "Letzter Login";
$cp_lang['eviladmin_status'] = "Status";
$cp_lang['eviladmin_option'] = "Aktion";
$cp_lang['eviladmin_info_user_edit'] = "Benutzer bearbeiten";
$cp_lang['eviladmin_info_user_delete'] = "Benutzer entfernen";
$cp_lang['eviladmin_message'] = "Nachricht";
$cp_lang['eviladmin_db_id'] = "Datenbank ID";
$cp_lang['eviladmin_unqiue_id'] = "Eindeutige ID";
$cp_lang['head_user'] = "Mitglieder";
$cp_lang['eviladmin_name'] = "Name";
$cp_lang['eviladmin_unqie_id'] = "Eindeutige ID";
$cp_lang['eviladmin_info_user_delete_from_sg'] = "Mitglied aus der Server Gruppe entfernen";
$cp_lang['head_edit_name'] = "Name &auml;ndern";
$cp_lang['eviladmin_new_sg_name'] = "Neuer Server Gruppen Name";
$cp_lang['head_copy_perms'] = "Rechte kopieren";
$cp_lang['eviladmin_message_attention'] = "Achtung!";
$cp_lang['eviladmin_text_perm_copy_info'] = "Die Rechte der aktuell ausgewählten Server Gruppe werden nach dem Bestätigen des - <strong>Rechte kopieren!</strong> - Buttons komplett mit den Rechten der unten ausgewählten Server Gruppe überschrieben. Die Rechte der aktuell ausgewählten Server Gruppe können <strong>nicht</strong> wiederhergestellt werden!";
$cp_lang['eviladmin_text_perm_copy_choose'] = "Wähle nun die Gruppe aus der die Rechte für die ausgewählte Gruppe übernommen werden sollen!";
$cp_lang['eviladmin_type'] = "Typ";
$cp_lang['eviladmin_icon_id'] = "Icon ID";
$cp_lang['eviladmin_save_db'] = "Save DB";
$cp_lang['eviladmin_info_edit_perms'] = "Rechte bearbeiten";
$cp_lang['eviladmin_info_edit_sg_name'] = "Server Gruppen Name editieren";
$cp_lang['eviladmin_info_sg_user'] = "Server Gruppen Mitglieder";
$cp_lang['eviladmin_info_copy_perm'] = "Rechte aus vorhandener Server Gruppe übernehmen";
$cp_lang['eviladmin_info_dont_delete'] = "Diese Gruppe kann nicht gel&ouml;scht werden, da dies eine Standartgruppe ist. Sobald diese Gruppe gelöscht wird ist alles kaputt!";
$cp_lang['eviladmin_info_delete_sg'] = "Server Gruppe entfernen";
$cp_lang['eviladmin_sg_name'] = "Server Gruppen Name";
$cp_lang['eviladmin_token'] = "Token";
$cp_lang['eviladmin_channel'] = "Channel";
$cp_lang['eviladmin_channelgroup'] = "Channel Gruppe";
$cp_lang['eviladmin_info_delete_token'] = "Token entfernen";
$cp_lang['eviladmin_channel'] = "Channel";
$cp_lang['eviladmin_dont_allow'] = "Nicht erlauben";
$cp_lang['eviladmin_allow'] = "Erlauben";
$cp_lang['eviladmin_skip'] = "Skip";
$cp_lang['eviladmin_negated'] = "Negated";
$cp_lang['eviladmin_name_desc'] = "Name / Beschreibung";
$cp_lang['eviladmin_value'] = "Wert";
$cp_lang['eviladmin_grant'] = "Vergabe";
$cp_lang['eviladmin_serverid'] = "Server";
$cp_lang['eviladmin_serverid'] = "Server";
$cp_lang['eviladmin_serverid'] = "Server";



// IT IS NOT ALLOWED TO EDIT SOMETHING UNDER THIS LINE!!!

$cp_lang['gnu_gpl_licence'] = '<a rel="license" href="http://creativecommons.org/licenses/GPL/2.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/GPL/2.0/88x62.png" /></a><br />Dieser Werk bzw. Inhalt ist unter einer <a rel="license" href="http://creativecommons.org/licenses/GPL/2.0/">Creative Commons-Lizenz</a> lizenziert.';
