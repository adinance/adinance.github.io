<?php
require_once "../inc/config_txt.php";
require_once "../../../inc/mysql-command.php";
require_once "../../../inc/function-ir-document.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
include('../_class/class.upload.php');

//$type_id = trim($_REQUEST["type_id"]);
$year = trim($_REQUEST["year"]);
$status = $_REQUEST["status"];
$file_th = $_REQUEST["file_th"];
$file_en = $_REQUEST["file_en"];
$title_th = $_REQUEST["title_th"];
$title_en = $_REQUEST["title_en"];
$id = $_REQUEST["id"];


//$p = "../../../ir/uploads/annual-report/";

$p = "../../../ir/uploads/document_corporate/";

if(!empty($_FILES["file_th"]["tmp_name"])){
    if(file_exists($p.$file_th)){
        @unlink($p.$file_th);
    }
    $handle = new Upload($_FILES["file_th"]);
    if ($handle->uploaded) {
    $handle->file_new_name_body = $year."_as_".$id."_th";
    $handle->Process($p);
        if ($handle->processed) {
            $file_th = $handle->file_dst_name;
            $handle-> Clean();
        } 
    } 
}

if(!empty($_FILES["file_en"]["tmp_name"])){
    if(file_exists($p.$file_en)){
        @unlink($p.$file_en);
    }
    
    $handle = new Upload($_FILES["file_en"]);
    if ($handle->uploaded) {
    $handle->file_new_name_body = $year."_as_".$id."_en";
    $handle->Process($p);
        if ($handle->processed) {
            $file_en = $handle->file_dst_name;
            $handle-> Clean();
        } 
    } 
}

$update_by = $_SESSION["s_admin_username"];
editIRDocumentCor($id,$year,$file_th,$file_en,$title_th,$title_en,$status,$update_by);

// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "IR : Annual Report";
$detail = "Edit by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);

header("Location:index.php");
//$complete="true";
?>

<?php if ($complete=="true"){ ?>
<!--<script type="text/javascript">
	window.location="index.php";
</script>-->
<?php } ?>