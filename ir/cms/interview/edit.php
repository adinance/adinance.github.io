<?php
include "../inc/config_txt.php";
include "../inc/isLogin.php";
require_once "../inc/clsConnection.php";
include "../inc/function.inc.php";
include "../inc/functionNewsActivities.inc.php";
if($_SESSION["s_admin_rule1"] != 1){ 
header("Location:index.php");
exit();
}
$id = htmlspecialchars(trim($_REQUEST["id"]));
$arrDetail = getInterviewDetail(" WHERE id = '$id' ");

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
		var title = $('input[name=title]');
		var file1 = $('input[name=file1]');
		var file2 = $('input[name=file2]');
		var file3 = $('input[name=file3]');
		var month1 = $('select[name=month1]');
		var year1 = $('select[name=year1]');
		var month2 = $('select[name=month2]');
		var year2 = $('select[name=year2]');
		var status = $('input[name=status]:checked');
		
		
		if (title.val()=='') {
			title.addClass('hightlight');
			title.focus();
			return false;
		} else title.removeClass('hightlight');
		
		if (month1.val()=='') {
			month1.addClass('hightlight');
			month1.focus();
			return false;
		} else month1.removeClass('hightlight');
		
		if (year1.val()=='') {
			year1.addClass('hightlight');
			year1.focus();
			return false;
		} else year1.removeClass('hightlight');
		
		
		
	
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
      <b><a href="../index.php" >Home</a> : News &amp; Activities-&gt; <a href="index.php">Interview</a> -> Edit</b>
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
      <label>Title*</label>
      (Maximum 255 characters)</p>
     <p>
      <input name="title" type="text" class="form-input" id="title" value="<?=stripslashes($arrDetail[title])?>">
     </p>
     <p><b>Photo *( 236X243 px)</b></p>
     <p><img src="../../data/interview/photo/<?=$arrDetail[photo]?>">
        <input name="old_file1" type="hidden" id="old_file1" value="<?=$arrDetail[photo]?>">
      </p>
      <p><input name="file1" type="file"  id="file1"></p>
      <p><b>Photo Thumbnail * ( 79X100 px)</b></p>
       <p><img src="../../data/interview/thumb/<?=$arrDetail[thumb]?>">
        <input name="old_file2" type="hidden" id="old_file2" value="<?=$arrDetail[thumb]?>">
      </p>
      <p><input name="file2" type="file" id="file2"></p>
      <p><b>PDF File</b> *</p>
      <p><a href="../../data/interview/pdf/<?=$arrDetail[pdf]?>" target="_blank"><?=$arrDetail[pdf]?></a></p>
        <input name="old_file3" type="hidden" id="old_file3" value="<?=$arrDetail[pdf]?>">
      <p><input name="file3" type="file"  id="file3"></p>
      <p><strong>Month</strong> *</p>
        <p>
        <select name="month1" class="form-input150" id="month1">
          <option value="" selected>--- Select Month---</option>
          <option value="1" <?php if($arrDetail[month1]==1){?> selected <?php } ?>>January</option>
          <option value="2" <?php if($arrDetail[month1]==2){?> selected <?php } ?>>February</option>
          <option value="3" <?php if($arrDetail[month1]==3){?> selected <?php } ?>>March</option>
          <option value="4" <?php if($arrDetail[month1]==4){?> selected <?php } ?>>April</option>
          <option value="5" <?php if($arrDetail[month1]==5){?> selected <?php } ?>>May</option>
          <option value="6" <?php if($arrDetail[month1]==6){?> selected <?php } ?>>June</option>
          <option value="7" <?php if($arrDetail[month1]==7){?> selected <?php } ?>>July</option>
          <option value="8" <?php if($arrDetail[month1]==8){?> selected <?php } ?>>August</option>
          <option value="9" <?php if($arrDetail[month1]==9){?> selected <?php } ?>>September</option>
          <option value="10" <?php if($arrDetail[month1]==10){?> selected <?php } ?>>October</option>
          <option value="11" <?php if($arrDetail[month1]==11){?> selected <?php } ?>>November</option>
          <option value="12" <?php if($arrDetail[month1]==12){?> selected <?php } ?>>December</option>
        </select>
      </p> 
      <p><strong>Year</strong> *</p>
      <p> <select name="year1" class="form-input150" id="year1">
          <option value="" selected>--- Select Year---</option>
          <option value="2011" <?php if($arrDetail[year1]=="2011"){?> selected <?php } ?>>2011</option>
          <option value="2012" <?php if($arrDetail[year1]=="2012"){?> selected <?php } ?>>2012</option>
          <option value="2013" <?php if($arrDetail[year1]=="2013"){?> selected <?php } ?>>2013</option>
          <option value="2014" <?php if($arrDetail[year1]=="2014"){?> selected <?php } ?>>2014</option>
          <option value="2015" <?php if($arrDetail[year1]=="2015"){?> selected <?php } ?>>2015</option>
        </select></p>
        
        <p><strong>Month ( กรณีเป็นนิตยสารราย 2 เดือนขึ้นไป )</strong></p>
        <p>
        <select name="month2" class="form-input150" id="month2">
          <option value="" selected>--- Select Month---</option>
          <option value="1" <?php if($arrDetail[month2]==1){?> selected <?php } ?>>January</option>
          <option value="2" <?php if($arrDetail[month2]==2){?> selected <?php } ?>>February</option>
          <option value="3" <?php if($arrDetail[month2]==3){?> selected <?php } ?>>March</option>
          <option value="4" <?php if($arrDetail[month2]==4){?> selected <?php } ?>>April</option>
          <option value="5" <?php if($arrDetail[month2]==5){?> selected <?php } ?>>May</option>
          <option value="6" <?php if($arrDetail[month2]==6){?> selected <?php } ?>>June</option>
          <option value="7" <?php if($arrDetail[month2]==7){?> selected <?php } ?>>July</option>
          <option value="8" <?php if($arrDetail[month2]==8){?> selected <?php } ?>>August</option>
          <option value="9" <?php if($arrDetail[month2]==9){?> selected <?php } ?>>September</option>
          <option value="10" <?php if($arrDetail[month2]==10){?> selected <?php } ?>>October</option>
          <option value="11" <?php if($arrDetail[month2]==11){?> selected <?php } ?>>November</option>
          <option value="12" <?php if($arrDetail[month2]==12){?> selected <?php } ?>>December</option>
        </select>
      </p> 
      <p><strong>Year ( กรณีเป็นนิตยสารราย 2 เดือนขึ้นไป )</strong></p>
      <p> <select name="year2" class="form-input150" id="year2">
          <option value="" selected>--- Select Year---</option>
          <option value="2011" <?php if($arrDetail[year2]=="2011"){?> selected <?php } ?>>2011</option>
          <option value="2012" <?php if($arrDetail[year2]=="2012"){?> selected <?php } ?>>2012</option>
          <option value="2013" <?php if($arrDetail[year2]=="2013"){?> selected <?php } ?>>2013</option>
          <option value="2014" <?php if($arrDetail[year2]=="2014"){?> selected <?php } ?>>2014</option>
          <option value="2015" <?php if($arrDetail[year2]=="2015"){?> selected <?php } ?>>2015</option>
        </select></p>
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
		//
	
  });
</script>