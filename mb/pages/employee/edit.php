<?php
echo '<h1>Employee Tools</h1>';
$code       = $_GET['code'];
$company_id = $_GET['company_id'];


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
            cmo_department.department as dept ,
            cmo_access.employee_code
        FROM cmo_employee
        inner join cmo_department on cmo_employee.department_id = cmo_department.id
        inner join cmo_access on cmo_access.employee_code = cmo_employee.code
        WHERE cmo_employee.code = '$code'";
$row = mysql_fetch_array (mysql_query($sql));

$tempcode = stripslashes($row['employee_code']);

// var_dump($code);
// echo '<br>';
// var_dump($tempcode);

if($tempcode == $code){
    //echo 'y';
}else{
    $usernameTemp = stripslashes($row['email']);
    $usernameTemp = substr_replace ($usernameTemp, "", strpos($email,'@') );
    $sql2 = "INSERT INTO `cmo_access` 
            (
            `id`, 
            `username`, 
            `description`, 
            `status`, 
            `crm`, 
            `emembers`, 
            `employee_code`
            ) 
            VALUES 
            (
            NULL, 
            '{$usernameTemp}', 
            'create by hr', 
            '1', 
            '7', 
            '3', 
            '{$code}'
            );
            "; 
        mysql_query($sql2) or die(mysql_error());
}



if (isset($_POST['btnSubmit']) == 'Save') {
    $usernameTemp = stripslashes($_POST['email']);
    $usernameTemp = substr_replace($usernameTemp, "", strpos(stripslashes($_POST['email']), '@'));
    foreach ($_POST AS $key => $value) {
        $_POST[$key] = mysql_real_escape_string($value);
    }
    $image = $_FILES["image"]["name"];
    if ($image != '') {
        $originalFilename = '';
        $newFilename      = '';
        if (trim($_FILES["image"]["tmp_name"]) != "") {
            $images    = $_FILES["image"]["tmp_name"];
            $filename  = stripslashes($_FILES["image"]["name"]);
            $extension = getExtension($filename);
            $extension = strtolower($extension);

            $originalFilename = $code . '-' . $_POST['firstname_th'] . '.' . $extension;
            $newFilename      = $code . '.' . $extension;

            if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
                echo '<script language="JavaScript">alert("*.jpeg,*.jpg,*.gif,*.png only!");"</script>';
            } else {
                $width          = 200;
                $size           = GetimageSize($images);
                $height         = round($width * $size[1] / $size[0]);
                $photoX         = '';
                $photoY         = '';
                $original_image = '';
                @copy($_FILES["image"]["tmp_name"], "images/upload/employee/" . $originalFilename);

                if ($extension == "jpg" || $extension == "jpeg") {
                    $original_image = imagecreatefromjpeg($images);
                } else if ($extension == "png") {
                    $original_image = imagecreatefrompng($images);
                } else {
                    $original_image = imagecreatefromgif($images);
                }

                $original_image = imagetranstowhite($original_image);
                $photoX         = imagesx($original_image);
                $photoY         = imagesy($original_image);
                $new_image      = imagecreatetruecolor($width, $height);
                imagecopyresampled($new_image, $original_image, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
                if ($extension == "jpg" || $extension == "jpeg") {
                    imagejpeg($new_image, "images/upload/employee/" . $newFilename);
                } else if ($extension == "png") {
                    imagepng($new_image, "images/upload/employee/" . $newFilename);
                } else {
                    imagegif($new_image, "images/upload/employee/" . $newFilename);
                }
                imagedestroy($original_image);
                imagedestroy($new_image);
            }
        }
        $sql = "
            UPDATE `cmo_employee` SET
            `image`  = '{$newFilename}' ,
            `priority` = '{$_POST['priority']}' ,
            `prefix`  = '{$_POST['prefix']}' ,
            `firstname_th`  = '{$_POST['firstname_th']}' ,
            `lastname_th`  = '{$_POST['lastname_th']}' ,
            `firstname_en`  = '{$_POST['firstname_en']}' ,
            `lastname_en`  = '{$_POST['lastname_en']}' ,
            `nickname`  = '{$_POST['nickname']}' ,
            `department_id`  = '{$_POST['department_id']}' ,
            `position`  = '{$_POST['position']}' ,
            `contact_internal`  = '{$_POST['contact_internal']}' ,
            `mobile`  = '{$_POST['mobile']}' ,
            `email`  = '{$_POST['email']}' ,
            `car_1`  = '{$_POST['car_1']}' ,
            `car_2`  = '{$_POST['car_2']}' ,
            `status`  = '{$_POST['status']}' ,
            `update_by`  = '{$_SESSION[configs_username]}' ,
            `update_datetime`  = NOW()
            WHERE `code` = '$code' ";
        mysql_query($sql) or die(mysql_error());
    } else {
        $sql = "
            UPDATE `cmo_employee` SET
            `priority` = '{$_POST['priority']}' ,
            `prefix`  = '{$_POST['prefix']}' ,
            `firstname_th`  = '{$_POST['firstname_th']}' ,
            `lastname_th`  = '{$_POST['lastname_th']}' ,
            `firstname_en`  = '{$_POST['firstname_en']}' ,
            `lastname_en`  = '{$_POST['lastname_en']}' ,
            `nickname`  = '{$_POST['nickname']}' ,
            `department_id`  = '{$_POST['department_id']}' ,
            `position`  = '{$_POST['position']}' ,
            `contact_internal`  = '{$_POST['contact_internal']}' ,
            `mobile`  = '{$_POST['mobile']}' ,
            `email`  = '{$_POST['email']}' ,
            `car_1`  = '{$_POST['car_1']}' ,
            `car_2`  = '{$_POST['car_2']}' ,
            `status`  = '{$_POST['status']}' ,
            `update_by`  = '{$_SESSION['employee_code']}' ,
            `update_datetime`  = NOW()
            WHERE `code` = '$code' ";
        mysql_query($sql) or die(mysql_error());

    }

    $sql = "
            UPDATE `cmo_access` SET
            `emembers` = '{$_POST['emembers']}' ,
            `crm` = '{$_POST['crm']}' ,
            `crmte` = '{$_POST['crmte']}' ,
            `fs` = '{$_POST['fs']}' ,
            `update_by`  = '{$_SESSION['employee_code']}' ,
            `update_datetime`  = NOW()
            WHERE `employee_code` = '$code' ";
    mysql_query($sql) or die(mysql_error());
    echo '<script language="JavaScript">alert("Edit successful!");</script>';
}
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
            cmo_department.department as dept,
            cmo_access.emembers,
            cmo_access.crm,
            cmo_access.crmte,
            cmo_access.fs
        FROM `cmo_employee`
        inner join `cmo_department` on cmo_employee.department_id = cmo_department.id
        inner join `cmo_access` on cmo_employee.code = cmo_access.employee_code
        WHERE cmo_employee.code = '$code'";
