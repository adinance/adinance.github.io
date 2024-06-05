<?php
if(isset($_REQUEST['cmo_access_status'])&&$_REQUEST['cmo_access_status']!=''){
    if($_REQUEST['cmo_access_status']!="ALL"){
        $accessStatus = $_REQUEST['cmo_access_status'];
        $likeSearch = $likeSearch." and (cmo_employee.status LIKE '%".$_REQUEST['cmo_access_status']."%') ";
    }
}

echo '<td><select class="input-text" name="cmo_access_status" title="filter status account" >Status';

if($accessStatus=="ALL") echo '<option value="ALL" selected>All Status</option>';
else echo '<option value="ALL">All Status</option>';

if($accessStatus=="1") echo '<option value="1" selected>Actived</option>';
else echo '<option value="1">Actived</option>';

if($accessStatus=="0") echo '<option value="0" selected>Inactived</option>';
else echo '<option value="0">Inactived</option>';

echo '</select></td>';

?>
