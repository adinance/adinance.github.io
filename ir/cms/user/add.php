<?php
include "../inc/config_txt.php";
include "../inc/isLogin.php";
require_once "../inc/clsConnection.php";
include "../inc/function.inc.php";
include "../inc/functionUser.inc.php";
if($_SESSION["s_admin_username"] != "administrator"){
header("Location:../index.php");
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
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery.corner.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.7.1.custom.min.js"></script>
<script>
  $().ready(function () {
	$("#addnew-button").corner("15px");
	$("#add-button").corner("15px");
	$("#cancel-button").corner("15px");
    $("#form-add-area").corner("7px");
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

    $("#add-button").hover(
	function() {            
	$(this).addClass('active');  
	});
	$("#add-button").mouseout(
	function() {            
	$(this).removeClass('active');  
	});
	$("#add-button").click(function(){
	   	checkAddPaymentType();				
	});

    $("#cancel-button").hover(
	function() {            
	$(this).addClass('active');  
	});
	$("#cancel-button").mouseout(
	function() {            
	$(this).removeClass('active');  
	});
	
	   
	  
  });
</script>
<script type="text/javascript" src="../js/checkRegUser.js"></script>
<script type="text/javascript" src="../js/checkSearch.js"></script>
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
      <td align="left" valign="top" class="txt-content-12-black" style="padding: 10px 20px 0px 20px"><b><a href="../index.php" >Home</a> : <a href="index.php" >User</a> / Add</b></td>
      <td align="right" valign="top" class="txt-search-12-black" style="padding: 10px 20px 0px 20px"><b>Welcome :</b>
        <?=$_SESSION["s_admin_username"]?></td>
    </tr>
    <tr>
      <td align="left" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px">&nbsp;</td>
      <td align="right" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2" align="left" valign="top" class="txt-content-11-black" style="padding: 20px">
	<form name="form1" method="post" action="add_script.php" onSubmit="return checkReg()">
      <table width="600"  border="0" cellpadding="0" cellspacing="0" class="form-add">
        <tr align="left" valign="top" bgcolor="#E2E2E2" class="txt-content-11-black">
          <td colspan="2" bgcolor="#A7C6F3" class="txt-content-11-white-bold" style="padding: 5px 5px 5px 5px"><b>Create New User</b></td>
          </tr>
        <tr align="left" valign="middle" class="txt-content-11-black">
          <td width="135" valign="top" class="form-add"><span class="form-add">Name *</span></td>
          <td width="457" class="form-add"><span class="form-add">
            <input name="name" type="text" class="form-user" id="name">
          </span></td>
        </tr>
        <tr align="left" valign="middle" class="txt-content-11-black">
          <td valign="top" class="form-add"><span class="form-add">Username *</span></td>
          <td class="form-add"><span class="form-add">
            <input name="username" type="text" class="form-user" id="username">
          </span></td>
        </tr>
        <tr align="left" valign="middle" class="txt-content-11-black">
          <td valign="top" class="form-add"><span class="form-add">Password *</span></td>
          <td class="form-add"><span class="form-add">
            <input name="password" type="password" class="form-user" id="password" AUTOCOMPLETE="off">
          </span></td>
        </tr>
        <tr align="left" valign="middle" class="txt-content-11-black">
          <td valign="top" class="form-add"><span class="form-add">Confirm Password *</span></td>
          <td class="form-add"><span class="form-add">
            <input name="cpassword" type="password" class="form-user" id="cpassword">
          </span></td>
        </tr>
        <tr align="left" valign="middle" class="txt-content-11-black">
          <td valign="top" class="form-add"><span class="form-add">Permission</span></td>
          <td class="form-add"><table width="260"  border="0" cellspacing="0" cellpadding="0">
              <tr align="left" valign="top" class="txt-content-11-black">
                <td width="30"><label>
                  <input name="rule1" type="radio" id="rule1_1" value="2" checked>
                </label></td>
                <td width="43">View</td>
                <td width="30"><input name="rule1" type="radio" id="rule1_2" value="1"></td>
                <td width="157">Add/Edit/Delete</td>
              </tr>
          </table></td>
        </tr>
        <tr align="left" valign="middle" class="txt-content-11-black">
          <td>&nbsp;</td>
          <td class="form-add"><span class="form-add">
            <input name="Submit" type="submit" class="btn-user" value="Save">              
            <input name="Reset" type="reset" class="btn-user" value="Reset">
          </span></td>
        </tr>
      </table>
    </form></td>
  </tr>
  </table>	   
</div>
</body>
</html>
