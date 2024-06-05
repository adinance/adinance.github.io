<script type="text/javascript">
    $(function() {
        $("#tablesorter-demo").tablesorter({widgets: ['zebra']});
        $("#options").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 4:{sorter: false}}});
        $("#tablesorter-demo tr").mouseover(function(){
            $(this).toggleClass('highlight');
        });
        $("#tablesorter-demo tr").mouseout(function(){
            $(this).toggleClass('highlight');
        });
    });
</script>


<?
$search = '';
$likeSearch = '';
$employeeStatus = '';
$department_id = '';

if(isset($_REQUEST['search']) && $_REQUEST['search']!=''){
    $search = $_REQUEST['search'];
    $likeSearch = " and ( (cmo_employee.code LIKE '%".$_REQUEST['search']."%') ";
    $likeSearch = $likeSearch." or (firstname_th LIKE '%".$_REQUEST['search']."%') ";
    $likeSearch = $likeSearch." or (lastname_th LIKE '%".$_REQUEST['search']."%') ";
    $likeSearch = $likeSearch." or (firstname_en LIKE '%".$_REQUEST['search']."%') ";
    $likeSearch = $likeSearch." or (lastname_en LIKE '%".$_REQUEST['search']."%') ";
    $likeSearch = $likeSearch." or (nickname LIKE '%".$_REQUEST['search']."%') ";
    $likeSearch = $likeSearch." or (contact_internal LIKE '%".$_REQUEST['search']."%') ";
    $likeSearch = $likeSearch." or (mobile LIKE '%".$_REQUEST['search']."%') ";
    $likeSearch = $likeSearch." or (email LIKE '%".$_REQUEST['search']."%') ";
    $likeSearch = $likeSearch." or (car_1 LIKE '%".$_REQUEST['search']."%') ";
    $likeSearch = $likeSearch." or (car_2 LIKE '%".$_REQUEST['search']."%') ";
    $likeSearch = $likeSearch." or (cmo_department.department LIKE '%".$_REQUEST['search']."%') ) ";
}

if(isset($_REQUEST['cmo_employee_status'])&&$_REQUEST['cmo_employee_status']!=''){
    if($_REQUEST['cmo_employee_status']!="ALL"){
        $employeeStatus = $_REQUEST['cmo_employee_status'];
        $likeSearch = $likeSearch." and (cmo_employee.status = '".$_REQUEST['cmo_employee_status']."') ";
    }
}

if($_SESSION['emembers'] != '1' && $_SESSION['emembers'] != '2'){
    $likeSearch = $likeSearch." and (cmo_employee.status = '1') ";
    $employeeStatus = '1';
}

if(isset($_REQUEST['department_id'])&&$_REQUEST['department_id']!=''){
    if($_REQUEST['department_id']!="ALL"){
        $department_id = $_REQUEST['department_id'];
        $likeSearch = $likeSearch." and (cmo_employee.department_id = '".$_REQUEST['department_id']."') ";
    }
}

$likeSearch = $likeSearch." and code not in ('101','102') ";

if($_SESSION['emembers']=='1' or $_SESSION['emembers']=='2'){
    echo '<h1>Members Tools</h1>';
}else{
    echo '<h1>CMO Members</h1>';
}

// form search
echo '<form method="get" action="" enctype="multipart/form-data" >';
echo '<input name="menu" type="hidden" value=employee_list>';
echo '<input name="pages" type="hidden" value=employee_list>';
echo '<fieldset>';
echo '<legend>&nbsp;Search&nbsp;</legend>';
echo '<table class="nostyle">';
echo '<tr>';
echo '<td style="width:20px;">Find:</td><td><input type="text" size="30" name="search" id="search" class="input-text" value="'.$search.'" title="search by code / firstname / lastname / nickname / email / car id / internal contact / mobile "/></font></td>';
//
//echo '<td><select class="input-text" name="cmo_access_efa" title="filter departments" >Department';
//
//if($accessRoles=="ALL") echo '<option value="ALL" selected title="all departments">All Department</option>';
//else echo '<option value="ALL" title="all departments">All Department</option>';
//
//echo '</select>';
//echo '</td>';
//
echo '<td>Department:</td><td>';
?>
<select name="department_id" id="department_id" class="input-text">
    <?php
    echo '<option value="ALL">All Department</option>';
    $result = mysql_query("SELECT * FROM `cmo_department` where actived='1' order by department asc") or trigger_error(mysql_error());
    while($row = mysql_fetch_array($result)){
        foreach($row AS $key => $value) { $row[$key] = stripslashes($value); }
        $selected = '';
        if(nl2br($row['id'])==$department_id){ $selected = ' selected ';}
        echo '<option value="'.nl2br($row['id']).'" '.$selected.'>'.nl2br($row['department']).'</option>';
    }
    ?>
