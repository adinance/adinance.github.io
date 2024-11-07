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
		
		if (file1.val()=='') {
			file1.addClass('hightlight');
			file1.focus();
			return false;
		} else file1.removeClass('hightlight');
		
		if (file2.val()=='') {
			file2.addClass('hightlight');
			file2.focus();
			return false;
		} else file2.removeClass('hightlight');
		
		if (file3.val()=='') {
			file3.addClass('hightlight');
			file3.focus();
			return false;
		} else file3.removeClass('hightlight');
		
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
      <b><a href="../index.php" >Home</a> : News &amp; Activities-&gt; <a href="index.php">Newsletter</a> -> Add New</b>
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
      <p><b>Photo *( 236X243 px)</b></p>
      <p><input name="file1" type="file"  id="file1"></p>
      <p><b>Photo Thumbnail * ( 75X100 px)</b></p>
      <p><input name="file2" type="file" id="file2"></p>
      <p><b>URL</b> *</p>
      <p><input name="url" type="text"  ></p>
      <p><strong>Month</strong> *</p>
        <p>
        <select name="month1" class="form-input150" id="month1">
          <option value="" selected>--- Select Month---</option>
          <option value="1">January</option>
          <option value="2">February</option>
          <option value="3">March</option>
          <option value="4">April</option>
          <option value="5">May</option>
          <option value="6">June</option>
          <option value="7">July</option>
          <option value="8">August</option>
          <option value="9">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>
      </p> 
      <p><strong>Year</strong> *</p>
      <p> <select name="year1" class="form-input150" id="year1">
          <option value="" selected>--- Select Year---</option>
          <option value="2011">2011</option>
          <option value="2012">2012</option>
          <option value="2013">2013</option>
          <option value="2014">2014</option>
          <option value="2015">2015</option>
        </select></p>
        
<!--        <p><strong>Month ( กรณีเป็นนิตยสารราย 2 เดือนขึ้นไป )</strong></p>
        <p>
        <select name="month2" class="form-input150" id="month2">
          <option value="" selected>--- Select Month---</option>
          <option value="1">January</option>
          <option value="2">February</option>
          <option value="3">March</option>
          <option value="4">April</option>
          <option value="5">May</option>
          <option value="6">June</option>
          <option value="7">July</option>
          <option value="8">August</option>
          <option value="9">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>
      </p> -->
<!--      <p><strong>Year ( กรณีเป็นนิตยสารราย 2 เดือนขึ้นไป )</strong></p>
      <p> <select name="year2" class="form-input150" id="year2">
          <option value="" selected>--- Select Year---</option>
          <option value="2011">2011</option>
          <option value="2012">2012</option>
          <option value="2013">2013</option>
          <option value="2014">2014</option>
          <option value="2015">2015</option>
        </select></p>-->
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
		//
	
  });
</script>
