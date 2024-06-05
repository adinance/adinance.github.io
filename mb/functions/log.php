<?php
function curPageURL() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == 'on') {$pageURL .= 's';}
    $pageURL .= '://';
    if ($_SERVER["SERVER_PORT"] != '80') {
            $pageURL .= $_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
            $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}

$ip = $_SERVER['REMOTE_ADDR']; 
$useragent = $_SERVER['HTTP_USER_AGENT']; 
$computer_name = @$_ENV["COMPUTERNAME"]; // in case run on server
$ref = $_SERVER['HTTP_REFERER'];
$timestamp = '['.date("Y-m-d H:i:s").'] ';  
$access_file = __FILE__;
$access_line = 'line '.__LINE__;
$method = $_SERVER['REQUEST_METHOD'];
$current_url = @curPageURL();

//@session_start();
//if($_SESSION["un"]){
//   $username = $_SESSION["un"];
//}
//if($_SESSION["pw"]){
//   $password = $_SESSION["pw"];
//}

$who = $ip.' | '.$username.' '.$password.' | ';//.$computer_name.' | '.$useragent.' | ';
$what = $method.' | '.$current_url.' | ';
$when = $timestamp;
$where = $useragent.' | ';
//$where = $access_file.'['.$access_line.'] | ';
$how = $ref;

mysql_query("
        INSERT INTO `cmo`.`access_log` (
        `access_datetime` ,
        `ip` ,
        `computer_name` ,
        `username` ,
        `password` ,
        `useragent` ,
        `method` ,
        `url_from` ,
        `url_to` ,
        `status`
        )
        VALUES (
        NOW(), 
        '{$ip}', 
        '{$computer_name}' , 
        '{$username}' , 
        '".MD5($password)."' , 
        '{$useragent}' , 
        '{$method}' ,  
        '{$ref}', 
        '{$current_url}' , 
        '{$status}'
        );
"

);

// mysql_query("
//         INSERT INTO `cmo`.`access_log` (
//         `access_datetime` ,
//         `ip` ,
//         `computer_name` ,
//         `username` ,
//         `password` ,
//         `useragent` ,
//         `method` ,
//         `url_from` ,
//         `url_to` ,
//         `status`
//         )
//         VALUES (
//         NOW(), 
//         '{$ip}', 
//         '{$computer_name}' , 
//         '{$username}' , 
//         '{$password}' , 
//         '{$useragent}' , 
//         '{$method}' ,  
//         '{$ref}', 
//         '{$current_url}' , 
//         '{$status}'
//         );
// "

// );

$open = @fopen($file, "a+"); 

@fwrite($open,$when);
@fwrite($open,$who); // username & password
@fwrite($open,$where);
@fwrite($open,$what);
@fwrite($open,$how."\n");

@fclose($open); 
?>