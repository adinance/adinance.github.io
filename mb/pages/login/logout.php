<?php 
session_start();
session_destroy(); 
echo '<script language="JavaScript">window.location="main.php?menu=login&pages=login";</script>';
?>