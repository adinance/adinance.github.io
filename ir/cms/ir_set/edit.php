<?php
include "../inc/config_txt.php";
include "../inc/isLogin.php";
require_once "../inc/clsConnection.php";
include "../inc/function.inc.php";
require_once "../inc/functionIRSET.inc.php";
if($_SESSION["s_admin_rule1"] != 1){ 
header("Location:index.php");
exit();
}
$id = htmlspecialchars(trim($_REQUEST["id"]));
$arrDetail = getIRSETDetail(" WHERE id = '$id' ");
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
<script type="text/javascript" src="../js/checkRegUser.js"></script>
<script type="text/javascript" src="../js/checkSearch.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery.corner.js"></script>
<script type="text/javascript" src="../ui/ui.datepicker.js"></script>
<script type="text/javascript" src="../js/nicEdit.js"></script>
<script type="text/javascript" src="../js/ajax.js"></script>
<script>
function  checkType(str){
	var pos = str.lastIndexOf(".");
	var ext = str.substr(pos);
	switch (ext)
	{
	case ".pdf":
	case ".zip":
	return true;
	break;
	default:
	return false;
	break;
	}
}
var numericExpression = /^[0-9]+$/;

  $().ready(function () {
	 $("#addnew-button").corner("15px");
	 $("#add-button").corner("15px");
	 $("#cancel-button").corner("15px");
	 $("#form-add-area").corner("5px");
	 $("#addnew-button").click(function(){
				window.location ="add.php";						
	 });
	 $("#addnew-button").hover(
        function() {            
            $(this).addClass('active');  
      });
	 $("#addnew-button").mouseout(
        function() {            
            $(this).removeClass('active');  
      });
	 
	 // Save 
	 
	 $("#add-button").click(function(){
		//Get the data from all the fields
		var title = $('input[name=title]');
		var pdf = $('input[name=pdf]');
		var status = $('input[name=status]:checked');
		
		//var title0 = nicEditors.findEditor('title0').getContent();
		
		if(title.val() ==""){
	       title.addClass('hightlight');
			title.focus();
			return false;
		} else title.removeClass('hightlight');
		
		if(pdf.val() !="" && !checkType(pdf.val())){
	        alert("PDF File only.");
	        pdf.addClass('hightlight');
			pdf.focus();
			return false;
		} else pdf.removeClass('hightlight');
		
		//document.getElementById("title").value = title0;
	    $('#frmAdd').submit();
	 });
	   
	   
  });
  
function setStatus(val){
	document.getElementById("status_val").value = val;
}
</script>
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
      <b><a href="../index.php" >Home</a> :  Financecial Information -&gt; <a href="index.php">SET Information</a> -> Edit</b>
      </td>
      <td align="right" valign="top" class="txt-search-12-black" style="padding: 10px 20px 0px 20px"><b>Welcome :</b>
        <?=$_SESSION["s_admin_username"]?></td>
    </tr>
    <tr>
      <td align="left" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px"></td>
      <td align="right" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px"><div id="addnew-button" >Add New</div></td>
    </tr>
  <tr>
    <td colspan="2" align="left" valign="top" class="txt-content-11-black" style="padding: 0px 20px 0px 20px;">
    
    <div id="form-add-area" style="width:850px;">
    <form action="edit_script.php" method="post" enctype="multipart/form-data" name="frmAdd" class="form-add"  id="frmAdd" >
     <p style="font-weight:bold; border-bottom:1px solid #666;">* Required field</p>
     
     <p>
      <b>Title*</b>
      </p>
      <p>
        <input name="title" type="text" class="form-user" id="title" value="<?=htmlspecialchars(stripslashes($arrDetail[title]))?>">
      </p>
      
      <p><b>PDF or zip File for download</b></p>
      <p>
      <?php if($arrDetail[pdf] !=""){?>
        <a href="../../data/irfile/news/pdf/<?=$arrDetail[pdf]?>" target="_blank"><?=$arrDetail[pdf]?></a>
       <?php } else{ ?>No file <?php } ?>
        <input name="old_pdf" type="hidden" id="old_pdf" value="<?=$arrDetail[pdf]?>">
        </p>
      <p><input type="file" name="pdf" id="pdf"></p>
	  <p> <label>Status</label></p>
     <p>
        <input name="status" type="radio" id="status" value="1"  <?php if($arrDetail[status]==1){?>checked<?php } ?>>
        Active
        <input name="status" type="radio" id="status" value="2" <?php if($arrDetail[status]==2){?>checked<?php } ?>>
        Inactive     
        <input name="id" type="hidden" id="id" value="<?=$id?>">
     </p>
     <p>
        <div id="add-button" >Save</div>
        <div id="cancel-button" >Cancel</div>
        <div class="loading"></div>
     </p>
     <div class="clearfix"></div>
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
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
});
</script>