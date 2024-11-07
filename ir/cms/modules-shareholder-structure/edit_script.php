<?php
require_once "../inc/config_txt.php";
require_once "../../../inc/mysql-command.php";
require_once "../../../inc/function-ir-document.php";
require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
include('../_class/class.upload.php');

$status = $_REQUEST["status"];
$name_th = $_REQUEST["name_th"];
$name_en = $_REQUEST["name_en"];
$amount = $_REQUEST["amount"];
$percent = $_REQUEST["percent"];
$id = $_REQUEST["id"];

//$update_by = $_SESSION["s_admin_username"];
editIRShareholderRecord($id,$name_th,$name_en,$amount,$percent,$status);

//echo $test;

// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "IR : Annual Report";
$detail = "Edit by ".$_SESSION["s_admin_username"];
transaction_log($section,$detail,$ip);

//echo $status; echo '<br>';
//echo $name_th;echo '<br>';
//echo $name_en;echo '<br>';
//echo $amount;echo '<br>';
//echo $percent;echo '<br>';
//echo $id;

header("Location:index.php");
//$complete="true";
?>

<?php if ($complete=="true"){ ?>
<!--<script type="text/javascript">
	window.location="index.php";
</script>-->
<?php } ?>