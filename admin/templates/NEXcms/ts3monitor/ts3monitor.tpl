{if $act eq "instanceinfo"}
{if $do eq "pre-edit"}
<form action="admin.php?m=ts3monitor&amp;act=instanceinfo&amp;do=edit&amp;mid={$mid}" method="post" name="settings" id="settings">
  <div class="contentbox">
    <div class="contenthead">{$lang.head_instancesettings}</div>
    <div class="contenttext">
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_guest_serverquery_group}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="serverinstance_guest_serverquery_group" type="text" name="settings[serverinstance_guest_serverquery_group]" value="{$serverinstance_guest_serverquery_group}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_template_serveradmin_group}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="serverinstance_template_serveradmin_group" type="text" name="settings[serverinstance_template_serveradmin_group]" value="{$serverinstance_template_serveradmin_group}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_template_serverdefault_group}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="serverinstance_template_serverdefault_group" type="text" name="settings[serverinstance_template_serverdefault_group]" value="{$serverinstance_template_serverdefault_group}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_template_channeladmin_group}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="serverinstance_template_channeladmin_group" type="text" name="settings[serverinstance_template_channeladmin_group]" value="{$serverinstance_template_channeladmin_group}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_template_channeldefault_group}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="serverinstance_template_channeldefault_group" type="text" name="settings[serverinstance_template_channeldefault_group]" value="{$serverinstance_template_channeldefault_group}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_filetransfer_port}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="serverinstance_filetransfer_port" type="text" name="settings[serverinstance_filetransfer_port]" value="{$serverinstance_filetransfer_port}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_max_download_total_bandwidth}:</div>
      <div style="float:left; width:200px; padding:5px;">
        <input class="bform" style="width: 200px;" id="serverinstance_max_download_total_bandwidth" type="text" name="settings[serverinstance_max_download_total_bandwidth]" value="{$serverinstance_max_download_total_bandwidth}"  />
      </div>
      <div style="float:left; width:75px; padding:5px;">Bytes/s</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_max_upload_total_bandwidth}:</div>
      <div style="float:left; width:200px; padding:5px;">
        <input class="bform" style="width: 200px;" id="serverinstance_max_upload_total_bandwidth" type="text" name="settings[serverinstance_max_upload_total_bandwidth]" value="{$serverinstance_max_upload_total_bandwidth}"  />
      </div>
      <div style="float:left; width:75px; padding:5px;">Bytes/s</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_serverquery_flood_commands}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="serverinstance_serverquery_flood_commands" type="text" name="settings[serverinstance_serverquery_flood_commands]" value="{$serverinstance_serverquery_flood_commands}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_serverquery_flood_time}e:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="serverinstance_serverquery_flood_time" type="text" name="settings[serverinstance_serverquery_flood_time]" value="{$serverinstance_serverquery_flood_time}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_serverquery_ban_time}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="serverinstance_serverquery_ban_time" type="text" name="settings[serverinstance_serverquery_ban_time]" value="{$serverinstance_serverquery_ban_time}"  />
      </div>
      <div class="clear">&nbsp;</div>
    </div>
  </div>
  <div class="contentspacer"> &nbsp; </div>
  <input type="submit" value="{$lang.button_save}">
  <input type="reset" value="{$lang.button_reset}" />
