<?php
// Get Family
function getFamilyList($cond ,$order,$startpoint,$perpage){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM main_family $cond ORDER BY $order LIMIT $startpoint,$perpage  ";
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
	
}

function sumFamily($status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	if($status !=""){
	$strSQL = "SELECT COUNT(*) AS tot FROM main_family WHERE status = '$status' ";
	}else{
	$strSQL = "SELECT COUNT(*) AS tot FROM main_family ";	
	}
	
	$res = mysql_query($strSQL) or die(mysql_error());
	$rs = mysql_fetch_array($res); 
	
	return $rs["tot"];
}

function addFamily($id,$type_id,$name,$detail,$logo,$photo,$url,$status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "INSERT INTO main_family(id,type_id,name,detail,logo,photo,url,status,submit_date,update_date) VALUES ('$id','$type_id','$name','$detail','$logo','$photo','$url','$status',NOW(),NOW()) ";
	$clsConn->DBquery($strSQL);
	return true;
}
function getFamilyDetail($cond){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "SELECT * FROM main_family $cond ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs;
}


function editFamily($id,$type_id,$name,$detail,$logo,$photo,$url,$status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE main_family SET  type_id='$type_id',name='$name',detail='$detail',logo='$logo',photo='$photo',url='$url', status = '$status' , update_date = NOW()  WHERE id = '$id' ";
	$clsConn->DBquery($strSQL);
	return true;
}
function deleteFamily($id){
  	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);	
	
	$strSQL = "SELECT photo,logo  FROM main_family  WHERE id  = '$id' ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	$photo = $rs["photo"];
	$logo = $rs["logo"];
	$p1 = "../../data/family/logo/";
    $p2 = "../../data/family/photo/";
	if(file_exists($p2.$photo)){
		@unlink($p2.$photo);
	}
	
	if(file_exists($p1.$logo)){
		@unlink($p1.$logo);
	}

	$strSQL = "DELETE FROM main_family  WHERE id  = '$id' ";
	$clsConn->DBquery($strSQL);
	$clsConn->DBclose();
	return true;
}






?>