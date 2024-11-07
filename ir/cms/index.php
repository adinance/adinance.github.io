<?php
include "inc/config_txt.php";
include "inc/isLogin.php";
require_once "../../inc/mysql-command.php";
require_once "../../inc/function-ir-document.php";
include "inc/function.inc.php";
include "inc/functionUser.inc.php";
include "inc/functionNewsActivities.inc.php";

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=CHARSET?>">
<meta name="description" content="<?=$content_description?>" /> 
<meta name="keywords" content="<?=$content_keywords?>" /> 
<title><?=TITLE?></title>
<link href="css/site.css" rel="stylesheet" type="text/css">
<link href="css/layout-login.css" rel="stylesheet" type="text/css">
<!--[if IE]>
        <link rel="stylesheet" type="text/css" href="css/all-ie-only.css" />
<![endif]-->
<link rel="stylesheet" type="text/css" href="yui/build/reset-fonts-grids/reset-fonts-grids.css" />
<link rel="stylesheet" type="text/css" href="yui/build/resize/assets/skins/sam/resize.css" />
<link rel="stylesheet" type="text/css" href="yui/build/layout/assets/skins/sam/layout.css" />
<link rel="stylesheet" type="text/css" href="yui/build/button/assets/skins/sam/button.css" />
<script type="text/javascript" src="yui/build/yahoo/yahoo-min.js"></script>
<script type="text/javascript" src="yui/build/event/event-min.js"></script>
<script type="text/javascript" src="yui/build/dom/dom-min.js"></script>
<script type="text/javascript" src="yui/build/element/element-min.js"></script>
<script type="text/javascript" src="yui/build/dragdrop/dragdrop-min.js"></script>
<script type="text/javascript" src="yui/build/resize/resize-min.js"></script>
<script type="text/javascript" src="yui/build/animation/animation-min.js"></script>
<script type="text/javascript" src="yui/build/layout/layout-min.js"></script>
<script type="text/javascript" src="ui/ui.core.js"></script>
<script type="text/javascript" src="ui/ui.datepicker.js"></script>
<link type="text/css" href="themes/base/ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/interface.js"></script>
<script type="text/javascript" src="js/jquery.corner.js?v2.11"></script>
<style>
.groupWrapper
{
	width: 32%;
	float: left;
	margin-right: 1%;
	min-height: 400px;
}
.serializer
{
	clear: both;
}
.groupItem
{
	margin-bottom: 20px;
	-moz-box-shadow: 0 0 5px 5px #ddd;
	-webkit-box-shadow: 0 0 5px 5px #ddd;
	box-shadow: 0 0 5px 5px #ddd;
	border:1px solid #ccc;
}
.groupItem .itemHeader
{
	line-height: 28px;
	background-color: #ccc;
	border-top: 2px solid #09C;
	color: #666;
	padding: 0 10px;
	cursor: move;
	font-weight: bold;
	font-size: 13px;
	height: 28px;
	position: relative;
	
}

.groupItem .itemHeader a
{
	
	color: #666;
	text-decoration: none;
}
.closeEl{
	position: absolute;
	right: 10px;
	top: 0px;
	font-weight: normal;
	font-size: 11px;
	text-decoration: none;
}
.groupItem .itemContent
{
	padding:10px;
	
}
.sortHelper
{
	border: 3px dashed #666;
	width: auto !important;
}
.groupWrapper p
{
	height: 1px;
	overflow: hidden;
	margin: 0;
	padding: 0;
}
ul.home-nav-list{
	
}
ul.home-nav-list li.col1{
	width:220px;
	float:left;
}
ul.home-nav-list li.col2{
	width:60px;
	float:left;
}
.most-pop-img{
	padding 2px;
	border:1px solid #ccc;
}
.nav-box{
	width:240px;
	padding:10px;
	background:#C9C9C9;
	color:#666;
	float:left;
	margin-right:10px;
	margin-bottom:10px;
}
.ir-nav-box{
	width:210px;
	padding:10px;
	background:#C9C9C9;
	color:#666;
	float:left;
	margin-right:10px;
	margin-bottom:10px;
}
h2{ font-size:13px; font-weight:bold; }
</style>
</head>
<body class=" yui-skin-sam">
<div id="top1"><?php include "header.php"; ?></div>
<div id="bottom1"><?php include "footer.php"; ?></div>
<div id="left1">
   <?php include "navleft.php"; ?>
