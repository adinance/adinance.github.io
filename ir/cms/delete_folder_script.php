<?php
$folder = $_REQUEST["folder"];
$folder ="../".$folder;
if(rmdir($folder)){
  echo "success";
}else{
	echo "fail";
}

?>
