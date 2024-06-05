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
$company_id = $_GET['company_id'];


if(isset($_REQUEST['search']) && $_REQUEST['search']!=''){
    $search = trim($_REQUEST['search']);
    $likeSearch = " and ( (firstname_th LIKE '%".$search."%') ";
    $likeSearch = $likeSearch." or (code LIKE '%".$search."%') ";
    $likeSearch = $likeSearch." or (lastname_th LIKE '%".$search."%') ";
    $likeSearch = $likeSearch." or (firstname_en LIKE '%".$search."%') ";
    $likeSearch = $likeSearch." or (lastname_en LIKE '%".$search."%') ";
    $likeSearch = $likeSearch." or (nickname LIKE '%".$search."%') ";
    $likeSearch = $likeSearch." or (contact_internal LIKE '%".$search."%') ";
    $likeSearch = $likeSearch." or (position LIKE '%".$search."%') ";
    $likeSearch = $likeSearch." or (mobile LIKE '%".$search."%') ";
    $likeSearch = $likeSearch." or (email LIKE '%".$search."%') ";
    $likeSearch = $likeSearch." or (car_1 LIKE '%".$search."%') ";
    $likeSearch = $likeSearch." or (car_2 LIKE '%".$search."%') )";
    // $likeSearch = $likeSearch." or (cmo_department.department LIKE '%".$_REQUEST['search']."%') ) ";
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
    echo '<h1>MEMBERS CONTACT</h1>';
}else{
    echo '<h1>CMO Members</h1>';
}
//echo $_SESSION['employee_code'];
//echo $_SESSION['department_id'];
// form search
echo '<form method="get" action="" enctype="multipart/form-data" >';
echo '<input name="menu" type="hidden" value=employee_list>';
echo '<input name="company_id" type="hidden" value='.$company_id.'>';
echo '<input name="pages" type="hidden" value=employee_list>';
echo '<fieldset>';
//echo '<legend>&nbsp;Search&nbsp;</legend>';
echo '<table class="nostyle">';
echo '<tr>';
echo '<td style="width:20px;">Find:</td><td><input type="text" size="15" name="search" id="search" class="input-text" value="'.$search.'" /></font></td>';

echo '<td>Department:</td><td>';
?>
<select name="department_id" id="department_id" class="input-text">
    <?php
    echo '<option value="ALL">All Department</option>';
    $result = mysql_query("SELECT * FROM `cmo_department` where actived='1' and company_id = '$company_id' and id not in (39,34,20,45,5,35,6,19,15,43,42,41,96,7)  order by department asc") or trigger_error(mysql_error());
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
    //

}

echo '<td colspan="2" class="t-left"><input type="submit" name="btnSubmit" class="input-submit" value="Search" /></td>';
echo '</tr>';
//echo '<tr><td colspan="2" class="t-left"><input type="submit" name="btnSubmit" class="input-submit" value="Search" /></td></tr>';
echo '</table>';
echo '</fieldset>';
echo '</form>';

echo '<table id="tablesorter-demo" class="tablesorter" border="0" cellpadding="0" cellspacing="1">';
echo '<thead title="click to sort">';
echo "<tr>";
echo "<th>PHOTO</th>";
if($_SESSION['emembers'] != 3){
    echo "<th><b>CODE</b></th>";
//    echo "<th><b>Prefix</b></th>";
}
echo "<th><b>NAME</b></th>";
//echo "<th><b>Name EN</b></th>";
if($_SESSION['emembers'] == '1' or $_SESSION['emembers'] == '2'){
//echo "<th><b>Prefix EN</b></th>";
//echo "<th><b>Firstname EN</b></th>";
//echo "<th><b>Lastname EN</b></th>";
}
// echo "<th><b>Nickname TH</b></th>";
// echo "<th><b>Nickname EN</b></th>";
echo "<th><b>DEPARTMENT</b></th>";
//if($_SESSION['employee_code'] =='540522' ){
echo "<th><b>POSITION</b></th>";
//}
echo "<th><b>CONTACT</b></th>";
if($_SESSION['emembers'] != '3'){
echo "<th><b>MOBILE</b></th>";
}
echo "<th><b>EMAIL</b></th>";
//if($_SESSION['employee_code'] !='540522' ){
    // if($_SESSION['emembers'] == '1' or $_SESSION['emembers'] == '2'){
    echo "<th><b>CAR</b></th>";
    // }
    //echo "<th><b>Car 2</b></th>";
//}
if($_SESSION['emembers'] == '1' or $_SESSION['emembers'] == '2'){
//    echo "<th><b>Status</b></th>";
}
echo "<th></th>";
echo "</tr>";
echo '</thead>';
echo '<tbody>';

$sql = "
SELECT
cmo_employee.status,
cmo_employee.image,
cmo_employee.code,
cmo_employee.prefix,
cmo_employee.priority,
cmo_employee.firstname_th ,
cmo_employee.lastname_th ,
cmo_employee.firstname_en ,
cmo_employee.lastname_en ,
cmo_employee.nickname ,
cmo_employee.position ,
cmo_employee.contact_internal,
cmo_employee.email,
cmo_employee.car_1,
cmo_employee.car_2,
cmo_employee.mobile,
cmo_employee.company_id,
cmo_department.department as dept
FROM cmo_employee
INNER join cmo_department on cmo_employee.department_id = cmo_department.id
INNER join cmo_company on cmo_employee.company_id = cmo_company.id
WHERE 1=1  $likeSearch
    and cmo_employee.company_id = $company_id
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

