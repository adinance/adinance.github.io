<?php
if(isset($_REQUEST['cmo_access_efa'])&&$_REQUEST['cmo_access_efa']!=''){
    if($_REQUEST['cmo_access_efa']!="ALL"){
        $accessRoles = $_REQUEST['cmo_access_efa'];
        $likeSearch = $likeSearch." and (cmo_access.efa LIKE '%".$_REQUEST['cmo_access_efa']."%') ";
    }
}

echo '<td><select class="input-text" name="cmo_access_efa" title="filter roles to access tools " >Status';

if($accessRoles=="ALL") echo '<option value="ALL" selected title="all roles">All Outbound Letter</option>';
else echo '<option value="ALL" title="all roles">All Outbound Letter</option>';

if($accessRoles=="1") echo '<option value="1" selected title="create / edit (all department)">Administrator</option>';
else echo '<option value="1" title="create / edit / all department">Administrator</option>';

if($accessRoles=="4") echo '<option value="4" selected title="view only / (all department)">Audit</option>';
else echo '<option value="4" title="view only / all department">Audit</option>';

if($accessRoles=="0") echo '<option value="0" selected title="disable tools">Disable</option>';
else echo '<option value="0" title="disable tools">Disable</option>';

if($accessRoles=="2") echo '<option value="2" selected title="create only">Editor</option>';
else echo '<option value="2" title="create only">Editor</option>';

if($accessRoles=="3") echo '<option value="3" selected title="view only">User</option>';
else echo '<option value="3" title="view only">User</option>';

echo '</select>';
echo '</td>';

?>
