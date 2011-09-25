<!-- Teamspeak Login -->

<div class="contentbox">
  <div class="contenthead">{$lang.header_main}</div>
  <div class="contenttext">
    <div class="contentspacer" style="height:55px;">&nbsp;</div>
    <div class="login" style="text-align:center;">
      <form method="post" action="index.php?m=login">
        <input type="text" name="email" class="input" value="E-Mail Account" onFocus="if (this.value=='E-Mail Account') this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;">
        <input type="password" name="pass" class="input" value="Passwort" onFocus="if (this.value=='Passwort') this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;">
        <input type="submit" value="{$lang.button_login}" name="login" class="submit" style="width:112px; height: 22px; padding-bottom:3px;">
        <input name="do" type="hidden"  value="login" />
        <input name="redir" type="hidden" value="customer/index.php?m=serveroverview" />
      </form>
    </div>
    <div class="contentspacer" style="height:55px;">&nbsp;</div>
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>
<!-- Teamspeak Login -->
