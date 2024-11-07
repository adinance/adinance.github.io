<?php
$dbhost	= "localhost";
$dbuser	= "cmogroup";
$dbpass	= "hC04ha_1";
$dbname	= "cmogroup"; 

$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to mysql");
mysqli_select_db($conn, $dbname) or die(mysqli_error($conn));
//var_dump($conn);
?>