$row = mysql_fetch_array(mysql_query($sql));

$code             = stripslashes($row['code']);
$image            = stripslashes($row['image']);
$priority         = stripslashes($row['priority']);
$prefix           = stripslashes($row['prefix']);
$firstname_th     = stripslashes($row['firstname_th']);
$lastname_th      = stripslashes($row['lastname_th']);
$firstname_en     = stripslashes($row['firstname_en']);
$lastname_en      = stripslashes($row['lastname_en']);
$nickname         = stripslashes($row['nickname']);
$department_id    = stripslashes($row['department_id']);
$position         = stripslashes($row['position']);
$contact_internal = stripslashes($row['contact_internal']);
$priority         = stripslashes($row['priority']);
$mobile           = stripslashes($row['mobile']);
$email            = stripslashes($row['email']);
$car_1            = stripslashes($row['car_1']);
$car_2            = stripslashes($row['car_2']);
$status           = stripslashes($row['status']);
$emembers           = stripslashes($row['emembers']);
$crm           = stripslashes($row['crm']);
$crmte           = stripslashes($row['crmte']);
$fs           = stripslashes($row['fs']);

//if($_SESSION['department_id']=='16' || $_SESSION['department_id']=='14'){
echo '<form name="myform" id="myform" method="post" action="" enctype="multipart/form-data" >';
echo '<fieldset>';
echo '<legend>&nbsp;Edit employee&nbsp;</legend>';
echo '<table class="nostyle">';
echo '<tr><td style="width:100px;">Code:</td><td>' . $code . '</td></tr>';
echo '<tr><td></td><td><img src="images/upload/employee/' . $image . '" width="200"></td></tr>';
echo '<tr><td>Image:</td><td><input type="file" size="18" name="image" id="image" class="input-text" value="' . $image . '" /></td></tr>';
echo '<tr><td></td><td><input type="hidden" size="27" name="priority" id="priority" class="input-text" value="' . $priority . '" /><font color="red" id="myform_priority_errorloc"></font></td></tr>';
if ($prefix == '0') {
    echo '<tr><td>Prefix:</td><td><input name="prefix" type="radio" value="0" checked /> Mr.&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="1" /> Miss&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="2" /> Mrs.</td></tr>';
}

