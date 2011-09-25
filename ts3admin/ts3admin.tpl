<!-- Servermanagement -->
{$ausgabe}
{if $msg}{$msg}{/if}
{literal}
<script type="text/javascript">

	document.getElementById('overlay').style.display = 'block';

</script>
{/literal}
<div id="overlay" style="display:"><div align="center"><div class="overlaybox">{$lang.loading_1}</div><div class="overlayboxsmall">{$lang.loading_2}</div></div></div>
{if $act eq "overview"}

<div class="contentbox">
  <div class="contenthead">{$lang.head_serveroverview} - {$serverip}:{$virtualserver_port}</div>
  <div class="contenttext">
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_id}:</div>
      <div style="float:left; width:251px; padding:5px;">{$virtualserver_id}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_unique_identifier}:</div>
      <div style="float:left; width:251px; padding:5px;">{$virtualserver_unique_identifier}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_platform} / {$lang.virtualserver_version}:</div>
      <div style="float:left; width:251px; padding:5px;">{$virtualserver_platform} - {$virtualserver_version}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_created}:</div>
      <div style="float:left; width:251px; padding:5px;">{$virtualserver_created|date_format:"%d.%m.%Y %H:%M"}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_uptime}:</div>
      <div style="float:left; width:251px; padding:5px;">{$virtualserver_uptime}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_name}:</div>
      <div style="float:left; width:251px; padding:5px;">{$virtualserver_name}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverip}:</div>
      <div style="float:left; width:251px; padding:5px;">{$serverip}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_port}:</div>
      <div style="float:left; width:251px; padding:5px;">{$virtualserver_port}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.tcpport}:</div>
      <div style="float:left; width:251px; padding:5px;">{$tcpport}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_clientsonline}:</div>
      <div style="float:left; width:251px; padding:5px;">{$virtualserver_clientsonline} / {$virtualserver_maxclients}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_client_connections}:</div>
      <div style="float:left; width:251px; padding:5px;">{$virtualserver_client_connections}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_channelsonline}:</div>
      <div style="float:left; width:251px; padding:5px;">{$virtualserver_channelsonline}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_needed_identity_security_level}:</div>
      <div style="float:left; width:251px; padding:5px;">{$virtualserver_needed_identity_security_level}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_flag_password}:</div>
      <div style="float:left; width:251px; padding:5px;">{$virtualserver_flag_password}</div>
    <div class="clear">&nbsp;</div>
  </div>
</div>
<div class="contentspacer"></div>
<div class="contentbox">
  <div class="contenthead">{$lang.head_banner}</div>
  <div class="contenttext">
    <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_welcomemessage}:</div>
    <div style="float:left; width:450px; padding:5px;">{$virtualserver_welcomemessage}</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_hostbanner_url}:</div>
    <div style="float:left; width:450px; padding:5px;">{$virtualserver_hostbanner_url}</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_hostbanner_gfx_url}:</div>
    <div style="float:left; width:450px; padding:5px;">{$virtualserver_hostbanner_gfx_url}</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_hostbanner_gfx_interval}:</div>
    <div style="float:left; width:450px; padding:5px;">{$virtualserver_hostbanner_gfx_interval}</div>
    <div class="clear">&nbsp;</div>
  </div>
</div>
<div class="contentspacer"></div>
<div class="contentbox">
  <div class="contenthead">{$lang.head_limits}</div>
  <div class="contenttext">
    <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_max_download_total_bandwidth}:</div>
    <div style="float:left; width:450px; padding:5px;">{$virtualserver_max_download_total_bandwidth} / Sekunde</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_max_upload_total_bandwidth}:</div>
    <div style="float:left; width:450px; padding:5px;">{$virtualserver_max_upload_total_bandwidth} / Sekunde</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_download_quota}:</div>
    <div style="float:left; width:450px; padding:5px;">{$virtualserver_download_quota}</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_upload_quota}:</div>
    <div style="float:left; width:450px; padding:5px;">{$virtualserver_upload_quota}</div>
    <div class="clear">&nbsp;</div>
  </div>
</div>
<div class="contentspacer"></div>
<div class="contentbox">
  <div class="contenthead">{$lang.head_stats_1}</div>
  <div class="contenttext">
    <div style="float:left; width:250px; padding:5px;">{$lang.connection_packets_sent_total}:</div>
    <div style="float:left; width:250px; padding:5px;">{$connection_packets_sent_total}</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.connection_bytes_sent_total}:</div>
    <div style="float:left; width:250px; padding:5px;">{$connection_bytes_sent_total}</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.connection_packets_received_total}:</div>
    <div style="float:left; width:250px; padding:5px;">{$connection_packets_received_total}</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.connection_bytes_received_total}:</div>
    <div style="float:left; width:450px; padding:5px;">{$connection_bytes_received_total}</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.connection_bandwidth_received_last_minute_total}:</div>
    <div style="float:left; width:250px; padding:5px;">{$connection_bandwidth_received_last_minute_total}</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.connection_bandwidth_sent_last_minute_total}:</div>
    <div style="float:left; width:250px; padding:5px;">{$connection_bandwidth_sent_last_minute_total}</div>
    <div class="clear">&nbsp;</div>
  </div>
