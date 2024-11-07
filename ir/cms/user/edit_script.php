<?php
include "../inc/config_txt.php";
include "../inc/isLogin.php";
require_once "../inc/clsConnection.php";
include "../inc/function.inc.php";
include "../inc/functionUser.inc.php";
$path =  "index.php"; //$_SERVER['HTTP_REFERER'];
$user_id = trim($_POST["id"]);
$name = badstuff(trim($_POST["name"]));
$rule1 = 0;
if(stripJunk(trim($_POST["rule1"])) !=""){
$rule1 = stripJunk(trim($_POST["rule1"]));
}


updateUser($user_id,$name);
updateRule($user_id,$rule1);
$section = "Administrator";
$detail = "cms :Edit permission";
$ip = $_SERVER['REMOTE_ADDR'];
transaction_log($section,$detail,$ip);
header("Location:".$path);	
?>
