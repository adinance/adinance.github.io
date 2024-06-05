<select name="efa" id="efa" >
    <?php 
    $result = mysql_query("SELECT * FROM `efa_access` order by access asc") or trigger_error(mysql_error());
    while($row = mysql_fetch_array($result)){ 
        foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
        $selected = '';
        if(nl2br($row['id'])==$efa){ $selected = ' selected ';}
        echo '<option value="'.nl2br($row['id']).'" '.$selected.'>'.nl2br($row['access']).' - '.nl2br($row['description']).'</option>';
    }
    ?>
</select>