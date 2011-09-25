<?php /* Smarty version 2.6.12, created on 2010-01-28 06:21:14
         compiled from page/main_template.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $this->_tpl_vars['SITE_SITENAME']; ?>
</title>
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="Author" content="Florian Schroeder" />
<meta name="Copyright" content="Copyright 2010 by evilDEV.de" />
<meta name="Description" content="Teamspeak 3 Server Webinterface" />
<meta name="Keywords" content="Teamspeak 3 Server Webinterface" />
<meta name="Robots" content="INDEX,FOLLOW" />
<meta name="Generator" content="NEXmin.v<?php echo $this->_tpl_vars['SITE_VERSION']; ?>
 - Copyright (C) 2010 evilDEV.de. All rights reserved." />
<meta name="Language" content="de" />
<link type="image/x-icon" rel="icon" href="favicon.ico" />
<link type="text/css" rel="stylesheet" href="templates/<?php echo $this->_tpl_vars['theme']; ?>
/css/header.css" />
<link type="text/css" rel="stylesheet" href="templates/<?php echo $this->_tpl_vars['theme']; ?>
/css/main.css" />
<link type="text/css" rel="stylesheet" href="templates/<?php echo $this->_tpl_vars['theme']; ?>
/css/boxes.css" />
<link type="text/css" rel="stylesheet" href="templates/<?php echo $this->_tpl_vars['theme']; ?>
/css/tsviewer.css" />
<script language="JavaScript" type="text/javascript" src="backend/java/misc.js"></script>
</head>
<body id="eCP" onload="preisrechner();">
<div align="center">
  <!-- Container -->
  <div class="container">
    <!-- Header -->
    <div>
      <div class="header">
        <div class="text">
          <div class="small">Willkommen!</div>
          <a class="darkbg" href="./index.php">Teamspeak 3 Server Webinterface</a><br />
          <div class="small">Hier kannst du dich in das WI einloggen!</div>
        </div>
      </div>
      <!-- Header Ende -->
      <!-- Content -->
      <div id="main" class="tunnel">
        <div id="maincontent" class="maincontent">
          <div class="module">
            <div class="links">
              <div class="theader">
                <div class="bg" style="padding-left:7px;"> <?php echo $this->_tpl_vars['navigation']; ?>

                  <div class="clear">&nbsp;</div>
                </div>
              </div>
            </div>
            <div class="mitte">
              <div class="theader">
                <div class="bg">
                  <div class="content">
                    <!-- Main Content -->
                    <div class="contentspacer" style="height:35px;">&nbsp;</div>
                    <?php echo $this->_tpl_vars['content']; ?>

                    <!-- Main Content Ende -->
                  </div>
                  <div class="clear">&nbsp;</div>
                </div>
              </div>
            </div>
            <div class="rechts">
              <div class="theader">
                <div class="bg"> <?php echo $this->_tpl_vars['navi_right']; ?>

                  <div class="clear">&nbsp;</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clear" style="background-color:#FFFFFF;">&nbsp;</div>
        <div class="info"><a href="http://<?php echo $this->_tpl_vars['SITE_URL']; ?>
">Server hosted by <?php echo $this->_tpl_vars['SITE_FIRMA']; ?>
</a></div>
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
        <a rel="license" href="http://creativecommons.org/licenses/GPL/2.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/GPL/2.0/88x62.png" /></a><br />
        Dieser Werk bzw. Inhalt ist unter einer <a rel="license" href="http://creativecommons.org/licenses/GPL/2.0/">Creative Commons-Lizenz</a> lizenziert.
        <!-- Lizenz Info -->
        <div class="contentspacer" style="height:35px;">&nbsp;</div>
      </div>
    </div>
    <!-- Footer Ende -->
  </div>
</div>
</body>
</html>
