<?php

require_once 'conf.php';

$conn->set_charset("utf8");

$q1 = isset($_REQUEST['q1']) ? (int)$_REQUEST['q1'] : 0;
$q2 = isset($_REQUEST['q2']) ? (int)$_REQUEST['q2'] : 0;
$q3 = isset($_REQUEST['q3']) ? (int)$_REQUEST['q3'] : 0;
$q4 = isset($_REQUEST['q4']) ? (int)$_REQUEST['q4'] : 0;
$q5 = isset($_REQUEST['q5']) ? (int)$_REQUEST['q5'] : 0;
$q6 = isset($_REQUEST['q6']) ? (int)$_REQUEST['q6'] : 0;
$q7 = isset($_REQUEST['q7']) ? (int)$_REQUEST['q7'] : 0;
$q8 = isset($_REQUEST['q8']) ? (int)$_REQUEST['q8'] : 0;
$q9 = isset($_REQUEST['q9']) ? (int)$_REQUEST['q9'] : 0;
$q10 = isset($_REQUEST['q10']) ? (int)$_REQUEST['q10'] : 0;

$r1 = isset($_REQUEST['project']) ? (int)$_REQUEST['project'] : 0;
$r2 = isset($_REQUEST['ae']) ? (int)$_REQUEST['ae'] : 0;
$r3 = isset($_REQUEST['creative']) ? (int)$_REQUEST['creative'] : 0;
$r4 = isset($_REQUEST['production']) ? (int)$_REQUEST['production'] : 0;

$t1 = isset($_REQUEST['t1']) ? $_REQUEST['t1'] : '';
$t2 = isset($_REQUEST['t2']) ? $_REQUEST['t2'] : '';
$t3 = isset($_REQUEST['t3']) ? $_REQUEST['t3'] : '';
$t4 = isset($_REQUEST['t4']) ? $_REQUEST['t4'] : '';

$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
$ua = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
$modify = date("Y-m-d H:i:s");

$sql = "INSERT INTO personality_test_for_intern (
    q1, q2, q3, q4, q5, q6, q7, q8, q9, q10,
    r1, r2, r3, r4,
    t1, t2, t3, t4,
    ip, ua, modify
) VALUES ($q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10, 
$r1, $r2, $r3, $r4, 
'$t1', '$t2', '$t3', '$t4',
'$ip', '$ua', '$modify')";

$stmt = $conn->prepare($sql);
  
echo '<pre>';

echo "SQL Statement: $sql\n";
echo "Parameters:\n";

var_dump($stmt);

if (!$stmt) {
    http_response_code(500);
    echo "Prepare failed: " . $conn->error;
    exit;
}

if ($stmt->execute()) {
    echo "บันทึกข้อมูลสำเร็จ";
} else {
    http_response_code(500);
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
