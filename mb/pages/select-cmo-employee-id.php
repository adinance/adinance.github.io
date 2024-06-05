<select name="employee_id" id="employee_id" >
        <?php 
        $result = mysql_query("SELECT * FROM `cmo_employee` where email != 'Resign' order by firstname_th asc ") or trigger_error(mysql_error());
        while($row = mysql_fetch_array($result)){ 
            foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
            $selected = '';
            if(nl2br($row['id'])==$department_id){ $selected = ' selected ';}
            echo '<option value="'.nl2br($row['id']).'" '.$selected.'>'.nl2br($row['firstname_th']).' '.nl2br($row['lastname_th']).'</option>';
        }
        ?>
</select>