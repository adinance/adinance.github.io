<?php
$file = $_REQUEST["file"];
$file = "../".$file;
if(file_exists($file)){
  @unlink($file);
  echo "success";
}else{
	echo "fail";
}

?>