</select>
<?
echo '</td>';

if($_SESSION['emembers'] == '1' or $_SESSION['emembers'] == '2'){
    echo '<td><select class="input-text" name="cmo_employee_status" title="filter status" >Status';

    if($employeeStatus=="ALL") echo '<option value="ALL" selected>All Status</option>';
    else echo '<option value="ALL">All Status</option>';

    if($employeeStatus=="1") echo '<option value="1" selected>Actived</option>';
    else echo '<option value="1">Actived</option>';

    if($employeeStatus=="0") echo '<option value="0" selected>Inactived</option>';
    else echo '<option value="0">Inactived</option>';

    echo '</select>';
    echo '</td>';
}

echo '</tr>';
echo '<tr><td colspan="2" class="t-left"><input type="submit" name="btnSubmit" class="input-submit" value="Search" /></td></tr>';
echo '</table>';
echo '</fieldset>';
echo '</form>';

echo '<table id="tablesorter-demo" class="tablesorter" border="0" cellpadding="0" cellspacing="1">';
echo '<thead title="click to sort">';
echo "<tr>";
echo "<th>Image</th>";
if($_SESSION['emembers'] == '1' or $_SESSION['emembers'] == '2'){
    echo "<th><b>Code</b></th>";
    echo "<th><b>Prefix</b></th>";
}
echo "<th><b>Firstname</b></th>";
echo "<th><b>Lastname</b></th>";
if($_SESSION['emembers'] == '1' or $_SESSION['emembers'] == '2'){
echo "<th><b>Prefix EN</b></th>";
echo "<th><b>Firstname EN</b></th>";
echo "<th><b>Lastname EN</b></th>";
}
echo "<th><b>Nickname</b></th>";
echo "<th><b>Department</b></th>";
//echo "<th><b>Position</b></th>";
echo "<th><b>Internal Contact</b></th>";
echo "<th><b>Mobile</b></th>";
echo "<th><b>Email</b></th>";
echo "<th><b>Car 1</b></th>";
echo "<th><b>Car 2</b></th>";
if($_SESSION['emembers'] == '1' or $_SESSION['emembers'] == '2'){
    echo "<th><b>Status</b></th>";
}
echo "<th></th>";
echo "</tr>";
echo '</thead>';
echo '<tbody>';

$sql = "
SELECT * , cmo_department.department as dept
FROM cmo_employee
INNER join cmo_department on cmo_employee.department_id = cmo_department.id
WHERE 1=1  $likeSearch
order by
cmo_department.department asc ,
cmo_employee.status desc,

cmo_employee.priority asc ,
cmo_employee.firstname_th asc,
cmo_employee.lastname_th asc,
cmo_employee.firstname_en asc,
cmo_employee.lastname_en asc,
cmo_employee.nickname asc  ";

//echo $sql;