</div>
<div class="contentspacer"></div>
<div class="contentbox">
  <div class="contenthead">{$lang.head_stats_2}</div>
  <div class="contenttext">
    <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_month_bytes_downloaded}:</div>
    <div style="float:left; width:250px; padding:5px;">{$virtualserver_month_bytes_downloaded}</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_month_bytes_uploaded}:</div>
    <div style="float:left; width:250px; padding:5px;">{$virtualserver_month_bytes_uploaded}</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_total_bytes_downloaded}:</div>
    <div style="float:left; width:250px; padding:5px;">{$virtualserver_total_bytes_downloaded}</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_total_bytes_uploaded}:</div>
    <div style="float:left; width:250px; padding:5px;">{$virtualserver_total_bytes_uploaded}</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.connection_filetransfer_bandwidth_received}:</div>
    <div style="float:left; width:250px; padding:5px;">{$connection_filetransfer_bandwidth_received}</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.connection_filetransfer_bandwidth_sent}:</div>
    <div style="float:left; width:250px; padding:5px;">{$connection_filetransfer_bandwidth_sent}</div>
    <div class="clear">&nbsp;</div>
  </div>
</div>

{elseif $act eq "ts-viewer"}

<div class="contentbox">
  <div class="contenthead">{$lang.head_ts3viewer} - {$serverip}:{$virtualserver_port}</div>
  <div class="contenttext">
      <div style="float:left; width:65px; padding:5px; height:15px;">&nbsp;</div>
      <div style="float:left; width:300px; padding:5px; padding-left: 25px;">

    <script type="text/javascript" src="http://www.teamspeak3.de/backend/external/tsviewer.php?serverip={$serverip}&tcpport={$tcpport}&udpport={$virtualserver_port}&mode=3&nolog=1"></script>
      </div>
    <div class="clear">&nbsp;</div>
  </div>
</div>
<div class="contentspacer"></div>

{elseif $act eq "settings"}
{if $do eq "pre-upload"}
<div class="contentspacer"></div>
<form enctype="multipart/form-data" action="admin.php?m=ts3admin&amp;act=settings&amp;do=upload&amp;sid={$sid}" method="post" name="sgcopy" id="sgcopy">
  <input type="hidden" id="save" name="save" value="1" />
  <div class="contentbox">
    <div class="contenthead">{$lang.head_hostbanner}</div>
    <div class="contenttext">
      <div style="float:left; width:250px; padding:5px;">{$lang.ts3adminhostbanner_gfx}:</div>
      <div style="float:left; width:250px; padding:5px;">
        
        <input class="bform" style="width: 250px;" id="gfx" type="file" name="gfx"/>
      </div>
      <div class="clear">&nbsp;</div>
    </div>
  </div>
  <div class="contentspacer"> &nbsp; </div>
  <input type="button" onclick='Javasript:abschicken()' value="{$lang.button_upload}Hochladen!">
