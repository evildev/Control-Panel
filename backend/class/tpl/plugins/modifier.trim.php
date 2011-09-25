<?php
/*
 * Smarty plugin
 *
-------------------------------------------------------------
 * File:     modifier.trim.php
 * Type:     modifier
 * Name:     trim
 * Version:  1.0
 * Date:     May 1st, 2002
 * Purpose:  pass value to PHP trim() and return result
 * Install:  Drop into the plugin directory.
 * Author:   Jason E. Sweat <jsweat_php@yahoo.com>
 *
-------------------------------------------------------------
 */
function smarty_modifier_trim($string)
{
    return trim($string);
}

/* vim: set expandtab: */

?>
