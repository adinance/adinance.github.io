<?php
// Get Shareholder 

function updateShareholder($detail){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	//set_time_limit(10);
	$strSQL = "UPDATE main_shareholder SET detail='$detail' ";
	$clsConn->DBquery($strSQL);
	return true;
}

function getShareholder($cond){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	//set_time_limit(10);
	$strSQL = "SELECT * FROM main_shareholder $cond ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs;
}


?>