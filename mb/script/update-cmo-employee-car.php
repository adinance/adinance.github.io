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
select * , emember_employee.car_1 as c1, emember_employee.car_2 as c2
from 
emember_employee inner join cmo_employee on (cmo_employee.firstname_en = emember_employee.firstname_en and cmo_employee.lastname_en = emember_employee.lastname_en ) 
where emember_employee.car_1 != '' or emember_employee.car_2 != '' or emember_employee.car_1 != NULL or emember_employee.car_2 != NULL
order by emember_employee.firstname_en
";

$result = mysql_query("$sql") or trigger_error(mysql_error()); 
$i=0;
while($row = mysql_fetch_assoc($result)){
    $i++;
    echo $i.'.'.$row[firstname_en].'-'.$row[car_1].'-'.$row[car_2].'<br/>';
    $address = stripslashes($address);
    mysql_query("
        UPDATE cmo_employee
        SET car_1= '$row[c1]' , car_2= '$row[c2]' 
        WHERE cmo_employee.firstname_en = '$row[firstname_en]' and cmo_employee.lastname_en = '$row[lastname_en]'
        ");
}
//mysql_affected_rows();

?>
