<!-- CMS-Log -->
{if $delete}
<div class="contenttext">
  <div style="float:left; width:768px;" class="green">{$lang.message_delete_db_backup_true}</div>
  <div class="clear"> </div>
</div>
<div class="contentspacer"></div>
{/if}

{if $msgbackup}
<div class="contenttext">
  <div style="float:left; width:768px;" class="green">{$lang.message_create_db_backup_true}</div>
  <div class="clear"> </div>
</div>
<div class="contentspacer"></div>
{/if}

<div class="contentbox">
  <div class="contenthead">{$lang.head_backup_overview}</div>
  <div class="contenttext">
    <div style="float:left; width:45px; height:15px; padding-left:7px;"><strong>{$lang.id}</strong></div>
    <div style="float:left; width:70px;"><strong>{$lang.type}</strong></div>
    <div style="float:left; width:120px;"><strong>{$lang.date}</strong></div>
    <div style="float:left; width:220px;"><strong>{$lang.file}</strong></div>
    <div style="float:left; width:109px;"><strong>{$lang.unique_id}</strong></div>
    <div style="float:left; width:90px;"><strong>{$lang.size}</strong></div>
    <div style="float:left; width:55px;"><strong>{$lang.option}</strong></div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentbox">{foreach from=$bak_array item=bak name=bak}
  <div class="contenttable" style="background-color:{cycle values="#f7f7f7,#e2f0f1"};">
    <div style="float:left; width:45px; height:15px;{if $cu.payment eq "0"}color:#E80000;{/if}">{$bak.id}</div>
    <div style="float:left; width:70px;{if $cu.payment eq "0"}color:#E80000;{/if}">{$bak.typ_desc}</div>
    <div style="float:left; width:120px;{if $cu.payment eq "0"}color:#E80000;{/if}">{$bak.date|date_format:"%d.%m.%Y %H:%M"}</div>
    <div style="float:left; width:220px;{if $cu.payment eq "0"}color:#E80000;{/if}">{$bak.file}</div>
    <div style="float:left; width:109px;{if $cu.payment eq "0"}color:#E80000;{/if}">{$bak.path}</div>
    <div style="float:left; width:90px;{if $cu.payment eq "0"}color:#E80000;{/if}">{$bak.filesize}</div>
    <div style="float:left; width:55px;"><a class="dark" href="{$bak.download}"><img src="./templates/{$theme}/images/disk.png" alt="{$lang.info_download_backup}" title="{$lang.info_download_backup}" /></a>&nbsp;&nbsp;&nbsp;<a class="dark" ondblclick="document.location.href='admin.php?m=backup&act=delete&id={$bak.id}'" style="cursor:pointer;"><img src="./templates/{$theme}/images/delete.png" alt="{$lang.info_delete_backup}"  title="{$lang.info_delete_backup}" /></a></div>
    <div class="clear"> </div>
  </div>
  {/foreach} </div>
<div class="contentbox">
  <div class="contenttable">
    <div style="float:left; text-align:right; width:710px; height:16px; padding-left:20px;">{$pages}&nbsp;&nbsp;&nbsp;<a href="admin.php?m=backup&act=bak"><img src="./templates/{$theme}/images/page_white_star.png" alt="{$lang.info_create_backup}"  title="{$lang.info_create_backup}" /></a>&nbsp;&nbsp;&nbsp;</div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>


<!-- CMS-Log Ende -->