<!-- Content Navigation -->

<div class="contentspacer" style="height:8px;">&nbsp;</div>
<div align="left"> {if $num_vc > 0 && $shownavi}
  <div class="menu_title">Voiceserver</div>
  <div id="10"> {if $shownavi eq "eviladmin"}
    <div id="40"> {foreach from=$vo_array item=vo name=vo}
      {if $vo.udpport eq $udpport}
      <div class="menu_ip">{$vo.serverip}:{$vo.udpport}</div>
        <div class="menu">&nbsp;</div>
      <div class="menu_kategorie_green">{$lang.navi_server}</div>
    <div id="41">
      <div class="menu"><a class="menuhell" href= "customer.php?m=eviladmin&act=overview&sid={$vo.id}">{$lang.overview}</a> </div>
      <div class="menu"><a class="menuhell" href= "customer.php?m=eviladmin&act=ts-viewer&sid={$vo.id}">{$lang.tsviewer}</a> </div>
      <div class="menu"><a class="menuhell" href= "customer.php?m=eviladmin&act=settings&sid={$vo.id}">{$lang.serversettings}</a> </div>
      <div class="menu"><a class="menuhell" href= "customer.php?m=eviladmin&act=message&sid={$vo.id}">{$lang.servermessage}</a> </div>
      <div class="menu">&nbsp;</div>
    </div>
    <div class="menu_kategorie_green">{$lang.navi_permission}</div>
    <div id="42">
      <div class="menu"><a class="menuhell" href= "customer.php?m=eviladmin&act=servergroups&sid={$vo.id}">{$lang.servergroups}</a> </div>
      <div class="menu"><a class="menuhell" href= "customer.php?m=eviladmin&act=tokenmanager&sid={$vo.id}">{$lang.tokenmanager}</a> </div>
      <div class="menu">&nbsp;</div>
    </div>
    <div class="menu_kategorie_green">{$lang.navi_ids}</div>
    <div id="43">
      <div class="menu"><a class="menuhell" href= "customer.php?m=eviladmin&act=user&sid={$vo.id}">{$lang.user}</a> </div>
      <div class="menu_last"><a class="menuhell" href= "customer.php?m=eviladmin&act=clientfind&sid={$vo.id}">{$lang.clientfind}</a> </div>
    </div>
      {/if}
      {/foreach} </div>
    <div class="contentspacer"></div>
  </div>
  {/if}
  {/if}
  
</div>
<!-- Content Navigation Ende -->