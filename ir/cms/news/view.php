<?php
include "../inc/config_txt.php";
include "../inc/isLogin.php";
require_once "../inc/clsConnection.php";
include "../inc/function.inc.php";
include "../inc/functionActivities.inc.php";

$id = htmlspecialchars(trim($_REQUEST["id"]));
$arrDetail = getActivitiesDetail(" WHERE id = '$id' ");

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
		var type_id = $('select[name=type_id]');
		var title = $('input[name=title]');
		var description = $('textarea[name=description]');
		var photo = $('input[name=photo]');
		var status = $('input[name=status]:checked');
		
		if (type_id.val()=='') {
			type_id.addClass('hightlight');
			type_id.focus();
			return false;
		} else type_id.removeClass('hightlight');
		
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
      <b><a href="../index.php" >Home</a> : About -&gt; <a href="index.php">On-sits visits</a> -> View</b>
      </td>
      <td align="right" valign="top" class="txt-search-12-black" style="padding: 10px 20px 0px 20px"><b>Welcome :</b>
        <?=$_SESSION["s_admin_username"]?></td>
    </tr>
    <tr>
      <td align="left" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px"></td>
      <td align="right" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px">
      <?php if($_SESSION["s_admin_rule1"] == 1){  ?>
      <div id="addnew-button" >Add New</div>
      <?php } ?>
      </td>
    </tr>
  <tr>
    <td colspan="2" align="left" valign="top" class="txt-content-11-black" style="padding: 0px 20px 0px 20px;">
    
    <div id="form-add-area" style="width:850px;">
    <form action="edit_script.php" method="post" enctype="multipart/form-data" name="frmAdd" class="form-add"  id="frmAdd" >
     <p style="font-weight:bold; border-bottom:1px solid #666;">* Required field</p>
 
      <p>
      <label>Title*</label></p>
     <p>
      <input name="title" type="text" class="form-input" id="title" value="<?=$arrDetail[title]?>">
     </p>
     <p>
      <label>Description *</label></p>
     <p>
       <textarea name="description" rows="8" class="form-textarea" id="description"><?=stripslashes($arrDetail[description])?></textarea>
     </p>
      <p>
      <label>Detail *</label></p>
     <p>
       <textarea name="detail" rows="8" class="FCKeditor" id="detail"><?=stripslashes($arrDetail[detail])?></textarea>
     </p>
      <p><b>Photo ( 130 X 130 px)</b></p>
      <p><img src="../../data/activities/<?=$arrDetail[photo]?>">
        <input name="old_photo" type="hidden" id="old_photo" value="<?=$arrDetail[photo]?>">
      </p>
      <p><b>Photo ( 200 X 210 px)</b></p>
      <p><img src="../../data/activities/<?=$arrDetail[thumbnail_1]?>">
        <input name="thumbnail_1" type="hidden" id="thumbnail_1" value="<?=$arrDetail[thumbnail_1]?>">
      </p>
      <p><b>Photo ( 200 X 210 px)</b></p>
      <p><img src="../../data/activities/<?=$arrDetail[thumbnail_2]?>">
        <input name="thumbnail_2" type="hidden" id="thumbnail_2" value="<?=$arrDetail[thumbnail_2]?>">
      </p>
      <p> <label>Status</label></p>
     <p>
        <input name="status" type="radio" id="status" value="1"  <?php if($arrDetail[status]==1){?>checked<?php } ?>>
        Active
        <input name="status" type="radio" id="status" value="2" <?php if($arrDetail[status]==2){?>checked<?php } ?>>
        Inactive     
        <input name="id" type="hidden" id="id" value="<?=$id?>">
     </p>
     <?php if($_SESSION["s_admin_rule1"] == 1){  ?>
     <p>
        <div id="add-button" >Save</div>
        <div id="cancel-button" >Cancel</div>
        <div class="loading"></div>
     </p>
     <?php } ?>
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