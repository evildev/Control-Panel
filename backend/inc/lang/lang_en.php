<?php

// lang_en.php

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


$nex_lang['LANGUAGE'] = "english";
$nex_lang['LANGUAGE_SHORT'] = "en";


// Allgemein


$nex_lang['message_delete_customer_true'] = "The customer entry was successfully removed from the database!";
$nex_lang['message_delete_root_true'] = "The rootserver entry was successfully fremoved from the database!";
$nex_lang['message_delete_vserver_true'] = "The server was successfully deleted!";
$nex_lang['message_clear_db_log_true'] = "The database log was emptied successfully!";
$nex_lang['message_create_db_backup_true'] = "The MySQL-backup was created successfully!";
$nex_lang['message_delete_db_backup_true'] = "The MySQL-backup was deleted successfully!";
$nex_lang['message_save_true'] = "Die Daten wurden erfolgreich gespeichert!";
$nex_lang['message_send_message'] = "The message was sent successfully!";

$nex_lang['message_system'] = "System message:";

$nex_lang['login_false'] = "You have unfortunately entered wrong login information!";
$nex_lang['login_true'] = "You were logged in successfully!!";

$nex_lang['button_save'] = "Save!";
$nex_lang['button_reset'] = "Reset";
$nex_lang['button_search'] = "Search";
$nex_lang['button_send'] = "Send!";
$nex_lang['button_login'] = "Log me in!";
$nex_lang['button_copy_perms'] = "Copy permissions!";

$nex_lang['page'] = "Page";
$nex_lang['of'] = "of";

$nex_lang['yes'] = "Yes";
$nex_lang['no'] = "No";

$nex_lang['welcome'] = "Welcome";
$nex_lang['header_text'] = "Here you can log into the webinterface!";
$nex_lang['logout'] = "I would like to log off again!";
$nex_lang['welcome'] = "Welcome";
$nex_lang['adminarea'] = "Admin area";
$nex_lang['goto_adminarea'] = "Go to the admin area";
$nex_lang['customerarea'] = "Customer area";
$nex_lang['goto_customerarea'] = "Go to the customer area";


// Navigation


$nex_lang['overview'] = "Server status";
$nex_lang['tsviewer'] = "Server viewer";
$nex_lang['servermessage'] = "Send message";
$nex_lang['serversettings'] = "Server settings";
$nex_lang['servergroups'] = "Server groups";
$nex_lang['tokenmanager'] = "Token manager";
$nex_lang['user'] = "User";
$nex_lang['clientfind'] = "Search ID";


// Portal

// main.tpl

$nex_lang['header_main'] = "Teamspeak 3 Webinterface - Login";


// Adminbereich

// admin_navigation.tpl

$nex_lang['customer'] = "Show users";
$nex_lang['customer_add'] = "Add user";
$nex_lang['rootserver'] = "Rootserver";
$nex_lang['voiceserver_master'] = "Voiceserver";
$nex_lang['voiceserver_assign'] = "Assign voiceserver";
$nex_lang['cmslog'] = "CMS log";
$nex_lang['backup'] = "Backup";
$nex_lang['settings'] = "Settings";
$nex_lang['navi_server'] = "Server";
$nex_lang['navi_permission'] = "Permissions";
$nex_lang['navi_ids'] = "Identities";
$nex_lang['navi_user'] = "Users";
$nex_lang['navi_cms'] = "CMS";
$nex_lang['navi_settings'] = "Settings";

// settings.tpl

$nex_lang['cms_settings'] = "CMS settings";
$nex_lang['cms_sitename'] = "Page name";
$nex_lang['cms_siteurl'] = "Page URL";
$nex_lang['cms_emailinfo'] = "Info E-Mail";
$nex_lang['cms_templatedir'] = "Template folder";
$nex_lang['cms_language'] = "Language";
$nex_lang['cms_sessionexpire'] = "Expiration of the session ( minutes )";
$nex_lang['cms_maintenance'] = "Webinterface maintenance";
$nex_lang['contact'] = "Contact settings";
$nex_lang['contact_company'] = "Company";
$nex_lang['contact_prefix'] = "Prefix";
$nex_lang['contact_phone'] = "Phone";
$nex_lang['contact_name'] = "Name";
$nex_lang['contact_street_no'] = "Street / number";
$nex_lang['contact_city'] = "City";
$nex_lang['contact_zipcode'] = "Postal code";
$nex_lang['contact_country'] = "Country";
// backup.tpl

