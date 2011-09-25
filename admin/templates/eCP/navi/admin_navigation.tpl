<!-- Content Navigation -->

<div class="contentspacer" style="height:8px;">&nbsp;</div>
<div align="left"> {if $shownavi eq "eviladmin"}
  <div class="menu_title">Voiceserver</div>
  <div id="40"> {foreach from=$vo_array item=vo name=vo}
    <div class="menu_ip">{$vo.serverip}:{$vo.udpport}</div>
    <div class="menu">&nbsp;</div>
    <div class="menu_kategorie_green">{$lang.navi_server}</div>
    <div id="41">
      <div class="menu"><a class="menuhell" href= "admin.php?m=eviladmin&act=overview&sid={$vo.id}">{$lang.overview}</a> </div>
      <div class="menu"><a class="menuhell" href= "admin.php?m=eviladmin&act=ts-viewer&sid={$vo.id}">{$lang.tsviewer}</a> </div>
      <div class="menu"><a class="menuhell" href= "admin.php?m=eviladmin&act=settings&sid={$vo.id}">{$lang.serversettings}</a> </div>
      <div class="menu"><a class="menuhell" href= "admin.php?m=eviladmin&act=message&sid={$vo.id}">{$lang.servermessage}</a> </div>
      <div class="menu">&nbsp;</div>
    </div>
    <div class="menu_kategorie_green">{$lang.navi_permission}</div>
    <div id="42">
      <div class="menu"><a class="menuhell" href= "admin.php?m=eviladmin&act=servergroups&sid={$vo.id}">{$lang.servergroups}</a> </div>
      <div class="menu"><a class="menuhell" href= "admin.php?m=eviladmin&act=tokenmanager&sid={$vo.id}">{$lang.tokenmanager}</a> </div>
      <div class="menu">&nbsp;</div>
    </div>
    <div class="menu_kategorie_green">{$lang.navi_ids}</div>
    <div id="43">
      <div class="menu"><a class="menuhell" href= "admin.php?m=eviladmin&act=user&sid={$vo.id}">{$lang.user}</a> </div>
      <div class="menu_last"><a class="menuhell" href= "admin.php?m=eviladmin&act=clientfind&sid={$vo.id}">{$lang.clientfind}</a> </div>
    </div>
    {/foreach} </div>
  <div class="contentspacer"></div>
  {/if}
  <div class="menu_title">eviladmin</div>
      <div class="menu">&nbsp;</div>
  <div id="10">
    <div class="menu_kategorie_green">{$lang.navi_user}</div>
    <div id="11">
      <div class="menu"><a class="menuhell" href="admin.php?m=customer">{$lang.customer}</a> </div>
      <div class="menu"><a class="menuhell" href="admin.php?m=customer_add">{$lang.customer_add}</a> </div>
      <div class="menu">&nbsp;</div>
    </div>
    <div class="menu_kategorie_green">{$lang.navi_server}</div>
    <div id="15">
      <div class="menu"><a class="menuhell" href= "admin.php?m=rootserver">{$lang.rootserver}</a> </div>
      <div class="menu"><a class="menuhell" href= "admin.php?m=voiceserver_master">{$lang.voiceserver_master}</a> </div>
      <div class="menu_last"><a class="menuhell" href= "admin.php?m=voiceserver_assign">{$lang.voiceserver_assign}</a> </div>
    </div>
  </div>
  <div class="contentspacer"></div>
  <div class="menu_title">{$lang.navi_cms}</div>
  <div id="60">
    <div id="24">
      <div class="menu"><a class="menuhell" href= "admin.php?m=cmslog">{$lang.cmslog}</a> </div>
      <div class="menu_last"><a class="menuhell" href= "admin.php?m=backup">{$lang.backup}</a> </div>
    </div>
  </div>
  <div class="contentspacer"></div>
  <div class="menu_title">{$lang.navi_settings}</div>
  <div id="30">
    <div id="33">
      <div class="menu_last"><a class="menuhell" href= "admin.php?m=settings">{$lang.settings}</a> </div>
  </div>
</div>
</div>
<!-- Content Navigation Ende -->

