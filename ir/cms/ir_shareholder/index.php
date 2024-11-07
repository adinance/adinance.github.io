<?php
require_once "../inc/config_txt.php";
require_once "../inc/isLogin.php";
require_once "../inc/clsConnection.php";
require_once "../inc/function.inc.php";
require_once "../inc/functionShareHolder.inc.php";

// Condition  
$cond= " ";
// Call getContent
$arrDetail = getShareHolder($cond); 

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=CHARSET?>">
<meta name="description" content="<?=$content_description?>" /> 
<meta name="keywords" content="<?=$content_keywords?>" /> 
<title><?=TITLE?></title>
<link href="../css/site.css" rel="stylesheet" type="text/css">
<?php include "../inc/yui.php" ?>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery.corner.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript" src="../fckeditor/fckeditor.js"></script>
<style>
p{ padding:5px; font-weight:bold; }

</style>
</head>
<body class=" yui-skin-sam">
<div id="top1"><?php include "../header.php"; ?></div>
<div id="bottom1"><?php include "../footer.php"; ?></div>
<div id="left1">
<?php include "../navleft.php"; ?>
</div>
<div id="center1">
  <!-- main container-->
  <table width="95%"  border="0" cellspacing="0" cellpadding="0">
   <tr>
      <td align="left" valign="top" class="txt-content-12-black"  style="padding: 10px 20px 0px 20px">
      <b><a href="../index.php" >Home</a> : Investor Relations-&gt;</b>
      <b>Shareholder Information</b></td>
      <td align="right" valign="top" class="txt-search-12-black" style="padding: 10px 20px 0px 20px"><b>Welcome :</b>
        <?=$_SESSION["s_admin_username"]?></td>
    </tr>
  <tr>
    <td colspan="2" align="left" valign="top" class="txt-content-11-black" style="padding: 20px"> 
    <div id="form-add-area" style="width:860px;">
    <form action="update_script.php" method="post" enctype="multipart/form-data" name="frmAdd" id="frmAdd">
   
    <p>Content</p>
    <p><textarea name="detail" cols="50" rows="10" id="detail" class="FCKeditor"><?=stripslashes($arrDetail[detail])?>
    </textarea></p>
  
   <?php if($_SESSION["s_admin_rule1"] == 1){ ?>
    <p><div id="add-button" >Save</div></p>
    <?php } ?>
    
    
    </form>
    </div>
    </td>
  </tr>
  </table>	   
</div>
</body>
</html>
<script>
  $().ready(function () {
	    $("#add-button").corner("15px");
		$("#form-add-area").corner("5px"); 
		$("textarea.FCKeditor").each(function(){
		var oFCKeditor = new FCKeditor(this.name);
		oFCKeditor.BasePath	= '../fckeditor/' ;
		oFCKeditor.Config['SkinPath'] = 'skins/silver/';
		oFCKeditor.Width = '820';
		oFCKeditor.Height = '500px';
		oFCKeditor.ReplaceTextarea() ;
	});
	
	$("#add-button").click(function(){
		$('#frmAdd').submit();					
	 });
	 $("#add-button").hover(
        function() {            
            $(this).addClass('active');  
      });
	 $("#add-button").mouseout(
        function() {            
            $(this).removeClass('active');  
      });
  });
</script>