<?php
// Get IR 
function getReportList($cond ,$order,$startpoint,$perpage){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM main_ir_report $cond ORDER BY $order LIMIT $startpoint,$perpage  ";
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
	
}

function sumReport($status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	if($status !=""){
	$strSQL = "SELECT COUNT(*) AS tot FROM main_ir_report WHERE status = '$status' ";
	}else{
	$strSQL = "SELECT COUNT(*) AS tot FROM main_ir_report ";	
	}
	
	$res = mysql_query($strSQL) or die(mysql_error());
	$rs = mysql_fetch_array($res); 
	
	return $rs["tot"];
}

function addIRReport($id,$title,$pdf,$photo,$status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "INSERT INTO main_ir_report(id,title,pdf,photo,status,submit_date) VALUES ('$id','$title','$pdf','$photo','$status',NOW()) ";
	$clsConn->DBquery($strSQL);
	return true;
}
function getReportDetail($cond){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "SELECT * FROM main_ir_report $cond ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs;
}


function editReport($id,$title,$pdf,$photo,$status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE main_ir_report SET title='$title',pdf='$pdf',photo='$photo',status = '$status'  WHERE id = '$id' ";
	$clsConn->DBquery($strSQL);
	return true;
}
function deleteReport($id){
  	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);	
	
	$strSQL = "SELECT photo,pdf  FROM main_ir_report  WHERE id  = '$id' ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	$photo = $rs["photo"];
	$pdf = $rs["pdf"];
	$p1 = "../../data/irfile/report/photo/";
    $p2 = "../../data/irfile/report/pdf/";

	if(file_exists($p1.$photo)){
		@unlink($p1.$photo);
	}
	
	if(file_exists($p2.$pdf)){
		@unlink($p2.$pdf);
	}
	

	$strSQL = "DELETE FROM main_ir_report  WHERE id  = '$id' ";
	$clsConn->DBquery($strSQL);
	$clsConn->DBclose();
	return true;
}






?>