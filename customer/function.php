<?php
//============================================
// Koobi 5.6 Standard                 
// Copyright 2003-2006 dream4
// Autor         : Björn Wunderlich
// Koobi-Version : koobi_standard_5.6     
// Kundennummer  : 10983          
// Download am   : 28-06-2006, 16:01:32        
// Anmerkung     : - 
//============================================
function getCategoriesAdmin($id, &$categories, $prefix) {
	global $db;
	// kategorien holen
	$q_cat = "
	SELECT 
	id, 
	title, 
	comment,
	position
	FROM 
	" . PREFIX . "_f_category 
	WHERE 
	parent_id = $id
	ORDER BY
	position ASC";
	
	$r_cat = $db->Query($q_cat);
	// kategorien durchgehen
	while ($cat = $r_cat->fetchrow()) {
		$cat->forums = array();
		// foren zur kategorie holen
		$q_forum = "
		SELECT 
		f.id, 
		f.comment,
		f.category_id, 
		f.title,
		f.active,
		f.group_id,
		f.position,
		f.status
		FROM 
		" . PREFIX . "_f_forum AS f
		WHERE 
		category_id = '" . $cat->id . "'
		ORDER BY
		f.position";
		
		$result = $db->Query($q_forum);
		
		// alle foren durchgehen
		while ($forum = $result->fetchrow()) {
			$group_ids = @explode(",", $forum->group_id);
			$forum->visible_title = $prefix . $forum->title;
			$q_sub_cat = "SELECT id, title, comment FROM " . PREFIX . "_f_category WHERE parent_id = " . $forum->id;
			$r_sub_cat = $db->Query($q_sub_cat);
			
			$forum->categories = array();
			while ($sub_cat = $r_sub_cat->fetchrow()) {
				$forum->categories[] = $sub_cat;
			}
			
			// mods holen
			$q_mods = "
			SELECT 
			COUNT(m.forum_id) AS m_count 
			FROM 
			" . PREFIX . "_f_mods AS m
			WHERE
			m.forum_id = " . $forum->id;
			
			$r_mods = $db->Query($q_mods);
			$mods = $r_mods->fetchrow();
			
			$forum->mods = $mods->m_count;
			
			$cat->forums[] = $forum;
		}
		
		$categories[] = $cat;
	}	
}



function sub($text,$maxlength){
	if(strlen($text)>$maxlength){
		$newtext = substr($text, 0, $maxlength)."...";
		$newtext = htmlspecialchars(stripslashes($newtext));
	} else {
		$newtext = htmlspecialchars(stripslashes($text));
	}
	return $newtext;
}


function adminperm($theid) {
	global $rights;
	if ($rights[$theid]==1) return true;
	if ($rights['alles']==1) return true;
	return false;
}

function siteperm($theid) {
	global $siterights;
	if ($siterights[$theid]==1) return true;
	if ($siterights['alles']==1) return true;
	return false;
}

function error($text){
	global $langadmin;
	$redir = $_SERVER['HTTP_REFERER'];
	$tmpl = new eCP("templates/".ADMINTHEME."/");
	$tmpl->assign("lang", $langadmin);
	$tmpl->assign("area", $area);
	$tmpl->assign("redir", $redir);
	$tmpl->assign("theme", ADMINTHEME);
	$tmpl->assign("text", $text);
	$tmpl->assign("redir", $_SERVER['HTTP_REFERER']);
	$tmpl->display("error.tpl");
}



function messagenorm($text,$page){
	global $langadmin;
	$msg ='<script language="javascript">
	setTimeout(function() {
		location.href = "'.$page.'";
	}, 6000);
	</script>
	<table width="100%" align="center"  border="0" cellspacing="0" cellpadding="0">
	<tr><td class="boxstd"><table width="100%"  border="0" cellpadding="4" cellspacing="1" class="tableborder"><tr>
	<td colspan="2" class="header"><font size="+1"><b>'.$langadmin['messageheader'].'</b></font></td>
	</tr><tr><td colspan="2" class="secondrow"><table width="100%"  border="0" cellspacing="0" cellpadding="10">
	<tr><td>'.$text.'<br><br>'.str_replace("__URL__", $page, $langadmin['redirect']).'</td>
	</tr></table></td></tr></table></td></tr></table><br><br>';
	return $msg;
}