$result = @mysql_query("$sql") or trigger_error(mysql_error());
include('configs/inc-paging-cal.php');
$result = mysql_query("$sql LIMIT $startPage , $perPage ") or trigger_error(mysql_error());
while($row = mysql_fetch_array($result)){
    foreach($row AS $key => $value) { $row[$key] = stripslashes($value); }
    $prefix_th = '';  $prefix_en = '';
    $hiligh = '';
    if(nl2br($row['status'])==0){
        $hiligh = "style='color:red;'";
    }
    echo "<tr title='".nl2br( $row['firstname_en']) . ' ' . nl2br( $row['lastname_en']) ."'>";
    if (!file_exists($_SERVER{'DOCUMENT_ROOT'}.'/mb/images/upload/employee/'.nl2br( $row['image'])) || $row['image']==null || $row['image']=='') {
        echo "<td valign='top' align='center'><img src='images/upload/employee/no-avatar.png' width='50' ></td>";
    } else {
        echo "<td valign='top' align='center'><a href='images/upload/employee/" . nl2br( $row['image']) . "'><img src='images/upload/employee/" . nl2br( $row['image']) . "' height='50' width='50' ></a></td>";
    }
    if($_SESSION['emembers'] != 3 ){
        echo "<td valign='top' ".$hiligh." >" . nl2br( $row['code']) . "</td>";
        if(nl2br( $row['prefix'])==0){ $prefix_th = 'นาย';    $prefix_en = 'Mr.';  }
        if(nl2br( $row['prefix'])==1){ $prefix_th = 'นางสาว'; $prefix_en = 'Miss'; }
        if(nl2br( $row['prefix'])==2){ $prefix_th = 'นาง';    $prefix_en = 'Mrs.';  }
//        echo "<td valign='top' ".$hiligh.">" . $prefix_th . "</td>";
    }
    $nickname = '';
    if($row['nickname'] !='' || $row['nickname'] !=NULL){
        $nickname = '(' . nl2br( $row['nickname']) . ')';
    }
    echo "<td valign='top' ".$hiligh." nowrap>" . 
    nl2br( $row['firstname_en']) . ' ' . nl2br( $row['lastname_en']).
    "<br>".
    
    nl2br( $row['firstname_th']) . ' ' . nl2br( $row['lastname_th']) . ' ' . $nickname . 
    "</td>";
   // echo "<td valign='top' ".$hiligh." nowrap>" . nl2br( $row['firstname_en']) . ' ' . nl2br( $row['lastname_en']) . "</td>";
    if($_SESSION['emembers'] == '1' or $_SESSION['emembers'] == '2'){
//        echo "<td valign='top' ".$hiligh.">" . $prefix_en . "</td>";
//        echo "<td valign='top' ".$hiligh.">" . nl2br( $row['firstname_en']) . "</td>";
//        echo "<td valign='top' ".$hiligh.">" . nl2br( $row['lastname_en']) . "</td>";
    }
    //echo "<td valign='top' ".$hiligh.">" . nl2br( $row['nickname']) . "</td>";
    echo "<td valign='top' ".$hiligh.">" . nl2br( $row['dept']) . "</td>";
//    if($_SESSION['employee_code'] =='540522' ){
        echo "<td valign='top'  ".$hiligh.">" . nl2br( $row['position']) . "</td>";
//    }
    echo "<td valign='top' ".$hiligh.">" . nl2br( $row['contact_internal']) . "</td>";

    
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
//    $showMobileCondition =
    if(($_SESSION['emembers'] == '3')){ // normal
        
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
            || $_SESSION['department_id']==nl2br( $row['department_id'])
            ){
            echo "<td valign='top' ".$hiligh.">";
            echo nl2br( $row['mobile']);
            echo "</td>";
        }else{

        }
        
    }else{
        echo "<td valign='top' ".$hiligh.">";
        echo nl2br( $row['mobile']);
        echo "</td>";
    }

    
    echo "<td valign='top' ".$hiligh.">" . nl2br( $row['email']) . "</td>";
//    if($_SESSION['employee_code'] !='540522' ){
    // if($_SESSION['emembers'] == '1' or $_SESSION['emembers'] == '2'){
        echo "<td valign='top' ".$hiligh.">" . nl2br( $row['car_1']) . "</td>";
        //echo "<td valign='top' ".$hiligh.">" . nl2br( $row['car_2']) . "</td>";
//    }
    // }
    if($_SESSION['emembers'] == '1' or $_SESSION['emembers'] == '2'){
        $status = 'Actived'; if(nl2br( $row['status'])==0) $status = 'Inactived';
//        echo "<td valign='top' ".$hiligh.">" . $status . "</td>";
    }
    echo "<td width='60px' align='center' >";
    echo "<a href=main.php?menu=employee_view&pages=employee_view&code={$row['code']}&company_id={$row['company_id']}>View</a> ";
    if($_SESSION['emembers'] == '1' or $_SESSION['emembers'] == '2'){
        echo "| <a href=main.php?menu=employee_edit&pages=employee_edit&code={$row['code']}&company_id={$row['company_id']}>Edit</a>";
    }
    echo "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>
