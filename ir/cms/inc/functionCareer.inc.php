<?php
// Get Career 
function getCareerList($cond ,$order,$startpoint,$perpage){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM main_career $cond ORDER BY $order LIMIT $startpoint,$perpage  ";
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
	
}

function sumCareer($status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	if($status !=""){
	$strSQL = "SELECT COUNT(*) AS tot FROM main_career WHERE status = '$status' ";
	}else{
	$strSQL = "SELECT COUNT(*) AS tot FROM main_career ";	
	}
	
	$res = mysql_query($strSQL) or die(mysql_error());
	$rs = mysql_fetch_array($res); 
	
	return $rs["tot"];
}

function addCareer($id,$title,$detail,$status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "INSERT INTO main_career(id,title,detail,status,submit_date) VALUES ('$id','$title','$detail','$status',NOW()) ";
	$clsConn->DBquery($strSQL);
	return true;
}
function getCareerDetail($cond){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "SELECT * FROM main_career $cond ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs;
}


function editCareer($id,$title,$detail,$status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE main_career SET title='$title',detail='$detail',status = '$status'  WHERE id = '$id' ";
	$clsConn->DBquery($strSQL);
	return true;
}
function deleteCareer($id){
  	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);	


	$strSQL = "DELETE FROM main_career  WHERE id  = '$id' ";
	$clsConn->DBquery($strSQL);
	$clsConn->DBclose();
	return true;
}






?>