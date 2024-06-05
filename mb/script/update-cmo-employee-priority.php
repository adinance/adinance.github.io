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
select * , emember_employee.priority as p1
from 
emember_employee inner join cmo_employee on (cmo_employee.firstname_en = emember_employee.firstname_en and cmo_employee.lastname_en = emember_employee.lastname_en ) 
order by emember_employee.firstname_en
";

$result = mysql_query("$sql") or trigger_error(mysql_error()); 
$i=0;
while($row = mysql_fetch_assoc($result)){
    $i++;
    echo $i.'.'.$row[firstname_en].'-'.$row[p1].'<br/>';
    mysql_query("
        UPDATE cmo_employee
        SET priority= '$row[p1]' 
        WHERE cmo_employee.firstname_en = '$row[firstname_en]' and cmo_employee.lastname_en = '$row[lastname_en]'
        ");
}
//mysql_affected_rows();

?>
