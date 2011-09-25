{if $saveok}
<div class="contenttext">
  <div style="float:left; width:768px;" class="green">{$lang.message_save_true}<br />
  </div>
  <div class="clear"> </div>
</div>
<div class="contentspacer"></div>
{/if}
<!-- Kunden -->
{if $act eq "" or $act eq "edit" or $act eq "do-savedata" or $act eq "delete" }
<div class="contentspacer"></div>
<div class="contentspacer"></div>
<form action="admin.php?m=voiceserver_assign&amp;act=do-savedata" method="post" name="new" id="new">
  <input id="typ" type="hidden" name="typ" readonly="readonly" value="0" />
  <div class="contentbox">
    <div class="contenthead">{$lang.head_voiceserver_assign}</div>
    <div class="contenttext">
      <div style="float:left; width:150px; padding:5px;">{$lang.customer}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" style="width: 150px;" id="memberid" name="memberid"  />
        
        {foreach from=$cu_array item=cu name=cu}
        <option value="{$cu.id}">{$cu.surname}, {$cu.name}</option>
        {/foreach}
        </select>
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:150px; padding:5px;">{$lang.master_vc}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" style="width: 150px;" id="masterid" name="masterid"  />
        
        {foreach from=$mv_array item=mv name=mv }
        <option value="{$mv.id}">{$mv.serverip}:{$mv.tcpport}</option>
        {/foreach}
        </select>
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:150px; padding:5px;">{$lang.udpport}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 150px;" id="udpport" type="text" name="udpport" />
      </div>
      <div class="clear"> </div>
      <div style="float:left; width:150px; padding:5px;">{$lang.slots}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 150px;" id="slots" type="text" name="slots" />
      </div>
      <div class="clear"> </div>
    </div>
  </div>
  <div class="contentspacer"> </div>
  <input type="submit" value="{$lang.button_save}">
  <input type="reset" value="{$lang.button_reset}" />
</form>
{/if}
<!-- Kunden Ende -->
