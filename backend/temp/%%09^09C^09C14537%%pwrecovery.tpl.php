<?php /* Smarty version 2.6.12, created on 2011-09-27 18:51:46
         compiled from pwrecovery/pwrecovery.tpl */ ?>
<!-- Passwort Wiederherstellung -->
<?php if ($this->_tpl_vars['step'] == ""): ?>
<div class="contentbox">
  <div class="contenthead">Passwort Wiederherstellung - Schritt 1 von 3</div>
  <div class="contenttext"> 
  <p align="justify">Du hast deine Zugangsdaten vergessen? </p>
  <p align="justify">Dann gebe bitte deine E-Mailadresse an, mit welcher du dich bei uns registriert hast. </p>
    <form action="index.php?m=pwrecovery&step=2" method="post" name="bestellung" id="bestellung">
      Deine E-Mailadresse
      <input style="width: 150px;" type="text" name="vemail" value="<?php echo $this->_tpl_vars['order_email']; ?>
"  />
      <input class="submit" style="height:22px; padding-bottom:5px;" type="submit" value="Best&auml;tigen" />
    </form>
    </p>
  
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>

<?php elseif ($this->_tpl_vars['step'] == '2'): ?>
<div class="contentbox">
  <div class="contenthead">Passwort Wiederherstellung - Schritt 2 von 3</div>
  <div class="contenttext"> 
  <p align="justify">Du hast soeben eine E-Mail von uns erhalten. Bitte gebe den in der E-Mail enthaltenen Best&auml;tigungscode ein.</p>
    <form action="index.php?m=pwrecovery&step=3" method="post" name="bestellung" id="bestellung">
      Best&auml;tigungscode
      <input style="width: 150px;" type="text" name="vcode"  />
      <input  type="hidden" name="vemail" value="<?php echo $this->_tpl_vars['vemail']; ?>
" readonly="readonly"  />
      <input class="submit" style="height:22px; padding-bottom:5px;" type="submit" value="Best&auml;tigen" />
    </form>
  
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>

<?php elseif ($this->_tpl_vars['step'] == '3'): ?>
<div class="contentbox">
  <div class="contenthead">Passwort Wiederherstellung - Schritt 3 von 3</div>
  <div class="contenttext"> 
  <p align="justify">Du hast soeben deine neuen Zugangsdaten per E-Mail zugeschickt bekommen.</p>
  
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>

<?php else: ?>
<div class="contentbox">
  <div class="contenthead">Passwort Wiederherstellung - Fehler</div>
  <div class="contenttext"> 
  <p align="justify">Du hast eine fehlerhafte Eingabe gemacht. Bitte fang von vorne an.<p> <a href="index.php?m=pwrecovery" title="Passwort Wiederherstellung" target="_self">Neues Passwort bitte!</a></p></p>
  
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>

<?php endif; ?>
<!-- Passwort Wiederherstellung Ende -->