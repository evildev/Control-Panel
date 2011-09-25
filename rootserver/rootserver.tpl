{if $delete}
<div class="contenttext">
  <div style="float:left; width:768px;" class="green">{$lang.message_delete_root_true}</div>
  <div class="clear"> </div>
</div>
<div class="contentspacer"></div>
{/if}
{if $saveok}
<div class="contenttext">
  <div style="float:left; width:768px;" class="green">{$lang.message_save_true}<br /></div>
  <div class="clear"> </div>
</div>
<div class="contentspacer"></div>
{/if}
<!-- Kunden -->
<div class="contentbox">
  <div class="contenthead">{$lang.head_rootserver}</div>
  <div class="contenttext">
    <div style="float:left; width:45px; height:15px; padding-left:7px;"><strong>{$lang.rootserver_id}</strong></div>
    <div style="float:left; width:260px;"><strong>{$lang.rootserver_name}</strong></div>
    <div style="float:left; width:120px;"><strong>{$lang.rootserver_serverip}</strong></div>
    <div style="float:left; width:65px;"><strong>{$lang.rootserver_type}</strong></div>
    <div style="float:left; width:75px;"><strong>{$lang.rootserver_traffic}</strong></div>
    <div style="float:left; width:75px;"><strong>{$lang.rootserver_status}</strong></div>
    <div style="float:left; width:70px;"><strong>{$lang.rootserver_option}</strong></div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>
<div class="contentbox">{foreach from=$rs_array item=rs name=rs}
  <div class="contenttable" style="background-color:{cycle values="#f7f7f7,#e2f0f1"};"> 
    <div style="float:left; width:45px; height:15px;{if $cu.payment eq "0"}color:#E80000;{/if}">{$rs.id}</div>
    <div style="float:left; width:260px;{if $cu.payment eq "0"}color:#E80000;{/if}">{$rs.name}</div>
    <div style="float:left; width:120px;{if $cu.payment eq "0"}color:#E80000;{/if}">{$rs.serverip}</div>
    <div style="float:left; width:75px;{if $cu.payment eq "0"}color:#E80000;{/if}">{$rs.typ}</div>
    <div style="float:left; width:75px;{if $cu.payment eq "0"}color:#E80000;{/if}">{$rs.traffic}</div>
    <div style="float:left; width:65px;{if $cu.payment eq "0"}color:#E80000;{/if}">{if $rs.online eq "1"}<img src="./templates/{$theme}/images/heart.png" alt="{$lang.rootserver_online}"  title="{$lang.rootserver_online}" />{/if}{if $rs.online eq "0"}<img src="./templates/{$theme}/images/heart_empty.png" alt="{$lang.rootserver_offline}"  title="{$lang.rootserver_offline}" />{/if}</div>
    <div style="float:left; width:70px;"><a class="dark" ondblclick="document.location.href='admin.php?m=rootserver&act=delete&id={$rs.id}'" style="cursor:pointer;"><img src="./templates/{$theme}/images/delete.png" alt="{$lang.rootserver_delete}"  title="{$lang.rootserver_delete}" /></a></div>
    <div class="clear"> </div>
     </div>{/foreach}
</div>
<div class="contentspacer"></div>


<div class="contentspacer"></div>
<form action="admin.php?m=rootserver&amp;act=do-savedata" method="post" name="new" id="new">
  <div class="contentbox">
    <div class="contenthead">{$lang.head_add_rootserver}</div>
    <div class="contenttext">
      <div style="float:left; width:150px; padding:5px;">{$lang.rootserver_name}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="name" type="text" name="name" value="provider-192-0-2-100" onFocus="if (this.value=='provider-192-0-2-100') this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:150px; padding:5px;">{$lang.rootserver_serverip}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="serverip" type="text" name="serverip" value="192.0.2.100" onFocus="if (this.value=='192.0.2.100') this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:150px; padding:5px;">{$lang.rootserver_type}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" id="typ" name="typ"  />
        
        <option selected="selected" value="1">Teamspeak Server</option>
        <option value="2">Gameserver</option>
        <option value="3">Webspace</option>
        </select>
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:150px; padding:5px;">{$lang.rootserver_user}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="sname" type="text" name="sname" value="root" onFocus="if (this.value=='root') this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:150px; padding:5px;">{$lang.rootserver_password}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="spasswd" type="text" name="spasswd" value="passwort" onFocus="if (this.value=='passwort') this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:150px; padding:5px;">CPU:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" id="cpu" name="cpu"  />
        
        <option selected="selected" value="1">Intel</option>
        <option value="2">AMD</option>
        </select>
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:150px; padding:5px;">CPU Info:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="cpuinfo" type="text" name="cpuinfo" value="Core 2 Quad Q9400" onFocus="if (this.value=='Core 2 Quad Q9400') this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:150px; padding:5px;">RAM:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="ram" type="text" name="ram" value="4096MB" onFocus="if (this.value=='4096MB') this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:150px; padding:5px;">Board:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="board" type="text" name="board" value="GigaByte GA-MA790FXT-UD5P" onFocus="if (this.value=='GigaByte GA-MA790FXT-UD5P') this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:150px; padding:5px;">HD-DISK:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="hddisk" type="text" name="hddisk" value="500GB" onFocus="if (this.value=='500GB') this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:150px; padding:5px;">Traffic:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="traffic" type="text" name="traffic" value="750GB" onFocus="if (this.value=='750GB') this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;" />
      </div>
      
      <div class="clear"> </div>
    </div>
  </div>
  <div class="contentspacer"> </div>
  <input type="submit" value="{$lang.button_save}">
  <input type="reset" value="{$lang.button_reset}" />
</form>


<!-- Kunden Ende -->
