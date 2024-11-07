<?php
// Get Financial Hilight 

function updateFinancialHilight($detail){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	//set_time_limit(10);
	$strSQL = "UPDATE main_finance_hilight SET detail='$detail' ";
	$clsConn->DBquery($strSQL);
	return true;
}

function getFinancialHilight($cond){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	//set_time_limit(10);
	$strSQL = "SELECT * FROM main_finance_hilight $cond ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs;
}


?>