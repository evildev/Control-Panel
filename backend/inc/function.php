<?php

	
function columnsort($unsorted, $column) {
    $sorted = $unsorted;
    for ($i=0; $i < sizeof($sorted)-1; $i++) {
      for ($j=0; $j<sizeof($sorted)-1-$i; $j++)
        if ($sorted[$j][$column] > $sorted[$j+1][$column]) {
          $tmp = $sorted[$j];
          $sorted[$j] = $sorted[$j+1];
          $sorted[$j+1] = $tmp;
      }
    }
    return $sorted;
}

  
function formatBytes($bytes, $precision = 2) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB');
  
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
  
    $bytes /= pow(1024, $pow);
  
    return round($bytes, $precision) . ' ' . $units[$pow];
} 

if (!function_exists('scandir')) {
	function scandir($directory, $sorting_order=0) {
		if(!is_dir($directory)) {
			return false; 
		}
		$files = array();
		$handle = opendir($directory);
		while (false !== ($filename = readdir($handle))) {
			$files[] = $filename; 
		}
		closedir($handle);
 
		if($sorting_order == 1) {
			rsort($files); 
		} else {
			sort($files); 
		}
		return $files;
	}
}

function format_time($seconds) {
	
	$seconds = abs($seconds);

  	return sprintf("%d Tage %02d:%02d:%02d",$seconds/60/60/24,($seconds/60/60)%24,($seconds/60)%60,$seconds%60); }
	
	
	
function format_time_ts3($milliseconds) {
	
	$milliseconds = abs($milliseconds);

  	return sprintf("%d Tage %02d:%02d:%02d",$milliseconds/1000/60/60/24,($milliseconds/1000/60/60)%24,($milliseconds/1000/60)%60,($milliseconds/1000)%60); }
	
	
	
function format_datasize($byte) {
	
	$byte = $byte / 1024; $einheit = "kB";
	
	if ( $byte > 999 ) { $byte = $byte / 1024; $einheit = "MB"; };
	if ( $byte > 999 ) { $byte = $byte / 1024; $einheit = "GB"; };
	if ( $byte > 999 ) { $byte = $byte / 1024; $einheit = "TB"; };
	
	$byte = round($byte,2);
	
	$array = $byte." ".$einheit;
	
  	return $array; }
	

function addLeadingZeros($number, $digits)
{
 global $SITE_PREFIX_FIRMA;
 for($ii=strlen($number) ; $ii<$digits; $ii++) {$number="0".$number;}
  $number = $SITE_PREFIX_FIRMA."-".$number;
 return $number;
}


function leading_zero( $aNumber, $intPart, $floatPart=NULL, $dec_point=NULL, $thousands_sep=NULL) 
{
 global $SITE_PREFIX_FIRMA;
  $formattedNumber = $aNumber;
  //if (!is_null($floatPart)) {
  // $formattedNumber = number_format($formattedNumber, $floatPart, $dec_point, $thousands_sep);
  // }
   $formattedNumber = str_repeat("0",($intPart + -1 - floor(log10($formattedNumber)))).$formattedNumber;
  $formattedNumber = $SITE_PREFIX_FIRMA."-".$formattedNumber;
  return $formattedNumber;
}
  
  
 function generatePassword($length=8,$numbers=true,$case_sensitive=false)
{
    $array = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    $arr_capital_letter = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $arr_number = array('0','1','2','3','4','5','6','7','8','9');
    if(true==$numbers)
    {
        $array = array_merge($array,$arr_number);
    }
    if(true==$case_sensitive)
    {
        $array = array_merge($array,$arr_capital_letter);
    }
    $count = count($array)-1;
    for ($i=0;$i<$length;$i++)
    {
         shuffle($array);
         mt_srand((double)microtime()*1000000*$i);
         $rand = mt_rand(0,$count);
         $password .= $array[$rand];
    }
    return $password;
} 


function fetchmaintemplate($id)
{
    global $db,$area;
    $sql = $db->Query("SELECT tpl FROM " . prefix . "container WHERE typ='out' AND id='$id' and area='1' ");
    $rowtpl = $sql->fetchrow();
    $thetpl = $rowtpl->tpl;
    if (!$thetpl) $thetpl = "main_template";
    $thetpl = "page/" . $thetpl . ".tpl";
    return $thetpl;
} 


function escs($text)
{
    return mysql_escape_string($text);
} 


function navi_right()
{
    global $db,$THEME, $islogged, $ADMIN;
	
	$banner = rand(1,2);
	
    $navi_right = new eCP("templates/$THEME/");
	$navi_right->assign("banner", $banner);
	$navi_right->assign("login", $islogged);
	$navi_right->assign("admin", $ADMIN);
    $navi_right = $navi_right->fetch("navi/navi_right.tpl");

    return $navi_right;
} 



function permission($action)
{
    global $db,$HTTP_SESSION_VARS, $PERMS;
    if (UGROUP == 5 && $HTTP_SESSION_VARS[$action] == 1) return true;
    if (isset($HTTP_SESSION_VARS['alles']) && ($HTTP_SESSION_VARS['alles'] == 1) && (UGROUP == 1)) return true;
    return false;
} 

