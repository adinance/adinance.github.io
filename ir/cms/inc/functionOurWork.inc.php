<?php
// Get FOur Work
function getWorkList($cond ,$order,$startpoint,$perpage){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM main_work $cond ORDER BY $order LIMIT $startpoint,$perpage  ";
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
	
}

function sumWork($status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	if($status !=""){
	$strSQL = "SELECT COUNT(*) AS tot FROM main_work WHERE status = '$status' ";
	}else{
	$strSQL = "SELECT COUNT(*) AS tot FROM main_work ";	
	}
	
	$res = mysql_query($strSQL) or die(mysql_error());
	$rs = mysql_fetch_array($res); 
	
	return $rs["tot"];
}

function addWork($id,$title,$code,$photo,$status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "INSERT INTO main_work(id,title,code,photo,status,submit_date,update_date) VALUES ('$id','$title','$code','$photo','$status',NOW(),NOW()) ";
	$clsConn->DBquery($strSQL);
	return true;
}
function getWorkDetail($cond){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "SELECT * FROM main_work $cond ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs;
}


function editWork($id,$title,$code,$photo,$status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE main_work SET title='$title',code='$code',photo='$photo',status = '$status' , update_date = NOW()  WHERE id = '$id' ";
	$clsConn->DBquery($strSQL);
	return true;
}
function deleteWork($id){
  	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);	
	
	$strSQL = "SELECT photo  FROM main_work  WHERE id  = '$id' ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	$photo = $rs["photo"];
	$p = "../../data/work/";

	if(file_exists($p.$photo)){
		@unlink($p.$photo);
	}
	

	$strSQL = "DELETE FROM main_work  WHERE id  = '$id' ";
	$clsConn->DBquery($strSQL);
	$clsConn->DBclose();
	return true;
}






?>