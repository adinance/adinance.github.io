<?php
// Get IR 
function getPresentationList($cond ,$order,$startpoint,$perpage){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM main_presentation $cond ORDER BY $order LIMIT $startpoint,$perpage  ";
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
	
}

function sumPresentation($status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	if($status !=""){
	$strSQL = "SELECT COUNT(*) AS tot FROM main_presentation WHERE status = '$status' ";
	}else{
	$strSQL = "SELECT COUNT(*) AS tot FROM main_presentation ";	
	}
	
	$res = mysql_query($strSQL) or die(mysql_error());
	$rs = mysql_fetch_array($res); 
	
	return $rs["tot"];
}

function addIRPresentation($id,$title,$presentation,$webcast,$status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "INSERT INTO main_presentation(id,title,presentation,webcast,status,submit_date) VALUES ('$id','$title','$presentation','$webcast','$status',NOW()) ";
	$clsConn->DBquery($strSQL);
	return true;
}
function getPresentationDetail($cond){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "SELECT * FROM main_presentation $cond ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs;
}


function editPresentation($id,$title,$presentation,$webcast,$status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE main_presentation SET title='$title',presentation='$presentation',webcast='$webcast',status = '$status' ,update_date=NOW() WHERE id = '$id' ";
	$clsConn->DBquery($strSQL);
	return true;
}
function deletePresentation($id){
  	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);	
	
	

	$strSQL = "DELETE FROM main_presentation  WHERE id  = '$id' ";
	$clsConn->DBquery($strSQL);
	$clsConn->DBclose();
	return true;
}






?>