</form>
{else}
<div class="contentbox">
  <div class="contenthead">{$lang.head_instanceinfo} - {$serverip}:{$tcpport}</div>
  <div class="contenttext">
      <div style="float:left; width:250px; padding:5px;">{$lang.host_timestamp_utc}:</div>
      <div style="float:left; width:251px; padding:5px;">{$host_timestamp_utc|date_format:"%d.%m.%Y %H:%M"}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.instance_uptime}:</div>
      <div style="float:left; width:251px; padding:5px;">{$instance_uptime}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.version}:</div>
      <div style="float:left; width:251px; padding:5px;">{$version} [Build:{$build}]</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.platform}:</div>
      <div style="float:left; width:251px; padding:5px;">{$platform}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_database_version}:</div>
      <div style="float:left; width:251px; padding:5px;">{$serverinstance_database_version}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualservers_running_total}:</div>
      <div style="float:left; width:251px; padding:5px;">{$virtualservers_running_total}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualservers_total_clients_online}:</div>
      <div style="float:left; width:251px; padding:5px;">{$virtualservers_total_clients_online} / {$virtualservers_total_maxclients}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.virtualservers_total_channels_online}:</div>
      <div style="float:left; width:251px; padding:5px;">{$virtualservers_total_channels_online}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_serverquery_flood_commands}:</div>
      <div style="float:left; width:251px; padding:5px;">{$serverinstance_serverquery_flood_commands}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_serverquery_flood_time}:</div>
      <div style="float:left; width:251px; padding:5px;">{$serverinstance_serverquery_flood_time} Sekunden</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_serverquery_ban_time}:</div>
      <div style="float:left; width:251px; padding:5px;">{$serverinstance_serverquery_ban_time} Sekunden</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_guest_serverquery_group}:</div>
      <div style="float:left; width:251px; padding:5px;">{$serverinstance_guest_serverquery_group}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_template_serveradmin_group}:</div>
      <div style="float:left; width:251px; padding:5px;">{$serverinstance_template_serveradmin_group}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_template_serverdefault_group}:</div>
      <div style="float:left; width:251px; padding:5px;">{$serverinstance_template_serverdefault_group}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_template_channeladmin_group}:</div>
      <div style="float:left; width:251px; padding:5px;">{$serverinstance_template_channeladmin_group}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_template_channeldefault_group}:</div>
      <div style="float:left; width:251px; padding:5px;">{$serverinstance_template_channeldefault_group}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_filetransfer_port}:</div>
      <div style="float:left; width:251px; padding:5px;">{$serverinstance_filetransfer_port}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_max_download_total_bandwidth}:</div>
      <div style="float:left; width:251px; padding:5px;">{$serverinstance_max_download_total_bandwidth}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.serverinstance_max_upload_total_bandwidth}:</div>
      <div style="float:left; width:251px; padding:5px;">{$serverinstance_max_upload_total_bandwidth}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.connection_packets_sent_total}:</div>
      <div style="float:left; width:251px; padding:5px;">{$connection_packets_sent_total}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.connection_bytes_sent_total}:</div>
      <div style="float:left; width:251px; padding:5px;">{$connection_bytes_sent_total}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.connection_packets_received_total}:</div>
      <div style="float:left; width:251px; padding:5px;">{$connection_packets_received_total}</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.connection_bytes_received_total}:</div>
      <div style="float:left; width:251px; padding:5px;">{$connection_bytes_received_total}</div>
      <div class="clear">&nbsp;</div>
  </div>
</div>
<div class="contentbox">
  <div class="contenttable">
    <div style="float:left; text-align:right; width:690px; height:16px; padding-left:24px;"><a class="dark" href="admin.php?m=ts3monitor&act=instanceinfo&do=pre-edit&mid={$mid}"><img src="./templates/{$theme}/images/pencil.png" alt="Instanz Einstellungen editieren" title="Instanz Einstellungen editieren" /></a></div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>
{/if}
{elseif $act eq "monitor"}
{if $delete}
<div class="contenttext">
  <div style="float:left; width:768px;" class="green">{$lang.message_delete_vserver_true}</div>
  <div class="clear"> </div>
</div>
<div class="contentspacer"></div>
{/if}
<!-- Voiceserverübersicht -->
<div class="contenttext">
<div style="float:right; width:768px; white-space:nowrap; text-align:right; color:#FFFFFF;">
  <form action="admin.php?m=ts3monitor&act=monitor" method="post" name="new" id="new">
    <select class="bform" id="mid" name="mid" style="width:160px;" />
    
    {foreach from=$vm_array item=vm name=vm}
    <option {if $vm.id eq "$mid"}selected="selected" {/if}value="{$vm.id}">{$vm.serverip}:{$vm.tcpport}</option>
    {/foreach}
    </select>
    <input type="submit" value="Los">
  </form>
  <div class="clear"> </div>
