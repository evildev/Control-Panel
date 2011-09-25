<!-- CMS-Log -->

{if $delete}
<div class="contenttext">
  <div style="float:left; width:768px;" class="green">{$lang.message_clear_db_log_true}</div>
  <div class="clear"> </div>
</div>
<div class="contentspacer"></div>
{/if}

<div class="contentbox">
  <div class="contenthead">{$lang.head_cmslog} - {$lang.page} {$page} {$lang.of} {$pagecount}</div>
  <div class="contenttext">
    <div style="float:left; width:724px; height:15px; padding-left:15px;"><strong>{$lang.log}</strong></div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentbox">{foreach from=$log_array item=log name=log}
  <div class="contenttable" style="background-color:{cycle values="#f7f7f7,#e2f0f1"};"> 
    <div style="float:left; width:724px; padding:5px; font-size: 9px;">{$log.date|date_format:"%d.%m.%Y %H:%M:%S"} - {if $log.member_id eq "0"}<strong>System</strong>{else}User <strong>{$log.surname}</strong>, <strong>{$log.name}</strong> ( ID: <strong>{$log.member_id}</strong> ){/if} {$log.action_desc} <strong>{$log.what}</strong> {if $log.target_id != "0"}( ID: <strong>{$log.target_id}</strong> ){/if} - {$lang.log_created_in} <strong>{$log.module}</strong></div>
    <div class="clear"> </div>
     </div>{/foreach}
</div>
<div class="contentbox">
  <div class="contenttable">
    <div style="float:left; text-align:right; width:690px; height:16px; padding-left:24px;">{$pages}&nbsp;&nbsp;&nbsp;<a class="dark" ondblclick="document.location.href='admin.php?m=cmslog&act=delete'" style="cursor:pointer;"><img src="./templates/{$theme}/images/delete.png" alt="{$lang.log_delete}"  title="{$lang.log_delete}" /></a></div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>


<!-- CMS-Log Ende -->