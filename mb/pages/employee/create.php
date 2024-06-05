<?php
echo '<h1>Employee Tools</h1>';

$code = stripslashes($_POST['code']);
$image = $_FILES["image"]["name"];
$priority = stripslashes($_POST['priority']);
$firstname_th = stripslashes($_POST['firstname_th']);
$lastname_th = stripslashes($_POST['lastname_th']);
$firstname_en = stripslashes($_POST['firstname_en']);
$lastname_en = stripslashes($_POST['lastname_en']);
$nickname = stripslashes($_POST['nickname']);
$position = stripslashes($_POST['position']);
$contact_internal = stripslashes($_POST['contact_internal']);
$mobile = stripslashes($_POST['mobile']);
$email = stripslashes($_POST['email']);
$usernameTemp1 = stripslashes($_POST['email']);
$usernameTemp = substr_replace($usernameTemp1, "", strpos($email,'@'));
//$usernameTemp = strtolower($usernameTemp);
$car_1 = stripslashes($_POST['car_1']);
$car_2 = stripslashes($_POST['car_2']);
$company_id = stripslashes($_REQUEST['company_id']);

echo $image;
if(isset($_POST['btnSubmit'])=='Create'){
    foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); }
    $row = mysql_fetch_array ( mysql_query(" SELECT * FROM `cmo_employee` WHERE code = '$_POST[code]' " )  );
    
    if((stripslashes($row['code'])==$_POST['code']) && ($row['status']==1)){
        echo '
            <script language="JavaScript">
            alert("Duplicate code ['.$_POST['code'].'], Pls. Try again!");
            </script>';
    }else{
        $originalFilename = '';
        $newFilename = '';
        if(trim($_FILES["image"]["tmp_name"]) != ""){
            $images = $_FILES["image"]["tmp_name"];
            $filename = stripslashes($_FILES["image"]["name"]);
            $extension = getExtension($filename);
            $extension = strtolower($extension);

            $originalFilename = $code.'-'.$firstname_th.'.'.$extension;
            $newFilename = $code.'.'.$extension;

            if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
                echo '<script language="JavaScript">alert("*.jpeg,*.jpg,*.gif,*.png only!");"</script>';
            }else{
                $width=200; 
                $size=GetimageSize($images);
                $height=round($width*$size[1]/$size[0]);
                $photoX='';
                $photoY='';
                $original_image = '';
//                copy($_FILES["image"]["tmp_name"],"images/upload/employee/".$originalFilename);
//                $original_image = imagecreatefrompng($images);
//                $original_image = imagetranstowhite($original_image);
//                $photoX = imagesx($original_image);
//                $photoY = imagesy($original_image);
//                $new_image = imagecreatetruecolor($width, $height);
//                imagecopyresampled($new_image, $original_image, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
//                imagepng($new_image,"images/upload/employee/".$newFilename);
//                imagedestroy($original_image);
//                imagedestroy($new_image);
                
                copy($_FILES["image"]["tmp_name"],"images/upload/employee/".$originalFilename);
                
                if($extension=="jpg" || $extension=="jpeg" ){
                    $original_image = imagecreatefromjpeg($images);
                }else if($extension=="png"){
                    $original_image = imagecreatefrompng($images);
                }else{
                    $original_image = imagecreatefromgif($images);
                }
                
                $original_image = imagetranstowhite($original_image);
                $photoX = imagesx($original_image);
                $photoY = imagesy($original_image);
                $new_image = imagecreatetruecolor($width, $height);
                imagecopyresampled($new_image, $original_image, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
                
                if($extension=="jpg" || $extension=="jpeg" ){
                    imagejpeg($new_image,"images/upload/employee/".$newFilename);
                }else if($extension=="png"){
                    imagepng($new_image,"images/upload/employee/".$newFilename);
                }else{
                    imagegif($new_image,"images/upload/employee/".$newFilename);
                }
                imagedestroy($original_image);
                imagedestroy($new_image);
            }
        }
        
        $sql = "INSERT INTO `cmo_employee` 
        ( 
        `company_id`, 
        `code`, 
        `image`, 
        `priority`, 
        `prefix`, 
        `firstname_th`, 
        `lastname_th`, 
        `firstname_en`, 
        `lastname_en`, 
        `nickname`, 
        `department_id`, 
        `position`, 
        `contact_internal`, 
        `mobile`, 
        `email`, 
        `car_1`, 
        `car_2`, 
        `status`, 
        `create_by`, 
        `create_datetime`
        ) 
        VALUES(  
        '{$_POST['company_id']}' ,  
        '{$_POST['code']}' ,  
        '{$newFilename}' ,  
        '{$_POST['priority']}' ,  
        '{$_POST['prefix']}' ,  
        '{$_POST['firstname_th']}' ,
        '{$_POST['lastname_th']}' ,
        '{$_POST['firstname_en']}' ,
        '{$_POST['lastname_en']}' ,
        '{$_POST['nickname']}' ,
        '{$_POST['department_id']}' ,
        '{$_POST['position']}' ,
        '{$_POST['contact_internal']}' ,
        '{$_POST['mobile']}' ,
        '{$_POST['email']}' ,
        '{$_POST['car_1']}' ,
        '{$_POST['car_2']}' ,
        '{$_POST['status']}' ,
        '{$_SESSION[configs_username]}' ,
        NOW()
        ); "; 
        mysql_query($sql) or die(mysql_error()); 
        
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
            'create by : {$_SESSION[configs_username]}', 
            '1', 
            '7', 
            '3', 
            '{$_POST['code']}'
            );
            "; 
        mysql_query($sql2) or die(mysql_error());
        
        echo '
        <script language="JavaScript">
        alert("Create successful!");
        window.location="main.php?menu=employee_list&pages=employee_list&company_id="'.$company_id.';
        </script>';
    }
}