if ($prefix == '1') {
    echo '<tr><td>Prefix:</td><td><input name="prefix" type="radio" value="0"  /> Mr.&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="1" checked /> Miss&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="2" /> Mrs.</td></tr>';
}

if ($prefix == '2') {
    echo '<tr><td>Prefix:</td><td><input name="prefix" type="radio" value="0"  /> Mr.&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="1" /> Miss&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="2" checked /> Mrs.</td></tr>';
}

echo '<tr><td>Firstname TH:</td><td><input type="text" size="27" name="firstname_th" id="firstname_th" class="input-text" value="' . $firstname_th . '" /><font color="red" id="myform_firstname_th_errorloc"></font></td></tr>';
echo '<tr><td>Lastname TH:</td><td><input type="text" size="27" name="lastname_th" id="lastname_th" class="input-text" value="' . $lastname_th . '" /><font color="red" id="myform_lastname_th_errorloc"></font></td></tr>';
echo '<tr><td>Firstname EN:</td><td><input type="text" size="27" name="firstname_en" id="firstname_en" class="input-text" value="' . $firstname_en . '" /><font color="red" id="myform_firstname_en_errorloc"></font></td></tr>';
echo '<tr><td>Lastname EN:</td><td><input type="text" size="27" name="lastname_en" id="lastname_en" class="input-text" value="' . $lastname_en . '" /><font color="red" id="myform_lastname_en_errorloc"></font></td></tr>';
echo '<tr><td>Nickname:</td><td><input type="text" size="27" name="nickname" id="nickname" class="input-text" value="' . $nickname . '" /><font color="red" id="myform_nickname_errorloc"></font></td></tr>';
echo '<tr><td>Department:</td><td>';
include 'pages/select-cmo-department-id.php';
echo '</td></tr>';
echo '<tr><td>Position:</td><td><input type="text" size="27" name="position" id="position" class="input-text" value="' . $position . '" /><font color="red" id="myform_position_errorloc"></font></td></tr>';
echo '<tr><td>Internal contact:</td><td><input type="text"   size="27" name="contact_internal" id="contact_internal" class="input-text" value="' . $contact_internal . '" /><font color="red" id="myform_contact_internal_errorloc"></font></td></tr>';
echo '<tr><td>Mobile:</td><td><input type="text" size="27" name="mobile" id="mobile" class="input-text" value="' . $mobile . '" /><font color="red" id="myform_mobile_errorloc"></font></td></tr>';
echo '<tr><td>Email:</td><td><input type="text" size="27" name="email" id="email" class="input-text" value="' . $email . '" style="text-transform: lowercase"/><font color="red" id="myform_email_errorloc"></font></td></tr>';
echo '<tr><td>Car id 1:</td><td><input type="text" size="27" name="car_1" id="car_1" class="input-text" value="' . $car_1 . '" /></td></tr>';
echo '<tr><td>Car id 2:</td><td><input type="text" size="27" name="car_2" id="car_2" class="input-text" value="' . $car_2 . '" /></td></tr>';
if ($status == '0') {
    echo '<tr><td>Status:</td><td><input name="status" type="radio" value="1" /> Actived&nbsp;&nbsp;&nbsp;<input name="status" type="radio" value="0" checked/> Inactived</td></tr>';
}

