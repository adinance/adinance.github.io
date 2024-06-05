<select name="department_id" id="department_id" class="input-text">
        <?php 
        $result = mysql_query("SELECT * FROM `cmo_department` "
                . "where actived ='1' "
                ." and company_id = '$company_id' "
                ." and id != '39' "
                . "order by department asc") or trigger_error(mysql_error());
        while($row = mysql_fetch_array($result)){ 
            foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
            $selected = '';
            if(nl2br($row['id'])==$department_id){ $selected = ' selected ';}
            echo '<option value="'.nl2br($row['id']).'" '.$selected.'>'.nl2br($row['department']).'</option>';
        }
        ?>
</select>