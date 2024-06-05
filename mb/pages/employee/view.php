<?php
echo '<h1>Employee Tools</h1>';
$code = $_GET['code'];

$sql = "SELECT 
    cmo_employee.status,
cmo_employee.image,
cmo_employee.code,
cmo_employee.prefix,
cmo_employee.priority,
cmo_employee.firstname_th ,
cmo_employee.lastname_th ,
cmo_employee.firstname_en ,
cmo_employee.lastname_en ,
cmo_employee.nickname ,
cmo_employee.position ,
cmo_employee.contact_internal,
cmo_employee.email,
cmo_employee.car_1,
cmo_employee.car_2,
cmo_employee.mobile,
cmo_employee.department_id,
cmo_employee.company_id,
cmo_department.department as dept 
        FROM cmo_employee
        inner join cmo_department on cmo_employee.department_id = cmo_department.id
        WHERE cmo_employee.code = '$code'";
$row = mysql_fetch_array (mysql_query($sql));

$code = stripslashes($row['code']);
$image = stripslashes($row['image']);
$priority = stripslashes($row['priority']);
$prefix = stripslashes($row['prefix']);
$firstname_th = stripslashes($row['firstname_th']);
$lastname_th = stripslashes($row['lastname_th']);
$firstname_en = stripslashes($row['firstname_en']);
$lastname_en = stripslashes($row['lastname_en']);
$nickname = stripslashes($row['nickname']);
$department_id = stripslashes($row['department_id']);
$company_id = stripslashes($row['company_id']);
$department = stripslashes($row['dept']);
$position = stripslashes($row['position']);
$contact_internal = stripslashes($row['contact_internal']);
$priority = stripslashes($row['priority']);
$mobile = stripslashes($row['mobile']);
$email = stripslashes($row['email']);
$car_1 = stripslashes($row['car_1']);
$car_2 = stripslashes($row['car_2']);
$status = stripslashes($row['status']);

echo '<fieldset>';
echo '<legend>&nbsp;View employee&nbsp;</legend>';

if($_SESSION['emembers'] == '1' or $_SESSION['emembers'] == '2'){
    echo '<table class="nostyle">';
    echo '<tr><td style="width:100px;">Code:</td><td>'.$code.'</td></tr>';
    echo '<tr><td></td><td><img src="images/upload/employee/' .$image. '" width="200"></td></tr>';
    if($prefix=='0') echo '<tr><td>Prefix:</td><td><input name="prefix" type="radio" value="0" checked /> Mr.&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="1" /> Miss&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="2" /> Mrs.</td></tr>';
    if($prefix=='1') echo '<tr><td>Prefix:</td><td><input name="prefix" type="radio" value="0"  /> Mr.&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="1" checked /> Miss&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="2" /> Mrs.</td></tr>';
    if($prefix=='2') echo '<tr><td>Prefix:</td><td><input name="prefix" type="radio" value="0"  /> Mr.&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="1" /> Miss&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="2" checked /> Mrs.</td></tr>';
    echo '<tr><td>Firstname TH:</td><td>'.$firstname_th.'</td></tr>';
    echo '<tr><td>Lastname TH:</td><td>'.$lastname_th.'</td></tr>';
    echo '<tr><td>Firstname EN:</td><td>'.$firstname_en.'</td></tr>';
    echo '<tr><td>Lastname EN:</td><td>'.$lastname_en.'</td></tr>';
    echo '<tr><td>Nickname:</td><td>'.$nickname.'</td></tr>';
    echo '<tr><td>Department:</td><td>'.$department.'</td></tr>';
    echo '<tr><td>Position:</td><td>'.$position.'</td></tr>';
    echo '<tr><td>Internal contact:</td><td>'.$contact_internal.'</td></tr>';
    echo '<tr><td>Mobile:</td><td>'.$mobile.'</td></tr>';
    echo '<tr><td>Email:</td><td>'.$email.'</td></tr>';
    echo '<tr><td>Car id 1:</td><td>'.$car_1.'</td></tr>';
    echo '<tr><td>Car id 2:</td><td>'.$car_2.'</td></tr>';
    if($status=='0') echo '<tr><td>Status:</td><td><input name="status" type="radio" value="1" /> Actived&nbsp;&nbsp;&nbsp;<input name="status" type="radio" value="0" checked/> Inactived</td></tr>';
    if($status=='1') echo '<tr><td>Status:</td><td><input name="status" type="radio" value="1" checked /> Actived&nbsp;&nbsp;&nbsp;<input name="status" type="radio" value="0" /> Inactived</td></tr>';
    echo '<tr><td colspan="2" class="t-left">';
    echo '<input type="submit" class="input-submit" value="<< Back" onclick="history.back()" />';
    echo '<input type="submit" class="input-submit" value=" Edit  " onclick="window.location = \'main.php?menu=employee_edit&pages=employee_edit&code='.$code.'&company_id='.$company_id.'\';"/>';
    echo '</td></tr>';
    echo '</table>';
}else{
    echo '<table class="nostyle">';
    echo '<tr><td></td><td><img src="images/upload/employee/' .$image. '" width="200"></td></tr>';
    echo '<tr><td>Name :</td><td>'.$firstname_th.' '.$lastname_th.'</td></tr>';
    echo '<tr><td>Nickname:</td><td>คุณ'.$nickname.'</td></tr>';
    echo '<tr><td>Department:</td><td>'.$department.'</td></tr>';
    echo '<tr><td>Internal contact:</td><td>'.$contact_internal.'</td></tr>';
    if(($_SESSION['emembers'] == '3')){ // normal
        if(nl2br( $row['code']) !='340046' 
            && (nl2br( $row['department_id']) == '1'
            || nl2br( $row['department_id']) == '2'
            || nl2br( $row['department_id']) == '3'
            || nl2br( $row['department_id']) == '4'
            || nl2br( $row['department_id']) == '12'
            || nl2br( $row['department_id']) == '13'
            || nl2br( $row['department_id']) == '14'
            || nl2br( $row['department_id']) == '16'
            || nl2br( $row['department_id']) == '17')
            ){
            echo '<tr><td>Mobile:</td><td>'.$mobile.'</td></tr>';
        } else{

        }  
    }else{
        echo '<tr><td>Mobile:</td><td>'.$mobile.'</td></tr>';
    }
    echo '<tr><td>Email:</td><td>'.$email.'</td></tr>';
    echo '<tr><td>Car id 1:</td><td>'.$car_1.'</td></tr>';
    echo '<tr><td>Car id 2:</td><td>'.$car_2.'</td></tr>';
    echo '<tr><td colspan="2" class="t-left">';
    echo '<input type="submit" class="input-submit" value="<< Back" onclick="history.back()" />';
    if($_SESSION['emembers'] == '1' || $_SESSION['emembers'] == '2'){
        echo '<input type="submit" class="input-submit" value=" Edit  " onclick="window.location = \'main.php?menu=employee_edit&pages=employee_edit&code='.$code.'&company_id='.$company_id.'\';"/>';
    }
    echo '</td></tr>';
    echo '</table>';
}

echo '</fieldset>';
?>
