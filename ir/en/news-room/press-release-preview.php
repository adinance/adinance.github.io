<div id="hdr_main">Press Release</div>

<?php 

//$items = array();

?>

<?php
$id = htmlspecialchars(trim($_REQUEST["id"]));
$cond = " where id = '".$id."'";
$arrDetail = getPressRelease($cond);
?>


<div id="corp-content">
<div id="ir-corp-content-box" style="border:0;">
<h2><?=stripslashes($arrDetail[title_en])?></h2>
<?=stripslashes($arrDetail[description_en])?>
<?php if( file_exists("../ir/uploads/press-release/".$arrDetail['file_en']) ){?>
<h2><a href="../ir/uploads/press-release/<?=$arrDetail['file_en']?>" target="_blank">Download</a></h2>
<?php } ?>
<div align="right"><h2>Post on <?=stripslashes($arrDetail[cd])?></h2></div>
</div>
</div>