<?php
//require_once "inc/clsConnection.php";
require_once "../../inc/mysql-command.php";
include "inc/function.inc.php";
include "inc/functionUser.inc.php";
/*$path =  $_SERVER['HTTP_REFERER'];
$hash = "ux01kt53";	
$username = trim(strtolower($_POST["username"]));
$password = trim($_POST["password"]);
$password = md5($password.$hash);
if(!checkLogin($username,$password)){
echo false;
}else{
    session_start();
    $_SESSION["s_admin_id"] = get_user_id($username);
	$_SESSION["s_admin_username"] = $username;
	$_SESSION["s_admin_uid"] = date("YmdHis");
	$list = getPermission($_SESSION["s_admin_id"]);
	$_SESSION["s_admin_rule1"] = $list[rule1];
    //header("Location: index.php");
	echo true;
}*/


$path =  $_SERVER['HTTP_REFERER'];
//$hash = "ux01kt53";	
$username = trim(strtolower($_REQUEST["username"]));
$password = trim($_REQUEST["password"]);
//$password = md5($password.$hash);
//if(!checkLogin($username,$password)){
if($username == 'iradmin' && $password == 'cmoplc'){
	session_start();
    $_SESSION["s_admin_id"] = get_user_id($username);
    $_SESSION["s_admin_username"] = $username;
    $_SESSION["s_admin_uid"] = date("YmdHis");
    $list = getPermission($_SESSION["s_admin_id"]);
    $_SESSION["s_admin_rule1"] = $list[rule1];
    header("Location: index.php");
    echo true;
    
}else{
    echo false;
}
?>