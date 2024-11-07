<?php
include "../inc/config_txt.php";
include "../inc/isLogin.php";
require_once "../inc/clsConnection.php";
include "../inc/function.inc.php";
if($_SESSION["s_admin_rule1"] != 1){ 
header("Location:index.php");
exit();
}

$type_id = trim($_REQUEST["type_id"]);

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
<script>
var numericExpression = /^[0-9]+$/;

  $().ready(function () {
	  $("#news_date").datepicker({ dateFormat: 'yy-mm-dd' });
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
		var photo = $('input[name=photo]');
		var code = $('input[name=code]');
		var status = $('input[name=status]:checked');
		
		
		if (title.val()=='') {
			title.addClass('hightlight');
			title.focus();
			return false;
		} else title.removeClass('hightlight');
		

		if (photo.val()=='') {
			photo.addClass('hightlight');
			photo.focus();
			return false;
		} else photo.removeClass('hightlight');
		
		
		if (code.val()=='') {
			code.addClass('hightlight');
			code.focus();
			return false;
		} else code.removeClass('hightlight');
		
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
      <b><a href="../index.php" >Home</a> : <a href="index.php">Our Work</a> -> Add New</b>
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
    
    <div id="form-add-area" style="width:900px;">
    <form action="add_script.php" method="post" enctype="multipart/form-data" name="frmAdd" class="form-add"  id="frmAdd" >
     <p style="font-weight:bold; border-bottom:1px solid #666;">* Required field</p>
     
      <p>
      <label>Title*</label> 
      (Maximum 255 characters)</p>
      <p>
      <input name="title" id="title" type="text" class="form-input">
     </p>
      <p><b>Photo ( 120 X 74 px)</b>*</p>
      <p><input type="file" name="photo" id="photo"></p>
      <p><b>Video ID</b>* ( youtube ex. http://www.youtube.com/watch?v=<b><span style="color:#900;">kcuybpODePE</span></b> )</p>
     <p>
      <input name="code" id="code" type="text" class="form-input">
     </p>
	  <p> <label>Status</label></p>
     <p>
        <input name="status" type="radio" id="status" value="1" checked onClick="setStatus('1')">
        Active
        <input name="status" type="radio" id="status" value="2" onClick="setStatus('2')">
        Inactive     </p>
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
