<?php
$ebits = ini_get('error_reporting');
error_reporting($ebits ^ E_NOTICE);

// session
session_start();

// menu
$menu = $_REQUEST['menu'];
$pages = $_REQUEST['pages'];

// LDAP
$server = "172.16.100.3"; //dc1-nu
$ou = 'ou=CMO-Staff';
$dc = 'dc=cm,dc=co,dc=th';
$attribute = 'sAMAccountName';

// current url
$currentUrl = $_SERVER['REQUEST_URI'];

// mysql
// $link = mysql_connect('localhost', 'root', 'DEV#phpmyadmin');
$link = mysql_connect('147.50.136.211', 'api', '6Bo$u0x2');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('api') ) {
    die ('Can\'t use foo : ' . mysql_error());
}

mysql_query('SET NAMES "utf8"') or die('Can\'t set names : '.mysql_error());

// paging
include('functions/utilities.php');

// checkbox
$chkUsername = '';
if(isset($_REQUEST['chkUsername'])) $chkUsername = $_REQUEST['chkUsername'];

$chkNickname = '';
if(isset($_REQUEST['chkNickname'])) $chkNickname = $_REQUEST['chkNickname'];

$chkDepartment = '';
if(isset($_REQUEST['chkDepartment'])) $chkDepartment = $_REQUEST['chkDepartment'];

$chkRoles = '';
if(isset($_REQUEST['chkRoles'])) $chkRoles = $_REQUEST['chkRoles'];

$chkStatus = '';
if(isset($_REQUEST['chkStatus'])) $chkStatus = $_REQUEST['chkStatus'];

function getExtension($str) {
    $i = strrpos($str,".");
    if (!$i) { return ""; }

    $l = strlen($str) - $i;
    $ext = substr($str,$i+1,$l);
    return $ext;
}

function imagetranstowhite($trans) {
    ini_set('memory_limit', '256M');
    // Create a new true color image with the same size
    $w = imagesx($trans);
    $h = imagesy($trans);
    $white = imagecreatetruecolor($w, $h);

    // Fill the new image with white background
    $bg = imagecolorallocate($white, 255, 255, 255);
    imagefill($white, 0, 0, $bg);

    // Copy original transparent image onto the new image
    imagecopy($white, $trans, 0, 0, 0, 0, $w, $h);
    return $white;
}

?>

<?php //include('debug.php'); ?>
