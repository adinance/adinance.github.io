<select name="crm" id="crm" >
    <?php 
    $result = mysql_query("SELECT * FROM `access_level` where services = 'crm' order by level asc") or trigger_error(mysql_error());
    while($row = mysql_fetch_array($result)){ 
        foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
        $selected = '';
        if(nl2br($row['value'])==$crm){ $selected = ' selected ';}
        echo '<option value="'.nl2br($row['value']).'" '.$selected.'>'.nl2br($row['level']).' - '.nl2br($row['description']).'</option>';
    }
    ?>
</select>