function redir()
{
    global $HTTP_GET_VARS, $HTTP_SERVER_VARS, $HTTP_HOST, $htt;
    $uri = $_SERVER['PHP_SELF'];
	
	$prefl = (SSLMODE==1) ? "https://" : "http://";
	
    if (!empty($HTTP_GET_VARS)) {
        $parmams = array();
        foreach($HTTP_GET_VARS as $paname => $value) {
            $params[] = @urlencode($paname) . '=' . @urlencode($value);
        } 
        $uri .= '?' . implode('&amp;', $params);
    } 
    $htt = $prefl;
	return($htt . $_SERVER['HTTP_HOST'] . $uri);
} 


function msg($title, $msg, $url, $meta, $opt = "0", $time = "0")
{
    global $db,$lang, $THEME;
    $sname = $title;
    $mesg = new eCP("templates/$THEME/");
    $mesg->assign('msgtitle', $lang["message_system"]);

    $mmsg = ($opt == 1) ? $msg : $lang[$msg];
    $mesg->assign('msg', $mmsg);

    $ttime = ($time != 0) ? $time : 2;
    $mesg->assign('timerefresh', $ttime);

    $mesg->assign('url', $url);
    $mesg->assign('meta', $meta);
    $mesg = $mesg->fetch("misc/msg.tpl");
    return $mesg;
} 

function parsetrue($template, $title, $in)
{
    global $THEME;
    $tmpl = new eCP("templates/$THEME/");
    $tmpl->assign('title', $title);
    $tmpl->assign('content', $in);
    $tmpl->assign('theme', $THEME);
    $theerg = $tmpl->fetch($template . '.tpl');
    return $theerg;
} 


function container($tpl)
{
    global $db,$dbprefix, $area;
    $sql = $db->Query("SELECT tpl FROM " . prefix . "container WHERE name='$tpl' and area='1' and typ='in'");
    $con = $sql->fetchrow();
    $sql->close();
    $con = $con->tpl;
    return $con;
} 


function getDocument()
{
    $document = split("/", $_SERVER['PHP_SELF']);
    return $document[count($document)-1] . "?" . $_SERVER['QUERY_STRING'];
} 


function prepage(){
	if(isset($_GET['page']) && $_GET['page'] != "")
	{
		$page = $_GET['page'];
	} else {
		$_GET['page'] = 1;
		$page = 1;
	}
	return $page;
}

function pagenav($anzahl_seiten, $tpl_on, $tpl_off) {
	global $lang, $THEME;
	$nav = "";
	
	$aktuelle_seite = prepage();
	$seiten = array (
	$aktuelle_seite-2,
	$aktuelle_seite-1,
	$aktuelle_seite,
	$aktuelle_seite+1,
	$aktuelle_seite+2
	);
	
	$seiten = array_unique($seiten);
	if($anzahl_seiten > 1 && $tpl_on != 1){
		$nav .= str_replace("{t}", "<img border=\"0\" src=\"./templates/{$THEME}/images/control_start.png\" alt=\"Anfang\" title=\"Anfang\" />", str_replace("{s}", 1, $tpl_off));
	}
	
	if($aktuelle_seite > 1) {
		$nav .= str_replace("{t}", "<img border=\"0\" src=\"./templates/{$THEME}/images/control_rewind.png\" alt=\"Zurück\" title=\"Zurück\" />", str_replace("{s}", ($aktuelle_seite-1), $tpl_off));
	}
	
	if($aktuelle_seite < $anzahl_seiten) {
		$nav .= str_replace("{t}", "<img border=\"0\" src=\"./templates/{$THEME}/images/control_fastforward.png\" alt=\"Weiter\" title=\"Weiter\" />", str_replace("{s}", ($aktuelle_seite+1), $tpl_off));
	}
	
	if($anzahl_seiten > 1 && $aktuelle_seite != $anzahl_seiten ){
		$nav .= str_replace("{t}", "<img border=\"0\" src=\"./templates/{$THEME}/images/control_end.png\" alt=\"Ende\" title=\"Ende\" />", str_replace("{s}", $anzahl_seiten, $tpl_off));
	}
	return $nav;
}


function system_message($reason) {
	
	if 		($reason == "falsedata") { $message = "<font color='#E80000'>Die eingegebenen Zugangsdaten waren ungültig!</font><p>"; }
	elseif 	($reason == "notloggedin") { $message = "<font color='#E80000'>Du bist nicht eingeloggt, oder die Session ist abgelaufen!</font><p>";  } 
	elseif 	($reason == "loggedout") { $message = "<font color='#009900'>Du hast dich erfolgreich ausgeloggt!</font><p>"; }
	
	return $message;
	
	}


function systeminc($file) {

	if(!include('src/'.$file.'.php')) system_error('Could not get system file for '.$file);
}

?>
