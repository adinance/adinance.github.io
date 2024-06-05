<?php
$numRecord = @mysql_num_rows($result);
$previousPage = $page-1;
$nextPage = $page+1;
$startPage = (($perPage*$page)-$perPage);
if($numRecord<=$perPage){
    $numPage = 1;
}else if(($numRecord % $perPage)==0){
    $numPage = ($numRecord/$perPage) ;
}else{
    $numPage =($numRecord/$perPage)+1;
    $numPage =(int)$numPage;
}
?>