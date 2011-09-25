<!-- Passwort Wiederherstellung -->
{if $step eq ""}
<div class="contentbox">
  <div class="contenthead">Passwort Wiederherstellung - Schritt 1 von 3</div>
  <div class="contenttext"> 
  <p align="justify">Du hast deine Zugangsdaten vergessen? </p>
  <p align="justify">Dann gebe bitte deine E-Mailadresse an, mit welcher du dich bei uns registriert hast. </p>
    <form action="index.php?m=pwrecovery&step=2" method="post" name="bestellung" id="bestellung">
      Deine E-Mailadresse
      <input style="width: 150px;" type="text" name="vemail" value="{$order_email}"  />
      <input class="submit" style="height:22px; padding-bottom:5px;" type="submit" value="Best&auml;tigen" />
    </form>
    </p>
  
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>

{elseif $step eq "2"}
<div class="contentbox">
  <div class="contenthead">Passwort Wiederherstellung - Schritt 2 von 3</div>
  <div class="contenttext"> 
  <p align="justify">Du hast soeben eine E-Mail von uns erhalten. Bitte gebe den in der E-Mail enthaltenen Best&auml;tigungscode ein.</p>
    <form action="index.php?m=pwrecovery&step=3" method="post" name="bestellung" id="bestellung">
      Best&auml;tigungscode
      <input style="width: 150px;" type="text" name="vcode"  />
      <input  type="hidden" name="vemail" value="{$vemail}" readonly="readonly"  />
      <input class="submit" style="height:22px; padding-bottom:5px;" type="submit" value="Best&auml;tigen" />
    </form>
  
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>

{elseif $step eq "3"}
<div class="contentbox">
  <div class="contenthead">Passwort Wiederherstellung - Schritt 3 von 3</div>
  <div class="contenttext"> 
  <p align="justify">Du hast soeben deine neuen Zugangsdaten per E-Mail zugeschickt bekommen.</p>
  
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>

{else $step eq "0"}
<div class="contentbox">
  <div class="contenthead">Passwort Wiederherstellung - Fehler</div>
  <div class="contenttext"> 
  <p align="justify">Du hast eine fehlerhafte Eingabe gemacht. Bitte fang von vorne an.<p> <a href="index.php?m=pwrecovery" title="Passwort Wiederherstellung" target="_self">Neues Passwort bitte!</a></p></p>
  
    <div class="clear"> </div>
  </div>
</div>
<div class="contentspacer"></div>

{/if}
<!-- Passwort Wiederherstellung Ende -->