$nex_lang['head_backup_overview'] = "Backup overview";
$nex_lang['id'] = "ID";
$nex_lang['type'] = "Type";
$nex_lang['date'] = "Date";
$nex_lang['file'] = "File";
$nex_lang['unique_id'] = "Unique BAK-ID";
$nex_lang['size'] = "Size";
$nex_lang['option'] = "Option";
$nex_lang['info_create_backup'] = "Create backup";
$nex_lang['info_download_backup'] = "Download backup";
$nex_lang['info_delete_backup'] = "Delete backup";

// cmslog.tpl

$nex_lang['head_cmslog'] = "CMS log";
$nex_lang['log'] = "Log";
$nex_lang['log_created_in'] = "Log created in module";
$nex_lang['log_delete'] = "Delete all logs!";
$nex_lang['log_info_add'] = "adds";
$nex_lang['log_info_delete'] = "deletes";
$nex_lang['log_info_edit'] = "edits";
$nex_lang['log_info_send'] = "sends";
$nex_lang['log_info_move'] = "moves";
$nex_lang['log_info_close'] = "closes";
$nex_lang['log_info_start'] = "starts";
$nex_lang['log_info_stop'] = "stops";
$nex_lang['log_info_login'] = "logs in";
$nex_lang['log_info_logout'] = "logs out";

// cmslog.tpl

$nex_lang['head_voiceserver_assign'] = "Assign existing voiceserver to a user";
$nex_lang['customer'] = "User";
$nex_lang['master_vc'] = "Master voiceserver";
$nex_lang['udpport'] = "UDP port";
$nex_lang['slots'] = "Slots";
$nex_lang['log_info_logout'] = "logs out";
$nex_lang['log_info_logout'] = "logs out";
$nex_lang['log_info_logout'] = "logs out";
$nex_lang['log_info_logout'] = "logs out";
$nex_lang['log_info_logout'] = "logs out";
$nex_lang['log_info_logout'] = "logs out";

// rootserver.tpl

$nex_lang['head_rootserver'] = "Rootserver overview";
$nex_lang['head_add_rootserver'] = "Add rootserver";
$nex_lang['rootserver_id'] = "ID";
$nex_lang['rootserver_name'] = "Name";
$nex_lang['rootserver_serverip'] = "Server IP";
$nex_lang['rootserver_type'] = "Type";
$nex_lang['rootserver_traffic'] = "Traffic";
$nex_lang['rootserver_status'] = "Status";
$nex_lang['rootserver_option'] = "Option";
$nex_lang['rootserver_online'] = "Server available by ping";
$nex_lang['rootserver_offline'] = "Server unavailable by ping";
$nex_lang['rootserver_delete'] = "Delete rootserver";
$nex_lang['rootserver_user'] = "User";
$nex_lang['rootserver_password'] = "Password";

// customer_add.tpl

$nex_lang['head_customer_add'] = "Add customer";
$nex_lang['customer_add_country'] = "Country";
$nex_lang['customer_add_date'] = "Date of order / registration";
$nex_lang['customer_add_email'] = "E-mail address";
$nex_lang['customer_add_status'] = "Status";
$nex_lang['customer_add_password'] = "Password";

// customer.tpl

$nex_lang['head_edit_customer'] = "Edit customer";
$nex_lang['head_customer'] = "User database";
$nex_lang['head_voiceserver_3'] = "Assigned Teamspeak 3 server";
$nex_lang['customer_name'] = "Firstname";
$nex_lang['customer_surname'] = "Lastname";
$nex_lang['customer_email'] = "E-mail";
$nex_lang['customer_password'] = "Password";
$nex_lang['customer_status'] = "Status";
$nex_lang['customer_date'] = "Registration date";
$nex_lang['customer_id'] = "ID";
$nex_lang['customer_master_id'] = "Master ID";
$nex_lang['customer_serverip'] = "Server IP";
$nex_lang['customer_udpport'] = "UDP port";
$nex_lang['customer_slots'] = "Slots";
$nex_lang['customer_last_online'] = "Last online";
$nex_lang['customer_option'] = "Option";
$nex_lang['customer_admin'] = "Administrator";
$nex_lang['customer_customer'] = "User";
$nex_lang['info_useroverview'] = "User overview";
$nex_lang['info_edit_user'] = "Edit user";
$nex_lang['info_delete_user'] = "Delete user";
$nex_lang['sort_name'] = "Sort by name";
$nex_lang['sort_id'] = "Sort by ID";
$nex_lang['sort_regdate'] = "Sort by registration date";
$nex_lang['sort_logindate'] = "Sort by login date";
$nex_lang['info_delete_user'] = "Delete user completely from the database";
$nex_lang['info_start_server'] = "Start server";
$nex_lang['info_stop_server'] = "Stop server";
$nex_lang['info_admin_server'] = "Administer server";
$nex_lang['info_delete_voiceserver'] = "Delete voiceserver";

