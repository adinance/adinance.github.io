<?php
include "../inc/config_txt.php";
include "../inc/isLogin.php";
//require_once "../inc/clsConnection.php";
require_once "../../../inc/mysql-command.php";
include "../inc/function.inc.php";
require_once "../inc/functionFinancialStatement.inc.php";
if($_SESSION["s_admin_rule1"] != 1){ 
header("Location:index.php");
exit();
}
$id = htmlspecialchars(trim($_REQUEST["id"]));
$arrDetail = getStatementDetail(" WHERE id = '$id' ");
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

		//Get the data from all the fields
		var type_id = $('select[name=type_id]');
		var year = $('select[name=year]');
		var pdf1 = $('input[name=pdf1]');
		var pdf2 = $('input[name=pdf2]');
		var pdf3 = $('input[name=pdf3]');
		var pdf4 = $('input[name=pdf4]');
		var status = $('input[name=status]:checked');
		
		
		if (type_id.val()=='') {
			type_id.addClass('hightlight');
			type_id.focus();
			return false;
		} else type_id.removeClass('hightlight');
		

		if (year.val()=='') {
			year.addClass('hightlight');
			year.focus();
			return false;
		} else year.removeClass('hightlight');
		
		
	/*	if (pdf1.val()=='') {
			pdf1.addClass('hightlight');
			pdf1.focus();
			return false;
		} else pdf1.removeClass('hightlight');*/
		
		if(pdf1.val() !="" && !checkType(pdf1.val())){
	        alert("PDF File only.");
	        pdf1.addClass('hightlight');
			pdf1.focus();
			return false;
		} else pdf1.removeClass('hightlight');
		
		
		/*if (pdf2.val()=='') {
			pdf2.addClass('hightlight');
			pdf2.focus();
			return false;
		} else pdf2.removeClass('hightlight');*/
		
		if(pdf2.val() !="" && !checkType(pdf2.val())){
	        alert("PDF File only.");
	        pdf2.addClass('hightlight');
			pdf2.focus();
			return false;
		} else pdf2.removeClass('hightlight');
		
		/*if (pdf3.val()=='') {
			pdf3.addClass('hightlight');
			pdf3.focus();
			return false;
		} else pdf3.removeClass('hightlight');*/
		
		if(pdf3.val() !="" && !checkType(pdf3.val())){
	        alert("PDF File only.");
	        pdf3.addClass('hightlight');
			pdf3.focus();
			return false;
		} else pdf3.removeClass('hightlight');
		
	/*	if (pdf4.val()=='') {
			pdf4.addClass('hightlight');
			pdf4.focus();
			return false;
		} else pdf4.removeClass('hightlight');*/
		
		if(pdf4.val() !="" && !checkType(pdf4.val())){
	        alert("PDF File only.");
	        pdf4.addClass('hightlight');
			pdf4.focus();
			return false;
		} else pdf4.removeClass('hightlight');
		
		
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
      <b><a href="../index.php" >Home</a> :  Financecial Information -&gt; <a href="index.php">Financial Statement</a> -> Edit</b>
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
      <b>Type*</b>
      </p>
      <p>
        <select name="type_id" class="form-user" id="type_id">
          <option value="" selected>--Select--</option>
          <option value="1" <?php if($arrDetail[type_id]==1){?> selected <?php }?> >FINANCIAL STATEMENT</option>
          <option value="2" <?php if($arrDetail[type_id]==2){?> selected <?php }?>>MD&amp;A</option>
        </select>
      </p>
      <b>Year*</b>
      </p>
      <p>
       
        <select name="year" class="form-user" id="year">
          <option value="" selected>--Select--</option>
          <?php for($i=2010;$i<2014;$i++){ ?>
          <option value="<?=$i?>" <?php if($arrDetail[year]==$i){?> selected <?php }?> ><?=$i?></option>
          <?php } ?>
        </select>
      </p>
      <p><b>Yearly (PDF or zip File for download)</b></p>
      <p>
      <?php if($arrDetail[pdf1] !=""){?>
        <a href="../../data/irfile/statement/pdf/<?=$arrDetail[pdf1]?>" target="_blank"><?=$arrDetail[pdf1]?></a>
        <img src="../images/icon/b_icon_trash.gif" width="12" height="13" onclick="deleteFile('<?=$id?>','<?=$arrDetail[pdf1]?>','1')" >
       <?php } else{ ?>No file <?php } ?>
        <input name="old_pdf1" type="hidden" id="old_pdf1" value="<?=$arrDetail[pdf1]?>">
        </p>
      <p><input type="file" name="pdf1" id="pdf1"></p>
      <p><b>Quarter3 (PDF or zip File for download)</b></p>
      <p>
	  <?php if($arrDetail[pdf2] !=""){?>
        <a href="../../data/irfile/statement/pdf/<?=$arrDetail[pdf2]?>" target="_blank"><?=$arrDetail[pdf2]?></a>
        <img src="../images/icon/b_icon_trash.gif" width="12" height="13" onclick="deleteFile('<?=$id?>','<?=$arrDetail[pdf2]?>','2')" >
       <?php } else{ ?>No file <?php } ?>
        <input name="old_pdf2" type="hidden" id="old_pdf2" value="<?=$arrDetail[pdf2]?>">
      </p>
      <p><input type="file" name="pdf2" id="pdf2"></p>
      <p><b>Quarter2 (PDF or zip File for download)</b></p>
      <p>
      <?php if($arrDetail[pdf3] !=""){?>
        <a href="../../data/irfile/statement/pdf/<?=$arrDetail[pdf3]?>" target="_blank"><?=$arrDetail[pdf3]?></a>
        <img src="../images/icon/b_icon_trash.gif" width="12" height="13" onclick="deleteFile('<?=$id?>','<?=$arrDetail[pdf3]?>','3')" >
       <?php } else{ ?>No file <?php } ?>
        <input name="old_pdf3" type="hidden" id="old_pdf3" value="<?=$arrDetail[pdf3]?>">
      </p>
      <p><input type="file" name="pdf3" id="pdf3"></p>
      <p><b>Quarter1 (PDF or zip File for download)</b></p>
      <p>
      <?php if($arrDetail[pdf4] !=""){?>
        <a href="../../data/irfile/statement/pdf/<?=$arrDetail[pdf4]?>" target="_blank"><?=$arrDetail[pdf4]?></a>
        <img src="../images/icon/b_icon_trash.gif" width="12" height="13" onclick="deleteFile('<?=$id?>','<?=$arrDetail[pdf4]?>','4')" >
       <?php } else{ ?>No file <?php } ?>
        <input name="old_pdf4" type="hidden" id="old_pdf4" value="<?=$arrDetail[pdf4]?>">
      </p>
      <p><input type="file" name="pdf4" id="pdf4"></p>
      
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
var ajax = new Array();
function deleteFile(id,file,type){
	var path = "../../data/irfile/statement/pdf/";
	if(confirm("Confirm to delete?")){
	var index = ajax.length;
		ajax[index] = new sack();
		ajax[index].setVar('id',id);
		ajax[index].setVar('file',file);
		ajax[index].setVar('path',path);
		ajax[index].setVar('type',type);
		ajax[index].method = "POST";
		ajax[index].requestFile = 'delete_file_script.php';	
		ajax[index].onCompletion = function(){
		       // alert(this.response);
			    if (this.response =="success") {	
				alert("This file has been deleted.");
				window.location.reload();				
				}else{
				alert('System error,Please contact administrator.');	
				}
	    };	
    ajax[index].runAJAX();	
	}
}
  $().ready(function () {
		bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
	
	
	
  });
</script>