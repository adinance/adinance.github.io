<?php

function updateFinancialHilightTH($detail){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	//set_time_limit(10);
	$strSQL = "UPDATE ir_financial_highlight SET detail_th ='$detail' ";
	$clsConn->DBquery($strSQL);
	return true;
}

function updateFinancialHilightEN($detail){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	//set_time_limit(10);
	$strSQL = "UPDATE ir_financial_highlight SET detail_en ='$detail' ";
	$clsConn->DBquery($strSQL);
	return true;
}

function updateInvestorInformationTH($detail){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	//set_time_limit(10);
	$strSQL = "UPDATE ir_information SET detail_th ='$detail' ";
	$clsConn->DBquery($strSQL);
	return true;
}

function updateInvestorInformationEN($detail){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	//set_time_limit(10);
	$strSQL = "UPDATE ir_information SET detail_en ='$detail' ";
	$clsConn->DBquery($strSQL);
	return true;
}

function getFinancialHilight($cond){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	//set_time_limit(10);
	$strSQL = "SELECT * FROM ir_financial_highlight $cond ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs;
}


function getPressRelease($cond){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	//set_time_limit(10);
	$strSQL = "SELECT *, DATE_FORMAT(create_date, '%d/%m/%Y') as cd FROM ir_document $cond ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs;
}


function getTotalDocument($condition){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "SELECT COUNT(*) AS total FROM ir_document $condition  ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res);
	return $rs["total"];
}

function getTotalPRNews(){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	//$strSQL = "SELECT COUNT(*) AS total FROM ir_document $condition  ";
	$strSQL = "SELECT COUNT(*) AS total FROM  main_news WHERE STATUS = '1' ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res);
	return $rs["total"];
}

function countIRDocumentConfigurationStatus($status,$configuration_id){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	if($status !=""){
	$strSQL = "SELECT COUNT(*) AS tot FROM ir_document WHERE status = '$status' and configuration_id = '$configuration_id' ";
	}else{
            $strSQL = "SELECT COUNT(*) AS tot FROM ir_document WHERE configuration_id = '$configuration_id' ";	
	}
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs["tot"];
}

function countIRShareholder($status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	if($status ==""){
	$strSQL = "SELECT COUNT(*) AS tot FROM ir_shareholder  ";
	}else{
            $strSQL = "SELECT COUNT(*) AS tot FROM ir_shareholder WHERE actived = '$status' ";	
	}
	$res = mysql_query($strSQL) or die(mysql_error());
	$rs = mysql_fetch_array($res); 
	return $rs["tot"];
}


function getIRDocumentList($condition, $order, $startpoint, $perpage){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM ir_document $condition ORDER BY $order LIMIT $startpoint,$perpage  ";
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
}

function getIRDocumentPagingList($condition,$order, $startpoint, $perpage){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT *, concat(DAY(update_date),'/',MONTH(update_date),'/',YEAR(update_date)) as dated , concat(DAY(create_date),'/',MONTH(create_date),'/',YEAR(create_date)) as create_dated FROM ir_document $condition ORDER BY $order LIMIT $startpoint,$perpage  ";
//	return $strSQL;
        $res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
}

function getIRDocumentRecord($condition){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "SELECT * FROM ir_document $condition ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs;
}

function getIRDocumentCorporatebyId($condition){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "SELECT * FROM ir_document_corporate $condition ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs;
}

function getIRShareholderRecord($condition){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "SELECT * FROM ir_shareholder $condition ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs;
}

function addIRDocumentRecord($id,$type_id,$year,$configuration_id,$file_th,$file_en,$url_th,$url_en,$title_th,$title_en,$status,$create_by,$create_date,$update_by){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "INSERT INTO ir_document(id,type,year,configuration_id,file_th,file_en,url_th,url_en,title_th,title_en,status,create_by,create_date,update_by,update_date) VALUES (NULL,'$type_id','$year','$configuration_id','$file_th','$file_en','$url_th','$url_en','$title_th','$title_en','$status','$create_by','$create_date','$update_by',NOW()) ";
	// echo $strSQL;
        $clsConn->DBquery($strSQL);
	return true;
}

