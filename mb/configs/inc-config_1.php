<?php

// session
session_start();

// menu
$menu = $_REQUEST['menu'];
$pages = $_REQUEST['pages'];

// LDAP
$server = "192.168.1.1"; //dc1-nu
$ou = 'ou=CMO-Staff';
$dc = 'dc=cm,dc=co,dc=th';
$attribute = 'sAMAccountName';

// current url
$currentUrl = $_SERVER['REQUEST_URI'];

// mysql
$link = mysql_connect('localhost', 'root', 'Develop');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('cmo') ) {
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

?>

<?php //include('debug.php'); ?>


