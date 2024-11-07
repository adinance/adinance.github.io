<div id="hdr_main">Investor Information</div>
<?php
$cond = " ";
$arrDetail = getInvestorInformation($cond);
?>
<?php echo stripslashes($arrDetail['detail_en'])?>

