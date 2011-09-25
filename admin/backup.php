<?php 

// order.php

// Info:
//
// n/A
//


// Prüfe Benutzerrechte

/* if (!isset($_SESSION['loggedin']))
{ 
  header ("Location: ../index.php?reason=notloggedin");
} */


// Prüfe ob Aktion folgen soll




if (isset($act)) {

	
	if ($act == "delete") {

		$id = $_GET["id"];
	
	
		$sql = $db->Query("SELECT * FROM " . prefix_cpmin . "backup WHERE id = '$id' LIMIT 1");
		$result = $sql->fetchrow();
	
		$file = $result->file;
		$path = $result->path;
	
		unlink("../uploads/backup/$path/$file.sql.gz");
		rmdir("../uploads/backup/$path");

	
		$sql = $db->Query("DELETE FROM " . prefix_cpmin . "backup WHERE id = '$id'");
	
		$delete = TRUE;
	
		$now = time();
	
		$sql = $db->Query("INSERT " . prefix_cpmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$USERID', '$id', '$now', '2', 'MySQL-Backup', 'backup')");
	
	
	}
	
	
	if ($act == "bak") {
	
		$username = $db_user;
		$passwort = $db_pass;
		$db_name = $db_name;
		
		$path = "../uploads/backup/";
		$path_sufix = (generatePassword($length=10));
		$path = $path.$path_sufix;
		
		
		$old_umask = umask(0); //besonders wichtig//
		mkdir($path, 0777);
		
		$date = date("d-m-Y-H-i-s-");
		$date_email = date("d.m.Y H:i:s");
		$filename = $date;
		$filename = $filename.$path_sufix;
		
		$mail = $SITE_EMAIL_INFO;
		$Betreff = "Backup der Datenbank - $db_name - vom $date_email";

		$now = time();
		
		system('/usr/bin/mysqldump -u'.$username.' -p'.$passwort.' -h localhost '.$db_name.' | /bin/gzip > ' . $path . '/' . $filename . '.sql.gz', $fp);
		if ($fp==0) echo ''; else echo 'Es ist ein Fehler aufgetreten';
		$filename_n = $path.'/'.$filename.'.sql.gz';
		$Header = "From: NEXmin - System <$mail>";
		$Trenner = md5(uniqid(time()));
		$Header .= "\n";
		$Header .= "MIME-Version: 1.0";
		$Header .= "\n";
		$Header .= "Content-Type: multipart/mixed; boundary=$Trenner";
		$Header .= "\n\n";
		$Header .= "This is a multi-part message in MIME format";
		$Header .= "\n";
		$Header .= "--$Trenner";
		$Header .= "\n";
		$Header .= "Content-Type: text/plain";
		$Header .= "\n";
		$Header .= "Content-Transfer-Encoding: 8bit";
		$Header .= "\n\n";
		$Header .= "Backup der Datenbank - $db_name - vom $date_email";
		$Header .= "\n";
		$Header .= "--$Trenner";
		$Header .= "\n";
		$Header .= "Content-Type: application/x-gzip; name=$filename_n";
		$Header .= "\n";
		$Header .= "Content-Transfer-Encoding: base64";
		$Header .= "\n";
		$Header .= "Content-Disposition: attachment; filename=$filename_n";
		$Header .= "\n\n";
		$Dateiinhalt .= fread(fopen($filename_n, "r"), filesize($filename_n));
		$Header .= chunk_split(base64_encode($Dateiinhalt));
		$Header .= "\n";
		$Header .= "--$Trenner--";
		
		mail($mail, $Betreff, "", $Header); 

		$filesize = filesize($filename_n);
		
		
		$now = time();
		
		$sql = $db->Query("INSERT " . prefix_cpmin . "backup (typ, date, file, path, filesize ) VALUES ('1', '$now', '$filename', '$path_sufix', '$filesize')");
		
		
		$msg_backup = TRUE;
	
	
		$now = time();
	
		$sql = $db->Query("INSERT " . prefix_cpmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$USERID', '0', '$now', '7', 'MySQL Backup', 'backup')");
	
	}
	
	
}
	// Benötigte Datensätze auslesen
	$sql_log = $db->Query("SELECT * FROM " . prefix_cpmin . "backup ORDER BY date DESC");
	$num = $sql_log->numrows();
	
	
	$limit = 20;
	$seiten = ceil($num / $limit);
	$start = prepage() * $limit - $limit;
	
	$sql_bak = $db->Query("SELECT * FROM " . prefix_cpmin . "backup ORDER BY date DESC LIMIT $start,$limit");
	$num = $sql_bak->numrows();

	$bak_array = array();
    
	while ($row = $sql_bak->fetchrow()) {
        array_push($bak_array,array(
			    'id' => $row->id,
			    'typ' => $row->typ,
                'date' => $row->date,
                'file' => $row->file,
                'path' => $row->path,
                'filesize' => formatBytes($row->filesize, "KB") ) 
		); 
	
	$a = $a + 1;
	
	
	switch ($row->typ) {
    case 1:
        $typ_desc = "MySQL";
        break;
	}
	
	$bak_array[$a-1]['typ_desc'] = $typ_desc;
	$bak_array[$a-1]['download'] = "../uploads/backup/$row->path/$row->file.sql.gz";
	
	} 
	
	
	
	$tmpl->assign('pages', pagenav($seiten, prepage(), " <a href=\"admin.php?m=backup&amp;pp=$limit&amp;page={s}\">{t}</a> "));
	
    $tmpl->assign("pp", $pp);
    $tmpl->assign("page", $page);
    $tmpl->assign("pagecount", $seiten);
	
	
    $tmpl->assign("id", $id);
	
    $tmpl->assign("msgbackup", $msgbackup);
    $tmpl->assign("delete", $delete);
	
	$tmpl->assign("theme", $THEME);
	$tmpl->assign("lang", $lang);
    $tmpl->assign("bak_array", $bak_array);
	
	$tmpl->assign("content", parsetrue("container/".container("static"), "Backup" , $tmpl->fetch("backup/backup.tpl"))); 
	
?>