</form>
<div style="float:left; height:25px;">&nbsp;</div>
{/if}
<form action="admin.php?m=ts3admin&amp;act=settings&amp;do=edit&amp;sid={$sid}" method="post" name="settings" id="settings">
  <div class="contentbox">
    <div class="contenthead">{$lang.head_serversettings}</div>
    <div class="contenttext">
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_name}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="virtualserver_name" type="text" name="settings[virtualserver_name]" value="{$virtualserver_name}"  />
      </div>
      {if $admin eq "1"}
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_maxclients}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="virtualserver_maxclients" type="text" name="settings[virtualserver_maxclients]" value="{$virtualserver_maxclients}"  />
      </div>
      {/if}
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_welcomemessage}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="virtualserver_welcomemessage" type="text" name="settings[virtualserver_welcomemessage]" value="{$virtualserver_welcomemessage}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_hostmessage}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="virtualserver_hostmessage" type="text" name="settings[virtualserver_hostmessage]" value="{$virtualserver_hostmessage}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_hostmessage_mode}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" id="virtualserver_hostmessage_mode" name="settings[virtualserver_hostmessage_mode]"  />
        
        <option selected="selected" value="0">{$lang.ts3admin_host_message_mode_0}Keine Nachricht anzeigen</option>
        <option value="1">{$lang.ts3admin_host_message_mode_1}Nachricht im Chat anzeigen</option>
        <option value="2">{$lang.ts3admin_host_message_mode_2}Nachricht in einem Dialogfeld anzeigen</option>
        <option value="3">{$lang.ts3admin_host_message_mode_3}Nachricht in einem Dialogfeld anzeigen und Verbindung zum Server trennen</option>
        </select>
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_hostbanner_url}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="virtualserver_hostbanner_url" type="text" name="settings[virtualserver_hostbanner_url]" value="{$virtualserver_hostbanner_url}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_hostbanner_gfx_url}:</div>
      <div style="float:left; width:200px; padding:5px;">
        <input class="bform" style="width: 200px;" id="virtualserver_hostbanner_gfx_url" type="text" name="settings[virtualserver_hostbanner_gfx_url]" value="{$virtualserver_hostbanner_gfx_url}"  />
      </div>
      <div style="float:left; width:150px; padding:10px;">&nbsp;&nbsp;&nbsp;( <a class="dark" href="admin.php?m=ts3admin&amp;act=settings&amp;do=pre-upload&amp;sid={$sid}">{$lang.ts3admin_upload_message}!</a> )</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_hostbanner_gfx_interval}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="virtualserver_hostbanner_gfx_interval" type="text" name="settings[virtualserver_hostbanner_gfx_interval]" value="{$virtualserver_hostbanner_gfx_interval}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_complain_autoban_count}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="virtualserver_complain_autoban_count" type="text" name="settings[virtualserver_complain_autoban_count]" value="{$virtualserver_complain_autoban_count}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_complain_autoban_time}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="virtualserver_complain_autoban_time" type="text" name="settings[virtualserver_complain_autoban_time]" value="{$virtualserver_complain_autoban_time}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_complain_autoban_time}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="virtualserver_complain_autoban_time" type="text" name="settings[virtualserver_complain_autoban_time]" value="{$virtualserver_complain_autoban_time}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_min_clients_in_channel_before_forced_silence}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="virtualserver_min_clients_in_channel_before_forced_silence" type="text" name="settings[virtualserver_min_clients_in_channel_before_forced_silence]" value="{$virtualserver_min_clients_in_channel_before_forced_silence}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_needed_identity_security_level}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="virtualserver_needed_identity_security_level" type="text" name="settings[virtualserver_needed_identity_security_level]" value="{$virtualserver_needed_identity_security_level}"  />
      </div>
      <div class="clear">&nbsp;</div>
      {if $admin eq "1"}
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_max_download_total_bandwidth}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="virtualserver_max_download_total_bandwidth" type="text" name="settings[virtualserver_max_download_total_bandwidth]" value="{$virtualserver_max_download_total_bandwidth}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_max_upload_total_bandwidth}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="virtualserver_max_upload_total_bandwidth" type="text" name="settings[virtualserver_max_upload_total_bandwidth]" value="{$virtualserver_max_upload_total_bandwidth}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_download_quota}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="virtualserver_download_quota" type="text" name="settings[virtualserver_download_quota]" value="{$virtualserver_download_quota}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualserver_upload_quota}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="virtualserver_upload_quota" type="text" name="settings[virtualserver_upload_quota]" value="{$virtualserver_upload_quota}"  />
      </div>
      <div class="clear">&nbsp;</div>{/if}
      <div style="float:left; width:250px; padding:5px; height:25px;"></div>
      <div style="float:left; width:250px; padding:5px;">
        &nbsp;
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.ts3admin_set_new_password}:</div>
      <div style="float:left; width:250px; padding:5px;"><input style="width:40px; padding: 0px; margin: 0px; height: 5px;" checked="checked" type="radio" name="set_password" value="0">{$lang.no}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="width:40px; padding: 0px; margin: 0px; height: 5px;" type="radio" name="set_password" value="1">{$lang.yes}
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.ts3admin_new_password}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="virtualserver_password" type="text" name="virtualserver_password"  />
      </div>
      <div class="clear">&nbsp;</div>
    </div>
  </div>
  <div class="contentspacer"> &nbsp; </div>
  <input type="submit" value="{$lang.button_save}">
  <input type="reset" value="{$lang.button_reset}" />
</form>
{elseif $act eq "user"}
{if $do eq "pre-edit"}
<div class="contentspacer"></div>
<form action="admin.php?m=ts3admin&amp;act=user&amp;do=edit&amp;sid={$sid}&amp;uid={$uid}" method="post" name="user" id="user">
  <input type="hidden" id="save" name="save" value="1" />
  <div class="contentbox">
    <div class="contenthead">{$lang.head_usermanagement} - {$lang.ts3admin_userid}: {$uid}</div>
    <div class="contenttext">
      <div style="float:left; width:250px; padding:5px;">{$lang.servergroup}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" id="servergroup" style="width: 300px;" name="servergroup">
          
          
          
         {foreach from=$servergrouplist item=sg name=sg}
		  
         
          
          <option {if $sg.sgid eq $sgid}selected="selected"{/if}  value="{$sg.sgid}">{$sg.name}</option>
          
          
         {/foreach}
        
        
        
        </select>
      </div>
      <div class="clear">&nbsp;</div>
    </div>
  </div>
  <div class="contentspacer"> &nbsp; </div>
  <input type="submit" value="{$lang.button_save}">
  <input type="reset" value="{$lang.button_reset}" />
