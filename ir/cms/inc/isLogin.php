<?php
include "config_txt.php";
$url = $path."login.php";
session_start();
if(!isset($_SESSION["s_admin_uid"])){
header("location:".$url);
exit();
}
?>
