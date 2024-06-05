<?php


$perPage = @$_GET['top'];
if($perPage!=''){
    $perPage = @$_GET['top'];
}else{
    $perPage = 40;
}

$page = @$_GET['page'];
if(!@$_GET['page']){
    $page=1;
}

?>
