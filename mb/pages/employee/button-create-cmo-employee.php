<!-- Create a new project -->
<?php 
if($_SESSION['emembers'] == '1' || $_SESSION['emembers'] == '2'){
    echo '<p id="btn-create" class="box"><a href="main.php?menu=employee_create&pages=employee_create&company_id='.$_REQUEST['company_id'].'"><span>Create new member</span></a></p>';
}
?>