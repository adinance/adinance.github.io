<? 
$id = (int) $_GET['id']; 
$objUpdate = mysql_query("DELETE FROM `cmo_access` WHERE `id` = '$id' ") ; 
if($objUpdate){
    echo '<script language="JavaScript">window.location="main.php?menu=access_list&pages=access_list";</script>';
}
?> 