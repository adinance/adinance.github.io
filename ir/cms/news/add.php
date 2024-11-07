<?php
include "../inc/config_txt.php";
include "../inc/isLogin.php";
require_once "../inc/clsConnection.php";
include "../inc/function.inc.php";
if($_SESSION["s_admin_rule1"] != 1){ 
header("Location:index.php");
exit();
}

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
<script type="text/javascript" src="../fckeditor/fckeditor.js"></script>
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
		var description = $('textarea[name=description]');
		var photo = $('input[name=photo]');
		var news_date = $('input[name=news_date]');
		var status = $('input[name=status]:checked');
		
		
		if (title.val()=='') {
			title.addClass('hightlight');
			title.focus();
			return false;
		} else title.removeClass('hightlight');
		
		if (description.val()=='') {
			description.addClass('hightlight');
			description.focus();
			return false;
		} else description.removeClass('hightlight');
		
		if (photo.val()=='') {
			photo.addClass('hightlight');
			photo.focus();
			return false;
		} else photo.removeClass('hightlight');
		
		if (news_date.val()=='') {
			news_date.addClass('hightlight');
			news_date.focus();
			return false;
		} else news_date.removeClass('hightlight');
		
		
	
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
      <b><a href="../index.php" >Home</a> : News &amp; Activities-&gt; <a href="index.php">News</a> -> Add New</b>
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
      <p>
      <label>Description *</label>
      </p>
     <p>
       <textarea name="description" rows="8" class="form-textarea" id="description"></textarea>
     </p>
     <p>
      <label>Detail</label></p>
     <p>
       <textarea name="detail" class="FCKeditor" id="detail" ></textarea>
     </p>
      <p><b>Photo ( 190 X 130 px)</b></p>
      <p><input type="file" name="photo" id="photo"></p>
      
      <p><b>Photo ( 200 X 210 px)</b></p>
      <p><input type="file" name="thumbnail_1" id="thumbnail_1"></p>
      
      <p><b>Photo ( 200 X 210 px)</b></p>
      <p><input type="file" name="thumbnail_2" id="thumbnail_2"></p>
      
      <p><label>News date*</label> </p>
     <p>
      <input name="news_date" id="news_date" type="text" class="form-input">
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
		$("textarea.FCKeditor").each(function(){
		var oFCKeditor = new FCKeditor(this.name);
		oFCKeditor.BasePath	= '../fckeditor/' ;
		oFCKeditor.Config['SkinPath'] = 'skins/silver/';
		oFCKeditor.Width = '800';
		oFCKeditor.Height = '500px';
		oFCKeditor.ReplaceTextarea() ;
	});
	
	
  });
</script>
