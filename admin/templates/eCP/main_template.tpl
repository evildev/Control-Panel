<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>{$lang.adminarea} - {$SITE_SITENAME} {$location}</title>
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="Author" content="Florian Schroeder" />
<meta name="Copyright" content="Copyright 2010 by evilDEV.de" />
<meta name="Description" content="Teamspeak 3 Server Webinterface" />
<meta name="Keywords" content="Teamspeak 3 Server Webinterface" />
<meta name="Robots" content="NOINDEX,NOFOLLOW">
<meta name="Generator" content="ECPmin.v{$SITE_VERSION} - Copyright (C) 2010 evilDEV.de. All rights reserved." />
<meta name="Language" content="de" />
<link type="image/x-icon" rel="icon" href="favicon.ico" />
<link type="text/css" rel="stylesheet" href="templates/{$theme}/css/header.css">
<link type="text/css" rel="stylesheet" href="templates/{$theme}/css/main.css">
<link type="text/css" rel="stylesheet" href="templates/{$theme}/css/boxes.css">
<link type="text/css" rel="stylesheet" href="templates/{$theme}/css/tsviewer.css" />
<script language="Javascript" type="text/javascript" src="../backend/java/tsviewer.js"></script>
<script language="Javascript" type="text/javascript" src="../backend/java/misc.js"></script>
</head>
<body id="eCP">
<div align="center">
  <!-- Container -->
  <div class="container">
    <!-- Header -->
    <div>
      <div class="header">
        <div class="text">
          <div class="small"><br>
          </div>
          <a class="darkbg" href="./index.php">Teamspeak 3 Server Webinterface</a><br />
          <div class="small">{$lang.adminarea}</div>
        </div>
        <div class="welcome">{$lang.welcome} {$name}!</div>
        <div class="logout"> <a class="darkbg" href="../index.php?m=logout">{$lang.logout}</a> </div>
        <div class="panel"> {if $admin == 1 } <a class="darkbg" href="../customer/index.php">{$lang.goto_customerarea}</a> {/if}</div>
      </div>
      <!-- Header Ende -->
      <!-- Content -->
      <div id="main" class="tunnel">
        <div id="maincontent" class="maincontent">
          <div class="module">
            <div class="links">
              <div class="theader">
                <div class="bg" style="padding-left:7px;"> {include file='navi/admin_navigation.tpl'}
                  <div class="clear">&nbsp;</div>
                </div>
              </div>
            </div>
            <div class="mitte">
              <div class="theader">
                <div class="bg">
                  <div class="content">
                    <!-- Main Content -->
                    {$content}
                    <!-- Main Content Ende -->
                  </div>
                  <div class="clear">&nbsp;</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clear" style="background-color:#FFFFFF;">&nbsp;</div>
        <div class="info"><a href="http://{$SITE_URL}">Server hosted by {$SITE_FIRMA}</a></div>
        <!-- Das nachfolgende Copyright darf laut Lizenzvereinbarung nicht entfernt oder verändert werden! -->
        <div class="info"><a href="http://www.evilDEV.de">Copyright &copy; 2010 evilDEV.de</a></div>
        <div id="maincontent_bottom" class="maincontent_bottom">&nbsp;</div>
      </div>
    </div>
    <!-- Content Ende -->
    <!-- Footer Anfang -->
    <div class="footer">
      <div>
        <!-- Lizenz Info -->
        {$lang.gnu_gpl_licence}
        <!-- Lizenz Info -->
        <div class="contentspacer" style="height:35px;">&nbsp;</div>
      </div>
    </div>
    <!-- Footer Ende -->
  </div>
</div>
</body>
</html>