</div>
<div id="center1">
  <div style="padding:20px;">
    <div style="padding-bottom:20px; font-weight:bold; color:#666;">Welcome :<?=$_SESSION["s_admin_username"]?></div>
    <!-- main container-->
    <div style="width:900px;">
    <!-- Member--><!-- Homepage--><!-- About : A message from our CIO--><!-- About : Our Directors--><!-- About : Our Team--><!-- About : Our Activities-->
    <div class="ir-nav-box">
    <p><h2>Annual Report</h2></p>
    <p>Total <a href="<?=$path?>modules-annual-report/index.php">(<?=countIRDocumentConfigurationStatus('','4')?>)</a> | Active <a href="<?=$path?>modules-annual-report/index.php?actived=1">(<?=countIRDocumentConfigurationStatus('1','4')?>)</a> | Inactive <a href="<?=$path?>modules-annual-report/index.php?actived=0">(<?=countIRDocumentConfigurationStatus('0','4')?>)</a></p>
    </div>
    
    <div class="ir-nav-box">
    <p><h2>Financial Statement</h2></p>
    <p>Total <a href="<?=$path?>modules-financial-statement/index.php">(<?=countIRDocumentConfigurationStatus('','1')?>)</a> | Active <a href="<?=$path?>modules-financial-statement/index.php?actived=1">(<?=countIRDocumentConfigurationStatus('1','1')?>)</a> | Inactive <a href="<?=$path?>modules-financial-statement/index.php?actived=0">(<?=countIRDocumentConfigurationStatus('0','1')?>)</a></p>
    </div>
    
    <div class="ir-nav-box">
    <p><h2>Form 56-1</h2></p>
    <p>Total <a href="<?=$path?>modules-form56-1/index.php">(<?=countIRDocumentConfigurationStatus('','3')?>)</a> | Active <a href="<?=$path?>modules-form56-1/index.php?actived=1">(<?=countIRDocumentConfigurationStatus('1','3')?>)</a> | Inactive <a href="<?=$path?>modules-form56-1/index.php?actived=0">(<?=countIRDocumentConfigurationStatus('0','3')?>)</a></p>
    </div>
    
    <div class="ir-nav-box">
    <p><h2>Invitation</h2></p>
    <p>Total <a href="<?=$path?>modules-invitation/index.php">(<?=countIRDocumentConfigurationStatus('','8')?>)</a> | Active <a href="<?=$path?>modules-invitation/index.php?actived=1">(<?=countIRDocumentConfigurationStatus('1','8')?>)</a> | Inactive <a href="<?=$path?>modules-invitation/index.php?actived=0">(<?=countIRDocumentConfigurationStatus('0','8')?>)</a></p>
    </div>
    
    <div class="ir-nav-box">
    <p><h2>News Clipping</h2></p>
    <p>Total <a href="<?=$path?>modules-news-clipping/index.php">(<?=countIRDocumentConfigurationStatus('','7')?>)</a> | Active <a href="<?=$path?>modules-news-clipping/index.php?actived=1">(<?=countIRDocumentConfigurationStatus('1','7')?>)</a> | Inactive <a href="<?=$path?>modules-news-clipping/index.php?actived=0">(<?=countIRDocumentConfigurationStatus('0','7')?>)</a></p>
    </div>
    
    
    
    <div class="ir-nav-box">
    <p><h2>Operating Result</h2></p>
    <p>Total <a href="<?=$path?>modules-operating-result/index.php">(<?=countIRDocumentConfigurationStatus('','2')?>)</a> | Active <a href="<?=$path?>modules-operating-result/index.php?actived=1">(<?=countIRDocumentConfigurationStatus('1','2')?>)</a> | Inactive <a href="<?=$path?>modules-operating-result/index.php?actived=0">(<?=countIRDocumentConfigurationStatus('0','2')?>)</a></p>
    </div>
    
    <div class="ir-nav-box">
    <p><h2>Press Release</h2></p>
    <p>Total <a href="<?=$path?>modules-press-release/index.php">(<?=countIRDocumentConfigurationStatus('','6')?>)</a> | Active <a href="<?=$path?>modules-press-release/index.php?actived=1">(<?=countIRDocumentConfigurationStatus('1','6')?>)</a> | Inactive <a href="<?=$path?>modules-press-release/index.php?actived=0">(<?=countIRDocumentConfigurationStatus('0','6')?>)</a></p>
    </div>
    
    <div class="ir-nav-box">
    <p><h2>Set Notification</h2></p>
    <p>Total <a href="<?=$path?>modules-set-notification/index.php">(<?=countIRDocumentConfigurationStatus('','5')?>)</a> | Active <a href="<?=$path?>modules-set-notification/index.php?actived=1">(<?=countIRDocumentConfigurationStatus('1','5')?>)</a> | Inactive <a href="<?=$path?>modules-set-notification/index.php?actived=0">(<?=countIRDocumentConfigurationStatus('0','5')?>)</a></p>
    </div>
    
     <!-- Fund : Information-->
    
     <!-- Fund : Information-->
    <div class="ir-nav-box">
    <p><h2>The Resolutions</h2></p>
    <p>Total <a href="<?=$path?>modules-resolutions/index.php">(<?=countIRDocumentConfigurationStatus('','9')?>)</a> | Active <a href="<?=$path?>modules-resolutions/index.php?actived=1">(<?=countIRDocumentConfigurationStatus('1','9')?>)</a> | Inactive <a href="<?=$path?>modules-resolutions/index.php?actived=0">(<?=countIRDocumentConfigurationStatus('0','9')?>)</a></p>
    </div>
    

	  <!-- Fund : Information-->
	  <div class="ir-nav-box">
    <p><h2>The minutes of Annual General Meeting</h2></p>
    <p>Total <a href="<?=$path?>modules-report/index.php">(<?=countIRDocumentConfigurationStatus('','10')?>)</a> | Active <a href="<?=$path?>modules-report/index.php?actived=1">(<?=countIRDocumentConfigurationStatus('1','10')?>)</a> | Inactive <a href="<?=$path?>modules-report/index.php?actived=0">(<?=countIRDocumentConfigurationStatus('0','10')?>)</a></p>
    </div>
    
    </div>
    
    
    
    
    <!-- main container-->
      </div>
</div>
<?php include("footer.php"); ?>

</body>
</html>
