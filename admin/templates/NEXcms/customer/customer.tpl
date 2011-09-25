<!-- Kunden -->

{if $delete}
<div class="contenttext">
  <div style="float:left; width:768px;" class="green">{$lang.message_delete_customer_true}</div>
  <div class="clear"> </div>
</div>
<div class="contentspacer"></div>
{/if}
{if $act eq "pre-edit"}
<form action="admin.php?m=customer&amp;act=showcust&amp;do=edit&amp;cid={$cid}" method="post" name="settings" id="settings">
  <div class="contentbox">
    <div class="contenthead">{$lang.head_edit_customer}</div>
    <div class="contenttext">
      <div style="float:left; width:250px; padding:5px;">{$lang.customer_surname}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="surname" type="text" name="surname" value="{$surname}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.customer_name}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="name" type="text" name="name" value="{$name}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.customer_email}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="email" type="text" name="email" value="{$email}"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.customer_password}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="ftppasswd" type="password" name="ftppasswd" value="password"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:250px; padding:5px;">{$lang.customer_status}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" id="ugroup" name="ugroup"  />
        
        <option {if $ugroup eq "Administrator"}selected="selected" {/if}value="1">{$lang.customer_admin}</option>
        <option {if $ugroup != "Administrator"}selected="selected" {/if}value="5">{$lang.customer_customer}</option>
        </select>
      </div>
      <div class="clear">&nbsp;</div>
    </div>
  </div>
  <div class="contentspacer"> &nbsp; </div>
  <input type="submit" value="{$lang.button_save}">
  <input type="reset" value="{$lang.button_reset}" />
</form>
{elseif $act eq "showcust"}
<div class="contentbox">
  <div class="contenthead">{$lang.head_customer}</div>
  <div class="contenttext">
    <div style="float:left; width:250px; padding:5px;">{$lang.customer_name}:</div>
    <div style="float:left; width:251px; padding:5px;">{$surname}, {$name}</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.customer_email}:</div>
    <div style="float:left; width:251px; padding:5px;">{$email}</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.customer_date}:</div>
    <div style="float:left; width:251px; padding:5px;">{$regdate}</div>
    <div class="clear">&nbsp;</div>
    <div style="float:left; width:250px; padding:5px;">{$lang.customer_status}:</div>
    <div style="float:left; width:251px; padding:5px;">{$ugroup}</div>
    <div class="clear">&nbsp;</div>
  </div>
</div>
<div class="contentspacer"></div>
{if $num_voiceserver3 > 0}
<div class="contentspacer" style="height:20px;"></div>
<div class="contentbox">
  <div class="contenthead">{$lang.head_voiceserver_3}</div>
  <div class="contenttable">
    <div style="float:left; width:45px; height:15px;"><strong>{$lang.customer_id}</strong></div>
    <div style="float:left; width:110px;"><strong>{$lang.customer_master_id}</strong></div>
    <div style="float:left; width:130px;"><strong>{$lang.customer_serverip}</strong></div>
    <div style="float:left; width:100px;"><strong>{$lang.customer_udpport}</strong></div>
    <div style="float:left; width:80px;"><strong>{$lang.customer_slots}</strong></div>
    <div style="float:left; width:140px;"><strong>{$lang.customer_status}</strong></div>
    <div style="float:left; width:80px;"><strong>{$lang.customer_option}</strong></div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentbox">{foreach from=$vc3_array item=vc name=vc}
  <div class="contenttable" style="background-color:{cycle values="#f7f7f7,#e2f0f1"};">
    <div style="float:left; width:45px; height:15px;">{$vc.id}</div>
    <div style="float:left; width:110px;">{$vc.masterid}</div>
    <div style="float:left; width:130px;">{$vc.serverip}</div>
    <div style="float:left; width:100px;">{$vc.udpport}</div>
    <div style="float:left; width:80px;">{$vc.slots}</div>
    <div style="float:left; width:140px;">{if $vc.online eq "1"}<img src="./templates/{$theme}/images/heart.png" alt="{$lang.info_edit_user}Server online"  title="{$lang.info_edit_user}" />{/if}{if $vc.online eq "0"}<img src="./templates/{$theme}/images/heart_empty.png" alt="{$lang.info_edit_user}Server offline"  title="{$lang.info_edit_user}" />{/if}</div>
    <div style="float:left; width:80px;">{if $vc.online eq "0"}<a class="dark" href="admin.php?m=customer&act=showcust&cid={$id}&do=server-start&sid={$vc.id}"><img src="./templates/{$theme}/images/control_play.png" alt="{$lang.info_start_server}" title="{$lang.info_start_server}" /></a>{/if}{if $vc.online eq "1"}<a class="dark" href="admin.php?m=customer&act=showcust&cid={$id}&do=server-stop&sid={$vc.id}"><img src="./templates/{$theme}/images/control_stop.png" alt="{$lang.info_stop_server}" title="{$lang.info_stop_server}" /></a>{/if}&nbsp;&nbsp;&nbsp;<a class="dark" href="admin.php?m=eviladmin&act=overview&sid={$vc.id}"><img src="./templates/{$theme}/images/hammer_screwdriver.png" alt="{$lang.info_admin_server}" title="{$lang.info_admin_server}" /></a>&nbsp;&nbsp;&nbsp;<a class="dark" ondblclick="document.location.href='admin.php?m=customer&act=showcust&cid={$cid}&do=delete-voiceserver&sid={$vc.id}&id={$id}'" style="cursor:pointer;"><img src="./templates/{$theme}/images/delete.png" alt="{$lang.info_delete_voiceserver}"  title="{$lang.info_delete_voiceserver}" /></a></div>
    <div class="clear"> </div>
  </div>
  {/foreach} </div>
{/if}
<div class="contentspacer" style="height:20px;"></div>
<div class="contentbox">
  <div class="contenttable">
    <div style="float:left; text-align:right; width:710px; height:16px; padding-left:20px;"><a class="dark" href="admin.php?m=customer&act=pre-edit&do=customer&cid={$id}"><img src="./templates/{$theme}/images/pencil.png" alt="{$lang.info_edit_user}"  title="{$lang.info_edit_user}" /></a>&nbsp;&nbsp;&nbsp;<a class="dark" ondblclick="document.location.href='admin.php?m=customer&act=delete&id={$id}'" style="cursor:pointer;"><img src="./templates/{$theme}/images/delete.png" alt="{$lang.info_delete_user}"  title="{$lang.info_delete_user}" /></a>&nbsp;&nbsp;&nbsp;</div>
    <div class="clear"> </div>
  </div>
