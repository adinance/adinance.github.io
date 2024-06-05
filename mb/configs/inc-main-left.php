<?php
echo '<div id="aside" class="box">';
echo '<div class="padding box">';
include('configs/inc-images-logo.php');
switch ($menu) {
    case "demo": // demo         
        include('configs/inc-columns-left.php');
    break;

    // outbound letter tools
    case "access_list":
        include('configs/inc-access.php');    
        include('configs/inc-paging-init.php');
        include('pages/access/button-create-cmo-access.php'); 
    break;
    case "access_create":    
        include('pages/access/button-create-cmo-access.php');
    break;
    case "access_edit":  
        include('pages/access/button-create-cmo-access.php');
    break;
    case "access_delete":  
    break;
    
    // employee tools
    case "employee_list": 
        include('configs/inc-access.php'); 
        include('configs/inc-paging-init.php');
        include('pages/employee/button-create-cmo-employee.php'); 
    break;

    case "employee_create": 
        include('pages/employee/button-create-cmo-employee.php'); 
    break;

    case "employee_edit": 
        include('pages/employee/button-create-cmo-employee.php'); 
    break;

    case "employee_view": 
        include('pages/employee/button-create-cmo-employee.php'); 
    break;

    // emembers access
    case "access_emembers_list":
        include('configs/inc-access.php');    
        include('configs/inc-paging-init.php');
        include('pages/access/button-create-cmo-access.php'); 
    break;

    case "login":          
        //include('pages/login/login-left.php');       
    break;
    case "logout":          
        //include('pages/login/logout.php');       
    break;
}
echo '</div>'; 
include('configs/inc-menu-left.php');

echo '</div>';
echo '<hr class="noscreen" />';
?>