function addIRDocumentRecordPressRelease($id,$type_id,$year,$configuration_id,$file_th,$file_en,$url_th,$url_en,$title_th,$title_en,$status,$create_by,$create_date,$update_by,$description_th,
$description_en){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "INSERT INTO ir_document(id,type,year,configuration_id,file_th,file_en,url_th,url_en,title_th,title_en,status,create_by,create_date,update_by,update_date,description_th,description_en) VALUES (NULL,'$type_id','$year','$configuration_id','$file_th','$file_en','$url_th','$url_en','$title_th','$title_en','$status','$create_by','$create_date','$update_by',NOW(),'$description_th','$description_en') ";
	// echo $strSQL;
        $clsConn->DBquery($strSQL);
	return true;
}

function addIRShareholderRecord($id,$name_th,$name_en,$amount,$percent,$status,$order_id){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "INSERT INTO ir_shareholder(id,name_th,name_en,amount,percent,actived,order_id) VALUES ('$id','$name_th','$name_en','$amount','$percent','$status','$order_id') ";
	$clsConn->DBquery($strSQL);
	return true;
}

function editIRDocumentRecord($id,$type_id,$year,$file_th,$file_en,$url_th,$url_en,$title_th,$title_en,$status,$update_by){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE ir_document 
	SET type='$type_id', 
	year='$year', 
	file_th='$file_th', 
	file_en='$file_en', 
	url_th='$url_th', 
	url_en='$url_en', 
	title_th='$title_th', 
	title_en='$title_en', 
	status = '$status' , 
	update_by = '$update_by' , 
	update_date = NOW() 
	WHERE id = '$id' ";
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

function editIRDocumentRecordPressRelease($id,$type_id,$year,$file_th,$file_en,$url_th,$url_en,$title_th,$title_en,$status,$update_by,$create_date,$description_th,$description_en){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE ir_document 
	SET type='$type_id', 
	year='$year', 
	file_th='$file_th', 
	file_en='$file_en', 
	url_th='$url_th', 
	url_en='$url_en', 
	title_th='$title_th', 
	description_th='$description_th', 
	title_en='$title_en', 
	description_en='$description_en', 
	status = '$status' , 
	create_date = '$create_date' , 
	update_by = '$update_by' , 
	update_date = NOW() 
	WHERE id = '$id' ";
	$clsConn->DBquery($strSQL);
	return true;
}


function editIRDocumentSetNotification($id,$type_id,$year,$file_th,$file_en,$url_th,$url_en,$title_th,$title_en,$status,$update_by,$create_date){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE ir_document SET type='$type_id', year='$year', file_th='$file_th', file_en='$file_en', url_th='$url_th', url_en='$url_en', title_th='$title_th', title_en='$title_en', status = '$status' , update_by = '$update_by' , create_date = '$create_date' WHERE id = '$id' ";
	$clsConn->DBquery($strSQL);
	return true;
}

function editIRShareholderRecord($id,$name_th,$name_en,$amount,$percent,$status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE ir_shareholder SET name_th='$name_th', name_en='$name_en', amount='$amount', percent='$percent', actived = '$status' WHERE id = '$id' ";
//	return $strSQL;
        $clsConn->DBquery($strSQL);
	return true;
}

function deleteIRDocumentRecord($id,$path){
  	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);	
	$strSQL = "SELECT file_th,file_en  FROM ir_document WHERE id  = '$id' ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	$file_th = $rs["file_th"];
	$file_en = $rs["file_en"];
//	$p = "../../data/irfile/statement/pdf/";
          $p = $path; //"../../../ir/uploads/financial-statement/";

	if(file_exists($p.$file_th)){
            @unlink($p.$file_th);
	}
	
	if(file_exists($p.$file_en)){
            @unlink($p.$file_en);
	}
	
        $strSQL = "DELETE FROM ir_document WHERE id  = '$id' ";
	$clsConn->DBquery($strSQL);
	$clsConn->DBclose();
	return true;
}


function deleteIRShareholderRecord($id){
  	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);	
          $strSQL = "DELETE FROM ir_shareholder WHERE id  = '$id' ";
	$clsConn->DBquery($strSQL);
	$clsConn->DBclose();
	return true;
}

function getFinancialStagementList($condition,$order){
        
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM ir_document $condition ORDER BY $order ";
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
}

function getShareHolderStructureList($condition,$order){
        
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM ir_shareholder $condition ORDER BY $order ";
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
}

function getFinancialStagementPagingList($condition,$order, $startpoint, $perpage){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT *,DATE_FORMAT(create_date, '%d/%m/%Y') as cd, concat(DAY(update_date),'/',MONTH(update_date),'/',YEAR(update_date)) , concat(DAY(create_date),'/',MONTH(create_date),'/',YEAR(create_date))as create_dated FROM ir_document $condition ORDER BY $order LIMIT $startpoint,$perpage  ";
//	return $strSQL;
          $res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
}

