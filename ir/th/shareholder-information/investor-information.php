<div id="hdr_main">ข้อมูลพื้นฐานนักลงทุนสัมพันธ์</div>
<?php
$cond = " ";
$arrDetail = getInvestorInformation($cond);
?>
<?php echo stripslashes($arrDetail['detail_th'])?>