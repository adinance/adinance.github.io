<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$link = mysql_connect('localhost', 'root', 'Develop');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('cmo') ) {
    die ('Can\'t use foo : ' . mysql_error());
}

mysql_query('SET NAMES "utf8"') or die('Can\'t set names : '.mysql_error());

$sql = "
select *
from client_temp limit 1000,2000";

$result = mysql_query("$sql") or trigger_error(mysql_error()); 
$i=0;
while($row = mysql_fetch_assoc($result)){
    $i++;
    $address = '';
    if($row[CNT_TOWER]!='' && trim($row[CNT_TOWER])!='-') $address = $address.$row[CNT_TOWER].' ';
    if($row[CNT_ADDRESSNO]!='' && trim($row[CNT_ADDRESSNO])!='-') $address = $address.$row[CNT_ADDRESSNO].' ';
    if($row[CNT_MOO]!='' && trim($row[CNT_MOO])!='-') $address = $address.$row[CNT_MOO].' ';
    if($row[CNT_SOI]!='' && trim($row[CNT_SOI])!='-') $address = $address.$row[CNT_SOI].' ';
    if($row[CNT_ROAD]!='' && trim($row[CNT_ROAD])!='-') $address = $address.$row[CNT_ROAD].' ';
    if($row[CNT_SUBDISTRICT]!='' && trim($row[CNT_SUBDISTRICT])!='-') $address = $address.$row[CNT_SUBDISTRICT].' ';
    if($row[CNT_DISTRICT]!='' && trim($row[CNT_DISTRICT])!='-') $address = $address.$row[CNT_DISTRICT].' ';
    
    echo $i.'.'.$row[CNT_CODE].'-'.$address.'<br/>';
    $address = stripslashes($address);
    mysql_query("
        UPDATE client_temp
        SET CNT_ADDRESS= '$address'
        WHERE CNT_CODE='$row[CNT_CODE]'
        ");
}
//mysql_affected_rows();

?>
