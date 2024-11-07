<?php
include "../inc/config_txt.php";
include "../inc/isLogin.php";
require_once "../inc/clsConnection.php";
include "../inc/function.inc.php";
include "../inc/functionUser.inc.php";

$path =  "index.php"; //$_SERVER['HTTP_REFERER'];
$hash = "ux01kt53";
$name = trim($_POST["name"]);
$username = stripJunk(trim($_POST["username"]));
$password = trim($_POST["password"]);
$status = 1;
$rule1 = 0;
if(stripJunk(trim($_POST["rule1"])) !=""){
$rule1 = stripJunk(trim($_POST["rule1"]));
}


$password = md5($password.$hash);

if(!checkDuplicateUser($username,$password)){
	$email = $username."_team@domain.com";
    $user_id = getNextId("tb_user");
	addUser($user_id,$name,$username,$password,$email,$status);
	$rule_id = getNextId("tb_permission");
	addRule($rule_id,$user_id,$rule1);
}
$section = "Administrator";
$detail = "cms :Add administrator";
$ip = $_SERVER['REMOTE_ADDR'];
transaction_log($section,$detail,$ip);
header("Location:".$path);	

?>
