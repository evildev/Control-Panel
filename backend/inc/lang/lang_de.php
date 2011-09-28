<?php

// lang_de.php

// Info:
//
/*

	eCP.v0.9e Copyright (C) 2011  evilDEV.de

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


$nex_lang['LANGUAGE'] = "deutsch";
$nex_lang['LANGUAGE_SHORT'] = "de";


// Allgemein


$nex_lang['message_delete_customer_true'] = "Der Kundeneintrag wurden erfolgreich aus der Datenbank entfernt!";
$nex_lang['message_delete_root_true'] = "Der Rootservereintrag wurden erfolgreich aus der Datenbank entfernt!";
$nex_lang['message_delete_vserver_true'] = "Der Server wurde erfolgreich gelöscht!";
$nex_lang['message_clear_db_log_true'] = "Die Datenbank - log - wurden erfolgreich geleert!";
$nex_lang['message_create_db_backup_true'] = "Das MySQL-Backup wurde erfolgreich erstellt!";
$nex_lang['message_delete_db_backup_true'] = "Das MySQL-Backup wurde erfolgreich gelöscht!";
$nex_lang['message_save_true'] = "Die Daten wurden erfolgreich gespeichert!";
$nex_lang['message_send_message'] = "Die Nachricht wurde erfolgreich gesendet!";

$nex_lang['message_system'] = "Systemnachricht:";

$nex_lang['login_false'] = "Du hast leider falsche Zugangsdaten eingegeben!";
$nex_lang['login_true'] = "Du wurdest erfolgreich eingeloggt!";

$nex_lang['button_save'] = "Speichern!";
$nex_lang['button_reset'] = "Reset";
$nex_lang['button_search'] = "Suchen";
$nex_lang['button_send'] = "Senden!";
$nex_lang['button_login'] = "Lass mich rein!";
$nex_lang['button_copy_perms'] = "Rechte kopieren!";

$nex_lang['page'] = "Seite";
$nex_lang['of'] = "von";

$nex_lang['yes'] = "Ja";
$nex_lang['no'] = "Nein";

$nex_lang['welcome'] = "Willkommen";
$nex_lang['header_text'] = "Hier kannst du dich in das WI einloggen!";
$nex_lang['logout'] = "Ich m&ouml;chte mich wieder abmelden!";
$nex_lang['welcome'] = "Willkommen";
$nex_lang['adminarea'] = "Adminbereich";
$nex_lang['goto_adminarea'] = "Zum Adminbereich";
$nex_lang['customerarea'] = "Kundenbereich";
$nex_lang['goto_customerarea'] = "Zum Kundenbereich";


// Navigation


$nex_lang['overview'] = "Server Status";
$nex_lang['tsviewer'] = "Server Viewer";
$nex_lang['servermessage'] = "Nachricht senden";
$nex_lang['serversettings'] = "Server Settings";
$nex_lang['servergroups'] = "Server Gruppen";
$nex_lang['tokenmanager'] = "Token Manager";
$nex_lang['user'] = "Benutzer";
$nex_lang['clientfind'] = "ID suchen";


// Portal

// main.tpl

$nex_lang['header_main'] = "Teamspeak 3 Webinterface - Login";


// Adminbereich

// admin_navigation.tpl

$nex_lang['customer'] = "Benutzer anzeigen";
$nex_lang['customer_add'] = "Benutzer eintragen";
$nex_lang['rootserver'] = "Rootserver";
$nex_lang['voiceserver_master'] = "Voiceserver";
$nex_lang['voiceserver_assign'] = "Voices. zuweisen";
$nex_lang['cmslog'] = "CMS-Log";
$nex_lang['backup'] = "Backup";
$nex_lang['settings'] = "Einstellungen";
$nex_lang['navi_server'] = "Server";
$nex_lang['navi_permission'] = "Rechte";
$nex_lang['navi_ids'] = "Identitäten";
$nex_lang['navi_user'] = "Benutzer";
$nex_lang['navi_cms'] = "CMS";
$nex_lang['navi_settings'] = "Einstellungen";

// settings.tpl

$nex_lang['cms_settings'] = "CMS Einstellungen";
$nex_lang['cms_sitename'] = "Seiten Name";
$nex_lang['cms_siteurl'] = "Seiten URL";
$nex_lang['cms_emailinfo'] = "Info E-Mail";
$nex_lang['cms_templatedir'] = "Templateordner";
$nex_lang['cms_language'] = "Sprache";
$nex_lang['cms_sessionexpire'] = "Ablauf der Sitzung ( Minuten )";
$nex_lang['cms_maintenance'] = "Wartung Webinterface";
$nex_lang['contact'] = "Betreiber Einstellungen";
$nex_lang['contact_company'] = "Firma";
$nex_lang['contact_prefix'] = "Prefix";
$nex_lang['contact_phone'] = "Telefon";
$nex_lang['contact_name'] = "Kontaktname";
$nex_lang['contact_street_no'] = "Strasse / Hausnummer";
$nex_lang['contact_city'] = "Ort";
$nex_lang['contact_zipcode'] = "PLZ";
$nex_lang['contact_country'] = "Land";


// backup.tpl

$nex_lang['head_backup_overview'] = "Backup Übersicht";
$nex_lang['id'] = "ID";
$nex_lang['type'] = "Art";
$nex_lang['date'] = "Datum";
$nex_lang['file'] = "Datei";
$nex_lang['unique_id'] = "Unique BAK-ID";
$nex_lang['size'] = "Größe";
$nex_lang['option'] = "Aktion";
$nex_lang['info_create_backup'] = "Backup erstellen";
$nex_lang['info_download_backup'] = "Backup herunterladen";
$nex_lang['info_delete_backup'] = "Backup entfernen";

// cmslog.tpl

$nex_lang['head_cmslog'] = "CMS-Log";
$nex_lang['log'] = "Log";
$nex_lang['log_created_in'] = "Log erstellt im Modul";
$nex_lang['log_delete'] = "Alle Logs löschen!";
$nex_lang['log_info_add'] = "fügt hinzu";
$nex_lang['log_info_delete'] = "löscht";
$nex_lang['log_info_edit'] = "editiert";
$nex_lang['log_info_send'] = "zugesendet";
$nex_lang['log_info_move'] = "verschiebt";
$nex_lang['log_info_close'] = "schliesst";
$nex_lang['log_info_start'] = "startet";
$nex_lang['log_info_stop'] = "stoppt";
$nex_lang['log_info_login'] = "loggt ein";
$nex_lang['log_info_logout'] = "loggt aus";

// cmslog.tpl

$nex_lang['head_voiceserver_assign'] = "Vorhandenen Voiceserver einem Benutzer zuweisen";
$nex_lang['customer'] = "Benutzer";
$nex_lang['master_vc'] = "Master Voiceserver";
$nex_lang['udpport'] = "UDP-Port";
$nex_lang['slots'] = "Slots";
$nex_lang['log_info_logout'] = "loggt aus";
$nex_lang['log_info_logout'] = "loggt aus";
$nex_lang['log_info_logout'] = "loggt aus";
$nex_lang['log_info_logout'] = "loggt aus";
$nex_lang['log_info_logout'] = "loggt aus";
$nex_lang['log_info_logout'] = "loggt aus";

// rootserver.tpl

$nex_lang['head_rootserver'] = "Rootserverübersicht";
$nex_lang['head_add_rootserver'] = "Neuen Rootserver eintragen";
$nex_lang['rootserver_id'] = "ID";
$nex_lang['rootserver_name'] = "Name";
$nex_lang['rootserver_serverip'] = "Server IP";
$nex_lang['rootserver_type'] = "Typ";
$nex_lang['rootserver_traffic'] = "Traffic";
$nex_lang['rootserver_status'] = "Status";
$nex_lang['rootserver_option'] = "Aktion";
$nex_lang['rootserver_online'] = "Server per Ping erreichbar";
$nex_lang['rootserver_offline'] = "Server per Ping nicht erreichbar";
$nex_lang['rootserver_delete'] = "Rootservereintrag entfernen";
$nex_lang['rootserver_user'] = "Benutzer";
$nex_lang['rootserver_password'] = "Passwort";

// customer_add.tpl

$nex_lang['head_customer_add'] = "Neuen Kunden eintragen";
$nex_lang['customer_add_country'] = "Land";
$nex_lang['customer_add_date'] = "Bestelldatum / Reg. Datum";
$nex_lang['customer_add_email'] = "E-Mailadresse";
$nex_lang['customer_add_status'] = "Status";
$nex_lang['customer_add_password'] = "Passwort";

// customer.tpl

$nex_lang['head_edit_customer'] = "Benutzer editieren";
$nex_lang['head_customer'] = "Benutzerdatenbank";
$nex_lang['head_voiceserver_3'] = "Zugewiesene Teamspeak 3 Server";
$nex_lang['customer_name'] = "Name";
$nex_lang['customer_surname'] = "Nachname";
$nex_lang['customer_email'] = "E-Mail";
$nex_lang['customer_password'] = "Passwort";
$nex_lang['customer_status'] = "Status";
$nex_lang['customer_date'] = "Reg. Datum";
$nex_lang['customer_id'] = "ID";
$nex_lang['customer_master_id'] = "Master ID";
$nex_lang['customer_serverip'] = "Server IP";
$nex_lang['customer_udpport'] = "UDP-Port";
$nex_lang['customer_slots'] = "Slots";
$nex_lang['customer_last_online'] = "Zuletzt Online";
$nex_lang['customer_option'] = "Aktion";
$nex_lang['customer_admin'] = "Administrator";
$nex_lang['customer_customer'] = "User";
$nex_lang['info_useroverview'] = "Benutzerübersicht";
$nex_lang['info_edit_user'] = "Benutzer editieren";
$nex_lang['info_delete_user'] = "Benutzer löschen";
$nex_lang['sort_name'] = "Nach Name sortieren";
$nex_lang['sort_id'] = "Nach Kundennummer sortieren";
$nex_lang['sort_regdate'] = "Nach Registrierungsdatum sortieren";
$nex_lang['sort_logindate'] = "Nach Logindatum sortieren";
$nex_lang['info_delete_user'] = "Benutzer komplett aus der Datenbank entfernen";
$nex_lang['info_start_server'] = "Server starten";
$nex_lang['info_stop_server'] = "Server stoppen";
$nex_lang['info_admin_server'] = "Server administrieren";
$nex_lang['info_delete_voiceserver'] = "Voiceserver löschen";

// ts3monitor.tpl

$nex_lang['head_instancesettings'] = "Servereinstellungen";
$nex_lang['head_instanceinfo'] = "Instanzinfo";
$nex_lang['head_vserver_monitoring'] = "Voiceserver Monitoring";
$nex_lang['serverinstance_guest_serverquery_group'] = "Default Guest Serverquery Group ID";
$nex_lang['serverinstance_template_serveradmin_group'] = "Template Serveradmin Group ID";
$nex_lang['serverinstance_template_serverdefault_group'] = "Template Default Server Group ID";
$nex_lang['serverinstance_template_channeladmin_group'] = "Template Channel Admin Group ID";
$nex_lang['serverinstance_template_channeldefault_group'] = "Template Channel Default Group ID";
$nex_lang['serverinstance_filetransfer_port'] = "Datentransfer Port";
$nex_lang['serverinstance_max_download_total_bandwidth'] = "Max. Download Bandbreite pro Sekunde";
$nex_lang['serverinstance_max_upload_total_bandwidth'] = "Max. Upload Bandbreite pro Sekunde";
$nex_lang['serverinstance_serverquery_flood_commands'] = "Serverquery Flood Commands";
$nex_lang['serverinstance_serverquery_flood_time'] = "Serverquery Flood Tim";
$nex_lang['serverinstance_serverquery_ban_time'] = "Serverquery Ban Time";
$nex_lang['host_timestamp_utc'] = "Serverzeit";
$nex_lang['instance_uptime'] = "Instanz Uptime";
$nex_lang['version'] = "Server Version";
$nex_lang['platform'] = "Server OS";
$nex_lang['serverinstance_database_version'] = "Datenbank Version";
$nex_lang['virtualservers_running_total'] = "Server gesamt";
$nex_lang['virtualservers_total_clients_online'] = "Max. User";
$nex_lang['virtualservers_total_channels_online'] = "Channels gesamt";
$nex_lang['connection_packets_sent_total'] = "Pakete gesendet";
$nex_lang['connection_bytes_sent_total'] = "Bytes gesendet";
$nex_lang['connection_packets_received_total'] = "Pakete empfangen";
$nex_lang['connection_bytes_received_total'] = "Bytes empfangen";
$nex_lang['ts3monitor_port'] = "Port";
$nex_lang['ts3monitor_name'] = "Name";
$nex_lang['ts3monitor_user'] = "User";
$nex_lang['ts3monitor_uptime'] = "Uptime";
$nex_lang['ts3monitor_filetraffic'] = "Bandbreite";
$nex_lang['ts3monitor_traffic'] = "Traffic";
$nex_lang['ts3monitor_option'] = "Aktion";
$nex_lang['ts3monitor_info_serveredit'] = "Server administrieren";
$nex_lang['ts3monitor_info_customer_assign'] = "Server muss erst einem Benutzer zugewiesen werden!";
$nex_lang['ts3monitor_info_start'] = "Server starten";
$nex_lang['ts3monitor_info_stop'] = "Server stoppen";
$nex_lang['ts3monitor_info_delete'] = "Voiceserver löschen";
$nex_lang['head_send_message'] = "Nachricht an den Server senden";
$nex_lang['ts3monitor_message'] = "Nachricht";
$nex_lang['head_voiceserver_master'] = "Voiceserver Masterliste";
$nex_lang['ts3monitor_id'] = "ID";
$nex_lang['ts3monitor_root_id'] = "Root ID";
$nex_lang['ts3monitor_serverip'] = "Server IP";
$nex_lang['ts3monitor_tcpport'] = "TCP-Port";
$nex_lang['ts3monitor_httpport'] = "HTTP-Port";
$nex_lang['ts3monitor_serveradmin'] = "Serveradmin";
$nex_lang['ts3monitor_password'] = "Passwort";
$nex_lang['ts3monitor_info_serveroverview'] = "Serverübersicht";

// ts3admin.tpl

$nex_lang['head_serveroverview'] = "Serverübersicht";
$nex_lang['head_banner'] = "Benachrichtigungen / Banner";
$nex_lang['head_limits'] = "Beschr&auml;nkungen";
$nex_lang['head_stats_1'] = "Statistiken - Sprache";
$nex_lang['head_stats_2'] = "Statistiken - Datentransfer";
$nex_lang['head_ts3viewer'] = "TS3-Viewer";
$nex_lang['head_hostbanner'] = "Server Settings - Hostbanner hochladen!";
$nex_lang['head_serversettings'] = "Servereinstellungen";
$nex_lang['head_usermanagement'] = "Benutzerverwaltung";
$nex_lang['head_sendmessagetoserver'] = "Nachricht an den Server senden";
$nex_lang['head_searchforid'] = "Suche nach einem User mit Hilfe der Datenbank ID";
$nex_lang['head_searchforuniqueid'] = "Suche nach einem User mit Hilfe der eindeutigen ID";
$nex_lang['head_servergroups'] = "Server Gruppen";
$nex_lang['head_servergroup'] = "Server Gruppe";
$nex_lang['head_add_servergroup'] = "Neue Server Gruppe anlegen";
$nex_lang['head_tokenmanager'] = "Token Manager";
$nex_lang['head_create_token'] = "Neue Token erstellen";
$nex_lang['head_permissionoverview'] = "Rechteverwaltung";
$nex_lang['head_permission'] = "Recht";
$nex_lang['head_servergroup_perms'] = "Server Gruppen Rechte";
$nex_lang['head_serveroverview'] = "Serverübersicht";
$nex_lang['head_serveroverview'] = "Serverübersicht";
$nex_lang['loading_1'] = "Die Seite wird geladen. Bitte warten!";
$nex_lang['loading_2'] = "Dieser Vorgang kann bis zu 30 Sekunden dauern - Bitte Geduld!";
$nex_lang['virtualserver_id'] = "Server ID";
$nex_lang['virtualserver_unique_identifier'] = "Server Unique ID";
$nex_lang['virtualserver_platform'] = "Server OS";
$nex_lang['virtualserver_version'] = "Version";
$nex_lang['virtualserver_created'] = "Server erstellt am";
$nex_lang['virtualserver_uptime'] = "Server-Uptime";
$nex_lang['virtualserver_name'] = "Server Name";
$nex_lang['serverip'] = "Server IP";
$nex_lang['virtualserver_port'] = "UDP-Port";
$nex_lang['tcpport'] = "TCP- / Queryport";
$nex_lang['virtualserver_clientsonline'] = "Max. User";
$nex_lang['virtualserver_client_connections'] = "Client Verbindungen";
$nex_lang['virtualserver_channelsonline'] = "Aktuelle Channelanzahl";
$nex_lang['virtualserver_needed_identity_security_level'] = "Security Level";
$nex_lang['virtualserver_flag_password'] = "Passwortschutz";
$nex_lang['virtualserver_welcomemessage'] = "Willkommensnachricht";
$nex_lang['virtualserver_hostbanner_url'] = "Hostbanner URL";
$nex_lang['virtualserver_hostbanner_gfx_url'] = "Hostbanner GFX URL";
$nex_lang['virtualserver_hostbanner_gfx_interval'] = "Hostbanner GFX Interval";
$nex_lang['virtualserver_max_download_total_bandwidth'] = "Max. Bandbreite Download";
$nex_lang['virtualserver_max_upload_total_bandwidth'] = "Max. Bandbreite Upload";
$nex_lang['virtualserver_download_quota'] = "Max. Download Quota";
$nex_lang['virtualserver_upload_quota'] = "Max. Upload Quota";
$nex_lang['connection_packets_sent_total'] = "Pakete gesendet";
$nex_lang['connection_bytes_sent_total'] = "Bytes gesendet";
$nex_lang['connection_packets_received_total'] = "Pakete empfangen";
$nex_lang['connection_bytes_received_total'] = "Bytes empfangen";
$nex_lang['connection_bandwidth_received_last_minute_total'] = "Bandbreite In [Bytes/min]";
$nex_lang['connection_bandwidth_sent_last_minute_total'] = "Bandbreite Out [Bytes/min]";
$nex_lang['virtualserver_month_bytes_downloaded'] = "Download Traffic / Monat";
$nex_lang['virtualserver_month_bytes_uploaded'] = "Upload Traffic / Monat";
$nex_lang['virtualserver_total_bytes_downloaded'] = "Download Traffic / Gesamt";
$nex_lang['virtualserver_total_bytes_uploaded'] = "Upload Traffic / Gesamt";
$nex_lang['connection_filetransfer_bandwidth_received'] = "Bandbreite In [Bytes/sec]";
$nex_lang['connection_filetransfer_bandwidth_sent'] = "Bandbreite Out [Bytes/sec]";
$nex_lang['ts3adminhostbanner_gfx'] = "Hostbanner GFX";
$nex_lang['virtualserver_maxclients'] = "Maximale Useranzahl";
$nex_lang['virtualserver_hostmessage'] = "Host Nachricht";
$nex_lang['virtualserver_hostmessage_mode'] = "Hostmessage Modus";
$nex_lang['ts3admin_upload_message'] = "Hier hochladen";
$nex_lang['virtualserver_complain_autoban_count'] = "Anzahl Beschwerden bis Autoban";
$nex_lang['virtualserver_complain_autoban_time'] = "Zeit f&uuml;r Autoban";
$nex_lang['virtualserver_complain_autoban_time'] = "Zeit bis L&ouml;schung der Beschwerde";
$nex_lang['virtualserver_min_clients_in_channel_before_forced_silence'] = "Clients pro Channel bis Stille eintritt";
$nex_lang['virtualserver_needed_identity_security_level'] = "Security Level";
$nex_lang['ts3admin_set_new_password'] = "Neues Passwort setzen";
$nex_lang['ts3admin_new_password'] = "Neues Server Passwort";
$nex_lang['ts3admin_userid'] = "User ID";
$nex_lang['servergroup'] = "Server Gruppe";
$nex_lang['ts3admin_id'] = "ID";
$nex_lang['ts3admin_nickname'] = "Nickname";
$nex_lang['ts3admin_group'] = "Gruppe";
$nex_lang['ts3admin_user_created'] = "Benutzer erstellt";
$nex_lang['ts3admin_last_login'] = "Letzter Login";
$nex_lang['ts3admin_status'] = "Status";
$nex_lang['ts3admin_option'] = "Aktion";
$nex_lang['ts3admin_info_user_edit'] = "Benutzer bearbeiten";
$nex_lang['ts3admin_info_user_delete'] = "Benutzer entfernen";
$nex_lang['ts3admin_message'] = "Nachricht";
$nex_lang['ts3admin_db_id'] = "Datenbank ID";
$nex_lang['ts3admin_unqiue_id'] = "Eindeutige ID";
$nex_lang['head_user'] = "Mitglieder";
$nex_lang['ts3admin_name'] = "Name";
$nex_lang['ts3admin_unqie_id'] = "Eindeutige ID";
$nex_lang['ts3admin_info_user_delete_from_sg'] = "Mitglied aus der Server Gruppe entfernen";
$nex_lang['head_edit_name'] = "Name &auml;ndern";
$nex_lang['ts3admin_new_sg_name'] = "Neuer Server Gruppen Name";
$nex_lang['head_copy_perms'] = "Rechte kopieren";
$nex_lang['ts3admin_message_attention'] = "Achtung!";
$nex_lang['ts3admin_text_perm_copy_info'] = "Die Rechte der aktuell ausgewählten Server Gruppe werden nach dem Bestätigen des - <strong>Rechte kopieren!</strong> - Buttons komplett mit den Rechten der unten ausgewählten Server Gruppe überschrieben. Die Rechte der aktuell ausgewählten Server Gruppe können <strong>nicht</strong> wiederhergestellt werden!";
$nex_lang['ts3admin_text_perm_copy_choose'] = "Wähle nun die Gruppe aus der die Rechte für die ausgewählte Gruppe übernommen werden sollen!";
$nex_lang['ts3admin_type'] = "Typ";
$nex_lang['ts3admin_icon_id'] = "Icon ID";
$nex_lang['ts3admin_save_db'] = "Save DB";
$nex_lang['ts3admin_info_edit_perms'] = "Rechte bearbeiten";
$nex_lang['ts3admin_info_edit_sg_name'] = "Server Gruppen Name editieren";
$nex_lang['ts3admin_info_sg_user'] = "Server Gruppen Mitglieder";
$nex_lang['ts3admin_info_copy_perm'] = "Rechte aus vorhandener Server Gruppe übernehmen";
$nex_lang['ts3admin_info_dont_delete'] = "Diese Gruppe kann nicht gel&ouml;scht werden, da dies eine Standartgruppe ist. Sobald diese Gruppe gelöscht wird ist alles kaputt!";
$nex_lang['ts3admin_info_delete_sg'] = "Server Gruppe entfernen";
$nex_lang['ts3admin_sg_name'] = "Server Gruppen Name";
$nex_lang['ts3admin_token'] = "Token";
$nex_lang['ts3admin_channel'] = "Channel";
$nex_lang['ts3admin_channelgroup'] = "Channel Gruppe";
$nex_lang['ts3admin_servergroup'] = "Server Gruppe";
$nex_lang['ts3admin_info_delete_token'] = "Token entfernen";
$nex_lang['ts3admin_channel'] = "Channel";
$nex_lang['ts3admin_dont_allow'] = "Nicht erlauben";
$nex_lang['ts3admin_allow'] = "Erlauben";
$nex_lang['ts3admin_skip'] = "Skip";
$nex_lang['ts3admin_negated'] = "Negated";
$nex_lang['ts3admin_name_desc'] = "Name / Beschreibung";
$nex_lang['ts3admin_value'] = "Wert";
$nex_lang['ts3admin_grant'] = "Vergabe";
$nex_lang['ts3admin_serverid'] = "Server";
$nex_lang['ts3admin_serverid'] = "Server";
$nex_lang['ts3admin_serverid'] = "Server";



// IT IS NOT ALLOWED TO EDIT SOMETHING UNDER THIS LINE!!!

#$nex_lang['gnu_gpl_licence'] = '<a rel="license" href="http://creativecommons.org/licenses/GPL/2.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/GPL/2.0/88x62.png" /></a><br />Dieser Werk bzw. Inhalt ist unter einer <a rel="license" href="http://creativecommons.org/licenses/GPL/2.0/">Creative Commons-Lizenz</a> lizenziert.';
