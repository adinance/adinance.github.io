<select name="emembers" id="emembers" >
    <?php 
    $result = mysql_query("SELECT * FROM `emembers_access` where actived=1 order by access asc") or trigger_error(mysql_error());
    while($row = mysql_fetch_array($result)){ 
        foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
        $selected = '';
        if(nl2br($row['id'])==$emembers){ $selected = ' selected ';}
        echo '<option value="'.nl2br($row['id']).'" '.$selected.'>'.nl2br($row['access']).' - '.nl2br($row['description']).'</option>';
    }
    ?>
</select>