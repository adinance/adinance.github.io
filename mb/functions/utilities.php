<?php
function evenNumber($number){
    if(is_numeric($number)){
        if($number % 2 == 0){
            return true;
        }else{
            return false;
        }
    }
}
?>
