<?php
if(isset($_REQUEST['cmo_access_emembers'])&&$_REQUEST['cmo_access_emembers']!=''){
    if($_REQUEST['cmo_access_emembers']!="ALL"){
        $likeSearch = $likeSearch." and (cmo_access.emembers LIKE '%".$_REQUEST['cmo_access_emembers']."%') ";
    }
}
?>

<td>
<select class="input-text" name="cmo_access_emembers" id="cmo_access_emembers" >
    <?php 
    $result = mysql_query("SELECT * FROM `emembers_access` where actived=1 order by access asc") or trigger_error(mysql_error());
    echo '<option value="ALL" title="all roles">All CMO Members</option>';
    while($row = mysql_fetch_array($result)){ 
        $selected = '';
        if(nl2br($row['id'])==$_REQUEST['cmo_access_emembers']){ $selected = ' selected ';}
        echo '<option value="'.nl2br($row['id']).'" '.$selected.'>'.nl2br($row['access']).'</option>';
    }
    ?>
</select>
</td>