</form>
{/if}
<div class="contentbox">
  <div class="contenthead">{$lang.head_usermanagement} - {$lang.page} {$page} {$lang.of} {$pagecount}</div>
  <div class="contenttext">
    <div style="float:left; width:45px; height:15px; padding-left:7px;"><strong>{$lang.ts3admin_id}</strong></div>
    <div style="float:left; width:140px;"><strong>{$lang.ts3admin_nickname}</strong></div>
    <div style="float:left; width:110px;"><strong>{$lang.ts3admin_group}</strong></div>
    <div style="float:left; width:140px;"><strong>{$lang.ts3admin_user_created}</strong></div>
    <div style="float:left; width:140px;"><strong>{$lang.ts3admin_last_login}</strong></div>
    <div style="float:left; width:80px;"><strong>{$lang.ts3admin_status}</strong></div>
    <div style="float:left; width:55px;"><strong>{$lang.ts3admin_option}</strong></div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentbox">{foreach from=$clientdblist item=ul name=ul}
  <div class="contenttable" style="background-color:{cycle values="#f7f7f7,#e2f0f1"};">
    <div style="float:left; width:45px; height:15px;">{$ul.cldbid}</div>
    <div style="float:left; width:140px;">{$ul.client_nickname}</div>
    <div style="float:left; width:110px;">{$ul.sgname}</div>
    <div style="float:left; width:140px;">{$ul.client_created|date_format:"%d.%m.%Y %H:%M"}</div>
    <div style="float:left; width:140px;">{$ul.client_lastconnected|date_format:"%d.%m.%Y %H:%M"}</div>
    <div style="float:left; width:80px;">{$ul.status}&nbsp;</div>
    <div style="float:left; width:55px;"><a class="dark" href="admin.php?m=ts3admin&act=user&do=pre-edit&sid={$sid}&uid={$ul.cldbid}"><img src="./templates/{$theme}/images/pencil.png" alt="{$lang.ts3admin_info_user_edit}" title="{$lang.ts3admin_info_user_edit}" /></a>&nbsp;&nbsp;&nbsp;<a class="dark" ondblclick="document.location.href='admin.php?m=ts3admin&act=user&do=delete&sid={$sid}&uid={$ul.cldbid}'" style="cursor:pointer;"><img src="./templates/{$theme}/images/delete.png" alt="{$lang.ts3admin_info_user_delete}"  title="{$lang.ts3admin_info_user_delete}" /></a></div>
    <div class="clear"> </div>
  </div>
  {/foreach} </div>
<div class="contentbox">
  <div class="contenttable">
    <div style="float:left; text-align:right; width:710px; height:16px; padding-left:24px;">{$pages}&nbsp;&nbsp;&nbsp;</div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>

<div class="contentspacer"></div>
{elseif $act eq "message"}
<div class="contentspacer"></div>
<form action="admin.php?m=ts3admin&amp;act=message&amp;do=send&amp;sid={$sid}" method="post" name="message" id="message">
  <div class="contentbox">
    <div class="contenthead">{$lang.head_sendmessagetoserver}</div>
    <div class="contenttext">
      <div style="float:left; width:150px; padding:5px;">{$lang.ts3admin_message}</div>
      <div style="float:left; width:250px; padding:5px;">
      <textarea class="bform" style="width: 250px; height:150px;" id="message" type="text" name="message" /></textarea>
      </div>
      <div class="clear">&nbsp;</div>
    </div>
  </div>
  <div class="contentspacer"> &nbsp; </div>
  <input type="submit" value="{$lang.button_send}">
</form>

<div class="contentspacer">&nbsp;</div>
{elseif $act eq "clientfind"}
<div class="contentspacer"></div>
<form action="admin.php?m=ts3admin&amp;act=user&amp;sid={$sid}&amp;find=1&amp;methode=databaseid" method="post" name="user" id="user">
  <input type="hidden" id="save" name="save" value="1" />
  <div class="contentbox">
    <div class="contenthead">{$lang.head_usermanagement} - {$lang.head_searchforid}</div>
    <div class="contenttext">
      <div style="float:left; width:250px; padding:5px;">{$lang.ts3admin_db_id}</div>
      <div style="float:left; width:250px; padding:5px;">
      <input class="bform" style="width: 200px;" id="value" type="text" name="value"  />
        
      </div>
      <div class="clear">&nbsp;</div>
    </div>
  </div>
  <div class="contentspacer"> &nbsp; </div>
  <input type="submit" value="{$lang.button_search}">
  <input type="reset" value="{$lang.button_reset}" />
</form>

<div class="contentspacer">&nbsp;</div>

<div class="contentspacer">&nbsp;</div>

<form action="admin.php?m=ts3admin&amp;act=user&amp;sid={$sid}&amp;find=1&amp;methode=uniqueid" method="post" name="user" id="user">
  <input type="hidden" id="save" name="save" value="1" />
  <div class="contentbox">
    <div class="contenthead">{$lang.head_usermanagement} - {$lang.head_searchforuniqueid}</div>
    <div class="contenttext">
      <div style="float:left; width:250px; padding:5px;">{$lang.ts3admin_unqiue_id}</div>
      <div style="float:left; width:250px; padding:5px;">
      <input class="bform" style="width: 200px;" id="value" type="text" name="value"  />
        
      </div>
      <div class="clear">&nbsp;</div>
    </div>
  </div>
  <div class="contentspacer"> &nbsp; </div>
  <input type="submit" value="{$lang.button_search}">
  <input type="reset" value="{$lang.button_reset}" />
</form>

{elseif $act eq "servergroupclients"}
<div class="contentbox">
  <div class="contenthead">{$lang.head_servergroups} - {$lang.head_user} - {$servergroupname} ( {$sgid} )</div>
  <div class="contenttext">
    <div style="float:left; width:45px; height:15px; padding-left:7px;"><strong>{$lang.ts3admin_id}</strong></div>
    <div style="float:left; width:140px;"><strong>{$lang.ts3admin_name}</strong></div>
    <div style="float:left; width:250px;"><strong>{$lang.ts3admin_unqie_id}</strong></div>
    <div style="float:left; width:130px;">&nbsp;</div>
    <div style="float:left; width:145px;"><strong>{$lang.ts3admin_option}</strong></div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentbox">{foreach from=$servergroupclients item=sgcl name=sgcl}
  <div class="contenttable" style="background-color:{cycle values="#f7f7f7,#e2f0f1"};">
    <div style="float:left; width:45px; height:15px;">{$sgcl.cldbid}</div>
    <div style="float:left; width:140px;">{$sgcl.client_nickname}</div>
    <div style="float:left; width:250px;">{$sgcl.client_unique_identifier}</div>
    <div style="float:left; width:130px;">&nbsp;</div>
    <div style="float:left; width:145px;"><a class="dark" ondblclick="document.location.href='admin.php?m=ts3admin&act=servergroupclients&do=delete&sid={$sid}&sgid={$sgid}&cldbid={$sgcl.cldbid}'" style="cursor:pointer;"><img src="./templates/{$theme}/images/delete.png" alt="{$lang.ts3admin_info_user_delete_from_sg}"  title="{$lang.ts3admin_info_user_delete_from_sg}" /></a></div>
    <div class="clear"> </div>
  </div>
  {/foreach} </div>


