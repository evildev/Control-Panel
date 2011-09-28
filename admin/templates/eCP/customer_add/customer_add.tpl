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
<form action="admin.php?m=customer_add&amp;act=do-savedata" method="post" name="new" id="new">
  <div class="contentbox">
    <div class="contenthead">{$lang.head_customer_add}</div>
    <div class="contenttext">
      <div style="float:left; width:201px; padding:5px;">{$lang.customer_add_surname}Name, {$lang.customer_add_surname}Vorname:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 70px;" id="surname" type="text" name="surname" value="{$surname}" />
        ,
        <input class="bform" style="width: 71px;" id="name" type="text" name="name" value="{$name}" />
      </div>
      <div class="clear">&nbsp;</div>
      <div class="clear"> </div>
      <div style="float:left; width:201px; padding:5px;">{$lang.customer_add_country}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" id="country" name="country"  />
        
        <option selected="selected" style="width: 118px;" value="DE">Deutschland</option>
        <option value="CH">Schweiz</option>
        <option value="AT">&Ouml;sterreich</option>

        </select>
      </div>
      <div class="clear"> </div>
      <div style="float:left; width:201px; padding:5px;">{$lang.customer_add_date}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 150px;" id="orderdate" type="text" name="orderdate" value="{$orderdate}" />
      </div>
      <div class="clear"> </div>
      <div class="clear"> </div>
      <div style="float:left; width:201px; padding:5px;">{$lang.customer_add_email}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 150px;" id="email" type="text" name="email" value="{$email}" />
      </div>
      <div class="clear"> </div>
      <div style="float:left; width:201px; padding:5px;">{$lang.customer_add_status}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" style="width: 150px;" id="rank" name="rank"  />
        
        <option value="5">Kunde</option>
        <option value="1">Administrator</option>
        </select>
      </div>
      <div class="clear"> </div>
      <div style="float:left; width:201px; padding:5px;">{$lang.customer_add_password}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 150px;" id="password" type="text" name="password" value="{$password}" />
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
