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

// form search
echo '<form method="get" action="" enctype="multipart/form-data" >';
echo '<input name="menu" type="hidden" value=access_list>';
echo '<input name="pages" type="hidden" value=access_list>';
echo '<fieldset>';
echo '<legend>&nbsp;Search&nbsp;</legend>';
echo '<table class="nostyle">';
echo '<tr>';
echo '<td style="width:20px;">Find:</td><td><input type="text" size="30" name="search" id="search" class="input-text" value="'.$search.'" title="search by name / nickname / department"/></font></td>';

include('pages/filter-select-cmo-access-actived.php');

include('pages/filter-select-cmo-access-emembers.php');
//include('pages/filter-select-cmo-access-crm.php');
//include('pages/filter-select-cmo-access-efa.php');

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
echo "<th width='10'></th>"; 
echo "<th width='20'>Image</th>";
echo "<th ><b>Username</b></th>"; 
echo "<th width='80'><b>CMO Members</b></b></th>"; 
//echo "<th width='80'><b>CRM</b></th>"; 
//echo "<th width='80'><b>Documents Tracking</b></b></th>"; 
//echo "<th><b>Elib</b></th>"; 
//echo "<th><b>Efm</b></th>"; 
//echo "<th><b>Emembers</b></th>"; 
echo "<th></th>"; 
echo "</tr>"; 
echo '</thead>';
echo '<tbody>';

$sql = "
SELECT * , 
cmo_access.description as des , 
cmo_access.id as id_access ,
cmo_access.status as st , 
cmo_department.department as dept,
cmo_employee.status as employee_status
FROM cmo_access 
INNER JOIN cmo_employee on cmo_access.employee_code = cmo_employee.code
INNER JOIN cmo_department on cmo_employee.department_id = cmo_department.id
WHERE 1=1  $likeSearch order by cmo_access.username asc ";

//echo $sql;

$result = mysql_query("$sql") or trigger_error(mysql_error()); 
//include('configs/inc-paging-cal.php');
//$result = mysql_query("$sql LIMIT $startPage , $perPage ") or trigger_error(mysql_error());
$i=1;
$styleInactived = '';
while($row = mysql_fetch_array($result)){ 
    if($row['employee_status']=='0') $styleInactived = "style = 'color: red;'";
    if($row['employee_status']=='1') $styleInactived = "";
    echo "<tr >";  
    echo "<td valign='top' $styleInactived >" . $i . "</td>";  
    if (!file_exists($_SERVER{'DOCUMENT_ROOT'}.'/eit/images/upload/employee/'.nl2br( $row['image']))) {
        echo "<td valign='top' align='center'><img src='images/upload/employee/no-avatar.png' width='50' ></td>";
    } else {
        echo "<td valign='top' align='center'><a href='images/upload/employee/" . nl2br( $row['image']) . "'><img src='images/upload/employee/" . nl2br( $row['image']) . "' height='50' width='50' ></a></td>";
    }
    echo "<td $styleInactived valign='top' title='".nl2br( $row['nickname'])." - ".nl2br( $row['dept'])." ( ".nl2br( $row['position'])." )"."' >" . nl2br( $row['username']) . "</td>";  
    echo "<td $styleInactived valign='top'>" . nl2br( $row['emembers']) . "</td>";  
   // echo "<td $styleInactived valign='top' title='".nl2br( $row['des'])."'>" . nl2br( $row['crm']) . "</td>"; 
   // echo "<td $styleInactived valign='top'>" . nl2br( $row['efa']) . "</td>";  
    
    $searchStatus = 'Actived';
    if(nl2br( $row['status'])==0){
         $searchStatus = 'Inactived';
    }
//    echo "<td valign='top'>" . nl2br( $row['elib']) . "</td>";  
//    echo "<td valign='top'>" . nl2br( $row['efm']) . "</td>";  
//    echo "<td valign='top'>" . nl2br( $row['emembers']) . "</td>"; 
    echo "
    <td width='60px'><a href=main.php?menu=access_edit&pages=access_edit&id={$row['id_access']}>Edit</a> | <a href='javascript:confirmDelete(\"main.php?menu=access_delete&pages=access_delete&id={$row['id_access']}\")'>Delete</a></td> "; 
    echo "</tr>"; 
    $i++;
} 
echo '</tbody>';
echo "</table>"; 
?>