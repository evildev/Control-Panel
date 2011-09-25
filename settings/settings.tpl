{if $saveok}
<div class="contenttext">
  <div style="float:left; width:768px;" class="green">{$lang.message_save_true}<br />
  </div>
  <div class="clear"> </div>
</div>
<div class="contentspacer"></div>
{/if}
<!-- Kunden -->
<form enctype="multipart/form-data" action="admin.php?m=settings&amp;act=edit" method="post" name="new" id="new">
  <div class="contentspacer"></div>
  <div class="contentbox" >
    <div class="contenthead"><a href="javascript:swap(1)">{$lang.cms_settings}:</a></div>
    <div class="contenttext" id="1">
      <div style="float:left; width:200px; padding:5px;">{$lang.cms_sitename}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="sitename" type="text" name="sitename" value="{$sitename}" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;">{$lang.cms_siteurl}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="url" type="text" name="url" value="{$url}" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;">{$lang.cms_emailinfo}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="infoemail" type="text" name="infoemail" value="{$infoemail}" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;">{$lang.cms_templatedir}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" style="width: 250px;" id="theme" name="theme"  />
        
        {foreach from=$dir_array item=dir name=dir}
        {if $smarty.foreach.dir.iteration > 2}
        <option {if $dir eq $theme}selected="selected" {/if} value="{$dir}">{$dir}</option>
        {/if}
        {/foreach}
        </select>
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;">{$lang.cms_language}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" style="width: 250px;" id="language" name="language"  />
        
        {foreach from=$la_array item=la name=la}
        <option {if $la.language_short eq $language}selected="selected" {/if} value="{$la.language_short}">{$la.language}</option>
        {/foreach}
        </select>
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;">{$lang.cms_sessionexpire}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="session_timeout" type="text" name="session_timeout" value="{$session_timeout}" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;">{$lang.cms_maintenance}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="maintenance" type="text" name="maintenance" value="{$maintenance}" />
      </div>
      <div class="clear">&nbsp;</div>
    </div>
  </div>
  <div class="contentspacer"></div>
  <div class="contentbox">
    <div class="contenthead"><a href="javascript:swap(2)">{$lang.contact}</a></div>
    <div class="contenttext" id="2">
      <div style="float:left; width:200px; padding:5px;">{$lang.contact_company}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="firma" type="text" name="firma" value="{$firma}" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;">{$lang.contact_prefix}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="prefix_firma" type="text" name="prefix_firma" value="{$prefix_firma}" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;">{$lang.contact_phone}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="phone" type="text" name="phone" value="{$phone}" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;">{$lang.contact_name}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="name" type="text" name="name" value="{$name}" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;">{$lang.contact_street_no}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="street" type="text" name="street" value="{$street}" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;">{$lang.contact_city}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="city" type="text" name="city" value="{$city}" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;">{$lang.contact_zipcode}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="zipcode" type="text" name="zipcode" value="{$zipcode}" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;">{$lang.contact_country}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" style="width: 250px;" name="country">
          <option selected="selected" value="DE">Deutschland</option>
          <option value="CH">Schweiz</option>
          <option value="AT">&Ouml;sterreich</option>
          <option value="">------------------</option>
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
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;">{$lang.contact_taxnumber}:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="taxnumber" type="text" name="taxnumber" value="{$taxnumber}" />
      </div>
      <div class="clear">&nbsp;</div>
    </div>
  </div>
  <div class="contentspacer"></div>
  <input type="submit" value="{$lang.button_save}">
  <input type="reset" value="{$lang.button_reset}" />
</form>
<!-- Kunden Ende -->
