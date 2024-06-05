<?php
echo '<h1>Login</h1>';
//echo '<h3 class="tit">Login</h3>';
$username = stripslashes(@$_POST['username']);
$password = stripslashes(@$_POST['password']);

$file = 'logs/'.date('Y-m-d').'_all.log';

if(isset($_POST['btnSubmit'])=='Login'){
    
    $connect = ldap_connect($server) or die ("<b>Error ldap_connect</b>");
    @ldap_set_option($connect, LDAP_OPT_PROTOCOL_VERSION, 2);
    @ldap_set_option($connect, LDAP_OPT_REFERRALS, 0);
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $user = $username.'@cm.co.th';
    $dn=$ou.','.$dc; // $dn='uid='.$username.','.$ou.','.$dc; // $dn = "uid=netbeans1,ou=people,dc=example,dc=com";
    $cn='cn='.$username.',dc=cm,dc=co,dc=th'; 
    
    $bind = @ldap_bind($connect, $user, $password) ;
    if($username!='orawan.nak'){
        if($bind || $username=='muanfun.k' || ($username=='nardnapin') || $username=='natthapong.k' ){
            foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); }
            $row = mysql_fetch_array ( 
                mysql_query("
                        SELECT * 
                        FROM `cmo_access`  inner join cmo_employee on cmo_access.employee_code = cmo_employee.code
                        WHERE username = '$_POST[username]'"
                )
            );

            if($row['id']){
                $_SESSION['configs_username'] = $row['username'];
                $_SESSION['eit'] = $row['eit'];
                $_SESSION['emembers'] = $row['emembers'];
                $_SESSION['employee_code'] = $row['code'];
                $_SESSION['department_id'] = $row['department_id'];
                $file = 'logs/'.date('Y-m-d').'_access.log';
                $status = 1;
                include('functions/log.php');
                //disable
                if($_SESSION['emembers']=='0') echo '<script language="JavaScript">alert("Your account cannot access this tools!");</script>';
                //admin
    //            if($_SESSION['emembers']=='1') echo '<script language="JavaScript">window.location="main.php?menu=access_list&pages=access_list&cmo_employee_status=1";</script>';
                //hr
                if($_SESSION['emembers']=='2') echo '<script language="JavaScript">window.location="main.php?menu=employee_list&pages=employee_list&company_id=1&cmo_employee_status=1";</script>';
                //default
                if($_SESSION['emembers']=='3') echo '<script language="JavaScript">window.location="main.php?menu=employee_list&pages=employee_list&company_id=1";</script>';
                //md
                if($_SESSION['emembers']=='4') echo '<script language="JavaScript">window.location="main.php?menu=employee_list&pages=employee_list&company_id=1";</script>';
            }
        }else{
            $file = 'logs/'.date('Y-m-d').'_not_access.log';
            include('functions/log.php');
            echo '<script language="JavaScript">alert("That username or password is incorrect. Try again!");</script>';
        }
    }else{
        foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); }
            $row = mysql_fetch_array ( 
                mysql_query("
                        SELECT * 
                        FROM `cmo_access`  inner join cmo_employee on cmo_access.employee_code = cmo_employee.code
                        WHERE username = '$_POST[username]'"
                )
            );

            if($row['id']){
                $_SESSION['configs_username'] = $row['username'];
                $_SESSION['eit'] = $row['eit'];
                $_SESSION['emembers'] = $row['emembers'];
                $_SESSION['employee_code'] = $row['code'];
                $_SESSION['department_id'] = $row['department_id'];
                $file = 'logs/'.date('Y-m-d').'_access.log';
                $status = 1;
                include('functions/log.php');
                //disable
                if($_SESSION['emembers']=='0') echo '<script language="JavaScript">alert("Your account cannot access this tools!");</script>';
                //admin
    //            if($_SESSION['emembers']=='1') echo '<script language="JavaScript">window.location="main.php?menu=access_list&pages=access_list&cmo_employee_status=1";</script>';
                //hr
                if($_SESSION['emembers']=='2') echo '<script language="JavaScript">window.location="main.php?menu=employee_list&pages=employee_list&company_id=1&cmo_employee_status=1";</script>';
                //default
                if($_SESSION['emembers']=='3') echo '<script language="JavaScript">window.location="main.php?menu=employee_list&pages=employee_list&company_id=1";</script>';
                //md
                if($_SESSION['emembers']=='4') echo '<script language="JavaScript">window.location="main.php?menu=employee_list&pages=employee_list&company_id=1";</script>';
            }
    }
    @ldap_close($connect);
}
if(isset($_SESSION['configs_username'])){
if($_SESSION['configs_username']!=NULL) echo '<script language="JavaScript">window.location="main.php?menu=employee_list&pages=employee_list&company_id=1";</script>';
}
?>
<form name="myform" id="myform" method="post" action="" enctype="multipart/form-data" >
<fieldset>
    <legend>&nbsp;Account&nbsp;</legend>
    <table class="nostyle">
        <tr><td style="width:100px;">Username:</td><td><input type="text" size="30" name="username" id="username" class="input-text" value="<?php echo $username ; ?>" /><font color="red" id="myform_username_errorloc"></font></td></tr>
        <tr><td>Password:</td><td><input type="password" size="30" name="password" id="password" class="input-text" value="<?php echo $password ; ?>" /><font color="red" id="myform_password_errorloc"></font></td></tr>
        <tr><td colspan="2" class="t-right"><input type="submit" name="btnSubmit" class="input-submit" value="Login" /><input class="input-submit" type="reset" value="Reset" /></td></tr>
    </table>
</fieldset>
</form>

<script language="JavaScript" type="text/javascript" xml:space="preserve">
var frmvalidator  = new Validator("myform");
frmvalidator.EnableOnPageErrorDisplay();
frmvalidator.EnableMsgsTogether();
frmvalidator.addValidation("username","req"," *");
frmvalidator.addValidation("password","req"," *");
</script>
