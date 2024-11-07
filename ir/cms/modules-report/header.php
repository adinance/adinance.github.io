<?php
require_once "../inc/config_txt.php";
require_once "../inc/isLogin.php";
require_once "../../../inc/mysql-command.php";
require_once "../../../inc/function-ir-document.php";
require_once "../inc/function.inc.php";
//require_once "../inc/functionFinancialStatement.inc.php";
require_once "../inc/functionFinancialStatement.inc.php";
require_once "../inc/pagination.php";
//include('../_class/class.upload.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET?>">
<meta name="description" content="<?php echo $content_description?>" /> 
<meta name="keywords" content="<?php echo $content_keywords?>" /> 
<title><?php echo TITLE?></title>
<link href="../css/site.css" rel="stylesheet" type="text/css">
<?php include "../inc/yui.php" ?>
<script type="text/javascript" src="../js/checkRegUser.js"></script>
<script type="text/javascript" src="../js/checkSearch.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery.corner.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript" src="../ui/ui.datepicker.js"></script>
<script type="text/javascript" src="../js/nicEdit.js"></script>
<script type="text/javascript" src="../js/ajax.js"></script>

</head>
<body class=" yui-skin-sam">
<div id="top1"><?php include "../header.php"; ?></div>
<div id="bottom1"><?php include "../footer.php"; ?></div>
<div id="left1">
<?php include "../navleft.php"; ?>
</div>