function getCoporateGovernancePagingList($condition,$order, $startpoint, $perpage){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT *,DATE_FORMAT(create_date, '%d/%m/%Y') as cd, concat(DAY(update_date),'/',MONTH(update_date),'/',YEAR(update_date)) , concat(DAY(create_date),'/',MONTH(create_date),'/',YEAR(create_date))as create_dated FROM ir_document_corporate $condition ORDER BY $order LIMIT $startpoint,$perpage  ";
//	return $strSQL;
          $res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
}

function getAboutUs_vision($condition,$order,$startpoint,$perpage){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT *,DATE_FORMAT(create_date, '%d/%m/%Y') as cd, concat(DAY(update_date),'/',MONTH(update_date),'/',YEAR(update_date)) , concat(DAY(create_date),'/',MONTH(create_date),'/',YEAR(create_date)) as create_dated FROM ir_vision_mission_core $condition ORDER BY $order LIMIT $startpoint,$perpage  ";
//	return $strSQL;
          $res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
}

function countIRDocumentCoporateStatus($status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	if($status !="")
	{
	    $strSQL = "SELECT COUNT(*) AS tot FROM ir_document_corporate WHERE status = '$status' ";
	}
	else
	{
              $strSQL = "SELECT COUNT(*) AS tot FROM ir_document_corporate";	
	}
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs["tot"];
}

function countAboutUs_vision($status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	if($status !="")
	{
	    $strSQL = "SELECT COUNT(*) AS tot FROM ir_vision_mission_core WHERE status = '$status' ";
	}
	else
	{
              $strSQL = "SELECT COUNT(*) AS tot FROM ir_vision_mission_core";	
	}
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs["tot"];
}


function getFinancialStagementPagingList1($condition,$order, $startpoint, $perpage){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT *, concat(DAY(update_date),'/',MONTH(update_date),'/',YEAR(update_date)) as dated FROM ir_document $condition ORDER BY $order LIMIT $startpoint,$perpage  ";
          //$strSQL = "SELECT * FROM ir_shareholder $condition ORDER BY $order LIMIT $startpoint,$perpage  ";
	return $strSQL;
//        $res = $clsConn->DBquery($strSQL);
//	while($rs = $clsConn->DBfetch($res)){
//	  array_push($list,$rs);
//	}
//	return $list;
}

function getShareholderStructurePagingList($condition,$order, $startpoint, $perpage){
//	$clsConn= new clsConnection();
//	$clsConn->DBInit();
        
        ini_set('session.gc_maxlifetime', 3000);
        $host= "localhost";
        $user = "cmogroup";
        $passwd= "hC04ha_1";
        $db=  "cmogroup";
        $connection = mysql_connect($host, $user, $passwd);
        mysql_query("SET Character_set_results=UTF8");
        mysql_query("SET Character_set_client=UTF8");
        mysql_query("SET Character_set_cennection=UTF8");
        mysql_query("SET Collation_connection=UTF8");
        mysql_query("SET Character_database=UTF8");
        mysql_query("SET Character_server=UTF8");
        mysql_query("SET NAMES UTF8");
        mysql_select_db($db, $connection) or die("Please try again");
        
        // -----
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM ir_shareholder $condition ORDER BY $order LIMIT $startpoint,$perpage  ";
	//return $strSQL;
        $res = mysql_query($strSQL);
//        $res = $clsConn->DBquery($strSQL);
//	while($rs = $clsConn->DBfetch($res)){
        while($rs = mysql_fetch_array($res)){
	  array_push($list,$rs);
	}
	return $list;
}

function getInvestorInformationPagingList($condition,$order, $startpoint, $perpage){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM ir_information $condition ORDER BY $order LIMIT $startpoint,$perpage  ";
//	return $strSQL;
        $res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
}


function getFinancialHighlightPagingList($condition,$order, $startpoint, $perpage){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT *, concat(DAY(update_date),'/',MONTH(update_date),'/',YEAR(update_date)) as dated FROM ir_financial $condition ORDER BY $order LIMIT $startpoint,$perpage  ";
//	return $strSQL;
        $res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
}


