<?php
function getNextId($tb)
{
    $clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "SELECT MAX(id) AS max_id FROM $tb";
    $result = $clsConn->DBquery($strSQL);
	 if($clsConn->DBnum_rows($result) == 0){
	     return 1;
	 }else{
	    $rs = $clsConn->DBfetch($result);
		return $rs["max_id"] +1;
	 }
}

function getNextId_corporate($tb)
{
    $clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "SELECT MAX(id) AS max_id FROM $tb";
	$result = $clsConn->DBquery($strSQL);
	
	$rs = $clsConn->DBfetch($result);
    return $rs["max_id"] +1;
	 
}

function transaction_log($section,$detail,$ip){
    $clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL ="INSERT INTO transaction_log(section,detail,ip,submit_date) VALUES('$section','$detail','$ip',NOW()) ";
	$clsConn->DBquery($strSQL);
}

function addIRDocumentCorporate($id,$year,$file_th,$file_en,$title_th,$title_en,$status,$create_by){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "INSERT INTO ir_document_corporate(id,file_en,file_th,title_en,title_th,year,create_date,create_by,update_date,update_by,status) VALUES ('$id','$file_en','$file_th','$title_en','$title_th','$year',NOW(),'$create_by',NULL,NULL,'$status' ) ";
    $clsConn->DBquery($strSQL);
	return true;
}

function editIRDocumentCorporate($id,$year,$file_th,$file_en,$title_th,$title_en,$status,$update_by){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE ir_document_corporate 
	SET year='$year', 
	file_th='$file_th', 
	file_en='$file_en', 
	title_th='$title_th', 
	title_en='$title_en', 
	status = '$status' , 
	update_by = '$update_by' , 
	update_date = NOW() 
	WHERE id = '$id' ";
	$clsConn->DBquery($strSQL);
	return true;
}

function editIRDocumentCor($id,$year,$file_th,$file_en,$title_th,$title_en,$status,$create_by){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE ir_document_corporate 
	       SET year='$year', 
	       file_th='$file_th', 
	       file_en='$file_en', 
	       title_th='$title_th', 
	       title_en='$title_en', 
	       status = '$status', 
	       update_by = '$update_by', 
	       update_date = NOW() 
	WHERE id = '$id'";
	$clsConn->DBquery($strSQL);
	return true;
}


function deleteIRDocumentCor($id,$path){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);	
	
	$strSQL = "SELECT file_th,file_en  FROM ir_document_corporate  WHERE id  = '$id' ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	$file_th = $rs["file_th"];
	$file_en = $rs["file_en"];
	    $p = "../../../ir/uploads/document_corporate/";
		//$p = $path; //"../../../ir/uploads/financial-statement/";
	if(file_exists($p.$file_th)){
			@unlink($p.$file_th);
	}
	
	if(file_exists($p.$file_en)){
			@unlink($p.$file_en);
	}
	
	$strSQL = "DELETE FROM ir_document_corporate WHERE id  = '$id' ";
	$clsConn->DBquery($strSQL);
	$clsConn->DBclose();
	return true;
}

function deletecorporate($id,$path){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);	
	
	$strSQL = "SELECT file_th,file_en  FROM ir_document_corporate  WHERE id  = '$id' ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	$file_th = $rs["file_th"];
	$file_en = $rs["file_en"];
	  $p = $path; //"../../../ir/uploads/financial-statement/";

  if(file_exists($p.$file_th)){
		  @unlink($p.$file_th);
  }
  
  if(file_exists($p.$file_en)){
		  @unlink($p.$file_en);
  }
  
	  $strSQL = "DELETE FROM ir_document_corporate WHERE id  = '$id' ";
  $clsConn->DBquery($strSQL);
  $clsConn->DBclose();
  return true;
}

function leftNav(){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL ="SELECT * FROM tb_section WHERE status = '1' ORDER BY id ASC";
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  $arr = array();
	  $arr[id] = $rs["id"];
	  $arr[name] = $rs["name"];
	  $arr[path] = $rs["path"];
	  $arr[status] = $rs["status"];
	  array_push($list,$arr);
	}
	return $list;
}


function clean_for_mysql($string,$max_length) {        
  $in_string = ltrim($string);       
  $in_string = rtrim($in_string);
  if (round($max_length) < 1) {  
    $max_length = 131072; // 128K
  }
  if (strlen($in_string) > $max_length) {
    $new_string = substr($in_string,0,$max_length);
  }
  $new_string = mysql_real_escape_string($new_string);
  return $new_string;
}
function stripJunk($junk) {
$cleanedString = preg_replace("/[^A-Za-z0-9\s\.\-\/+\!;\n\t\r]/","", $junk);
$cleanedString = preg_replace("/\s+/"," ",$cleanedString);
return $cleanedString;
} 
function badstuff($junk){
$search  = array('=', '#', '^', '\"', '\'');
$replace = array('', '', '', '', '');
$cleanedString = str_replace($search, $replace, $junk);
return $cleanedString;
}
function checkFileType($mediat){
	$f = explode(".",$mediat);
	if($f[0] == "swf"){
		return "flash";
	}else{
		return "image";
	}
}
function dateFormat($date){
 $timestamp =strftime($date);
 $datef = strftime("%b %d,%Y", strtotime($timestamp)); 
 return $datef;
 
}

function generatePassword($length=9, $strength=0) {
	$vowels = 'aeuy';
	$consonants = 'bdghjmnpqrstvzBDGHJLMNPQRSTVWXZ';
	if ($strength & 1) {
		$consonants .= 'BDGHJLMNPQRSTVWXZ';
	}
	if ($strength & 2) {
		$vowels .= "AEUY";
	}
	if ($strength & 4) {
		$consonants .= '23456789';
	}
	if ($strength & 8) {
		$consonants .= '@#$%';
	}
 
	$password = '';
	$alt = time() % 2;
	for ($i = 0; $i < $length; $i++) {
		if ($alt == 1) {
			$password .= $consonants[(rand() % strlen($consonants))];
			$alt = 0;
		} else {
			$password .= $vowels[(rand() % strlen($vowels))];
			$alt = 1;
		}
	}
	return $password;
}

function getMonthName($mid){
	switch($mid){
		case 1 : $name = "January"; break;
		case 2 : $name = "February"; break;
		case 3 : $name = "March"; break;
		case 4 : $name = "April"; break;
		case 5 : $name = "May"; break;
		case 6 : $name = "June"; break;
		case 7 : $name = "July"; break;
		case 8 : $name = "August"; break;
		case 9 : $name = "September"; break;
		case 10 : $name = "October"; break;
		case 11 : $name = "November"; break;
		case 12 : $name = "December"; break;
	}
	return $name;
}
?>