<?php

$srcfile='/eit/images/upload/employee/person.gif';
$dstfile='/eit/person.gif';
mkdir(dirname($dstfile), 0777, true);
copy($srcfile, $dstfile);

?>
