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
select cmo_employee.id as eid , cmo_department.id as did
from cmo_department 
inner join cmo_employee on cmo_employee.department = cmo_department.department";

$result = mysql_query("$sql") or trigger_error(mysql_error()); 
while($row = mysql_fetch_assoc($result)){ 
    echo $row[eid].'-'.$row[did].'<br/>';
    mysql_query("
        UPDATE cmo_employee
        SET department_id=$row[did]
        WHERE id=$row[eid]
        ");
}

?>
