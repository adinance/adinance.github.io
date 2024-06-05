<?php
echo '<h1>Login</h1>';
//echo '<h3 class="tit">Login</h3>';
$username = stripslashes(@$_POST['username']);
$password = stripslashes(@$_POST['password']);

$file = 'logs/'.date('Y-m-d').'_all.log';

if(isset($_POST['btnSubmit'])=='Login'){

    $username = $_POST['username'];
    $password = $_POST['password'];

    // LDAP CMO
    $connect = ldap_connect($server) or die ("<b>Error ldap_connect</b>");
    // @ldap_set_option($connect, LDAP_OPT_PROTOCOL_VERSION, 2);
    // @ldap_set_option($connect, LDAP_OPT_REFERRALS, 0);
    $user = $username.'@cm.co.th';
    // $dn=$ou.','.$dc; // $dn='uid='.$username.','.$ou.','.$dc; // $dn = "uid=netbeans1,ou=people,dc=example,dc=com";
    // $cn='cn='.$username.',dc=cm,dc=co,dc=th';
    $bind = @ldap_bind($connect, $user, $password) ;

    // LDAP PMC
    $connect_pmc = ldap_connect($server_pmc) or die ("<b>Error ldap_connect</b>");
    $user = $username.'@pmc.int';
    $bind_pmc = @ldap_bind($connect_pmc, $user, $password) ;

    // LDAP PMC
    $connect_nerve = ldap_connect($server_nerve) or die ("<b>Error ldap_connect</b>");
    $user = $username.'@cmo-group.local';
    $bind_nerve = @ldap_bind($connect_nerve, $user, $password) ;

    if($bind || $bind_pmc || $bind_nerve 
    // || $username=='nantiya.s'  
    // || $username=='chayapha.p'
    // || $username=='sawitree.c'
    // || $username=='auchara.j'
    ){
        foreach($_POST AS $key => $value) { 
            $_POST[$key] = mysql_real_escape_string($value); 
        }

        $row = mysql_fetch_array (
            mysql_query("
                    SELECT *
                    FROM `cmo_access` inner join cmo_employee on cmo_access.employee_code = cmo_employee.code
                    WHERE username = '$_POST[username]' and cmo_employee.status = 1 ; "
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

            $permission = $_SESSION['emembers'];

            switch ($permission) {
                case 0:
                    echo '<script language="JavaScript">alert("Your account cannot access this tools!");</script>';
                    break;
                case 1:
                    echo '<script language="JavaScript">window.location="main.php?menu=access_list&pages=access_list&cmo_employee_status=1";</script>';
                    break;
                case 2:
                    echo '<script language="JavaScript">window.location="main.php?menu=employee_list&pages=employee_list&company_id=1&cmo_employee_status=1";</script>';
                    break;
                case 3:
                    echo '<script language="JavaScript">window.location="main.php?menu=employee_list&pages=employee_list&company_id=1";</script>';
                    break;
                case 4:
                    echo '<script language="JavaScript">window.location="main.php?menu=employee_list&pages=employee_list&company_id=1";</script>';
                    break;
                default:
                    echo '<script language="JavaScript">alert("Your account cannot access this tools!");</script>';
            }
        }
    }else{
        $file = 'logs/'.date('Y-m-d').'_not_access.log';
        include('functions/log.php');
        echo '<script language="JavaScript">alert("That username or password is incorrect. Try again!");</script>';
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
        <tr><td style="width:100px;">Username:</td><td><input type="text" size="30" name="username" id="username" class="input-text" value="<?php echo $username ; ?>" style="text-transform: lowercase"/><font color="red" id="myform_username_errorloc"></font></td></tr>
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