if ($status == '1') {
    echo '<tr><td>Status:</td><td><input name="status" type="radio" value="1" checked /> Actived&nbsp;&nbsp;&nbsp;<input name="status" type="radio" value="0" /> Inactived</td></tr>';
}
?>
<tr><td  colspan="2"><br><b>Permission Access</b></td><td>
<tr><td>CMO Members:</td><td>
<select name="emembers" class="input-text">
  <option value="2" <?php if($emembers==1 || $emembers==2) echo 'selected';?>>Administrator (แก้ไขข้อมูลได้)</option>
  <option value="4" <?php if($emembers==4) echo 'selected';?>>Specials (เห็นเบอร์มือถือ)</option>
  <option value="3" <?php if($emembers==3) echo 'selected';?>>Normal (ไม่เห็นเบอร์มือถือ)</option>
</select>
</td></tr>


<!-- <tr><td>CRM Muse:</td><td>
<select name="crm" class="input-text">
  <option value="7" <?php if($crm==7) echo 'selected';?>>Read Only</option>
  <option value="1" <?php if($crm==1) echo 'selected';?>>Read / Write</option>
</select>
</td></tr> -->
<!-- 
<tr><td>CRM The Eyes:</td><td>
<select name="crmte" class="input-text">
  <option value="3" <?php if($crmte==7) echo 'selected';?>>Read Only</option>
  <option value="1" <?php if($crmte==1) echo 'selected';?>>Read / Write</option>
</select>
</td></tr> -->

<tr><td>Finger Scan :</td><td>
<select name="fs" class="input-text">
  <option value="0" <?php if($fs==0) echo 'selected';?>>Inactive</option>
  <option value="1" <?php if($fs==1) echo 'selected';?>>Active</option>