{elseif $act eq "servergroups"}

{if $do eq "pre-rename"}
<div class="contentspacer"></div>
<form action="admin.php?m=ts3admin&amp;act=servergroups&amp;do=rename&amp;sid={$sid}&amp;sgid={$sgid}" method="post" name="user" id="user">
  <input type="hidden" id="save" name="save" value="1" />
  <div class="contentbox">
    <div class="contenthead">{$lang.head_servergroups} - {$lang.head_edit_name} - {$servergroupname}</div>
    <div class="contenttext">
      <div style="float:left; width:250px; padding:5px;">{$lang.ts3admin_new_sg_name}:</div>
      <div style="float:left; width:250px; padding:5px;">
        
      <input class="bform" style="width: 150px;" id="groupname" type="text" name="groupname"  />
      </div>
      <div class="clear">&nbsp;</div>
    </div>
  </div>
  <div class="contentspacer"> &nbsp; </div>
  <input type="submit" value="{$lang.button_save}">
  <input type="reset" value="{$lang.button_reset}" />
</form>
{/if}
{if $do eq "pre-copy"}
<div class="contentspacer"></div>
<form action="admin.php?m=ts3admin&amp;act=servergroups&amp;do=copy&amp;sid={$sid}&amp;sgid={$sgid}" method="post" name="sgcopy">
  <input type="hidden" id="save" name="save" value="1" />
  <div class="contentbox">
    <div class="contenthead">{$lang.head_servergroups} - {$lang.head_copy_perms} - {$lang.head_servergroup}: {$servergroupname} ( {$sgid} )</div>
    <div class="contenttext">
      <div style="float:left; width:25px; padding:5px;">&nbsp;</div>
      <div style="float:left; width:600px; padding:5px; height: 15px;"><span class="red">{$lang.ts3admin_message_attention}</span></div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:25px; padding:5px;">&nbsp;</div>
      <div style="float:left; width:650px; padding:5px; height: 45px;">{$lang.ts3admin_text_perm_copy_info}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:25px; padding:5px;">&nbsp;</div>
      <div style="float:left; width:300px; padding:5px;">{$lang.ts3admin_text_perm_copy_choose}</div>
      <div style="float:left; width:50px; padding:5px;">&nbsp;</div>
      <div style="float:left; width:300px; padding:5px;">
        <select class="bform" id="template_servergroup" style="width: 225px;" name="template_servergroup">
          
          
          
         {foreach from=$servergrouplist_copy item=sg name=sg}
		  
          
		 {if $sg.type eq 0 OR $sg.type eq 1} 
         
		 {if $sg.sgid != $sgid} 
          
          <option {if $sg.sgid eq $sgid}selected="selected"{/if}  value="{$sg.sgid}">{$sg.name} ( {$sg.sgid} ) {if $sg.type eq 0}( Template Gruppe ){/if}</option>
          
          
          {/if}
          {/if}
          
         {/foreach}
        
        
        
        </select>
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:25px; padding:5px;">&nbsp;</div>
      <div class="clear">&nbsp;</div>
    </div>
  </div>
  <div class="contentspacer"> &nbsp; </div>
  <input type="button" onclick='Javasript:abschicken()' value="{$lang.button_copy_perms}">
