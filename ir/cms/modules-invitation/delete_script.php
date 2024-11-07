w<?php
include "../inc/isLogin.php";
require_once "../../../inc/mysql-command.php";
require_once "../../../inc/function-ir-document.php";
include "../inc/function.inc.php";
setlocale(LC_ALL, 'TH');
$path =  $_SERVER['HTTP_REFERER'];
if(isset($_POST['id'])){
    foreach($_POST['id'] as $index=>$value){
        if($value != ""){	
            deleteIRDocumentRecord($value,"../../../ir/uploads/invitation/");
        }
    }
}
$section = "IR : Invitation";
$detail = "Delete by ".$_SESSION["s_admin_username"];
$ip = $_SERVER['REMOTE_ADDR'];
transaction_log($section,$detail,$ip);
header("Location: index.php");	
?>