</select>
</td></tr>
<td><br></td>
<?php
echo '<tr><td colspan="2" class="t-left"><input type="button" class="input-submit" value="<< Back" onclick="history.back()" /><input type="submit" name="btnSubmit" class="input-submit" value="Save" /></td></tr>';
echo '</table>';
echo '</fieldset>';
echo '</form>';
//}else{
//    echo '<form name="myform" id="myform" method="post" action="" enctype="multipart/form-data" >';
//    echo '<fieldset>';
//    echo '<legend>&nbsp;Edit employee&nbsp;</legend>';
//    echo '<table class="nostyle">';
//    echo '<tr><td style="width:100px;">Code:</td><td>'.$code.'</td></tr>';
//    echo '<tr><td></td><td><img src="images/upload/employee/' .$image. '" width="200"></td></tr>';
//    echo '<tr><td>Image:</td><td><input type="file" size="18" name="image" id="image" class="input-text" value="'.$image.'" /></td></tr>';
//    echo '<tr><td>Priority:</td><td><input type="hidden" size="27" name="priority" id="priority" class="input-text" value="'.$priority.'" /><font color="red" id="myform_priority_errorloc"></font></td></tr>';
//    if($prefix=='0') echo '<tr><td>Prefix:</td><td><input name="prefix" type="radio" value="0" checked /> Mr.&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="1" /> Miss&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="2" /> Mrs.</td></tr>';
//    if($prefix=='1') echo '<tr><td>Prefix:</td><td><input name="prefix" type="radio" value="0"  /> Mr.&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="1" checked /> Miss&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="2" /> Mrs.</td></tr>';
//    if($prefix=='2') echo '<tr><td>Prefix:</td><td><input name="prefix" type="radio" value="0"  /> Mr.&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="1" /> Miss&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="2" checked /> Mrs.</td></tr>';
//    echo '<tr><td>Firstname TH:</td><td><input type="text" size="27" name="firstname_th" id="firstname_th" class="input-text" value="'.$firstname_th.'" readonly /><font color="red" id="myform_firstname_th_errorloc"></font></td></tr>';
//    echo '<tr><td>Lastname TH:</td><td><input type="text" size="27" name="lastname_th" id="lastname_th" class="input-text" value="'.$lastname_th.'" readonly /><font color="red" id="myform_lastname_th_errorloc"></font></td></tr>';
//    echo '<tr><td>Firstname EN:</td><td><input type="text" size="27" name="firstname_en" id="firstname_en" class="input-text" value="'.$firstname_en.'" readonly /><font color="red" id="myform_firstname_en_errorloc"></font></td></tr>';
//    echo '<tr><td>Lastname EN:</td><td><input type="text" size="27" name="lastname_en" id="lastname_en" class="input-text" value="'.$lastname_en.'" readonly /><font color="red" id="myform_lastname_en_errorloc"></font></td></tr>';
//    echo '<tr><td>Nickname:</td><td><input type="text" size="27" name="nickname" id="nickname" class="input-text" value="'.$nickname.'" readonly /><font color="red" id="myform_nickname_errorloc"></font></td></tr>';
//    echo '<tr><td>Department:</td><td>';
//    include('pages/select-cmo-department-id.php');
//    echo '</td></tr>';
//    echo '<tr><td>Position:</td><td><input type="text" size="27" name="position" id="position" class="input-text" value="'.$position.'" readonly /><font color="red" id="myform_position_errorloc"></font></td></tr>';
//    echo '<tr><td>Internal contact:</td><td><input type="text"   size="27" name="contact_internal" id="contact_internal" class="input-text" value="'.$contact_internal.'" /><font color="red" id="myform_contact_internal_errorloc"></font></td></tr>';
//    echo '<tr><td>Mobile:</td><td><input type="text" size="27" name="mobile" id="mobile" class="input-text" value="'.$mobile.'" /><font color="red" id="myform_mobile_errorloc"></font></td></tr>';
//    echo '<tr><td>Email:</td><td><input type="text" size="27" name="email" id="email" class="input-text" value="'.$email.'" readonly /><font color="red" id="myform_email_errorloc"></font></td></tr>';
//    echo '<tr><td>Car id 1:</td><td><input type="text" size="27" name="car_1" id="car_1" class="input-text" value="'.$car_1.'" /></td></tr>';
//    echo '<tr><td>Car id 2:</td><td><input type="text" size="27" name="car_2" id="car_2" class="input-text" value="'.$car_2.'" /></td></tr>';
//    if($status=='0') echo '<tr><td>Status:</td><td><input name="status" type="radio" value="1" /> Actived&nbsp;&nbsp;&nbsp;<input name="status" type="radio" value="0" checked/> Inactived</td></tr>';
//    if($status=='1') echo '<tr><td>Status:</td><td><input name="status" type="radio" value="1" checked /> Actived&nbsp;&nbsp;&nbsp;<input name="status" type="radio" value="0" /> Inactived</td></tr>';
//    echo '<tr><td colspan="2" class="t-left"><input type="button" class="input-submit" value="<< Back" onclick="history.back()" /><input type="submit" name="btnSubmit" class="input-submit" value="Save" /></td></tr>';
//    echo '</table>';
//    echo '</fieldset>';
//    echo '</form>';
//}
 ?>
<script language="JavaScript" type="text/javascript" xml:space="preserve">
var frmvalidator  = new Validator("myform");
frmvalidator.EnableOnPageErrorDisplay();
frmvalidator.EnableMsgsTogether();
frmvalidator.addValidation("code","req"," *");
//frmvalidator.addValidation("code","numeric"," * Number only");
//frmvalidator.addValidation("code","maxlen=6"," * 6 characters");
//frmvalidator.addValidation("code","minlen=6"," * 6 characters");
frmvalidator.addValidation("priority","req"," *");
//frmvalidator.addValidation("priority","numeric"," *Number only");
//frmvalidator.addValidation("priority","maxlen=2"," * 2 characters");
frmvalidator.addValidation("firstname_th","req"," *");
frmvalidator.addValidation("lastname_th","req"," *");
frmvalidator.addValidation("firstname_en","req"," *");
frmvalidator.addValidation("lastname_en","req"," *");
frmvalidator.addValidation("nickname","req"," *");
frmvalidator.addValidation("position","req"," *");
//frmvalidator.addValidation("contact_internal","numeric"," * Number only");
//frmvalidator.addValidation("mobile","numeric"," * Number only");
//frmvalidator.addValidation("mobile","minlen=10"," * 10 characters");
//frmvalidator.addValidation("mobile","maxlen=10"," * 10 characters");
//frmvalidator.addValidation("email","email"," * Invalid email format");
frmvalidator.addValidation("email","req"," *");
</script>
