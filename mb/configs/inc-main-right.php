<?php
echo '<div id="content" class="box">';

switch ($pages) {
    case "demo": // demo         
        include('configs/inc-columns-right.php');       
    break;
    case "access_list":         
        include('pages/access/list.php');  
        include('configs/inc-paging-url.php');
    break;
    case "access_create":         
        include('pages/access/create.php');       
    break;
    case "access_edit":          
        include('pages/access/edit.php');       
    break;
    case "access_delete":          
        include('pages/access/delete.php');       
    break;

    // employee tools
    case "employee_list":         
        include('pages/employee/list.php');  
        include('configs/inc-paging-url.php');
    break;

    case "employee_create":         
        include('pages/employee/create.php');  
    break;

    case "employee_edit":         
        include('pages/employee/edit.php');  
    break;

    case "employee_view":         
        include('pages/employee/view.php');  
    break;
    // access emembers tools
    case "access_emembers_list":         
        include('pages/access/list-emembers.php');  
        include('configs/inc-paging-url.php');
    break;

    case "login":          
        include('pages/login/login-right.php');       
    break;
    case "logout":          
        include('pages/login/logout.php');       
    break;

}

echo '</div> ';
?>
