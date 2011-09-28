<?php /* Smarty version 2.6.12, created on 2011-09-27 21:29:51
         compiled from navi/admin_navigation.tpl */ ?>
<!-- Content Navigation -->

<div class="contentspacer" style="height:8px;">&nbsp;</div>
<div align="left"> <?php if ($this->_tpl_vars['shownavi'] == 'ts3admin'): ?>
  <div class="menu_title">Voiceserver</div>
  <div id="40"> <?php $_from = $this->_tpl_vars['vo_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['vo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['vo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['vo']):
        $this->_foreach['vo']['iteration']++;
?>
    <div class="menu_ip"><?php echo $this->_tpl_vars['vo']['serverip']; ?>
:<?php echo $this->_tpl_vars['vo']['udpport']; ?>
</div>
    <div class="menu">&nbsp;</div>
    <div class="menu_kategorie_green"><?php echo $this->_tpl_vars['lang']['navi_server']; ?>
</div>
    <div id="41">
      <div class="menu"><a class="menuhell" href= "admin.php?m=ts3admin&act=overview&sid=<?php echo $this->_tpl_vars['vo']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['overview']; ?>
</a> </div>
      <div class="menu"><a class="menuhell" href= "admin.php?m=ts3admin&act=ts-viewer&sid=<?php echo $this->_tpl_vars['vo']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['tsviewer']; ?>
</a> </div>
      <div class="menu"><a class="menuhell" href= "admin.php?m=ts3admin&act=settings&sid=<?php echo $this->_tpl_vars['vo']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['serversettings']; ?>
</a> </div>
      <div class="menu"><a class="menuhell" href= "admin.php?m=ts3admin&act=message&sid=<?php echo $this->_tpl_vars['vo']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['servermessage']; ?>
</a> </div>
      <div class="menu">&nbsp;</div>
    </div>
    <div class="menu_kategorie_green"><?php echo $this->_tpl_vars['lang']['navi_permission']; ?>
</div>
    <div id="42">
      <div class="menu"><a class="menuhell" href= "admin.php?m=ts3admin&act=servergroups&sid=<?php echo $this->_tpl_vars['vo']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['servergroups']; ?>
</a> </div>
      <div class="menu"><a class="menuhell" href= "admin.php?m=ts3admin&act=tokenmanager&sid=<?php echo $this->_tpl_vars['vo']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['tokenmanager']; ?>
</a> </div>
      <div class="menu">&nbsp;</div>
    </div>
    <div class="menu_kategorie_green"><?php echo $this->_tpl_vars['lang']['navi_ids']; ?>
</div>
    <div id="43">
      <div class="menu"><a class="menuhell" href= "admin.php?m=ts3admin&act=user&sid=<?php echo $this->_tpl_vars['vo']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['user']; ?>
</a> </div>
      <div class="menu_last"><a class="menuhell" href= "admin.php?m=ts3admin&act=clientfind&sid=<?php echo $this->_tpl_vars['vo']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['clientfind']; ?>
</a> </div>
    </div>
    <?php endforeach; endif; unset($_from); ?> </div>
  <div class="contentspacer"></div>
  <?php endif; ?>
  <div class="menu_title">TS3Admin</div>
      <div class="menu">&nbsp;</div>
  <div id="10">
    <div class="menu_kategorie_green"><?php echo $this->_tpl_vars['lang']['navi_user']; ?>
</div>
    <div id="11">
      <div class="menu"><a class="menuhell" href="admin.php?m=customer"><?php echo $this->_tpl_vars['lang']['customer']; ?>
</a> </div>
      <div class="menu"><a class="menuhell" href="admin.php?m=customer_add"><?php echo $this->_tpl_vars['lang']['customer_add']; ?>
</a> </div>
      <div class="menu">&nbsp;</div>
    </div>
    <div class="menu_kategorie_green"><?php echo $this->_tpl_vars['lang']['navi_server']; ?>
</div>
    <div id="15">
      <div class="menu"><a class="menuhell" href= "admin.php?m=rootserver"><?php echo $this->_tpl_vars['lang']['rootserver']; ?>
</a> </div>
      <div class="menu"><a class="menuhell" href= "admin.php?m=voiceserver_master"><?php echo $this->_tpl_vars['lang']['voiceserver_master']; ?>
</a> </div>
      <div class="menu_last"><a class="menuhell" href= "admin.php?m=voiceserver_assign"><?php echo $this->_tpl_vars['lang']['voiceserver_assign']; ?>
</a> </div>
    </div>
  </div>
  <div class="contentspacer"></div>
  <div class="menu_title"><?php echo $this->_tpl_vars['lang']['navi_cms']; ?>
</div>
  <div id="60">
    <div id="24">
      <div class="menu"><a class="menuhell" href= "admin.php?m=cmslog"><?php echo $this->_tpl_vars['lang']['cmslog']; ?>
</a> </div>
      <div class="menu_last"><a class="menuhell" href= "admin.php?m=backup"><?php echo $this->_tpl_vars['lang']['backup']; ?>
</a> </div>
    </div>
  </div>
  <div class="contentspacer"></div>
  <div class="menu_title"><?php echo $this->_tpl_vars['lang']['navi_settings']; ?>
</div>
  <div id="30">
    <div id="33">
      <div class="menu_last"><a class="menuhell" href= "admin.php?m=settings"><?php echo $this->_tpl_vars['lang']['settings']; ?>
</a> </div>
  </div>
</div>
</div>
<!-- Content Navigation Ende -->
