<?php 

// cmslog.php

// Info:
//
// n/A
//

$pp = $_REQUEST["pp"];

if (isset($_GET["page"]) ? $page = $_REQUEST["page"] : $page = 1);


if (isset($act)) {

	if ($act == "delete") {
	
	$sql = $db->Query("TRUNCATE " . prefix_cpmin . "log");
	$delete = TRUE;
	
	$now = time();
	$sql = $db->Query("INSERT " . prefix_cpmin . "log (member_id, target_id, date, action, what, module ) VALUES ('$USERID', '0', '$now', '2', 'CMS-Log', 'cmslog')");
	
	}
	
}
	
// Benötigte Datensätze auslesen

	$sql_log = $db->Query("SELECT * FROM " . prefix_cpmin . "log");
	$num = $sql_log->numrows();
	
	
	$limit = 20;
	$seiten = ceil($num / $limit);
	$start = prepage() * $limit - $limit;
	
	
	$sql_log = $db->Query("SELECT * FROM " . prefix_cpmin . "log ORDER BY date DESC LIMIT $start,$limit");
	$num = $sql_log->numrows();

	$log_array = array();
    
	while ($row = $sql_log->fetchrow()) {
        array_push($log_array,array(
			    'member_id' => $row->member_id,
                'target_id' => $row->target_id,
                'date' => $row->date,
                'action' => $row->action,
                'what' => $row->what,
                'module' => $row->module ) 
		); 
	
	$a = $a + 1;
	
	$sql = $db->Query("SELECT * FROM " . prefix_cpmin . "members WHERE id = '$row->member_id' LIMIT 1");
	$result = $sql->fetchrow();
	
	$name = $result->name;
	$surname = $result->surname;
	$log_array[$a-1]['name'] = $name;
	$log_array[$a-1]['surname'] = $surname;
	
	switch ($row->action) {
    case 1:
        $action_desc = $lang["log_info_add"];
        break;
    case 2:
        $action_desc = $lang["log_info_delete"];
        break;
    case 3:
        $action_desc = $lang["log_info_edit"];
        break;
    case 4:
        $action_desc = $lang["log_info_send"];
        break;
    case 5:
        $action_desc = $lang["log_info_move"];
        break;
    case 6:
        $action_desc = $lang["log_info_close"];
        break;
    case 7:
        $action_desc = $lang["log_info_start"];
        break;
    case 8:
        $action_desc = $lang["log_info_stop"];
        break;
    case 9:
        $action_desc = $lang["log_info_login"];
        break;
    case 10:
        $action_desc = $lang["log_info_logout"];
        break;
	}
	
	$log_array[$a-1]['action_desc'] = $action_desc;
	
	} 
	
	
	$tmpl->assign('pages', pagenav($seiten, prepage(), " <a href=\"admin.php?m=cmslog&amp;pp=$limit&amp;page={s}\">{t}</a> "));
	
    $tmpl->assign("pp", $pp);
    $tmpl->assign("page", $page);
    $tmpl->assign("pagecount", $seiten);
	
	
    $tmpl->assign("id", $id);
	
	$tmpl->assign("theme", $THEME);
	$tmpl->assign("lang", $lang);
    $tmpl->assign("log_array", $log_array);
	
	$tmpl->assign("content", parsetrue("container/".container("static"), "CMS-Log" , $tmpl->fetch("cmslog/cmslog.tpl"))); 
	
?>