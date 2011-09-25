<?php
//============================================
// Koobi 5.6 Standard                 
// Copyright 2003-2006 dream4
// Autor         : Björn Wunderlich
// Koobi-Version : koobi_standard_5.6     
// Kundennummer  : 10983          
// Download am   : 28-06-2006, 16:01:33        
// Anmerkung     : - 
// 
// Smarty {koobi_lastevents} function plugin
// 
// Typ:     Funktion
// Name:    koobi_lastevents
// Nutzen:  Gibt die letzten Kalender-Ereignisse aus
// Orte:    Überall
// Tag:     {koobi_lastevents show='15' template='new_events.tpl' type='public'}
// show:    Anzahl der maximalen Datensätze
// template:Das zu ladene Template (muss sich in /calendar/ befinden
// type: public (öffentliche Termine) / private (private Termine)
//============================================
function smarty_function_koobi_lastevents($params)
{

    global $db;
	global $tmpl;
	global $pref;
	global $THEME;
	global $area;
	
	$month = date("m", time());
	$d = date("d", time());
	$year = date("Y", time());
	
	$maxevents = ((int)$params['show'] != '') ? $params['show'] : '20'; 
	$template  = ($params['template'] != '') ? $params['template'] : 'new_events.tpl'; 
	
	$show_type = ($params['type'] == 'private') ? 'private' : 'public';
	$dbextra = ($params['type'] == 'private') ? " AND type = 'private' AND uid = '" . UID . ";' " : " AND type = 'public'";

	$db_start = " WHERE ((start between '" . mktime(0, 0, 1, $month, $d, $year) . "' && '" . mktime(23, 59, 59, $month, $d, $year+10) . "')";
	$db_start .= " OR (( tdays != 0) && ( tdays >= '" . mktime(0, 0, 0, $month, $d, $year) . "' ) && ( start <= '" . mktime(23, 59, 59, $month, $d, $year+10) . "') ))";

	$CalQuery = "SELECT id,name,type,weight,wd,tdays,done,start FROM " . PREFIX . "_calendar $db_start $db_end $dbextra ORDER BY start ASC limit $maxevents";
	$CalSQL = $db->Query($CalQuery);
	
	$items = array();
	while ($row = $CalSQL->fetchrow())
	{
		$row->link_event_only = "index.php?p=calendar&amp;action=events&amp;show=$show_type&amp;koobi_monat=".date("m", $row->start)."&amp;koobi_jahr=".date("Y", $row->start)."&amp;koobi_tag=".date("d", $row->start)."&amp;area=$area#$row->id";
		array_push($items, $row);	
	}
	$tmpl->assign('items', $items);
	$lastevents = $tmpl->fetch("calendar/$template");
    return $lastevents;
}
?>