$result = mysql_query("$sql") or trigger_error(mysql_error());
include('configs/inc-paging-cal.php');
$result = mysql_query("$sql LIMIT $startPage , $perPage ") or trigger_error(mysql_error());
while($row = mysql_fetch_array($result)){
    foreach($row AS $key => $value) { $row[$key] = stripslashes($value); }
    $prefix_th = '';  $prefix_en = '';
    $hiligh = '';
    if(nl2br($row['status'])==0){
        $hiligh = "style='color:red;'";
    }
    echo "<tr>";
    if (!file_exists($_SERVER{'DOCUMENT_ROOT'}.'/eit/images/upload/employee/'.nl2br( $row['image']))) {
        echo "<td valign='top' align='center'><img src='images/upload/employee/no-avatar.png' width='50' ></td>";
    } else {
        echo "<td valign='top' align='center'><a href='images/upload/employee/" . nl2br( $row['image']) . "'><img src='images/upload/employee/" . nl2br( $row['image']) . "' height='50' width='50' ></a></td>";
    }
    if($_SESSION['emembers'] == '1' or $_SESSION['emembers'] == '2'){
        echo "<td valign='top' ".$hiligh." >" . nl2br( $row['code']) . "</td>";
        if(nl2br( $row['prefix'])==0){ $prefix_th = 'นาย';    $prefix_en = 'Mr.';  }
        if(nl2br( $row['prefix'])==1){ $prefix_th = 'นางสาว'; $prefix_en = 'Miss.'; }
        if(nl2br( $row['prefix'])==2){ $prefix_th = 'นาง';    $prefix_en = 'Mrs.';  }
        echo "<td valign='top' ".$hiligh.">" . $prefix_th . "</td>";
    }
    echo "<td valign='top' ".$hiligh.">" . nl2br( $row['firstname_th']) . "</td>";
    echo "<td valign='top' ".$hiligh.">" . nl2br( $row['lastname_th']) . "</td>";
    if($_SESSION['emembers'] == '1' or $_SESSION['emembers'] == '2'){
        echo "<td valign='top' ".$hiligh.">" . $prefix_en . "</td>";
        echo "<td valign='top' ".$hiligh.">" . nl2br( $row['firstname_en']) . "</td>";
        echo "<td valign='top' ".$hiligh.">" . nl2br( $row['lastname_en']) . "</td>";
    }
    echo "<td valign='top' ".$hiligh.">คุณ" . nl2br( $row['nickname']) . "</td>";
    echo "<td valign='top' ".$hiligh.">" . nl2br( $row['dept']) . "</td>";
//    echo "<td valign='top'>" . nl2br( $row['position']) . "</td>";
    echo "<td valign='top' ".$hiligh.">" . nl2br( $row['contact_internal']) . "</td>";

    echo "<td valign='top' ".$hiligh.">";
    /*
     *
    $view_emember_employee_actived_th->department->ListViewValue()=='Bangkok Sculpture' or
    $view_emember_employee_actived_th->department->ListViewValue()=='CEO OFFICE' or
    $view_emember_employee_actived_th->department->ListViewValue()=='Corporate Affair' or
    $view_emember_employee_actived_th->department->ListViewValue()=='Corporate Communications' or
    $view_emember_employee_actived_th->department->ListViewValue()=='Facilities Management' or
    $view_emember_employee_actived_th->department->ListViewValue()=='Finance & Accounting' or
    $view_emember_employee_actived_th->department->ListViewValue()=='Human Resources' or
    $view_emember_employee_actived_th->department->ListViewValue()=='Information Technology' or
    $view_emember_employee_actived_th->department->ListViewValue()=='Internal Audit'
     */
    if(($_SESSION['emembers'] == '3')){
        if(nl2br( $row['code']) !='340046'
            && (nl2br( $row['department_id']) == '1'
            || nl2br( $row['department_id']) == '2'
            || nl2br( $row['department_id']) == '3'
            || nl2br( $row['department_id']) == '4'
            || nl2br( $row['department_id']) == '12'
            || nl2br( $row['department_id']) == '13'
            || nl2br( $row['department_id']) == '14'
            || nl2br( $row['department_id']) == '16'
            || nl2br( $row['department_id']) == '17')
            ){
            echo nl2br( $row['mobile']);
        }
    }else{
        echo nl2br( $row['mobile']);
    }

    echo "</td>";
    echo "<td valign='top' ".$hiligh.">" . nl2br( $row['email']) . "</td>";
    echo "<td valign='top' ".$hiligh.">" . nl2br( $row['car_1']) . "</td>";
    echo "<td valign='top' ".$hiligh.">" . nl2br( $row['car_2']) . "</td>";
    if($_SESSION['emembers'] == '1' or $_SESSION['emembers'] == '2'){
        $status = 'Actived'; if(nl2br( $row['status'])==0) $status = 'Inactived';
        echo "<td valign='top' ".$hiligh.">" . $status . "</td>";
    }
    echo "<td width='60px' align='center' >";
    echo "<a href=main.php?menu=employee_view&pages=employee_view&code={$row['code']}>View</a> ";
    if($_SESSION['emembers'] == '1' or $_SESSION['emembers'] == '2'){
        echo "| <a href=main.php?menu=employee_edit&pages=employee_edit&code={$row['code']}>Edit</a>";
    }
    echo "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>