echo '<form name="myform" id="myform" method="post" action="" enctype="multipart/form-data" >';
echo '<fieldset>';
echo '<legend>&nbsp;Create employee&nbsp;</legend>';
echo '<table class="nostyle">';
echo '<input type="hidden" name="company_id" value="'.$company_id.'">';
echo '<tr><td style="width:100px;">Code:</td><td><input type="text" size="27" name="code" id="code" class="input-text" value="'.$code.'" /><font color="red" id="myform_code_errorloc"></font></td></tr>';
echo '<tr><td>Photo:</td><td><input type="file" size="18" name="image" id="image" class="input-text" value="'.$image.'" /></td></tr>';
echo '<tr><td></td><td><input type="hidden" size="27" name="priority" id="priority" class="input-text" value="0" /></td></tr>';
// echo '<tr><td>Priority:</td><td><input type="text" size="27" name="priority" id="priority" class="input-text" value="0" /><font color="red" id="myform_priority_errorloc"></font></td></tr>';
echo '<tr><td>Prefix:</td><td><input name="prefix" type="radio" value="0" checked /> Mr.&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="1" /> Miss&nbsp;&nbsp;&nbsp;<input name="prefix" type="radio" value="2" /> Mrs.</td></tr>';
echo '<tr><td>Firstname TH:</td><td><input type="text" size="27" name="firstname_th" id="firstname_th" class="input-text" value="'.$firstname_th.'" /><font color="red" id="myform_firstname_th_errorloc"></font></td></tr>';
echo '<tr><td>Lastname TH:</td><td><input type="text" size="27" name="lastname_th" id="lastname_th" class="input-text" value="'.$lastname_th.'" /><font color="red" id="myform_lastname_th_errorloc"></font></td></tr>';
echo '<tr><td>Firstname EN:</td><td><input type="text" size="27" name="firstname_en" id="firstname_en" class="input-text" value="'.$firstname_en.'" /><font color="red" id="myform_firstname_en_errorloc"></font></td></tr>';
echo '<tr><td>Lastname EN:</td><td><input type="text" size="27" name="lastname_en" id="lastname_en" class="input-text" value="'.$lastname_en.'" /><font color="red" id="myform_lastname_en_errorloc"></font></td></tr>';
echo '<tr><td>Nickname (ไทย):</td><td><input type="text" size="27" name="nickname" id="nickname" class="input-text" value="'.$nickname.'" /> <font color="red" id="myform_nickname_errorloc"></font></td></tr>';
echo '<tr><td>Department:</td><td>';
include('pages/select-cmo-department-id.php');
echo '</td></tr>';
echo '<tr><td>Position:</td><td><input type="text" size="27" name="position" id="position" class="input-text" value="'.$position.'" /><font color="red" id="myform_position_errorloc"></font></td></tr>';
echo '<tr><td>Internal contact:</td><td><input type="text"   size="27" name="contact_internal" id="contact_internal" class="input-text" value="'.$contact_internal.'" /><font color="red" id="myform_contact_internal_errorloc"></font></td></tr>';
echo '<tr><td>Mobile:</td><td><input type="text" size="27" name="mobile" id="mobile" class="input-text" value="'.$mobile.'" /><font color="red" id="myform_mobile_errorloc"></font></td></tr>';
echo '<tr><td>Email:</td><td><input type="text" size="27" name="email" id="email" class="input-text" value="'.$email.'" style="text-transform: lowercase" /><font color="red" id="myform_email_errorloc"></font></td></tr>';
echo '<tr><td>Car id 1:</td><td><input type="text" size="27" name="car_1" id="car_1" class="input-text" value="'.$car_1.'" /></td></tr>';
echo '<tr><td>Car id 2:</td><td><input type="text" size="27" name="car_2" id="car_2" class="input-text" value="'.$car_2.'" /></td></tr>';
// echo '<tr><td>Status:</td><td><input name="status" type="radio" value="1" checked /> Actived&nbsp;&nbsp;&nbsp;<input name="status" type="radio" value="0" /> Inactived</td></tr>';
echo '<tr><td>Status:</td><td><input name="status" type="radio" value="1" checked /> Actived&nbsp;&nbsp;&nbsp;</tr>';
echo '<tr><td colspan="2" class="t-right"><input type="submit" name="btnSubmit" class="input-submit" value="Create" /></td></tr>';

echo '</table>';
echo '</fieldset>';
echo '</form>';
?>
<script language="JavaScript" type="text/javascript" xml:space="preserve">
var frmvalidator  = new Validator("myform");
frmvalidator.EnableOnPageErrorDisplay();
frmvalidator.EnableMsgsTogether();
frmvalidator.addValidation("code","req"," *");
//frmvalidator.addValidation("code","numeric"," * Number only");
//frmvalidator.addValidation("code","maxlen=6"," * 6 characters");
//frmvalidator.addValidation("code","minlen=6"," * 6 characters");
//frmvalidator.addValidation("priority","req"," *");
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
