<?php
require_once "../inc/config_txt.php";
require_once "../../../inc/mysql-command.php";
require_once "../../../inc/function-ir-document.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
include('../_class/class.upload.php');





$type_id = trim($_REQUEST["type_id"]);
$year = trim($_REQUEST["year"]);
$status = $_REQUEST["status"];
$create_date = $_REQUEST["create_date"];
$file_th = "";//$_REQUEST["file_th"];
$file_en = "";//$_REQUEST["file_en"];
$url_th = $_REQUEST["url"];
$url_en = $_REQUEST["url"];
$title_th = $_REQUEST["title_th"];
$title_en = $_REQUEST["title_en"];

$id = $_REQUEST["id"];

$update_by = $_SESSION["s_admin_username"];

function editNewsCliping($id,$type_id,$year,$file_th,$file_en,$url_th,$url_en,$title_th,$title_en,$status,$update_by, $create_date){
	$clsConn= new clsConnection();
	$clsConn->DBInit();
	set_time_limit(10);
	$strSQL = "UPDATE ir_document 
	SET type='$type_id', 
	year='$year', 
	file_th='$file_th', 
	file_en='$file_en', 
	url_th='$url_th', 
	url_en='$url_en', 
	title_th='$title_th', 
	title_en='$title_en', 
	status = '$status' , 
	update_by = '$update_by' , 
	create_date = '$create_date' , 
	update_date = NOW() 
	WHERE id = '$id' ";
	$clsConn->DBquery($strSQL);
	return true;
}

editNewsCliping($id, $type_id, $year, $file_th, $file_en, $url_th, $url_en, $title_th, $title_en, $status, $update_by, $create_date);

// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "IR : News Clipping";
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