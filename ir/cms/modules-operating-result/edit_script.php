<?php
//ob_start();
require_once "../inc/config_txt.php";
//require_once "../inc/clsConnection.php";
require_once "../../../inc/mysql-command.php";
require_once "../../../inc/function-ir-document.php";
//require_once "../../../inc/class-upload.php";

require_once "../inc/function.inc.php";
require_once "../inc/isLogin.php";
//require_once "../inc/functionFinancialStatement.inc.php";
include('../_class/class.upload.php');
//require_once "../../../lib/upload/class.upload.php";


$type_id = trim($_REQUEST["type_id"]);
$year = trim($_REQUEST["year"]);
$status = $_REQUEST["status"];
$file_th = $_REQUEST["file_th"];
$file_en = $_REQUEST["file_en"];
$title_th = $_REQUEST["title_th"];
$title_en = $_REQUEST["title_en"];
$url_th = "";
$url_en = "";

//echo $type_id;
//echo "<br>";
//echo $year;
//echo "<br>";
//echo $status;
//echo "<br>";
//echo $file_en;
//echo "<br>";
//echo $file_th;
//echo "<br>";
//echo $title_en;
//echo "<br>";
//echo $title_th;


$id = $_REQUEST["id"];

//echo "<br>";
//echo $id;
//$p = "../../data/irfile/statement/pdf/";
$p = "../../../ir/uploads/financial-statement/";

if(!empty($_FILES["file_th"]["tmp_name"])){
    if(file_exists($p.$file_th)){
        @unlink($p.$file_th);
    }

    $handle = new Upload($_FILES["file_th"]);
    if ($handle->uploaded) {
    // $handle->file_new_name_body   = $year."_".$type_id."_".$id."_th";
    $handle->file_new_name_body   = $year."_op_".$type_id."_0_th";
    $handle->Process($p);
        if ($handle->processed) {
            $file_th = $handle->file_dst_name;
            $handle-> Clean();
        } 
    } 
    
//  $allowedExts = array("pdf");
//$extension = end(explode(".", $_FILES["file_th"]["name"]));
//if ((
//         ($_FILES["file"]["type"] == "application/pdf")
//        || ($_FILES["file"]["type"] == "application/x-pdf")
//        || ($_FILES["file"]["type"] == "application/acrobat")
//        || ($_FILES["file"]["type"] == "applications/vnd.pdf")
//        || ($_FILES["file"]["type"] == "text/pdf")
//        || ($_FILES["file"]["type"] == "text/x-pdf")
//        
//        )
//&& ($_FILES["file_th"]["size"] < 200000000)
//&& in_array($extension, $allowedExts))
//  {
//  if ($_FILES["file_th"]["error"] > 0)
//    {
//    echo "Return Code: " . $_FILES["file_th"]["error"] . "<br>";
//    }
//  else
//    {
//    echo "Upload: " . $_FILES["file_th"]["name"] . "<br>";
//    echo "Type: " . $_FILES["file_th"]["type"] . "<br>";
//    echo "Size: " . ($_FILES["file_th"]["size"] / 1024) . " kB<br>";
//    echo "Temp file: " . $_FILES["file_th"]["tmp_name"] . "<br>";
//
//    if (file_exists("../../../ir/uploads/financial-statement/" . $_FILES["file_th"]["name"]))
//      {
//      echo $_FILES["file_th"]["name"] . " already exists. ";
//      }
//    else
//      {
//      move_uploaded_file($_FILES["file_th"]["tmp_name"],
//      "../../../ir/uploads/financial-statement/" . $_FILES["file_th"]["name"]);
//      echo "Storedหหหห in: " . "../../../ir/uploads/financial-statement/" . $_FILES["file_th"]["name"];
//      }
//    }
//  }
//else
//  {
//  echo "Invalid file";
//  }
}



if(!empty($_FILES["file_en"]["tmp_name"])){
    if(file_exists($p.$file_en)){
        @unlink($p.$file_en);
    }
    
    
    $handle = new Upload($_FILES["file_en"]);
    if ($handle->uploaded) {
    // $handle->file_new_name_body   = $year."_".$type_id."_".$id."_en";
    $handle->file_new_name_body   = $year."_op_".$type_id."_0_en";
    $handle->Process($p);
        if ($handle->processed) {
            $file_en = $handle->file_dst_name;
            $handle-> Clean();
        } 
    } 
}

$update_by = $_SESSION["s_admin_username"];
editIRDocumentRecord($id,$type_id,$year,$file_th,$file_en,$url_th,$url_en,$title_th,$title_en,$status,$update_by);

// Save transaction log
$ip = $_SERVER['REMOTE_ADDR'];
$section = "IR : Financial Statement";
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