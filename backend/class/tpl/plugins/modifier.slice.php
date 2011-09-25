<?php

/*
 * Smarty plugin
 * --------------------------------------------------------------------------
 * File:     modifier.slice.php
 * Type:     modifier
 * Name:     slice
 * Version:  1.0
 * Date:     March 14th, 2002
 * Purpose:  Chops the middle out of a long string.
 *           Example:
 *           {$url|slice:20}
 *           If $url == 'http://www.phpinsider.com/' it outputs
 *             'http://ww...der.com/'
 * Install:  Drop into the plugin directory.
 * Author:   Benjamin Curtis <ben_curtis@hotmail.com>
 * --------------------------------------------------------------------------
 */


function smarty_modifier_slice($string, $length = 80, $etc = '...',
                               $break_words = true)
{
    if ($length == 0) {
        return '';
    }

    if (strlen($string) > $length) {
        $bit_len = floor($length / 2) - floor(strlen($etc) / 2);
        
        if ($break_words) {
            $ret_string = substr($string, 0, $bit_len).$etc.
                substr($string, -($bit_len - 1));
        } else {
            $ret_string = wordwrap($string, $bit_len + 1, "\0").$etc.
                strrev(wordwrap(strrev($string), $bit_len, "\0"));
        }
        return $ret_string;
    } else {
        return $string;
    }
}

/* vim: set expandtab: */

?>