function head(){
	echo '<table width="100%"  border="0" cellspacing="0" cellpadding="0"><tr><td class="stdbox">';
}

function foot(){
	echo '</td></tr></table><br>';
}

function errorpre($text){
	global $langadmin;
	$preerror = "<li><span class=\"errorfont\">".$langadmin[$text]."</li></span>";
	return $preerror;
}


/**
* Entfernt unschönen HTML- Code
*/
function nicehtml($text,$io){
	$html = $text;
	$html = str_replace('<br _moz_editor_bogus_node=\"TRUE\"/>',"",$html);
	$html = str_replace('<br type=\"_moz\"/>', '<br />', $html);
	$html = str_replace(array("<br>","<BR>"),"<br />",$html);
	$html = str_replace(array("<br/>","<BR/>"),"<br />",$html);
	$html = str_replace("<TBODY>","",$html);
	$html = str_replace("</TBODY>","",$html);
	$html = @ereg_replace("$\<p\>", "", $html);
	if($io==1){
		$html = stripslashes(htmlspecialchars($html));
	}
	
	return $html;
}


function galdisp($kat_id, $i) {
	global $parent_id,$area,$db;
	
	$sql = $db->Query("SELECT * FROM ".PREFIX."_gallery WHERE parent_id='$kat_id' AND area='$area' order by title asc");
	$i = 0;
	while($row = $sql->fetcharray()) {
		
		for($r=1;$r<$i;$r++) { $gdrop[test] .= '--'; }
		
		$sqls = $db->Query("SELECT DISTINCT id FROM ".PREFIX."_gallery_items WHERE gal_id='".$row["id"]."'");
		$all = $sqls->numrows();
		
		$gdrop[test] .= ' '.stripslashes($row["title"]). ' [' . $all . ']' . '';
		$gdrop[test] .= galdisp($row["id"], $i+1);
		$i++;
	}
	return $gdrop;
}

/**
*
* Bilduploadfunktion
*
**/

