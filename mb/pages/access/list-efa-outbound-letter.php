<script type="text/javascript">
    $(function() {		
//            $("#tablesorter-demo").tablesorter({sortList:[[0,0],[2,1]], widgets: ['zebra']});
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
<?php
echo '<h1>Access Tools</h1>';
echo '<h3 class="tit">e-Documents Management > Outbound Letter</h3>';
$search = ''; 
$likeSearch = '';
$accessStatus = '';
$accessRoles = '';
if(isset($_REQUEST['search']) && $_REQUEST['search']!=''){
    $search = $_REQUEST['search'];
    $likeSearch = " and ( (username LIKE '%".$_REQUEST['search']."%') ";
    $likeSearch = $likeSearch." or (nickname LIKE '%".$_REQUEST['search']."%') ";
    $likeSearch = $likeSearch." or (cmo_department.department LIKE '%".$_REQUEST['search']."%') ) ";
}

if(isset($_REQUEST['cmo_access_status'])&&$_REQUEST['cmo_access_status']!=''){
    if($_REQUEST['cmo_access_status']!="ALL"){
        $accessStatus = $_REQUEST['cmo_access_status'];
        $likeSearch = $likeSearch." and (cmo_access.status LIKE '%".$_REQUEST['cmo_access_status']."%') ";
    }
}

if(isset($_REQUEST['cmo_access_efa'])&&$_REQUEST['cmo_access_efa']!=''){
    if($_REQUEST['cmo_access_efa']!="ALL"){
        $accessRoles = $_REQUEST['cmo_access_efa'];
        $likeSearch = $likeSearch." and (cmo_access.efa LIKE '%".$_REQUEST['cmo_access_efa']."%') ";
    }
}

// form search
echo '<form method="get" action="" enctype="multipart/form-data" >';
echo '<input name="menu" type="hidden" value=access_list>';
echo '<input name="pages" type="hidden" value=access_list>';
echo '<fieldset>';
echo '<legend>&nbsp;Search&nbsp;</legend>';
echo '<table class="nostyle">';
echo '<tr>';
echo '<td style="width:20px;">Find:</td><td><input type="text" size="30" name="search" id="search" class="input-text" value="'.$search.'" title="search by name / nickname / department"/></font></td>';
echo '<td><select class="input-text" name="cmo_access_status" title="filter status account" >Status';

if($accessStatus=="ALL") echo '<option value="ALL" selected>All Status</option>';
else echo '<option value="ALL">All Status</option>';

if($accessStatus=="1") echo '<option value="1" selected>Actived</option>';
else echo '<option value="1">Actived</option>';

if($accessStatus=="0") echo '<option value="0" selected>Inactived</option>';
else echo '<option value="0">Inactived</option>';

echo '</select>';

echo '<td><select class="input-text" name="cmo_access_efa" title="filter roles to access tools " >Status';

if($accessRoles=="ALL") echo '<option value="ALL" selected title="all roles">All Roles</option>';
else echo '<option value="ALL" title="all roles">All Roles</option>';

if($accessRoles=="1") echo '<option value="1" selected title="create / edit (all department)">Administrator</option>';
else echo '<option value="1" title="create / edit / all department">Administrator</option>';

if($accessRoles=="4") echo '<option value="4" selected title="view only / (all department)">Audit</option>';
else echo '<option value="4" title="view only / all department">Audit</option>';

if($accessRoles=="2") echo '<option value="2" selected title="create only">Editor</option>';
else echo '<option value="2" title="create only">Editor</option>';

if($accessRoles=="3") echo '<option value="3" selected title="view only">User</option>';
else echo '<option value="3" title="view only">User</option>';

if($accessRoles=="0") echo '<option value="0" selected title="disable tools">Disable</option>';
else echo '<option value="0" title="disable tools">Disable</option>';

echo '</select>';
echo '</td>';
echo '</tr>';
echo '<tr><td colspan="2" class="t-left"><input type="submit" name="btnSubmit" class="input-submit" value="Search" /></td></tr>';
echo '</table>';
echo '</fieldset>';
echo '</form>';

// list search
//echo '<h3 class="tit">List account</h3>';
echo '<table id="tablesorter-demo" class="tablesorter" border="0" cellpadding="0" cellspacing="1">'; 
echo '<thead>';
echo "<tr>"; 
echo "<th><b>Id</b></th>"; 
echo "<th><b>Username</b></th>"; 
echo "<th><b>Nickname</b></th>"; 
echo "<th><b>Department</b></th>";
echo "<th><b>Description</b></th>"; 
echo "<th title='( 0 : Disable / 1 : Administrator / 2 : Editor / 3 : View only / 4 : View all department not edit)'><b>Roles</b></b></th>"; 
echo "<th title='( 1 : Actived / 0 : Inactived )'><b>Status</b></th>"; 
//echo "<th><b>Elib</b></th>"; 
//echo "<th><b>Efm</b></th>"; 
//echo "<th><b>Emembers</b></th>"; 
echo "<th></th>"; 
echo "</tr>"; 
echo '</thead>';
echo '<tbody>';

$sql = "
SELECT * , cmo_access.description as des , cmo_access.id as id_access ,cmo_access.status as st , cmo_department.department as dept
FROM cmo_access 
INNER join cmo_employee on cmo_access.employee_code = cmo_employee.code
INNER join efa_access on cmo_access.efa = efa_access.id 
inner join cmo_department on cmo_employee.department_id = cmo_department.id
WHERE 1=1  $likeSearch order by cmo_access.username asc ";

//echo $sql;

$result = mysql_query("$sql") or trigger_error(mysql_error()); 
include('configs/inc-paging-cal.php');
$result = mysql_query("$sql LIMIT $startPage , $perPage ") or trigger_error(mysql_error());
while($row = mysql_fetch_array($result)){ 
    foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
    echo "<tr>";  
    echo "<td valign='top'>" . nl2br( $row['id_access']) . "</td>";  
    echo "<td valign='top'>" . nl2br( $row['username']) . "</td>";  
    echo "<td valign='top'>" . nl2br( $row['nickname']) . "</td>";  
    echo "<td valign='top'>" . nl2br( $row['dept']) . "</td>"; 
    echo "<td valign='top'>" . nl2br( $row['des']) . "</td>";  
    echo "<td valign='top'>" . nl2br( $row['efa']) . "</td>";  
    $searchStatus = 'Actived';
    if(nl2br( $row['status'])==0){
         $searchStatus = 'Inactived';
    }
    echo "<td valign='top'>" . $row['st'] . "</td>";  
//    echo "<td valign='top'>" . nl2br( $row['elib']) . "</td>";  
//    echo "<td valign='top'>" . nl2br( $row['efm']) . "</td>";  
//    echo "<td valign='top'>" . nl2br( $row['emembers']) . "</td>"; 
    echo "
    <td width='60px'><a href=main.php?menu=access_edit&pages=access_edit&id={$row['id_access']}>Edit</a> | <a href='javascript:confirmDelete(\"main.php?menu=access_delete&pages=access_delete&id={$row['id_access']}\")'>Delete</a></td> "; 
    echo "</tr>"; 
} 
echo '</tbody>';
echo "</table>"; 
?>