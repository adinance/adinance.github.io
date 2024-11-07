<div id="hdr_main">ข่าวแจ้งสื่อมวลชน</div>
<?php
$id = htmlspecialchars(trim($_REQUEST["id"]));
$cond = " where id = '".$id."'";
$arrDetail = getPressRelease($cond);
?>


<div id="corp-content">
<div id="ir-corp-content-box" style="border:0;">
<h2><?=stripslashes($arrDetail[title_th])?></h2>
<?=stripslashes($arrDetail[description_th])?>
<?php if( file_exists("../ir/uploads/press-release/".$arrDetail['file_th']) ){?>
<h2><a href="../ir/uploads/press-release/<?=$arrDetail['file_th']?>" target="_blank">ดาวน์โหลด</a></h2>
<?php } ?>
<div align="right"><h2>Post on <?=stripslashes($arrDetail[cd])?></h2></div>
</div>
</div>