// ts3monitor.tpl

$nex_lang['head_instancesettings'] = "Server settings";
$nex_lang['head_instanceinfo'] = "Instance information";
$nex_lang['head_vserver_monitoring'] = "Voiceserver monitoring";
$nex_lang['serverinstance_guest_serverquery_group'] = "Default guest Serverquery group ID";
$nex_lang['serverinstance_template_serveradmin_group'] = "Template serveradmin group ID";
$nex_lang['serverinstance_template_serverdefault_group'] = "Template default server group ID";
$nex_lang['serverinstance_template_channeladmin_group'] = "Template channel admin Group ID";
$nex_lang['serverinstance_template_channeldefault_group'] = "Template channel default Group ID";
$nex_lang['serverinstance_filetransfer_port'] = "Filetransfer port";
$nex_lang['serverinstance_max_download_total_bandwidth'] = "Max. download bandwidth per second";
$nex_lang['serverinstance_max_upload_total_bandwidth'] = "Max. upload bandwith per second";
$nex_lang['serverinstance_serverquery_flood_commands'] = "Serverquery flood commands";
$nex_lang['serverinstance_serverquery_flood_time'] = "Serverquery flood time";
$nex_lang['serverinstance_serverquery_ban_time'] = "Serverquery ban time";
$nex_lang['host_timestamp_utc'] = "Servertime";
$nex_lang['instance_uptime'] = "Instance uptime";
$nex_lang['version'] = "Server version";
$nex_lang['platform'] = "Server OS";
$nex_lang['serverinstance_database_version'] = "Database version";
$nex_lang['virtualservers_running_total'] = "Servers running in total";
$nex_lang['virtualservers_total_clients_online'] = "Max. users";
$nex_lang['virtualservers_total_channels_online'] = "Channels in total";
$nex_lang['connection_packets_sent_total'] = "Packets sent in total";
$nex_lang['connection_bytes_sent_total'] = "Bytes sent in total";
$nex_lang['connection_packets_received_total'] = "Packets received in total";
$nex_lang['connection_bytes_received_total'] = "Bytes received in total";
$nex_lang['ts3monitor_port'] = "Port";
$nex_lang['ts3monitor_name'] = "Name";
$nex_lang['ts3monitor_user'] = "User";
$nex_lang['ts3monitor_uptime'] = "Uptime";
$nex_lang['ts3monitor_filetraffic'] = "Bandwidth";
$nex_lang['ts3monitor_traffic'] = "Traffic";
$nex_lang['ts3monitor_option'] = "Option";
$nex_lang['ts3monitor_info_serveredit'] = "Administer server";
$nex_lang['ts3monitor_info_customer_assign'] = "Server hast to be assigned to a user first!";
$nex_lang['ts3monitor_info_start'] = "Start server";
$nex_lang['ts3monitor_info_stop'] = "Stop server";
$nex_lang['ts3monitor_info_delete'] = "Delete voiceserver";
$nex_lang['head_send_message'] = "Send message to the server";
$nex_lang['ts3monitor_message'] = "Message";
$nex_lang['head_voiceserver_master'] = "Voiceserver masterlist";
$nex_lang['ts3monitor_id'] = "ID";
$nex_lang['ts3monitor_root_id'] = "Root ID";
$nex_lang['ts3monitor_serverip'] = "Server IP";
$nex_lang['ts3monitor_tcpport'] = "TCP port";
$nex_lang['ts3monitor_httpport'] = "HTTP port";
$nex_lang['ts3monitor_serveradmin'] = "Serveradmin";
$nex_lang['ts3monitor_password'] = "Password";
$nex_lang['ts3monitor_info_serveroverview'] = "Server overview";

// ts3admin.tpl

