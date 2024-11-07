<?php
include "../inc/config_txt.php";
include "../inc/isLogin.php";
require_once "../inc/clsConnection.php";
include "../inc/function.inc.php";
require_once "../inc/functionFamily.inc.php";
if($_SESSION["s_admin_rule1"] != 1){ 
header("Location:index.php");
exit();
}
$id = htmlspecialchars(trim($_REQUEST["id"]));
$arrDetail = getFamilyDetail(" WHERE id = '$id' ");
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
		var name = $('input[name=name]');
		var detail = $('textarea[name=detail]');
		var logo = $('input[name=logo]');
		var photo = $('input[name=photo]');
		var url = $('input[name=url]');
		var status = $('input[name=status]:checked');
		
		
		if (type_id.val()=='') {
			type_id.addClass('hightlight');
			type_id.focus();
			return false;
		} else type_id.removeClass('hightlight');
		
		
		if (name.val()=='') {
			name.addClass('hightlight');
			name.focus();
			return false;
		} else name.removeClass('hightlight');
		
		
		
		
		
		if (nicEditors.findEditor('detail').getContent() =='') {
			detail.addClass('hightlight');
			detail.focus();
			return false;
		} else detail.removeClass('hightlight');
		
		document.getElementById("detailval").value = nicEditors.findEditor('detail').getContent() ;
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
      <b><a href="../index.php" >Home</a> :  <a href="index.php">Our Family</a> -> Edit</b>
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
      <label>Type*</label></p>
      <p>
      <select name="type_id" class="form-search" id="type_id">
          <option value="" selected>ALL</option>
          <option value="1" <?php if($arrDetail[type_id]==1){?> selected <?php } ?> >EVENT MANAGEMENT</option>
          <option value="2" <?php if($arrDetail[type_id]==2){?> selected <?php } ?>>EVENT SUPPLY</option>
        </select>
     </p>
      <p>
      <label>Name*</label>
      (Maximum 255 characters)</p>
     <p>
      <input name="name" type="text" class="form-input" id="name" value="<?=stripslashes($arrDetail[name])?>">
     </p>
     <p>
      <label>Detail *</label>
     </p>
     <p>
      
        <textarea name="detail" rows="8" class="form-textarea" id="detail" style="background-color:#FFF;"><?=stripslashes($arrDetail[detail])?></textarea>
       <input type="hidden" name="detailval" id="detailval" value="<?=stripslashes($arrDetail[detail])?>">
     </p>
      <p><b>Logo</b>*</p>
      <p>
      <img src="../../data/family/logo/<?=$arrDetail[logo]?>">
      <input name="old_logo" type="hidden" id="old_logo" value="<?=$arrDetail[logo]?>">
      </p>
      <p><input type="file" name="logo" id="logo"></p>
      <p><b>Photo ( 605 X440 px)</b></p>
      <p><img src="../../data/family/photo/<?=$arrDetail[photo]?>" width="50%" height="50%">
        <input name="old_photo" type="hidden" id="old_photo" value="<?=$arrDetail[photo]?>">
      </p>
      <p><input type="file" name="photo" id="photo"></p>
      <p><label>URL</label> </p>
     <p>
      <input name="url" id="url" type="text" class="form-input" value="<?=stripslashes($arrDetail[url])?>">
     </p>
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