function upload($_FILES, $gal="0"){ 
	global $UID,$langadmin,$compression,$thumb_smallw,$thumb_smallh,$thumb_middlew,$thumb_middleh,$db;
	$galpfad = BASEDIR . "uploads/galerie/";
	if($gal != '' && $gal!=0){
		$sql = $db->Query("SELECT title FROM ". PREFIX ."_gallery WHERE id = '$gal'");
		$row = $sql->fetchrow();
		$galfolder = strtolower(str_replace(' ','_',$row->title));
	}
	
	$status = array();
	
	for($i=0;$i<count($_FILES['files']['tmp_name']);$i++)
	
	{
		$size = $_FILES['files']['size'][$i];
		$name = $_FILES['files']['name'][$i];
		$temp = $_FILES['files']['tmp_name'][$i];
		$type = substr($_FILES['files']['type'][$i], 0, 5);
		
		if($size > 0  and $type=="image"){
			$fupload_name = strtolower($_FILES['files']['name'][$i]);
			$fupload_name = str_replace(" ","", $fupload_name);
			
			
			// umbenennen wenn existent
			if(file_exists($galpfad . $fupload_name)){
				$ndat = explode(".",$fupload_name);
				$fupload_name = $ndat[0]. date("s") .".".$ndat[1];
			}
			
			if($_FILES['files']['type'][$i]=="image/pjpeg" || 
				$_FILES['files']['type'][$i]=="image/jpeg" || 
				$_FILES['files']['type'][$i]=="image/x-png" || 
				$_FILES['files']['type'][$i]=="image/png"){
				
				
				
				/* <<< SAFE_MODE UNSICHER! >>>
				$in_new = true;
				if(!@is_dir( BASEDIR . "uploads/galerie/$galfolder")){
					if(!@mkdir(BASEDIR . "uploads/galerie/$galfolder", 0777)) $in_new = false;
				}
				
				if(@is_dir( BASEDIR . "uploads/galerie/$galfolder")  && @is_writeable(BASEDIR . "uploads/galerie/$galfoldere")){
					$path_upload =  BASEDIR . "uploads/galerie/$galfolder/";
					$e_path = "$galfolder/";
				} else {
					$path_upload =  BASEDIR . "uploads/galerie/";
				}
				*/
				$in_new = false;
				$path_upload =  BASEDIR . "uploads/galerie/";
				
				move_uploaded_file($_FILES['files']['tmp_name'][$i], $path_upload . $fupload_name);
				@chmod($galpfad . $fupload_name,0777);
				// =============================================================
				// <<-- Verkleinern -->>
				// =============================================================
				if ( (isset($_REQUEST['resize'])) && ($_REQUEST['w']!="") && ($_REQUEST['h']!="") ) {
					$error = 0;
					
					
					if (gdversion() >= 2) { 
						$sowhat = "imagecreatetruecolor";
					} else { 
						$sowhat = "imagecreate";
					}
					
					if (function_exists("imagecreate")) {
						$neues_bild = $sowhat($_REQUEST['w'], $_REQUEST['h']);
						if($_FILES['files']['type'][$i]=="image/pjpeg" || $_FILES['files']['type'][$i]=="image/jpeg"){
							$altes_bild = imagecreatefromjpeg($path_upload  . $fupload_name);
						}
						if($_FILES['files']['type'][$i]=="image/png" || $_FILES['files']['type'][$i]=="image/x-png"){
							$altes_bild = imagecreatefrompng($path_upload  . $fupload_name);
						}
						if($_FILES['files']['type'][$i]=="image/gif"){
							$error = 1;
						}
						if (isset($altes_bild)) {
							imagecopyresampled($neues_bild, $altes_bild, 0, 0, 0, 0, imagesx($neues_bild), imagesy($neues_bild), imagesx($altes_bild), imagesy($altes_bild));
							if($_FILES['files']['type'][$i]=="image/pjpeg" || $_FILES['files']['type'][$i]=="image/jpeg"){
								@unlink($path_upload  . $fupload_name);
								imagejpeg($neues_bild, $path_upload  . $fupload_name);
							}
							if($_FILES['files']['type'][$i]=="image/png" || $_FILES['files']['type'][$i]=="image/x-png"){
								@unlink($path_upload  . $fupload_name);
								imagepng($neues_bild, $path_upload  . $fupload_name);
								
							}
						}
					}
				}
				
				$descr = $_REQUEST['descr'][$i];
				if($_REQUEST['autobr']) $descr = nl2br($descr);
				$sql = $db->Query("INSERT INTO ".PREFIX."_gallery_items (ctime,id,gal_id,path,name,descr,author) VALUES ('".time()."','','{$_REQUEST[thegal]}','$e_path$fupload_name','{$_REQUEST[name][$i]}','$descr','$UID') ");
			}
			
			if($_FILES['files']['type'][$i]!="image/pjpeg" && $_FILES['files']['type'][$i]!="image/jpeg" && $_FILES['files']['type'][$i]!="image/x-png" && $_FILES['files']['type'][$i]!="image/png"){
				$status[$i]["filename"] =  $_FILES['files']['name'][$i];
				$status[$i]["status"] =  $langadmin['wrongfiletype'];
				$status[$i]["size"] =  ceil($_FILES['files']['size'][$i]/1024);
				$status[$i]["type"] =  $_FILES['files']['type'][$i];
			}
			else {
				$status[$i]["filename"] =   $_FILES['files']['name'][$i];
				$status[$i]["status"] =  $langadmin['saved'];
				$status[$i]["size"] =  ceil($_FILES['files']['size'][$i]/1024);
				$status[$i]["type"] =  $_FILES['files']['type'][$i];
			}
		}
		
	}

	

	return $status;
}