function sumFinancialStatement($status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	if($status !=""){
	$strSQL = "SELECT COUNT(*) AS tot FROM ir_document WHERE status = '$status' and configuration_id = '1' ";
	}else{
	$strSQL = "SELECT COUNT(*) AS tot FROM ir_document WHERE status = '$status' and configuration_id = '1' ";	
	}
	
	$res = mysql_query($strSQL) or die(mysql_error());
	$rs = mysql_fetch_array($res); 
	
	return $rs["tot"];
}

//function getFinancialHilight($cond){
//	$clsConn= new clsConnection();
//	$clsConn->DBInit();
//	//set_time_limit(10);
//	$strSQL = "SELECT * FROM ir_financial_highlight $cond ";
//	$res = $clsConn->DBquery($strSQL);
//	$rs = $clsConn->DBfetch($res); 
//	return $rs;
//}

function getFinancialHilighByYear($year){
        $condition = " WHERE year = '$year'"; 
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM ir_financial $condition";
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
}

function getInvestorInformation($cond){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	//set_time_limit(10);
	$strSQL = "SELECT * FROM ir_information $cond ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs;
}

function getInvestorInformationByRegisterationCode($registerationCode){
        $condition = " WHERE registeration_no = '$registerationCode'"; 
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM ir_information $condition";
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
}

function getInvestorInformationContactByRegisterationCode($registerationCode){
        $condition = " WHERE registeration_no = '$registerationCode'"; 
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM ir_contact $condition";
        
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
}

//function getTotalNews($condition){
//	$clsConn= new clsConnection();
//	$clsConn->DBInit();
//	set_time_limit(10);
//	$strSQL = "SELECT COUNT(*) AS tot  FROM main_news $condition  ";
//	$res = $clsConn->DBquery($strSQL);
//	$rs = $clsConn->DBfetch($res);
//	return $rs["tot"];
//}
//
function getIRNewsList($condition, $order, $startpoint, $perpage){
        $condition = $condition."  ";
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
//	$strSQL = "SELECT * FROM main_ir_news $condition ORDER BY $order LIMIT $startpoint,$perpage  ";
//         $strSQL = "SELECT * FROM ir_document $condition ORDER BY $order LIMIT $startpoint,$perpage  ";
        
        $strSQL = "SELECT * FROM (

SELECT 
id as id ,
title as title_th ,
title as title_en ,
'' as file_th ,
'' as file_en ,
news_date as order_date 
FROM main_news
WHERE STATUS = '1'


UNION 

SELECT 
id as id, 
title_th as title_th ,
title_en as title_en ,
file_th as file_th ,
file_en as file_en ,
update_date as order_date 
FROM ir_document $condition )
AS t

order by order_date desc LIMIT $startpoint,$perpage  ";
        
        /*
         * SELECT * FROM (

SELECT 
id as id ,
title as title_th ,
title as title_en ,
news_date as order_date 
FROM main_news
WHERE STATUS = '1'


UNION 

SELECT 
id as id, 
title_th as title_th ,
title_en as title_en ,
update_date as order_date 
FROM ir_document
WHERE configuration_id in ('6','5')
AND STATUS = '1'

)
AS t

order by order_date desc

limit 0,5
         */
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
}



//
//function getNewsDetail($cond){
//	$clsConn= new clsConnection();
//	$clsConn->DBInit();
//	set_time_limit(10);
//	$strSQL = "SELECT *   FROM main_news $cond  ";
//	$res = $clsConn->DBquery($strSQL);
//	$rs = $clsConn->DBfetch($res);
//	return $rs;
//}
//
//function getInterviewList($cond ,$order,$startpoint,$perpage){
//	$clsConn= new clsConnection();
//	$clsConn->DBInit();
//	set_time_limit(10);
//	$list = array();
//	$strSQL = "SELECT * FROM main_interview $cond ORDER BY $order LIMIT $startpoint,$perpage  ";
//	$res = $clsConn->DBquery($strSQL);
//	while($rs = $clsConn->DBfetch($res)){
//	  array_push($list,$rs);
//	}
//	return $list;
//	
//}
//
//function getNewsletterList($cond ,$order,$startpoint,$perpage){
//	$clsConn= new clsConnection();
//	$clsConn->DBInit();
//	set_time_limit(10);
//	$list = array();
//	$strSQL = "SELECT * FROM main_newsletter $cond ORDER BY $order LIMIT $startpoint,$perpage  ";
//	$res = $clsConn->DBquery($strSQL);
//	while($rs = $clsConn->DBfetch($res)){
//	  array_push($list,$rs);
//	}
//	return $list;
//	
//}

?>