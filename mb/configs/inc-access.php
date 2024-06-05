<?php
if($_SESSION['emembers'] == '0'){
    echo '<script language="JavaScript">alert("Your account cannot access this, Pls. contact to Administratoroo!");</script>';  
    echo '<script language="JavaScript">window.location="main.php?menu=login&pages=login";</script>';
}
?>