function toggnavi($param){
	$position = strpos($_COOKIE["navi"], "navid".$param["id"]);
	if ( !is_numeric($position) )
	{
		$plusminus = "plus.gif";
		$class = "header";
	} else {
		$plusminus = "minus.gif";
		$class = "header_active";
	}
	$dnimage = "
	<img class=\"absmiddle\" border=\"0\" id=\"templates/".ADMINTHEME."/image_".$param["id"]."\" src=\"templates/".ADMINTHEME."/image/$plusminus\" 
	onmouseover=\"this.style.cursor = ''\"
	onclick=\"MWJ_changeDisplay('navid".$param["id"]."', MWJ_getStyle( 'navid".$param["id"]."', 'display' ) ? '' : 'none');
	koobi4_toggleImage('templates/".ADMINTHEME."/image_".$param["id"]."', this.src);
	koobi4_setCookie('navi', 'navid".$param["id"]."');\"
	alt=\"\" />";
	return $dnimage;
}

function toggnavi_td($param){
	$position = strpos($_COOKIE["navi"], "navid".$param["id"]);
	if ( !is_numeric($position) ) 
	{
		$plusminus = "plus.gif";
		$class = "header";
	} else {
		$plusminus = "minus.gif";
		$class = "header";
	}
	$dyntd = " class=\"$class\" 
	id=\"td__".$param["id"]."\" 
	onmouseover=\"this.style.cursor = 'pointer'\"
	onclick=\"MWJ_changeDisplay('navid".$param["id"]."', MWJ_getStyle( 'navid".$param["id"]."', 'display' ) ? '' : 'none');
	koobi4_toggleImage('templates/".ADMINTHEME."/image_".$param["id"]."', this.src);
	koobi4_setCookie('navi', 'navid".$param["id"]."');\"";
	return $dyntd;
}

function toggimage($param){
	$position = strpos($_COOKIE["navi"], "navid".$param["id"]);
	if ( !is_numeric($position) ) {
		$disp= "none";	
	}
	return $disp;
}

// ========================================================
// <<-- F.A.Q- Löschfunktion -->>
// ========================================================
function faqdel($id) {
	global $db;
	$query = $db->Query(" SELECT * FROM " . PREFIX . "_faq  WHERE parent_id=$id");
	
	while ($item = $query->fetchrow()) {
		$sql = $db->Query("DELETE FROM " . PREFIX . "_faq WHERE id=$item->id");			
		
		faqdel($item->id);
	}
	
	$query = $db->Query("DELETE FROM " . PREFIX . "_faq WHERE id='$id'");
}

// ========================================================
// <<-- Galerie- Löschfunktion -->>
// ========================================================
function galdel($id) {
	global $db;
	$query = $db->Query(" SELECT id,parent_id FROM " . PREFIX . "_gallery  WHERE parent_id=$id");
	
	while ($item = $query->fetchrow()) {
		$sql = $db->Query("SELECT path FROM " . PREFIX . "_gallery_items WHERE gal_id=$item->id");
		while($row_g = $sql->fetchrow()){
			@unlink( BASEDIR . "uploads/galerie/" . $row_g->path);
		}
		
		$sql = $db->Query("DELETE FROM " . PREFIX . "_gallery WHERE id=$item->id");			
		$sql = $db->Query("DELETE FROM " . PREFIX . "_gallery_items WHERE gal_id=$item->id");
		
		// <<--Rekursion -->>
		galdel($item->id);
	}
	$sql = $db->Query("SELECT path FROM " . PREFIX . "_gallery_items WHERE gal_id=$id");
	while($row_g = $sql->fetchrow()){
		@unlink(BASDIR . "uploads/galerie/" . $row_g->path);
	}
	
	$query = $db->Query("DELETE FROM " . PREFIX . "_gallery WHERE id='$id'");
	$sql = $db->Query("DELETE FROM " . PREFIX . "_gallery_items WHERE gal_id='$id'");
}


// ========================================================
// <<-- ARTIKELKATEGORIE- LOESCHFUNKTION -->>
// ========================================================
function artcatdel($id) {
	global $db;
	$query = $db->Query("SELECT * FROM " . PREFIX . "_articlecat WHERE parent_id=$id");
	
	while ($item = $query->fetchrow()) {
		$sql = $db->Query("DELETE FROM " . PREFIX . "_articlecat WHERE catid='" . $item->id . "'");			
		artcatdel($item->catid);
		@unlink("../uploads/articlecat_icons/" . $item->icon);
		$sql = $db->Query("DELETE FROM " . PREFIX . "_articles WHERE  articlecat = $item->catid");
		$sql = $db->Query("DELETE FROM " . PREFIX . "_articles WHERE  articlecat = $item->parent_id");
	}
	$query = $db->Query("DELETE FROM " . PREFIX . "_articlecat WHERE catid='$id'");
}