$nex_lang['head_serveroverview'] = "Server overview";
$nex_lang['head_banner'] = "Announcements / Banner";
$nex_lang['head_limits'] = "Restrictions";
$nex_lang['head_stats_1'] = "Statistics - Language";
$nex_lang['head_stats_2'] = "Statistics - Filetransfer";
$nex_lang['head_ts3viewer'] = "TS3-Viewer";
$nex_lang['head_hostbanner'] = "Server settings - upload a hostbanner!";
$nex_lang['head_serversettings'] = "Server settings";
$nex_lang['head_usermanagement'] = "User management";
$nex_lang['head_sendmessagetoserver'] = "Send message to the server";
$nex_lang['head_searchforid'] = "Search user using the database ID";
$nex_lang['head_searchforuniqueid'] = "Search user using the unique ID";
$nex_lang['head_servergroups'] = "Server groups";
$nex_lang['head_servergroup'] = "Server group";
$nex_lang['head_add_servergroup'] = "Add server group";
$nex_lang['head_tokenmanager'] = "Token manager";
$nex_lang['head_create_token'] = "Create a new token";
$nex_lang['head_permissionoverview'] = "Permission overview";
$nex_lang['head_permission'] = "Permission";
$nex_lang['head_servergroup_perms'] = "Server group permissions";
$nex_lang['head_serveroverview'] = "Server overview";
$nex_lang['head_serveroverview'] = "Server overview";
$nex_lang['loading_1'] = "The page is loading. Please wait!";
$nex_lang['loading_2'] = "This action can take up to 30 seconds - Please be patient!";
$nex_lang['virtualserver_id'] = "Server ID";
$nex_lang['virtualserver_unique_identifier'] = "Server unique ID";
$nex_lang['virtualserver_platform'] = "Server OS";
$nex_lang['virtualserver_version'] = "Version";
$nex_lang['virtualserver_created'] = "Server created on";
$nex_lang['virtualserver_uptime'] = "Server uptime";
$nex_lang['virtualserver_name'] = "Server name";
$nex_lang['serverip'] = "Server IP";
$nex_lang['virtualserver_port'] = "UDP port";
$nex_lang['tcpport'] = "TCP / Queryport";
$nex_lang['virtualserver_clientsonline'] = "Max. Users";
$nex_lang['virtualserver_client_connections'] = "Client connections";
$nex_lang['virtualserver_channelsonline'] = "Current channel amount";
$nex_lang['virtualserver_needed_identity_security_level'] = "Security level";
$nex_lang['virtualserver_flag_password'] = "Password protection";
$nex_lang['virtualserver_welcomemessage'] = "Welcome message";
$nex_lang['virtualserver_hostbanner_url'] = "Hostbanner URL";
$nex_lang['virtualserver_hostbanner_gfx_url'] = "Hostbanner GFX URL";
$nex_lang['virtualserver_hostbanner_gfx_interval'] = "Hostbanner GFX Interval";
$nex_lang['virtualserver_max_download_total_bandwidth'] = "Max. bandwidth download";
$nex_lang['virtualserver_max_upload_total_bandwidth'] = "Max. bandwidth upload";
$nex_lang['virtualserver_download_quota'] = "Max. download quota";
$nex_lang['virtualserver_upload_quota'] = "Max. upload quota";
$nex_lang['connection_packets_sent_total'] = "Packets sent in total";
$nex_lang['connection_bytes_sent_total'] = "Bytes sent in total";
$nex_lang['connection_packets_received_total'] = "Packets received in total";
$nex_lang['connection_bytes_received_total'] = "Bytes sent in total";
$nex_lang['connection_bandwidth_received_last_minute_total'] = "Bandwidth in [Bytes/min]";
$nex_lang['connection_bandwidth_sent_last_minute_total'] = "Bandwidth out [Bytes/min]";
$nex_lang['virtualserver_month_bytes_downloaded'] = "Download traffic / month";
$nex_lang['virtualserver_month_bytes_uploaded'] = "Upload traffic / month";
$nex_lang['virtualserver_total_bytes_downloaded'] = "Download traffic / in total";
$nex_lang['virtualserver_total_bytes_uploaded'] = "Upload traffic / in total";
$nex_lang['connection_filetransfer_bandwidth_received'] = "Bandwidth in [Bytes/sec]";
$nex_lang['connection_filetransfer_bandwidth_sent'] = "Bandwidth out [Bytes/sec]";
$nex_lang['ts3adminhostbanner_gfx'] = "Hostbanner GFX";
$nex_lang['virtualserver_maxclients'] = "Max. Clients";
$nex_lang['virtualserver_hostmessage'] = "Host message";
$nex_lang['virtualserver_hostmessage_mode'] = "Host message mode";
$nex_lang['ts3admin_upload_message'] = "Upload here";
$nex_lang['virtualserver_complain_autoban_count'] = "Autoban count";
$nex_lang['virtualserver_complain_autoban_time'] = "Autoban time";
$nex_lang['virtualserver_complain_autoban_time'] = "Remove time";
$nex_lang['virtualserver_min_clients_in_channel_before_forced_silence'] = "Min. clients in channel before silence";
$nex_lang['virtualserver_needed_identity_security_level'] = "Security level";
$nex_lang['ts3admin_set_new_password'] = "Set new password";
$nex_lang['ts3admin_new_password'] = "New server password";
$nex_lang['ts3admin_userid'] = "User ID";
$nex_lang['servergroup'] = "Server group";
$nex_lang['ts3admin_id'] = "ID";
$nex_lang['ts3admin_nickname'] = "Nickname";
$nex_lang['ts3admin_group'] = "Group";
$nex_lang['ts3admin_user_created'] = "User created";
$nex_lang['ts3admin_last_login'] = "Last login";
$nex_lang['ts3admin_status'] = "Status";
$nex_lang['ts3admin_option'] = "Option";
$nex_lang['ts3admin_info_user_edit'] = "Edit user";
$nex_lang['ts3admin_info_user_delete'] = "Delete user";
$nex_lang['ts3admin_message'] = "Message";
$nex_lang['ts3admin_db_id'] = "Database ID";
$nex_lang['ts3admin_unqiue_id'] = "Unique ID";
$nex_lang['head_user'] = "Clients";
$nex_lang['ts3admin_name'] = "Name";
$nex_lang['ts3admin_unqie_id'] = "Unique ID";
$nex_lang['ts3admin_info_user_delete_from_sg'] = "Remove user from server group";
$nex_lang['head_edit_name'] = "Edit name";
$nex_lang['ts3admin_new_sg_name'] = "New server group name";
$nex_lang['head_copy_perms'] = "Copy permissions";
$nex_lang['ts3admin_message_attention'] = "Attention!";
$nex_lang['ts3admin_text_perm_copy_info'] = "The permissions from the currently chosen server group will be completely replaced by the permissions from the server group chosen below after clicking the - <strong>Copy permissions!</strong> - button. The permissions of the currently chosen server group can <strong>not</strong> be restored!";
$nex_lang['ts3admin_text_perm_copy_choose'] = "Now choose the group from which the permissions shall be copied!";
$nex_lang['ts3admin_type'] = "Type";
$nex_lang['ts3admin_icon_id'] = "Icon ID";
$nex_lang['ts3admin_save_db'] = "Save DB";
$nex_lang['ts3admin_info_edit_perms'] = "Edit permissions";
$nex_lang['ts3admin_info_edit_sg_name'] = "Edit server group name";
$nex_lang['ts3admin_info_sg_user'] = "Server group clients";
$nex_lang['ts3admin_info_copy_perm'] = "Copy permissions from an existing server group";
$nex_lang['ts3admin_info_dont_delete'] = "This group can not be deleted because it is a default group. As soon as it gets deleted, everything breaks down!";
$nex_lang['ts3admin_info_delete_sg'] = "Delete server group";
$nex_lang['ts3admin_sg_name'] = "Server group name";
$nex_lang['ts3admin_token'] = "Token";
$nex_lang['ts3admin_channel'] = "Channel";
$nex_lang['ts3admin_channelgroup'] = "Channel group";
$nex_lang['ts3admin_info_delete_token'] = "Delete token";
$nex_lang['ts3admin_channel'] = "Channel";
$nex_lang['ts3admin_dont_allow'] = "Disallow";
$nex_lang['ts3admin_allow'] = "Allow";
$nex_lang['ts3admin_skip'] = "Skip";
$nex_lang['ts3admin_negated'] = "Negated";
$nex_lang['ts3admin_name_desc'] = "Name / Description";
$nex_lang['ts3admin_value'] = "Value";
$nex_lang['ts3admin_grant'] = "Grant";
$nex_lang['ts3admin_serverid'] = "Server";
$nex_lang['ts3admin_serverid'] = "Server";
$nex_lang['ts3admin_serverid'] = "Server";



// IT IS NOT ALLOWED TO EDIT SOMETHING UNDER THIS LINE!!!

#$nex_lang['gnu_gpl_licence'] = '<a rel="license" href="http://creativecommons.org/licenses/GPL/2.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/GPL/2.0/88x62.png" /></a><br />Dieser Werk bzw. Inhalt ist unter einer <a rel="license" href="http://creativecommons.org/licenses/GPL/2.0/">Creative Commons-Lizenz</a> lizenziert.';
