<!-- Serverübersicht -->
<div class="contentbox">
  <div class="contenthead">Serverübersicht</div>
  <div style="text-align:left; padding-left: 18px;">
    <div style="float:left; width:180px;"><strong>Produkt</strong></div>
    <div style="float:left; width:160px;"><strong>Adresse</strong></div>
    <div style="float:left; width:120px;"><strong>Port</strong></div>
    <div style="float:left; width:194px;"><strong>Query-Port</strong></div>
    <div style="float:left; width:48px;"><strong>Status</strong></div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentbox">{foreach from=$vc_array item=vc name=vc}
{if $vc.typ eq "TS3"}
  
  <div class="contenttable" style="background-color:{cycle values="#f7f7f7,#e2f0f1"};">
    <div style="float:left; width:180px; line-height:25px; height:50px; vertical-align: super;">
  <a class="dark" href="customer.php?m=eviladmin&act=overview&sid={$vc.id}" style="cursor:pointer;"><img src="./templates/{$theme}/images/ts3.jpg" title="Teamspeak 3 Server" alt="Teamspeak 3 Server" hspace="5" vspace="0" border="0" align="left" width="119" height="50" /></a></div>
    <div style="float:left; width:160px; line-height:25px; height:25px; vertical-align: super;"><a class="dark" href="customer.php?m=eviladmin&act=overview&sid={$vc.id}" style="cursor:pointer;">{$vc.serverip}</a></div>
    <div style="float:left; width:120px; line-height:25px; height:25px; vertical-align: super;"><a class="dark" href="customer.php?m=eviladmin&act=overview&sid={$vc.id}" style="cursor:pointer;">{$vc.udpport}</a></div>
    <div style="float:left; width:194px; line-height:25px; height:25px; vertical-align: super;">{$vc.tcpport}</div>
    <div style="float:left; width:48px; line-height:25px; height:25px; vertical-align: middle; text-align: center;">{if $vc.online eq "1"}<img src="./templates/{$theme}/images/heart.png" alt="Server online"  title="Server online" vspace="15" />{/if}{if $vc.online eq "0"}<img src="./templates/{$theme}/images/heart_empty.png" alt="Server offline"  title="Server offline" vspace="15" />{/if}</div>
    <br />
    <div style="float:left; width:160px; line-height:25px; height:25px; vertical-align: super;">Einmalige Token:</div>
    <div style="float:left; width:360px; line-height:25px; height:25px; vertical-align: super;">{$vc.apasswd}</div>
    <div class="clear"> </div>
  </div>
  {/if}
  {/foreach} </div>
<div class="contentspacer"></div>
<!-- Serverübersicht Ende -->
