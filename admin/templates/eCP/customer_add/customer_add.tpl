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
        <option value="">----------------</option>
        <option value="AR">Argentina</option>
        <option value="AU">Australia</option>
        <option value="AT">Austria</option>
        <option value="BE">Belgium</option>
        <option value="BR">Brazil</option>
        <option value="CA">Canada</option>
        <option value="CL">Chile</option>
        <option value="CN">China</option>
        <option value="CO">Columbia</option>
        <option value="CZ">Czech Republic</option>
        <option value="DK">Denmark</option>
        <option value="EC">Ecuador</option>
        <option value="FI">Finland</option>
        <option value="FR">France</option>
        <option value="DE">Germany</option>
        <option value="GR">Greece</option>
        <option value="HU">Hungary</option>
        <option value="IN">India</option>
        <option value="ID">Indonesia</option>
        <option value="IL">Israel</option>
        <option value="IT">Italy</option>
        <option value="JP">Japan</option>
        <option value="KP">Korea</option>
        <option value="LU">Luxembourg</option>
        <option value="MY">Malaysia</option>
        <option value="MX">Mexico</option>
        <option value="NL">Netherlands</option>
        <option value="NZ">New Zealand</option>
        <option value="NO">Norway</option>
        <option value="PE">Peru</option>
        <option value="PH">Philippines</option>
        <option value="PL">Poland</option>
        <option value="RU">Russia</option>
        <option value="SG">Singapore</option>
        <option value="SI">Slovenia</option>
        <option value="ES">Spain</option>
        <option value="SE">Sweden</option>
        <option value="CH">Switzerland</option>
        <option value="TW">Taiwan</option>
        <option value="TH">Thailand</option>
        <option value="TR">Turkey</option>
        <option value="UK">United Kingdom</option>
        <option value="US">United States</option>
        <option value="VE">Venezuela</option>
        <option value="YU">Yugoslavia</option>
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
        
        <option value="1">Administrator</option>
        <option value="5">Kunde</option>
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
