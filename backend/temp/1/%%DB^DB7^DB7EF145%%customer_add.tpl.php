<?php /* Smarty version 2.6.12, created on 2011-09-27 21:29:51
         compiled from customer_add/customer_add.tpl */ ?>
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
<?php if ($this->_tpl_vars['act'] == "" || $this->_tpl_vars['act'] == 'edit' || $this->_tpl_vars['act'] == "do-savedata" || $this->_tpl_vars['act'] == 'delete'): ?>
<div class="contentspacer"></div>
<form action="admin.php?m=customer_add&amp;act=do-savedata" method="post" name="new" id="new">
  <div class="contentbox">
    <div class="contenthead"><?php echo $this->_tpl_vars['lang']['head_customer_add']; ?>
</div>
    <div class="contenttext">
      <div style="float:left; width:201px; padding:5px;"><?php echo $this->_tpl_vars['lang']['customer_add_surname']; ?>
Name, <?php echo $this->_tpl_vars['lang']['customer_add_surname']; ?>
Vorname:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 70px;" id="surname" type="text" name="surname" value="<?php echo $this->_tpl_vars['surname']; ?>
" />
        ,
        <input class="bform" style="width: 71px;" id="name" type="text" name="name" value="<?php echo $this->_tpl_vars['name']; ?>
" />
      </div>
      <div class="clear">&nbsp;</div>
      <div class="clear"> </div>
      <div style="float:left; width:201px; padding:5px;"><?php echo $this->_tpl_vars['lang']['customer_add_country']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" id="country" name="country"  />
        
        <option selected="selected" style="width: 118px;" value="DE">Deutschland</option>
        <option value="CH">Schweiz</option>
        <option value="AT">&Ouml;sterreich</option>

        </select>
      </div>
      <div class="clear"> </div>
      <div style="float:left; width:201px; padding:5px;"><?php echo $this->_tpl_vars['lang']['customer_add_date']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 150px;" id="orderdate" type="text" name="orderdate" value="<?php echo $this->_tpl_vars['orderdate']; ?>
" />
      </div>
      <div class="clear"> </div>
      <div class="clear"> </div>
      <div style="float:left; width:201px; padding:5px;"><?php echo $this->_tpl_vars['lang']['customer_add_email']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 150px;" id="email" type="text" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" />
      </div>
      <div class="clear"> </div>
      <div style="float:left; width:201px; padding:5px;"><?php echo $this->_tpl_vars['lang']['customer_add_status']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <select class="bform" style="width: 150px;" id="rank" name="rank"  />
        
        <option value="5">Kunde</option>
        <option value="1">Administrator</option>
        </select>
      </div>
      <div class="clear"> </div>
      <div style="float:left; width:201px; padding:5px;"><?php echo $this->_tpl_vars['lang']['customer_add_password']; ?>
:</div>
      <div style="float:left; width:250px; padding:5px;">
        <input class="bform" style="width: 150px;" id="password" type="text" name="password" value="<?php echo $this->_tpl_vars['password']; ?>
" />
      </div>
      <div class="clear"> </div>
    </div>
  </div>
  <div class="contentspacer"> </div>
  <input type="submit" value="<?php echo $this->_tpl_vars['lang']['button_save']; ?>
">
  <input type="reset" value="<?php echo $this->_tpl_vars['lang']['button_reset']; ?>
" />
</form>
<?php endif; ?>
<!-- Kunden Ende -->