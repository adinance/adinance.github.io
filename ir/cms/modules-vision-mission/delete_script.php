<?php
require_once "../inc/config_txt.php";
require_once "../../../inc/mysql-command.php";
require_once "../../../inc/function-ir-document.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
include('../_class/class.upload.php');


if(isset($_POST['id'])){
    foreach($_POST['id'] as $index=>$value){
        if($value != ""){	
         deletecorporate($value);
        }
    }
}
$section = "IR : Corporate Governance";
$detail = "Delete by ".$_SESSION["s_admin_username"];
$ip = $_SERVER['REMOTE_ADDR'];
transaction_log($section,$detail,$ip);
header("Location: index.php");
?>