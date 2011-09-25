<?php /* Smarty version 2.6.12, created on 2011-09-25 20:53:12
         compiled from settings/settings.tpl */ ?>
<?php if ($this->_tpl_vars['saveok']): ?>
<div class="contenttext">
  <div style="float:left; width:768px;" class="green"><?php echo $this->_tpl_vars['lang']['message_save_true']; ?>
<br />
  </div>
  <div class="clear"> </div>
</div>
<div class="contentspacer"></div>
<?php endif; ?>
<!-- Kunden -->
<form enctype="multipart/form-data" action="admin.php?m=settings&amp;act=edit" method="post" name="new" id="new">
  <div class="contentspacer"></div>
  <div class="contentbox" >
    <div class="contenthead"><a href="javascript:swap(1)"><?php echo $this->_tpl_vars['lang']['cms_settings']; ?>
:</a></div>
    <div class="contenttext" id="1">
      <div style="float:left; width:200px; padding:5px;"><?php echo $this->_tpl_vars['lang']['cms_sitename']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="sitename" type="text" name="sitename" value="<?php echo $this->_tpl_vars['sitename']; ?>
" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;"><?php echo $this->_tpl_vars['lang']['cms_siteurl']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="url" type="text" name="url" value="<?php echo $this->_tpl_vars['url']; ?>
" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;"><?php echo $this->_tpl_vars['lang']['cms_emailinfo']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="infoemail" type="text" name="infoemail" value="<?php echo $this->_tpl_vars['infoemail']; ?>
" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;"><?php echo $this->_tpl_vars['lang']['cms_templatedir']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" style="width: 250px;" id="theme" name="theme"  />
        
        <?php $_from = $this->_tpl_vars['dir_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['dir'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['dir']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['dir']):
        $this->_foreach['dir']['iteration']++;
?>
        <?php if ($this->_foreach['dir']['iteration'] > 2): ?>
        <option <?php if ($this->_tpl_vars['dir'] == $this->_tpl_vars['theme']): ?>selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['dir']; ?>
"><?php echo $this->_tpl_vars['dir']; ?>
</option>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        </select>
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;"><?php echo $this->_tpl_vars['lang']['cms_language']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" style="width: 250px;" id="language" name="language"  />
        
        <?php $_from = $this->_tpl_vars['la_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['la'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['la']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['la']):
        $this->_foreach['la']['iteration']++;
?>
        <option <?php if ($this->_tpl_vars['la']['language_short'] == $this->_tpl_vars['language']): ?>selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['la']['language_short']; ?>
"><?php echo $this->_tpl_vars['la']['language']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </select>
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;"><?php echo $this->_tpl_vars['lang']['cms_sessionexpire']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="session_timeout" type="text" name="session_timeout" value="<?php echo $this->_tpl_vars['session_timeout']; ?>
" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;"><?php echo $this->_tpl_vars['lang']['cms_maintenance']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="maintenance" type="text" name="maintenance" value="<?php echo $this->_tpl_vars['maintenance']; ?>
" />
      </div>
      <div class="clear">&nbsp;</div>
    </div>
  </div>
  <div class="contentspacer"></div>
  <div class="contentbox">
    <div class="contenthead"><a href="javascript:swap(2)"><?php echo $this->_tpl_vars['lang']['contact']; ?>
</a></div>
    <div class="contenttext" id="2">
      <div style="float:left; width:200px; padding:5px;"><?php echo $this->_tpl_vars['lang']['contact_company']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="firma" type="text" name="firma" value="<?php echo $this->_tpl_vars['firma']; ?>
" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;"><?php echo $this->_tpl_vars['lang']['contact_prefix']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="prefix_firma" type="text" name="prefix_firma" value="<?php echo $this->_tpl_vars['prefix_firma']; ?>
" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;"><?php echo $this->_tpl_vars['lang']['contact_phone']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="phone" type="text" name="phone" value="<?php echo $this->_tpl_vars['phone']; ?>
" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;"><?php echo $this->_tpl_vars['lang']['contact_name']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="name" type="text" name="name" value="<?php echo $this->_tpl_vars['name']; ?>
" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;"><?php echo $this->_tpl_vars['lang']['contact_street_no']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="street" type="text" name="street" value="<?php echo $this->_tpl_vars['street']; ?>
" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;"><?php echo $this->_tpl_vars['lang']['contact_city']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="city" type="text" name="city" value="<?php echo $this->_tpl_vars['city']; ?>
" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;"><?php echo $this->_tpl_vars['lang']['contact_zipcode']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 250px;" id="zipcode" type="text" name="zipcode" value="<?php echo $this->_tpl_vars['zipcode']; ?>
" />
      </div>
      <div class="clear">&nbsp;</div>
      <div style="float:left; width:200px; padding:5px;"><?php echo $this->_tpl_vars['lang']['contact_country']; ?>
:</div>
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
      <div style="float:left; width:200px; padding:5px;">
    </div>
  <div class="contentspacer"></div>
  <input type="submit" value="<?php echo $this->_tpl_vars['lang']['button_save']; ?>
">
  <input type="reset" value="<?php echo $this->_tpl_vars['lang']['button_reset']; ?>
" />
</form>
<!-- Kunden Ende -->