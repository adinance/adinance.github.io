<?php
require_once "../inc/config_txt.php";
require_once "../../../inc/mysql-command.php";
//require_once "../../../inc/function-ir-document.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
include('../_class/class.upload.php');

$file_banner = $_REQUEST["file_banner"];
$p = "../../../image/";

if(!empty($_FILES["file_banner"]["tmp_name"])){
    if(file_exists($p.$file_banner)){
        unlink($p.$file_banner);
    }
}

$handle = new Upload($_FILES["file_banner"]);
    // resize
if ($handle->uploaded) {
$handle->file_new_name_body = "banner";
$handle->image_resize = true;
if($handle->image_src_x > 850){
    $handle->image_x = 850;
}else{
    $handle->image_x = $handle->image_src_x;	
}
$handle->image_y               = 150;
//$handle->image_ratio_y      = true;	
$handle->image_ratio_fill      = true;
$handle->image_background_color = '#ffffff';

// process
$handle->Process($p);
    if ($handle->processed) {
        $file_banner = $handle->file_dst_name;
        $handle-> Clean();
    } 
} 

// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "IR : Banner";
$detail = "Edit Banner by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);

//header("Location : edit.php");
$complete="true";
?>

<?php if ($complete=="true"){ ?>
<script type="text/javascript">
	window.location="edit.php";
</script>
<?php } ?>