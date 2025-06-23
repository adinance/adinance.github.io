<?php  

$host = "163.44.197.234";
$dbname = "apps_ptfi";
$username = "apps_ptfi";
$password = "z5GyL4LAF48WMe8S";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    http_response_code(500);
    echo "Connection failed: " . $conn->connect_error;
    exit;
}



?>