</div>
{else}
<div class="contentbox">
  <div class="contenthead">{$lang.head_customer} - {$lang.page} {$page} {$lang.of} {$pagecount}</div>
  <div class="contenttext">
    <div style="float:left; width:41px; height:15px; padding-left: 7px;"><strong>{$lang.customer_id}</strong></div>
    <div style="float:left; width:175px;"><strong>{$lang.customer_email}</strong></div>
    <div style="float:left; width:140px;"><strong>{$lang.customer_name}</strong></div>
    <div style="float:left; width:120px;"><strong>{$lang.customer_date}</strong></div>
    <div style="float:left; width:155px;"><strong>{$lang.customer_last_online}</strong></div>
    <div style="float:left; width:50px;"><strong>{$lang.customer_option}</strong></div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentbox">
{foreach from=$cu_array item=cu name=cu}
<div class="contenttable" style="background-color:{cycle values="#f7f7f7,#e2f0f1"};">
  <div style="float:left; width:41px; height:15px; ">{$cu.id}</div>
  <div style="float:left; width:175px; ">{$cu.email}&nbsp;</div>
  <div style="float:left; width:140px;">{$cu.surname}, {$cu.name}&nbsp;</div>
  <div style="float:left; width:120px;">{$cu.regdate|date_format:"%d.%m.%Y"}&nbsp;</div>
  {if $cu.activenow eq 1 OR $cu.activenow eq 2}
  <div style="float:left; width:155px;">{else}
    <div style="float:left; width:155px;">{/if}{if $cu.activenow eq "1"}Aktiv{elseif $cu.activenow eq "2"}Idle{else}{$cu.user_lastonline|date_format:"%d.%m.%Y %H:%M:%S"}{/if}&nbsp; </div>
    <div style="float:left; width:50px;"><a class="dark" href="admin.php?m=customer&act=showcust&cid={$cu.id}"><img src="./templates/{$theme}/images/user.png" alt="{$lang.info_useroverview}" title="{$lang.info_useroverview}" /></a>&nbsp;&nbsp;&nbsp;<a class="dark" href="admin.php?m=customer&act=pre-edit&do=customer&cid={$cu.id}"><img src="./templates/{$theme}/images/pencil.png" alt="{$lang.info_edit_user}" title="{$lang.info_edit_user}" /></a></div>
    <div class="clear"> </div>
  </div>
  {/foreach} </div>
<div class="contentbox">
  <div class="contenttable">
    <div style="float:left; text-align:right; width:710px; height:16px; padding-left:24px;">{$pages}&nbsp;&nbsp;&nbsp;<a class="dark" href="admin.php?m=customer&pp={$pp}&page={$page}&sortby=surname&sortorder={$sortorder}"><img src="./templates/{$theme}/images/sort_alphabet.png" alt="{$lang.sort_name}" title="{$lang.sort_name}" /></a>&nbsp;&nbsp;&nbsp;<a class="dark" href="admin.php?m=customer&pp={$pp}&page={$page}&sortby=id&sortorder={$sortorder}"><img src="./templates/{$theme}/images/sort_number.png" alt="{$lang.sort_id}" title="{$lang.sort_id}" /></a>&nbsp;&nbsp;&nbsp;<a class="dark" href="admin.php?m=customer&pp={$pp}&page={$page}&sortby=regdate&sortorder={$sortorder}"><img src="./templates/{$theme}/images/sort_date.png" alt="{$lang.sort_regdate}" title="{$lang.sort_regdate}" /></a>&nbsp;&nbsp;&nbsp;<a class="dark" href="admin.php?m=customer&pp={$pp}&page={$page}&sortby=user_lastonline&sortorder={$sortorder}"><img src="./templates/{$theme}/images/sort_rating.png" alt="{$lang.sort_logindate}" title="{$lang.sort_logindate}" /></a>&nbsp;&nbsp;&nbsp;</div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>
<!-- Kunden Ende -->
{/if}