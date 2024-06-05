<select name="status" id="status" >
        <?php 
        $result = mysql_query("SELECT * FROM cmo_access inner join efa_access on cmo_access.") or trigger_error(mysql_error());
        while($row = mysql_fetch_array($result)){ 
            foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
            $selected = '';
            if(nl2br($row['id'])==$department_id){ $selected = ' selected ';}
            echo '<option value="'.nl2br($row['id']).'" '.$selected.'>'.nl2br($row['department']).'</option>';
        }
        ?>
</select>