</div>
</div>
<div class="contentspacer"></div>
<div class="contentbox">
  <div class="contenthead">{$lang.head_vserver_monitoring} - Server: {$serverip}:{$tcpport}</div>
  <div class="contenttext">
    <div style="float:left; width:55px; height:15px; padding-left:7px;"><strong>{$lang.ts3monitor_port}</strong></div>
    <div style="float:left; width:215px;"><strong>{$lang.ts3monitor_name}</strong></div>
    <div style="float:left; width:60px;"><strong>{$lang.ts3monitor_user}</strong></div>
    <div style="float:left; width:115px;"><strong>{$lang.ts3monitor_uptime}</strong></div>
    <div style="float:left; text-align:right; width:75px;"><strong>{$lang.ts3monitor_filetraffic}</strong></div>
    <div style="float:left; text-align:right; width:75px;"><strong>{$lang.ts3monitor_traffic}</strong></div>
    <div style="float:left; width:40px;">&nbsp;</div>
    <div style="float:left; width:75px;"><strong>{$lang.ts3monitor_option}</strong></div>
    <div class="clear"> </div>
  </div>
</div>
<!-- {if $vc.memberid < 1}color:#E80000;{/if} zu bg ändern! -->
<div class="contentspacer"></div>
<div class="contentbox">{foreach from=$vc_array item=vc name=vc}
{if $vc.online eq "1"}
  <div class="contenttable" style="background-color:{cycle values="#f7f7f7,#e2f0f1"};">
    <div style="float:left; width:55px; height:15px;{if $vc.usage eq 0}color:#E80000;{/if}">{$vc.server_udpport}&nbsp;</div>
    <div style="float:left; width:215px;{if $vc.usage eq 0}color:#E80000;{/if}">{$vc.server_name}&nbsp;</div>
    <div style="float:left; width:60px;{if $vc.usage eq 0}color:#E80000;{/if}">{$vc.server_currentusers} / {$vc.server_maxuser}&nbsp;</div>
    <div style="float:left; width:115px;{if $vc.usage eq 0}color:#E80000;{/if}">{$vc.server_uptime}&nbsp;</div>
    <div style="float:left; text-align:right; width:75px;{if $vc.usage eq 0}color:#E80000;{/if}">{$vc.filetraffic}&nbsp;</div>
    <div style="float:left; text-align:right; width:75px;{if $vc.usage eq 0}color:#E80000;{/if}">{$vc.traffic}&nbsp;</div>
    <div style="float:left; width:20px;">&nbsp;</div>
    <div style="float:left; width:95px; text-align: right;">{if $vc.sid > 0}<a class="dark" href="admin.php?m=eviladmin&act=overview&mid={$mid}&udpport={$vc.server_udpport}&sid={$vc.sid}"><img src="./templates/{$theme}/images/hammer_screwdriver.png" alt="{$lang.ts3monitor_info_serveredit}" title="{$lang.ts3monitor_info_serveredit}" /></a>{else}<img src="./templates/{$theme}/images/exclamation.png" alt="{$lang.ts3monitor_info_customer_assign}" title="{$lang.ts3monitor_info_customer_assign}" />{/if}&nbsp;&nbsp;{if $vc.online eq "0"}<a class="dark" href="admin.php?m=ts3monitor&act=monitor&mid={$mid}&udpport={$vc.server_udpport}&sid={$vc.sid}&do=server-start"><img src="./templates/{$theme}/images/control_play.png" alt="{$lang.ts3monitor_info_start}" title="{$lang.ts3monitor_info_start}" /></a>{/if}{if $vc.online eq "1"}<a class="dark" href="admin.php?m=ts3monitor&act=monitor&mid={$mid}&udpport={$vc.server_udpport}&sid={$vc.sid}&do=server-stop"><img src="./templates/{$theme}/images/control_stop.png" alt="{$lang.ts3monitor_info_stop}" title="{$lang.ts3monitor_info_stop}" /></a>{/if}&nbsp;&nbsp;<a class="dark" ondblclick="document.location.href='admin.php?m=ts3monitor&act=monitor&do=delete-voiceserver&mid={$mid}&udpport={$vc.server_udpport}&sid={$vc.sid}'" style="cursor:pointer;"><img src="./templates/{$theme}/images/delete.png" alt="{$lang.ts3monitor_info_delete}" title="{$lang.ts3monitor_info_delete}" /></a></div>
    <div class="clear"> </div>
  </div>{else}<div class="contenttable" style="background-color:{cycle values="#f7f7f7,#e2f0f1"};">
    <div style="float:left; width:55px; height:15px;{if $vc.usage eq 0}color:#E80000;{/if}">{$vc.server_udpport}&nbsp;</div>
    <div style="float:left; width:215px;{if $vc.usage eq 0}color:#E80000;{/if}">{$vc.server_name}&nbsp;</div>
    <div style="float:left; width:60px;{if $vc.usage eq 0}color:#E80000;{/if}">offline&nbsp;</div>
    <div style="float:left; width:115px;{if $vc.usage eq 0}color:#E80000;{/if}">&nbsp;</div>
    <div style="float:left; text-align:right; width:75px;{if $vc.usage eq 0}color:#E80000;{/if}">{$vc.filetraffic}&nbsp;</div>
    <div style="float:left; text-align:right; width:75px;{if $vc.usage eq 0}color:#E80000;{/if}">{$vc.traffic}&nbsp;</div>
    <div style="float:left; width:20px;">&nbsp;</div>
    <div style="float:left; width:95px; text-align: right;">{if $vc.sid > 0}<a class="dark" href="admin.php?m=eviladmin&act=overview&mid={$mid}&udpport={$vc.server_udpport}&sid={$vc.sid}"><img src="./templates/{$theme}/images/hammer_screwdriver.png" alt="{$lang.ts3monitor_info_serveredit}" title="{$lang.ts3monitor_info_serveredit}" /></a>{else}<img src="./templates/{$theme}/images/exclamation.png" alt="{$lang.ts3monitor_info_customer_assign}" title="{$lang.ts3monitor_info_customer_assign}" />{/if}&nbsp;&nbsp;{if $vc.online eq "0"}<a class="dark" href="admin.php?m=ts3monitor&act=monitor&mid={$mid}&udpport={$vc.server_udpport}&sid={$vc.sid}&do=server-start"><img src="./templates/{$theme}/images/control_play.png" alt="{$lang.ts3monitor_info_start}" title="{$lang.ts3monitor_info_start}" /></a>{/if}{if $vc.online eq "1"}<a class="dark" href="admin.php?m=ts3monitor&act=monitor&mid={$mid}&udpport={$vc.server_udpport}&sid={$vc.sid}&do=server-stop"><img src="./templates/{$theme}/images/control_stop.png" alt="{$lang.ts3monitor_info_stop}" title="{$lang.ts3monitor_info_stop}" /></a>{/if}&nbsp;&nbsp;<a class="dark" ondblclick="document.location.href='admin.php?m=ts3monitor&act=monitor&do=delete-voiceserver&mid={$mid}&udpport={$vc.server_udpport}&sid={$vc.sid}'" style="cursor:pointer;"><img src="./templates/{$theme}/images/delete.png" alt="{$lang.ts3monitor_info_delete}" title="{$lang.ts3monitor_info_delete}" /></a></div>
    <div class="clear"> </div>
  </div>{/if}
  {/foreach} </div>
