<?php
if(isset($_REQUEST['crm_id'])&&$_REQUEST['crm_id']!=''){
    if($_REQUEST['crm_id']!="ALL"){
        $accessStatus = $_REQUEST['crm_id'];
        $likeSearch = $likeSearch." and (cmo_access.crm = '".$_REQUEST['crm_id']."') ";
    }
}

echo '<td><select class="input-text" name="crm_id" title="filter status account" >Status';

if($accessStatus=="ALL") echo '<option value="ALL" selected>-- All CRM --</option>';
else echo '<option value="ALL">-- All CRM --</option>';

if($accessStatus=="1") echo '<option value="1" selected>Admin All Department</option>';
else echo '<option value="1">Admin All Department</option>';

if($accessStatus=="2") echo '<option value="2" selected>Admin</option>';
else echo '<option value="2">Admin</option>';

if($accessStatus=="6") echo '<option value="6" selected>AE</option>';
else echo '<option value="6">AE</option>';

if($accessStatus=="7") echo '<option value="7" selected>View only [Default]</option>';
else echo '<option value="7">View only [Default]</option>';

if($accessStatus=="0") echo '<option value="0" selected>Inactived</option>';
else echo '<option value="0">Inactived</option>';

echo '</select></td>';

?>
