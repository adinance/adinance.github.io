<?php
echo '<h1>Access Tools</h1>';
//echo '<h3 class="tit">e-Documents Management > Outbound Letter</h3>';
$id = (int) $_GET['id'];

if(isset($_POST['btnSubmit'])=='Save'){
    foreach($_POST AS $key => $value) { 
        $_POST[$key] = mysql_real_escape_string($value); 
    } 
    // $sql = "
    // UPDATE `cmo_access` SET  
    // `status`        =  '{$_POST['status']}' ,
    // `username`      =  '{$_POST['username']}' ,  
    // `description`   =  '{$_POST['description']}' ,  
    // `elib`          =  '0' ,  
    // `efa`           =  '{$_POST['efa']}' ,  
    // `efm`           =  '0' ,
    // `crm`           =  '{$_POST['crm']}' ,
    // `emembers`      =  '{$_POST['emembers']}'   
    // WHERE `id` = '$id' "; 

    $sql = "
    UPDATE `cmo_access` SET  
    `status`        =  '{$_POST['status']}' ,
    `username`      =  '{$_POST['username']}' ,  
    `description`   =  '{$_POST['description']}' ,  
    `elib`          =  '0' ,  
    `efa`           =  '0' ,  
    `efm`           =  '0' ,
    `crm`           =  '0' ,
    `emembers`      =  '{$_POST['emembers']}'   
    WHERE `id` = '$id' "; 
    mysql_query($sql) or die(mysql_error()); 
     echo '
        <script language="JavaScript">
        alert("Edit successful!");
        </script>';
}

$row = mysql_fetch_array ( 
            mysql_query("
                    SELECT *, cmo_access.description as des 
                    FROM `cmo_access` 
                    inner join `cmo_employee` on cmo_access.employee_code = cmo_employee.code
                    WHERE cmo_access.id = '$id' "
            )
        );

$username = stripslashes($row['username']);
$nickname = stripslashes($row['nickname']);
$description = stripslashes($row['des']);
$department = stripslashes($row['department']);
$searchStatus = stripslashes($row['status']);
$efa = stripslashes($row['efa']);
$emembers = stripslashes($row['emembers']);
$crm = stripslashes($row['crm']);
//$configs = stripslashes($row['config']);
//$elib = stripslashes($row['elib']);
//$efm = stripslashes($row['efm']);
//$emembers = stripslashes($row['emembers']);

?>
<form name="myform" id="myform" method="post" action="" enctype="multipart/form-data" >
<fieldset>
    <legend>&nbsp;Edit account&nbsp;</legend>
    <table class="nostyle">
        <tr><td style="width:300px;">Username:</td><td><input type="text" size="45" name="username" id="username" class="input-text" value="<?php echo $username ; ?>" /><font color="red" id="myform_username_errorloc"></font></td></tr>
        <tr><td>Nickname:</td><td><?php echo $nickname ; ?></td></tr>
        <tr><td>Department:</td><td><?php echo $department ; ?></td></tr>
        <tr><td class="va-top">Description:</td><td><textarea cols="42" rows="3" name="description" id="description" class="input-text"><?php echo $description;?></textarea><font color="red" id="myform_description_errorloc"></font></td></tr>
        <tr><td>Service CRM:</td><td><?php include('pages/select-access-level-crm.php');?></td></tr>
       <!-- <tr><td>Service Document Tracking:</td><td><?php // include('pages/select-efa-access-id.php');?></td></tr>
        <tr><td>Service Members:</td><td><?php // include('pages/select-emembers-access-id.php');?></td></tr> -->
        <tr>
            <td>Status:</td>
            <td>
                <label><input name="status" type="radio" value="1" <?php if($searchStatus=='1'){ echo ' checked ';} ?> /> Actived</label> &nbsp;
                <label><input name="status" type="radio" value="0" <?php if($searchStatus=='0'){ echo ' checked ';} ?> /> Inactived</label> &nbsp;
            </td>
        </tr>
        <tr><td colspan="2" class="t-left"><input type="button" class="input-submit" value="<< Back" onclick="history.back()" /><input type="submit" name="btnSubmit" class="input-submit" value="Save" /></td></tr>
    </table>
</fieldset>
</form>

<script language="JavaScript" type="text/javascript" xml:space="preserve">
var frmvalidator  = new Validator("myform");
frmvalidator.EnableOnPageErrorDisplay();
frmvalidator.EnableMsgsTogether();
frmvalidator.addValidation("username","req"," *");
</script>