</form>

  <div class="contentspacer" style="height:25px;"> &nbsp; </div>
{/if}
<div class="contentbox">
  <div class="contenthead">{$lang.head_servergroups}</div>
  <div class="contenttext">
    <div style="float:left; width:45px; height:15px; padding-left:7px;"><strong>{$lang.ts3admin_id}</strong></div>
    <div style="float:left; width:140px;"><strong>{$lang.ts3admin_name}</strong></div>
    <div style="float:left; width:110px;"><strong>{$lang.ts3admin_type}</strong></div>
    <div style="float:left; width:140px;"><strong>{$lang.ts3admin_icon_id}</strong></div>
    <div style="float:left; width:130px;"><strong>{$lang.ts3admin_save_db}</strong></div>
    <div style="float:left; width:145px;"><strong>{$lang.ts3admin_option}</strong></div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentbox">{foreach from=$servergrouplist item=sg name=sg}
  <div class="contenttable" style="background-color:{cycle values="#f7f7f7,#e2f0f1"};">
    <div style="float:left; width:45px; height:15px;">{$sg.sgid}</div>
    <div style="float:left; width:140px;">{$sg.name}</div>
    <div style="float:left; width:110px;">{$sg.type}</div>
    <div style="float:left; width:140px;">{$sg.iconid}</div>
    <div style="float:left; width:130px;">{if $sg.savedb eq "1"}Ja{else}Nein{/if}</div>
    <div style="float:left; width:145px;"><a class="dark" href="admin.php?m=ts3admin&act=permissionlist&sid={$sid}&sgid={$sg.sgid}"><img src="./templates/{$theme}/images/pencil.png" alt="{$lang.ts3admin_info_edit_perms}" title="{$lang.ts3admin_info_edit_perms}" /></a>&nbsp;&nbsp;&nbsp;<a class="dark" href="admin.php?m=ts3admin&act=servergroups&do=pre-rename&sid={$sid}&sgid={$sg.sgid}"><img src="./templates/{$theme}/images/textfield_rename.png" alt="{$lang.ts3admin_info_edit_sg_name}" title="{$lang.ts3admin_info_edit_sg_name}" /></a>&nbsp;&nbsp;&nbsp;<a class="dark" href="admin.php?m=ts3admin&act=servergroupclients&sid={$sid}&sgid={$sg.sgid}"><img src="./templates/{$theme}/images/user.png" alt="{$lang.ts3admin_info_sg_user}" title="{$lang.ts3admin_info_sg_user}" /></a>&nbsp;&nbsp;&nbsp;<a class="dark" href="admin.php?m=ts3admin&act=servergroups&do=pre-copy&sid={$sid}&sgid={$sg.sgid}"><img src="./templates/{$theme}/images/doc_convert.png" alt="{$lang.ts3admin_info_copy_perm}" title="{$lang.ts3admin_info_copy_perm}" /></a>&nbsp;&nbsp;&nbsp;{if $sg.default_server_group eq "1"}<img src="./templates/{$theme}/images/exclamation.png" alt="{$lang.ts3admin_info_dont_delete}" title="{$lang.ts3admin_info_dont_delete}" />{else}<a class="dark" ondblclick="document.location.href='admin.php?m=ts3admin&act=servergroups&do=delete&sid={$sid}&sgid={$sg.sgid}'" style="cursor:pointer;"><img src="./templates/{$theme}/images/delete.png" alt="{$lang.ts3admin_info_delete_sg}"  title="{$lang.ts3admin_info_delete_sg}" /></a>{/if}</div>
    <div class="clear"> </div>
  </div>
  {/foreach} </div>
<div class="contentbox">
  <div class="contenttable">
    <div style="float:left; text-align:right; width:710px; height:16px; padding-left:24px;">{$pages}&nbsp;&nbsp;&nbsp;</div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>
<div class="contentspacer"></div>
<form action="admin.php?m=ts3admin&amp;act=servergroups&amp;do=add&amp;sid={$sid}" method="post" name="user" id="user">
  <input type="hidden" id="permname" name="permname" value="{$permname}" />
  <div class="contentbox">
    <div class="contenthead">{$lang.head_servergroups} - {$lang.head_add_servergroup}</div>
    <div class="contenttext">
      <div style="float:left; width:250px; padding:5px;">{$lang.ts3admin_sg_name}</div>
      <div style="float:left; width:250px; padding:5px;">
      <input class="bform" style="width: 150px;" id="sgname" type="text" name="sgname"  />
        
      </div>
      <div class="clear">&nbsp;</div>
    </div>
  </div>
  <div class="contentspacer"> &nbsp; </div>
  <input type="submit" value="{$lang.button_save}">
  <input type="reset" value="{$lang.button_reset}" />
</form>
<div class="contentspacer"></div>
{elseif $act eq "tokenmanager"}
<div class="contentbox">
  <div class="contenthead">{$lang.head_tokenmanager}</div>
  <div class="contenttext">
    <div style="float:left; width:325px; padding-left:7px;"><strong>{$lang.ts3admin_token}</strong></div>
    <div style="float:left; width:110px;"><strong>{$lang.ts3admin_type}</strong></div>
    <div style="float:left; width:110px;"><strong>{$lang.ts3admin_group}</strong></div>
    <div style="float:left; width:120px;"><strong>{$lang.ts3admin_channel}</strong></div>
    <div style="float:left; width:35px;"><strong>{$lang.ts3admin_option}</strong></div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentbox">{foreach from=$tokenlist item=to name=to}
  <div class="contenttable" style="background-color:{cycle values="#f7f7f7,#e2f0f1"};">
    <div style="float:left; width:325px; height:15px;">{$to.token}</div>
    <div style="float:left; width:110px;">{if $to.token_type eq "0"}{$lang.ts3admin_servergroup}{elseif $to.token_type eq "1"}{$lang.ts3admin_channelgroup}{/if}&nbsp;</div>
    <div style="float:left; width:110px;">{$to.token_group}&nbsp;</div>
    <div style="float:left; width:120px;">{$to.token_channelname}&nbsp;</div>
    <div style="float:left; width:35px;"><a class="dark" ondblclick="document.location.href='customer.php?m=ts3admin&act=tokenmanager&do=delete&sid={$sid}&token={$to.token_url}'" style="cursor:pointer;"><img src="./templates/{$theme}/images/delete.png" alt="{$lang.ts3admin_info_delete_token}"  title="{$lang.ts3admin_info_delete_token}" /></a></div>
    <div class="clear"> </div>
  </div>{/foreach} </div>
