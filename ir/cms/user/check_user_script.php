<?php
include "../inc/config_txt.php";
include "../inc/isLogin.php";
require_once "../inc/clsConnection.php";
include "../inc/function.inc.php";
include "../inc/functionUser.inc.php";

$path =  "index.php"; //$_SERVER['HTTP_REFERER'];
$hash = "ux01kt53";
$username = stripJunk(trim($_POST["username"]));
$password = md5($password.$hash);
if(!checkDuplicateUser($username)){
	echo "1";
}else{
    echo "0";
}
	
?>
