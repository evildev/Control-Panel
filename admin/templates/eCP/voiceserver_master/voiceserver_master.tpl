{if $delete}
<div class="contenttext">
  <div style="float:left; width:768px;" class="green">Der Servereintrag wurden erfolgreich aus der Datenbank entfernt!</div>
  <div class="clear"> </div>
</div>
<div class="contentspacer"></div>
{/if}
{if $saveok}
<div class="contenttext">
  <div style="float:left; width:768px;" class="green">Die Daten wurden erfolgreich gespeichert!<br /></div>
  <div class="clear"> </div>
</div>
<div class="contentspacer"></div>
{/if}
<!-- Voiceserver Master -->
<div class="contentbox">
  <div class="contenthead">Master-Voiceserverübersicht</div>
  <div class="contenttext">
    <div style="float:left; width:45px; height:15px; padding-left:7px;"><strong>Typ</strong></div>
    <div style="float:left; width:100px;"><strong>Server IP</strong></div>
    <div style="float:left; width:85px;"><strong>TCP-Port</strong></div>
    <div style="float:left; width:85px;"><strong>HTTP-Port</strong></div>
    <div style="float:left; width:85px;"><strong>S Admin</strong></div>
    <div style="float:left; width:90px;"><strong>S Passwort</strong></div>
    <div style="float:left; width:75px;"><strong>User</strong></div>
    <div style="float:left; width:70px;"><strong>Status</strong></div>
    <div style="float:left; width:70px;"><strong>Aktion</strong></div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentbox">{foreach from=$mv_array item=mv name=mv}
  <div class="contenttable" style="background-color:{cycle values="#f7f7f7,#e2f0f1"};"> 
    <div style="float:left; width:45px; height:15px; color:#5A3986;">{$mv.typ}</div>
    <div style="float:left; width:100px;">{$mv.serverip}</div>
    <div style="float:left; width:85px;">{$mv.tcpport}</div>
    <div style="float:left; width:85px;">{$mv.httpport}</div>
    <div style="float:left; width:85px;">{$mv.sadmin}</div>
    <div style="float:left; width:90px;">{$mv.spasswd}</div>
    <div style="float:left; width:75px;">{$mv.server_total_users_online} / {$mv.server_total_users_maximal}</div>
    <div style="float:left; width:70px;">{if $mv.online eq "1"}<img src="./templates/{$theme}/images/heart.png" alt="Server online"  title="Server online" />{/if}{if $mv.online eq "0"}<img src="./templates/{$theme}/images/heart_empty.png" alt="Server offline"  title="Server offline" />{/if}</div>
    <div style="float:left; width:70px;"><a class="dark" href="admin.php?m={if $mv.typ eq "TS2"}ts2monitor{else}ts3monitor{/if}&act=monitor&mid={$mv.id}"><img src="./templates/{$theme}/images/monitor.png" alt="Serverübersicht" title="Serverübersicht" /></a>&nbsp;&nbsp;<a class="dark" href="admin.php?m=ts3monitor&act=instanceinfo&mid={$mv.id}"><img src="./templates/{$theme}/images/computer.png" alt="Instanzinfo" title="Instanzinfo" /></a>&nbsp;&nbsp;<a class="dark" ondblclick="document.location.href='admin.php?m=voiceserver_master&act=delete&id={$mv.id}'"  href="#"><img src="./templates/{$theme}/images/delete.png" alt="Servereintrag entfernen"  title="Servereintrag entfernen" /></a></div>
    <div class="clear"> </div>
     </div>{/foreach}
</div>
<div class="contentbox">
  <div class="contenttext">
    <div style="float:left; width:45px; height:15px; padding-left:7px;">&nbsp;</div>
    <div style="float:left; width:100px;">&nbsp;</div>
    <div style="float:left; width:85px;">&nbsp;</div>
    <div style="float:left; width:85px;">&nbsp;</div>
    <div style="float:left; width:85px;">&nbsp;</div>
    <div style="float:left; width:90px;">&nbsp;</div>
    <div style="float:left; width:75px;">{$users_online} / {$users_maximal}</div>
    <div style="float:left; width:70px;">&nbsp;</div>
    <div style="float:left; width:55px;">&nbsp;</div>
    <div class="clear"> </div>
  </div>
</div>


<div class="contentspacer"></div>
<form action="admin.php?m=voiceserver_master&amp;act=do-savedata" method="post" name="new" id="new">
  <div class="contentbox">
    <div class="contenthead">Neuen Master-Voiceserver eintragen</div>
    <div class="contenttext">
      <div style="float:left; width:150px; padding:5px;">Rootserver:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" id="rootserverid" name="rootserverid"  />
        {foreach from=$rs_array item=rs name=rs}
        <option selected="selected" value="{$rs.id}">{$rs.name}</option>
        {/foreach}
        </select>
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:150px; padding:5px;">Voiceserver Typ:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" id="typ" name="typ"  />
        <option value="TS3">Teamspeak 3 Server</option>
        </select>
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:150px; padding:5px;">TCP-/Query Port:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="tcpport" type="text" name="tcpport" value="10011" onFocus="if (this.value=='10011') this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:150px; padding:5px;">Serveradmin:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="sadmin" type="text" name="sadmin" value="serveradmin" onFocus="if (this.value=='serveradmin') this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;"  />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:150px; padding:5px;">Passwort:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 200px;" id="spasswd" type="text" name="spasswd" value="passwort" onFocus="if (this.value=='passwort') this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;"  />
      </div>
      
      <div class="clear"> </div>
    </div>
  </div>
  <div class="contentspacer"> </div>
  <input type="submit" value="Speichern">
  <input type="reset" value="Reset" />
</form>


<div class="contentspacer"></div>
<form action="admin.php?m=voiceserver_master&amp;act=do-savedata-voiceserver" method="post" name="new" id="new">
  <div class="contentbox">
    <div class="contenthead">Neuen Teamspeak 3 Server erstellen</div>
    <div class="contenttext">
      <div style="float:left; width:150px; padding:5px;">Voiceserver Master:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" id="voiceservermasterid" name="voiceservermasterid"  />
        {foreach from=$mv_array item=mv name=mv}
        <option selected="selected" value="{$mv.id}">{$mv.serverip} - {$mv.tcpport}</option>
        {/foreach}
        </select>
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:150px; padding:5px;">Port:</div>
      <div style="float:left; width:175px; padding:5px;">
        <input class="bform" style="width: 175px;" id="server_port" type="text" name="server_port" /> 
      </div>
      <div style="float:left; padding:7px;">( Freilassen, wenn nächster freier Port genutzt werden soll )</div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:150px; padding:5px;">Maximale Useranzahl:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 175px;" id="server_maxusers" type="text" name="server_maxusers" value="24" />
      </div>
      
      <div class="clear"> </div>
    </div>
  </div>
  <div class="contentspacer"> </div>
  <input type="submit" value="Speichern">
  <input type="reset" value="Reset" />
</form>


<!-- Voiceserver Master Ende -->
{$ausgabe}