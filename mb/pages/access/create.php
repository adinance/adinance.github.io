<?php
echo '<h1>Access Tools</h1>';
//echo '<h3 class="tit">e-Documents Management > Outbound Letter</h3>';
$username = stripslashes($_POST['username']);
$description = stripslashes($_POST['description']);
$department_id = stripslashes($_POST['department_id']);
$searchStatus = stripslashes($_POST['status']);
$configs = stripslashes($_POST['config']);
$efa = stripslashes($_POST['efa']);
$crm = stripslashes($_POST['crm']);

if(isset($_POST['btnSubmit'])=='Create'){
    foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); }
    $row = mysql_fetch_array ( 
        mysql_query("
            SELECT * 
            FROM `cmo_access`  
            WHERE username = '$_POST[username]' "
        )
    );
    
    if(stripslashes($row['username'])==$_POST['username']){
        echo '
            <script language="JavaScript">
            alert("Duplicate username ['.$_POST['username'].'], Pls. Try again!");
            </script>';
    }else{
        $sql = "INSERT INTO `cmo_access` 
        ( 
        `username` ,  
        `password` ,  
        `description` ,  
        `status` ,  
        `employee_code` ,  
        `elib` ,  
        `efa` ,  
        `efm` , 
        `crm` , 
        `emembers`  
        ) 
        VALUES(  
        '{$_POST['username']}' ,  
        '{$_POST['password']}' ,  
        '{$_POST['description']}' ,  
        '{$_POST['status']}' ,  
        '{$_POST['employee_code']}' ,  
        '0' ,  
        '{$_POST['efa']}' ,  
        '0' ,
        '{$_POST['crm']}' , 
        '{$_POST['emembers']}'  
        ) "; 
        mysql_query($sql) or die(mysql_error()); 
        echo '
        <script language="JavaScript">
        alert("Create successful!");
        window.location="main.php?menu=access_list&pages=access_list";
        </script>';
    }
}

?>
<form name="myform" id="myform" method="post" action="" enctype="multipart/form-data" >
<fieldset>
    <legend>&nbsp;Create account&nbsp;</legend>
    <table class="nostyle">
        <tr><td style="width:300px;">Username:</td><td><input type="text" size="45" name="username" id="username" class="input-text" value="<?php echo $username ; ?>" /><font color="red" id="myform_username_errorloc"></font></td></tr>
        <tr><td class="va-top">Description:</td><td><textarea cols="42" rows="1" name="description" id="description" class="input-text"><?php echo $description;?></textarea><font color="red" id="myform_description_errorloc"></font></td></tr>
        <tr><td>Employee:</td><td><?php include('pages/select-cmo-employee-code.php');?></td></tr>
        <tr><td>Service CRM:</td><td><?php include('pages/select-access-level-crm.php');?></td></tr>
        <tr><td>Service Document Tracking:</td><td><?php include('pages/select-efa-access-id.php');?></td></tr>
        <tr><td>Service Members:</td><td><?php include('pages/select-emembers-access-id.php');?></td></tr>
        <tr>
            <td>Status:</td>
            <td>
                <label><input name="status" type="radio" value="1" <?php if($searchStatus=='1' || $searchStatus==''){ echo ' checked ';} ?> /> Actived</label> &nbsp;
                <label><input name="status" type="radio" value="0" <?php if($searchStatus=='0'){ echo ' checked ';} ?> /> Inactived</label> &nbsp;
            </td>
        </tr>
        <tr><td colspan="2" class="t-right"><input type="submit" name="btnSubmit" class="input-submit" value="Create" /></td></tr>
    </table>
</fieldset>
</form>

<script language="JavaScript" type="text/javascript" xml:space="preserve">
var frmvalidator  = new Validator("myform");
frmvalidator.EnableOnPageErrorDisplay();
frmvalidator.EnableMsgsTogether();
frmvalidator.addValidation("username","req"," *");
//frmvalidator.addValidation("description","req"," *");
</script>