function dlcatdel($id) {
	global $db;
	$query = $db->Query("SELECT * FROM " . PREFIX . "_downloadcat WHERE parent_id=$id");
	
	while ($item = $query->fetchrow()) {
		$sql = $db->Query("DELETE FROM " . PREFIX . "_downloadcat WHERE catid='" . $item->id . "'");			
		dlcatdel($item->catid);
		$sql = $db->Query("DELETE FROM " . PREFIX . "_downloads WHERE  catid = $item->catid");
		$sql = $db->Query("DELETE FROM " . PREFIX . "_downloads WHERE  catid = $item->parent_id");
	}
	$query = $db->Query("DELETE FROM " . PREFIX . "_downloadcat WHERE catid='$id'");
}

function linkcatdel($id) {
	global $db;
	$query = $db->Query("SELECT * FROM " . PREFIX . "_linkcat WHERE parent_id=$id");
	
	while ($item = $query->fetchrow()) {
		$sql = $db->Query("DELETE FROM " . PREFIX . "_linkcat WHERE catid='" . $item->id . "'");			
		dlcatdel($item->catid);
		$sql = $db->Query("DELETE FROM " . PREFIX . "_links WHERE  catid = $item->catid");
		$sql = $db->Query("DELETE FROM " . PREFIX . "_links WHERE  catid = $item->parent_id");
	}
	$query = $db->Query("DELETE FROM " . PREFIX . "_linkcat WHERE catid='$id'");
}


// ========================================================
// <<-- UEBERPRUEFT DOKUMENTRECHTE -->>
// ========================================================
function check_action($perm,$table,$rowid,$idtype){
	global $db;
	$sql = $db->Query("SELECT UID FROM ".PREFIX."_$table WHERE uid='".UID."' AND $rowid='".$idtype."'");
	$num = $sql->numrows();
	if( (!permission($perm)) && ( $num < 1 ) ){
		return false;
	}else {
		return true;
	}
}

function alog($param_1,$param_2){}



function remoteFileSize($file)
{
	ereg("http:\/\/([^\/]*)\/(.*)", $file, $reg);
	
	$uri = '/' . $reg[2];
	
	if(strstr($reg[1], ':') !== false)
	{
		list($host, $port) = explode(':', $reg[1]);
	}
	else
	{
		$host = $reg[1];
		$port = 80;
	}
	
	$get = 'GET ' . $uri . ' HTTP/1.1' . "\r\n" . 'Host: ' . $host . "\r\n\r\n";
	
	$sock = fsockopen($host, $port);
	fwrite($sock, $get, strlen($get));
	$res = fread($sock, 1024);
	fclose($sock);
	
	if(eregi("Content-Length: ([0-9]*)", $res, $reg)) 
	{
		return $reg[1];
	}
	else
	{
		$i = 0;
		
		$fp = fopen($file, 'r');
		while(!feof($fp))
		{
			$i += strlen(fread($fp, 4096));
		}
		fclose($fp);
		
		return $i;
	}
	
}


function shopcateg_del($id) {
	global $db;
	$query = $db->Query("SELECT * FROM " . PREFIX . "_shop_cat WHERE parent_id='$id'");
	while ($item = $query->fetchrow()) {
		$sql = $db->Query("DELETE FROM " . PREFIX . "_shop_cat WHERE catid='" . $item->catid . "'");			
		shopcateg_del($item->catid);
		$sql = $db->Query("DELETE FROM " . PREFIX . "_shop_cat WHERE  catid = '$item->catid'");
		$sql = $db->Query("DELETE FROM " . PREFIX . "_shop_cat WHERE  catid = '$item->parent_id'");
	}
	$query = $db->Query("DELETE FROM " . PREFIX . "_shop_cat WHERE catid='$id'");
}


function NoPerm()
{
	global $langadmin;
	echo error($langadmin['noperms']); 
	exit; 
}

?>