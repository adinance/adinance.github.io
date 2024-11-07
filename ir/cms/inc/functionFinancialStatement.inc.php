<?php
// Get Financial Statement 
function getStatementList($cond ,$order,$startpoint,$perpage){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM main_finance_statement $cond ORDER BY $order LIMIT $startpoint,$perpage  ";
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
	
}

function sumStatement($status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	if($status !=""){
	$strSQL = "SELECT COUNT(*) AS tot FROM main_finance_statement WHERE status = '$status' ";
	}else{
	$strSQL = "SELECT COUNT(*) AS tot FROM main_finance_statement ";	
	}
	
	$res = mysql_query($strSQL) or die(mysql_error());
	$rs = mysql_fetch_array($res); 
	
	return $rs["tot"];
}

function addStatement($id,$type_id,$year,$pdf1,$pdf2,$pdf3,$pdf4,$status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "INSERT INTO main_finance_statement(id,type_id,year,pdf1,pdf2,pdf3,pdf4,status,submit_date,update_date) VALUES ('$id','$type_id','$year','$pdf1','$pdf2','$pdf3','$pdf4','$status',NOW(),NOW()) ";
	$clsConn->DBquery($strSQL);
	return true;
}
function getStatementDetail($cond){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "SELECT * FROM main_finance_statement $cond ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs;
}


function editStatement($id,$type_id,$year,$pdf1,$pdf2,$pdf3,$pdf4,$status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE main_finance_statement SET type_id='$type_id' , year='$year',pdf1='$pdf1',pdf2='$pdf2',pdf3='$pdf3',pdf4='$pdf4',status = '$status'  WHERE id = '$id' ";
	$clsConn->DBquery($strSQL);
	return true;
}
function deleteStatement($id){
  	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);	
	
	$strSQL = "SELECT pdf1,pdf2,pdf3,pdf4  FROM main_finance_statement  WHERE id  = '$id' ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	$pdf1 = $rs["pdf1"];
	$pdf2 = $rs["pdf2"];
	$pdf3 = $rs["pdf3"];
	$pdf4 = $rs["pdf4"];
	$p = "../../data/irfile/statement/pdf/";


	if(file_exists($p.$pdf1)){
		@unlink($p.$pdf1);
	}
	
	if(file_exists($p.$pdf2)){
		@unlink($p.$pdf2);
	}
	
	if(file_exists($p.$pdf3)){
		@unlink($p.$pdf3);
	}
	
	if(file_exists($p.$pdf4)){
		@unlink($p.$pdf4);
	}
	

	$strSQL = "DELETE FROM main_finance_statement  WHERE id  = '$id' ";
	$clsConn->DBquery($strSQL);
	$clsConn->DBclose();
	return true;
}






?>