<div class="contentbox">
  <div class="contenttable">
    <div style="float:left; text-align:right; width:710px; height:16px; padding-left:24px;">{$pages}&nbsp;&nbsp;&nbsp;</div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>
<div class="contentspacer"></div>
<form action="admin.php?m=ts3admin&amp;act=tokenmanager&amp;do=add&amp;sid={$sid}" method="post" name="tokenadd" id="tokenadd">
  <div class="contentbox">
    <div class="contenthead">{$lang.head_tokenmanager} - {$lang.head_create_token}</div>
    <div class="contenttext">
      <div style="float:left; width:250px; padding:5px;">{$lang.ts3admin_serverid}Typ:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" id="typ" style="width: 300px;" name="typ" onchange="show_channelgrouplist(this.options[this.selectedIndex].value)">
          
          
          <option selected="selected" value="0">{$lang.ts3admin_servergroup}</option>
          <option value="1">{$lang.ts3admin_channelgroup}</option>
          
        
        </select>
      </div>
      <div class="clear">&nbsp;</div>
      <div id="div_servergroup" style="display:block;">
      <div style="float:left; width:250px; padding:5px;">{$lang.ts3admin_group}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" id="servergroup" style="width: 300px;" name="servergroup">
          
         {foreach from=$servergrouplist item=sg name=sg}
		  
         
          
          <option value="{$sg.sgid}">{$sg.name} ( {$sg.sgid} )</option>
          
          
         {/foreach}
        
        </select>
      </div>
      <div class="clear">&nbsp;</div>
      </div>
      
      <div id="div_channelgroup" style="display:none;">
      <div style="float:left; width:250px; padding:5px;">{$lang.ts3admin_group}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" id="channelgroup" style="width: 300px;" name="channelgroup">
          
         {foreach from=$channelgrouplist item=cg name=cg}
		  
         
          {if $cg.type != 0}
          <option value="{$cg.cgid}">{$cg.name} ( {$cg.cgid} ) </option>
          {/if}
          
         {/foreach}
        
        </select>
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.ts3admin_channel}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" id="channel" style="width: 300px;" name="channel">
          
         {foreach from=$channellist item=chan name=chan}
		  
         
          <option value="{$chan.cid}">{$chan.channel_name} ( {$chan.cid} ) </option>
          
          
         {/foreach}
        
        </select>
      </div>
      <div class="clear">&nbsp;</div>
      </div>
      
    </div>
  </div>
  <div class="contentspacer"> &nbsp; </div>
  <input type="submit" value="{$lang.button_save}">
  <input type="reset" value="{$lang.button_reset}" />
</form>
<div class="contentspacer"></div>
{elseif $act eq "permissionlist"}
{if $do eq "pre-edit"}
<div class="contentspacer"></div>
<form action="admin.php?m=ts3admin&amp;act=permissionlist&amp;do=edit&amp;sid={$sid}&amp;sgid={$sgid}&amp;permid={$permid}#{$permid}" method="post" name="user" id="user">
  <input type="hidden" id="permname" name="permname" value="{$permname}" />
  <div class="contentbox">
    <div class="contenthead">{$lang.head_permissionoverview} - {$lang.head_permission}: {$permname} ( {$permid} )</div>
    <div class="contenttext">
      <div style="float:left; width:250px; padding:5px;">Wert</div>
      <div style="float:left; width:250px; padding:5px;">
      {if $datatype eq "integer"}<input class="bform" style="width: 46px;" id="permvalue" type="text" name="permvalue" value="{$permvalue}"  />{else}
        <select class="bform" id="permvalue" name="permvalue"  />
        
        <option {if $permvalue eq "0"}selected="selected"{/if} value="0">{$lang.ts3admin_dont_allow}</option>
        <option {if $permvalue eq "1"}selected="selected"{/if} value="1">{$lang.ts3admin_allow}</option>
        </select>{/if}
        
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.ts3admin_skip}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" id="permskip" name="permskip"  />
        
        <option {if $permskip eq "0"}selected="selected"{/if} value="0">{$lang.no}</option>
        <option {if $permskip eq "1"}selected="selected"{/if} value="1">{$lang.yes}</option>
        </select>
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.ts3admin_negated}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" id="permnegated" name="permnegated"  />
        
        <option {if $permnegated eq "0"}selected="selected"{/if} value="0">{$lang.no}Nein</option>
        <option {if $permnegated eq "1"}selected="selected"{/if} value="1">{$lang.yes}Ja</option>
        </select>
      </div>
      <div class="clear">&nbsp;</div>
    </div>
  </div>
  <div class="contentspacer"> &nbsp; </div>
  <input type="submit" value="Speichern">
  <input type="reset" value="Reset" />