<div class="contentspacer"></div>
<div class="contentbox">
  <div class="contenttable">
    <div style="float:left; width:270px; height:15px;"><strong>Server: {$total_servers}</strong></div>
    <div style="float:left; width:165px;"><strong>{$total_users_online} / {$total_users_maximal}</strong></div>
    <div style="float:left; width:75px;">&nbsp;</div>
    <div style="float:left; text-align:right; width:85px;"><strong>{$traffic}&nbsp;</strong></div>
    <div style="float:left; width:40px;">&nbsp;</div>
    <div style="float:left; width:75px;">&nbsp;</div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>
<div class="contentspacer"></div>
<form action="admin.php?m=ts3monitor&amp;act=monitor&amp;do=sendmessage&amp;mid={$mid}" method="post" name="message" id="message">
  <div class="contentbox">
    <div class="contenthead">{$lang.head_send_message}</div>
    <div class="contenttext">
      <div style="float:left; width:150px; padding:5px;">{$lang.ts3monitor_message}</div>
      <div style="float:left; width:250px; padding:5px;">
      <textarea class="bform" style="width: 550px; height:150px;" id="message" type="text" name="message" /></textarea>
      </div>
      <div class="clear">&nbsp;</div>
    </div>
  </div>
  <div class="contentspacer"> &nbsp; </div>
  <input type="submit" value="{$lang.button_send}">
