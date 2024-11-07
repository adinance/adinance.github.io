<?php
function checkDuplicateUser($username,$password)
{
   $clsConn= new clsConnection();
   $clsConn->DBInit();
   set_time_limit(10);
   $strSQL = "SELECT COUNT(*)AS tot FROM tb_user WHERE username = '$username' AND password = '$password' ";
   $res = $clsConn->DBquery($strSQL);
   $rs = $clsConn->DBfetch($res);
   if($rs["tot"] == 0){
       return false;
   }else{
       return true;
   }
}
function addUser($user_id,$name,$username,$password,$email,$status)
{
   $clsConn= new clsConnection();
   $clsConn->DBInit();
   set_time_limit(10);
   $strSQL ="INSERT INTO tb_user(id,name,username,password,email,status) VALUES('$user_id','$name','$username','$password','$email','$status')";
   $clsConn->DBquery($strSQL);
}

function addRule($rule_id,$user_id,$rule1)
{
   $clsConn= new clsConnection();
   $clsConn->DBInit();
   set_time_limit(10);
   $strSQL ="INSERT INTO tb_permission(id,user_id,rule1) VALUES('$rule_id','$user_id','$rule1')";
   $clsConn->DBquery($strSQL);
}
function getUserList($order,$limit){
    if(empty($limit)){
	  $limit = "";
	}else{
	  $limit = " LIMIT $limit";
	}
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM tb_user ORDER BY $order $limit ";
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
	
}
function searchUser($keyword,$cont){
    $cont= " WHERE $cont LIKE '$keyword%' ";
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$list = array();
	$strSQL = "SELECT * FROM tb_user $cont  ";
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  array_push($list,$rs);
	}
	return $list;
}
function delete_user($id){
    $clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
    $strSQL = "SELECT username FROM tb_user WHERE id  = '$id' ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res);
    if($rs["username"] != "administrator"){
	$strSQL = "DELETE FROM tb_permission  WHERE user_id  = '$id' ";
	$clsConn->DBquery($strSQL);
	
    $strSQL = "DELETE FROM tb_user  WHERE id  = '$id' ";
	if($clsConn->DBquery($strSQL))
	return true;
    }
}
function getPermission($id){
 	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$arr = array();
        $strSQL = "SELECT * FROM tb_permission  WHERE user_id  = '$id' ";
	$res = $clsConn->DBquery($strSQL);
	$rs = $clsConn->DBfetch($res);
	return $rs;
}

function get_permission($user_id){
    $clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "SELECT * FROM tb_permission  WHERE user_id  = '$user_id' ";
	$res = $clsConn->DBquery($strSQL);
    $rs = $clsConn->DBfetch($res);
 
    return $rs;
}

function gerPermissionName($rid){
	if($rid==1){
	  return "Add/Edit/Delete";	
	}else if($rid==2){
	  return "View"; 	
	}
}

function getUserProfile($id){
    $clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "SELECT * FROM tb_user   LEFT JOIN tb_permission ON tb_user.id = tb_permission.user_id  WHERE tb_user.id  = '$id' ";
	$res = $clsConn->DBquery($strSQL);
	while($rs = $clsConn->DBfetch($res)){
	  $arr = array();
	  $arr[id] = $rs["id"];
	  $arr[name] = $rs["name"];
	  $arr[username] = $rs["username"];
	  $arr[email] = $rs["email"];
	  $arr[rule1] = $rs["rule1"];
	  $arr[rule2] = $rs["rule2"];	  
	}
	

	return $arr;
}
function updateUser($user_id,$name){
    $clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE tb_user SET name = '$name' WHERE id = '$user_id' ";
	$clsConn->DBquery($strSQL);
}
function updateRule($user_id,$rule1,$rule2,$rule3){
    $clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE tb_permission SET rule1 = '$rule1',rule2 = '$rule2' WHERE user_id = '$user_id' ";
	$clsConn->DBquery($strSQL);
}
function changePassword($user_id,$password){
    $clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE tb_user SET password = '$password' WHERE id = '$user_id' ";
	$clsConn->DBquery($strSQL);
    return true;
}
function changePasswordMemberByEmail($email,$password){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE tb_member SET password = '$password' WHERE email = '$email' ";
	$clsConn->DBquery($strSQL);
	$clsConn->DBclose();
    return true;
}
function checkLogin($username,$password){
    $clsConn= new clsConnection();
    $clsConn->DBInit();
    set_time_limit(10);
	$strSQL = "SELECT  COUNT(*) AS tot  FROM tb_user WHERE username = '$username'  AND password = '$password' AND status = '1'  ";
	$res = $clsConn->DBquery($strSQL);
	$row = $clsConn->DBfetch($res);
	if($row["tot"] == 1){
	   return true;
	}else{
	   return false;
	}
	/*if($username == 'iradmin' && $password =='cmoplc' ){
	   return true;
	}else{
	   return false;
	}*/
}
function get_user_id($username){
    $clsConn= new clsConnection();
    $clsConn->DBInit();
    set_time_limit(10);
    $strSQL = "SELECT  id   FROM tb_user WHERE username = '$username'  AND status = '1'  ";
	$res = $clsConn->DBquery($strSQL);
	$row = $clsConn->DBfetch($res);
	return $row["id"];
}

?>