</form>
{/if}
<div class="contentbox">
  <div class="contenthead">{$lang.head_servergroup_perms} - {$servergroupname} ( {$servergroupid} )</div>
  <div class="contenttext">
    <div style="float:left; width:45px; height:15px; padding-left:7px;"><strong>{$lang.ts3admin_id}</strong></div>
    <div style="float:left; width:340px;"><strong>{$lang.ts3admin_name_desc}</strong></div>
    <div style="float:left; width:70px;"><strong>{$lang.ts3admin_value}</strong></div>
    <div style="float:left; width:70px;"><strong>{$lang.ts3admin_skip}</strong></div>
    <div style="float:left; width:70px;"><strong>{$lang.ts3admin_negated}</strong></div>
    <div style="float:left; width:70px;"><strong>{$lang.ts3admin_grant}</strong></div>
    <div style="float:left; width:45px;"><strong>{$lang.ts3admin_option}</strong></div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentbox">{foreach from=$permissionlist item=perm name=perm}
{if $perm.grantvalue <= "100"}
<a name="{$perm.permid}"></a>
  <div class="contenttable" style="background-color:{cycle values="#f7f7f7,#e2f0f1"};">
    <div style="float:left; width:45px; height:40px;{if $perm.set != "1"}color:#848284;{/if}">{$perm.permid}</div>
    <div style="float:left; width:340px;{if $perm.set != "1"}color:#848284;{/if}">{$perm.permname}&nbsp;<br />{if $perm.set == "1"}<span style="color:#E30074;">{/if}{$perm.permdesc_german}&nbsp;{if $perm.set == "1"}</span>{/if}{if $done eq "0" && $perm.permid eq $permid}<br /><span class="red">{$message}</span>{elseif $done eq "1" && $perm.permid eq $permid}<br /><span class="green">{$message}</span>{/if}</div>
    <div style="float:left; width:70px;">{if $perm.datatype eq "integer"}{$perm.permvalue}{else}{if $perm.permvalue eq "1"}<img src="./templates/{$theme}/images/yes.gif" alt="Server Gruppe darf {$perm.permdesc_german}" title="Server Gruppe darf {$perm.permdesc_german}" />{elseif $perm.permvalue eq "0"}<img src="./templates/{$theme}/images/no.gif" alt="Server Gruppe darf nicht {$perm.permdesc_german}" title="Server Gruppe darf nicht {$perm.permdesc_german}" />{else}{/if}{/if}&nbsp;</div>
    <div style="float:left; width:70px;">{if $perm.permskip eq "1"}<img src="./templates/{$theme}/images/yes.gif" alt="Änderungen anderer Gruppen werden nicht in dieser Gruppe übernommen, sofern diese das Recht dazu haben." title="Änderungen anderer Gruppen werden nicht in dieser Gruppe übernommen, sofern diese das Recht dazu haben." />{elseif $perm.permskip eq "0"}<img src="./templates/{$theme}/images/no.gif" alt="Änderungen anderer Gruppen werden in dieser Gruppe übernommen, sofern diese das Recht dazu haben." title="Änderungen anderer Gruppen werden in dieser Gruppe übernommen, sofern diese das Recht dazu haben." />{else}{/if}&nbsp;{$perm.skip}</div>
    <div style="float:left; width:70px;">{if $perm.permnegated eq "1"}<img src="./templates/{$theme}/images/yes.gif" alt="Ausschließlich der Wert dieser gruppe wird beachtet"  title="Ausschließlich der Wert dieser gruppe wird beachtet" />{elseif $perm.permnegated eq "0"}<img src="./templates/{$theme}/images/no.gif" alt="Auch Werte anderer Gruppen werden beachtet"  title="Auch Werte anderer Gruppen werden beachtet" />{else}{/if}&nbsp;</div>
    <div style="float:left; width:70px;">{$perm.grantvalue}&nbsp;</div>
    <div style="float:left; width:45px;"><a class="dark" href="admin.php?m=ts3admin&act=permissionlist&do=pre-edit&sid={$sid}&sgid={$servergroupid}&permid={$perm.permid}&datatype={$perm.datatype}&permvalue={$perm.permvalue}&permskip={$perm.permskip}&permnegated={$perm.permnegated}&permname={$perm.permname}"><img src="./templates/{$theme}/images/pencil.png" alt="Recht bearbeiten" title="Recht bearbeiten" /></a>&nbsp;&nbsp;&nbsp;{if $sg.default_server_group eq "1"}<img src="./templates/{$theme}/images/exclamation.png" alt="Diese Gruppe kann nicht gel&ouml;scht werden, da dies eine Standartgruppe ist. Sobald diese Gruppe gelöscht wird ist alles kaputt!" title="Diese Gruppe kann nicht gel&ouml;scht werden, da dies eine Standartgruppe ist. Sobald diese Gruppe gelöscht wird ist alles kaputt!" />{else}{if $perm.set == "1"}<a class="dark" ondblclick="document.location.href='admin.php?m=ts3admin&act=permissionlist&do=delete&sid={$sid}&sgid={$servergroupid}&permid={$perm.permid}#{$perm.permid}'" style="cursor:pointer;"><img src="./templates/{$theme}/images/delete.png" alt="Recht entfernen"  title="Recht entfernen" /></a>{/if}{/if}</div>
    <div class="clear"> </div>
  </div>
  {/if}
  {/foreach} </div>
<div class="contentbox">
  <div class="contenttable">
    <div style="float:left; text-align:right; width:710px; height:16px; padding-left:24px;">{$pages}&nbsp;&nbsp;&nbsp;</div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>

<div class="contentspacer"></div>
{/if}
<!-- Servermanagement Ende -->
<div class="contentspacer"> &nbsp; </div>
<div class="contentspacer"> &nbsp; </div>
{literal}
<script type="text/javascript">

	document.getElementById('overlay').style.display = 'none';

</script>
{/literal}