</form>

<div class="contentspacer">&nbsp;</div>
<!-- Kunden Ende -->
{else}
<!-- Kunden -->
<div class="contentbox">
  <div class="contenthead">{$lang.head_voiceserver_master}</div>
  <div class="contenttext">
    <div style="float:left; width:70px; height:15px; padding-left:15px;"><strong>{$lang.ts3monitor_id}</strong></div>
    <div style="float:left; width:70px;"><strong>{$lang.ts3monitor_root_id}</strong></div>
    <div style="float:left; width:100px;"><strong>{$lang.ts3monitor_serverip}</strong></div>
    <div style="float:left; width:90px;"><strong>{$lang.ts3monitor_tcpport}</strong></div>
    <div style="float:left; width:90px;"><strong>{$lang.ts3monitor_httpport}</strong></div>
    <div style="float:left; width:100px;"><strong>{$lang.ts3monitor_serveradmin}</strong></div>
    <div style="float:left; width:100px;"><strong>{$lang.ts3monitor_password}</strong></div>
    <div style="float:left; width:90px;"><strong>{$lang.ts3monitor_option}</strong></div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>
<div class="contentbox">{foreach from=$vm_array item=vm name=vm}
  <div class="contenttable" style="background-color:{cycle values="#f7f7f7,#e2f0f1"};">
    <div style="float:left; width:70px; height:15px;{if $cu.payment eq "0"}color:#E80000;{/if}">{$vm.id}</div>
    <div style="float:left; width:70px;{if $cu.payment eq "0"}color:#E80000;{/if}">{$vm.rootserverid}</div>
    <div style="float:left; width:100px;{if $cu.payment eq "0"}color:#E80000;{/if}">{$vm.serverip}</div>
    <div style="float:left; width:90px;{if $cu.payment eq "0"}color:#E80000;{/if}">{$vm.tcpport}</div>
    <div style="float:left; width:90px;{if $cu.payment eq "0"}color:#E80000;{/if}">{$vm.httpport}</div>
    <div style="float:left; width:100px;{if $cu.payment eq "0"}color:#E80000;{/if}">{$vm.sadmin}</div>
    <div style="float:left; width:100px;{if $cu.payment eq "0"}color:#E80000;{/if}">{$vm.spasswd}</div>
    <div style="float:left; width:90px;"><a class="dark" href="admin.php?m=ts3monitor&act=monitor&mid={$vm.id}"><img src="./templates/{$theme}/images/monitor.png" alt="{$lang.ts3monitor_info_serveroverview}" title="{$lang.ts3monitor_info_serveroverview}" /></a></div>
    <div class="clear"> </div>
  </div>
  {/foreach} </div>
<div class="contentspacer"></div>
<!-- Kunden Ende -->
{/if}