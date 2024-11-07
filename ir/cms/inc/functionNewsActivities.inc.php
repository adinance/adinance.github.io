<?php
// Get news&activities
function getNewsList($cond ,$order,$startpoint,$perpage){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM main_news $cond ORDER BY $order LIMIT $startpoint,$perpage  ";
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
	
}

function sumNews($status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	if($status !=""){
	$strSQL = "SELECT COUNT(*) AS tot FROM main_news WHERE status = '$status' ";
	}else{
	$strSQL = "SELECT COUNT(*) AS tot FROM main_news ";	
	}
	
	$res = mysql_query($strSQL) or die(mysql_error());
	$rs = mysql_fetch_array($res); 
	
	return $rs["tot"];
}

function addNews($id,$title,$description,$detail,$photo,$news_date,$status,$thumbnail_1,$thumbnail_2){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "INSERT INTO main_news(id,title,description,detail,photo,news_date,status,submit_date,update_date,thumbnail_1,thumbnail_2) VALUES ('$id','$title','$description','$detail','$photo','$news_date','$status',NOW(),NOW(),'$thumbnail_1','$thumbnail_2') ";
//        return $strSQL;
	$clsConn->DBquery($strSQL);
	return true;
}
function getNewsDetail($cond){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "SELECT * FROM main_news $cond ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs;
}


function editNews($id,$title,$description,$detail,$photo,$news_date,$status,$thumbnail_1,$thumbnail_2){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE main_news  SET  title='$title',description = '$description',detail='$detail',photo='$photo',thumbnail_1='$thumbnail_1',thumbnail_2='$thumbnail_2',news_date='$news_date', status = '$status' , update_date = NOW()  WHERE id = '$id' ";
//        return $strSQL;
	$clsConn->DBquery($strSQL);
	return true;
}
function deleteNews($id){
  	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);	
	
	$strSQL = "SELECT photo FROM main_news  WHERE id  = '$id' ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	$photo = $rs["photo"];
	$p1 = "../../data/news/thumb/";
	if(file_exists($p1.$photo)){
		@unlink($p1.$photo);
	}

	$strSQL = "DELETE FROM main_news  WHERE id  = '$id' ";
	$clsConn->DBquery($strSQL);
	$clsConn->DBclose();
	return true;
}



/* Interview*/
function sumInterview($status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	if($status !=""){
	$strSQL = "SELECT COUNT(*) AS tot FROM main_interview WHERE status = '$status' ";
	}else{
	$strSQL = "SELECT COUNT(*) AS tot FROM main_interview ";	
	}
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs["tot"];
}

function getInterviewList($cond ,$order,$startpoint,$perpage){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM main_interview $cond ORDER BY $order LIMIT $startpoint,$perpage  ";
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
	
}


function addInterview($id,$title,$month1,$year1,$month2,$year2,$photo,$thumb,$pdf,$status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "INSERT INTO main_interview(id,title,month1,year1,month2,year2,photo,thumb,pdf,status,submit_date,update_date) VALUES ('$id','$title','$month1','$year1','$month2','$year2','$photo','$thumb','$pdf','$status',NOW(),NOW()) ";
	$clsConn->DBquery($strSQL);
	return true;
}

function getInterviewDetail($cond){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "SELECT * FROM main_interview $cond ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs;
}

function editInterview($id,$title,$month1,$year1,$month2,$year2,$photo,$thumb,$pdf,$status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE main_interview  SET  title='$title',month1 = '$month1',year1='$year1',month2='$month2',year2='$year2',photo='$photo',thumb='$thumb',pdf='$pdf', status = '$status' , update_date = NOW()  WHERE id = '$id' ";
	$clsConn->DBquery($strSQL);
	return true;
}

function deleteInterview($id){
  	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);	
	
	$strSQL = "SELECT photo,thumb,pdf FROM main_interview WHERE id  = '$id' ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	$photo = $rs["photo"];
	$thumb = $rs["thumb"];
	$pdf = $rs["pdf"];
	$p1 = "../../data/interview/photo/";
	$p2 = "../../data/interview/thumb/";
	$p3 = "../../data/interview/pdf/";
	if(file_exists($p1.$photo)){
		@unlink($p1.$photo);
	}
	
	if(file_exists($p2.$thumb)){
		@unlink($p2.$thumb);
	}
	
	if(file_exists($p3.$pdf)){
		@unlink($p3.$pdf);
	}

	$strSQL = "DELETE FROM main_interview  WHERE id  = '$id' ";
	$clsConn->DBquery($strSQL);
	$clsConn->DBclose();
	return true;
}

/* Newsletter */
function sumNewsletter($status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	if($status !=""){
	$strSQL = "SELECT COUNT(*) AS tot FROM main_newsletter WHERE status = '$status' ";
	}else{
	$strSQL = "SELECT COUNT(*) AS tot FROM main_newsletter ";	
	}
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs["tot"];
}

function getNewsletterList($cond ,$order,$startpoint,$perpage){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM main_newsletter $cond ORDER BY $order LIMIT $startpoint,$perpage  ";
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
	
}

function addNewsletter($id,$title,$month1,$year1,$month2,$year2,$photo,$thumb,$pdf,$status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "INSERT INTO main_newsletter(id,title,month1,year1,month2,year2,photo,thumb,pdf,status,submit_date,update_date) VALUES ('$id','$title','$month1','$year1','$month2','$year2','$photo','$thumb','$pdf','$status',NOW(),NOW()) ";
	$clsConn->DBquery($strSQL);
	return true;
}

function getNewsletterDetail($cond){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "SELECT * FROM main_newsletter $cond ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	return $rs;
}

function editNewsletter($id,$title,$month1,$year1,$month2,$year2,$photo,$thumb,$pdf,$status){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE main_newsletter  SET  title='$title',month1 = '$month1',year1='$year1',month2='$month2',year2='$year2',photo='$photo',thumb='$thumb',pdf='$pdf', status = '$status' , update_date = NOW()  WHERE id = '$id' ";
	$clsConn->DBquery($strSQL);
	return true;
}

function deleteNewsletter($id){
  	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);	
	
	$strSQL = "SELECT photo,thumb,pdf FROM main_newsletter WHERE id  = '$id' ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res); 
	$photo = $rs["photo"];
	$thumb = $rs["thumb"];
	$pdf = $rs["pdf"];
	$p1 = "../../data/newsletter/photo/";
	$p2 = "../../data/newsletter/thumb/";
	$p3 = "../../data/newsletter/pdf/";
	if(file_exists($p1.$photo)){
		@unlink($p1.$photo);
	}
	
	if(file_exists($p2.$thumb)){
		@unlink($p2.$thumb);
	}
	
	if(file_exists($p3.$pdf)){
		@unlink($p3.$pdf);
	}

	$strSQL = "DELETE FROM main_newsletter  WHERE id  = '$id' ";
	$clsConn->DBquery($strSQL);
	$clsConn->DBclose();
	return true;
}



?>