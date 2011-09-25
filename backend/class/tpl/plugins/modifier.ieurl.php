<?php
function smarty_modifier_ieurl($string)
{
   $str = urlencode($string);
   $str = str_replace('%2F', '/', $str);
   return $str;
}

?>
