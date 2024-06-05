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

//$sql = "
//select *
//from cmo_employee 
//where department = 'CME 1'";
//
//$result = mysql_query("$sql") or trigger_error(mysql_error()); 
//while($row = mysql_fetch_assoc($result)){ 
//    echo $row[eid].'-'.$row[did].'<br/>';
    mysql_query("
        UPDATE cmo_employee
        SET department_id=6
        WHERE department='CME 1'
        ");
//}

?>
