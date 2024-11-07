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
$user_id = trim($_GET["id"]);
$profile = getUserProfile($user_id);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=CHARSET?>">
<meta name="description" content="<?=$content_description?>" /> 
<meta name="keywords" content="<?=$content_keywords?>" /> 
<meta http-equiv="Pragma" Content="no-cache" />
<meta http-equiv="Expires" Content="0" />
<meta hTTP-equiv="refresh" content="30;">
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
<script type="text/javascript" src="../js/checkChangePwd.js"></script>
<script type="text/javascript" src="../js/checkUpdate.js"></script>
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
      <td align="left" valign="top" class="txt-content-12-black" style="padding: 10px 20px 0px 20px"><b><a href="../index.php">Home</a> : <a href="index.php">User</a> / Edit</b></td>
      <td align="right" valign="top" class="txt-search-12-black" style="padding: 10px 20px 0px 20px"><b>Welcome :</b>
        <?=$_SESSION["s_admin_username"]?></td>
    </tr>
    <tr>
      <td align="left" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px">&nbsp;</td>
      <td align="right" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px"><strong><strong><a href="add.php"></a></strong></strong></td>
    </tr>
  <tr>
    <td colspan="2" align="left" valign="top" class="txt-content-11-black" style="padding: 20px">
	<form name="form1" method="post" action="edit_script.php" onSubmit="return checkUpdate()">
      <table width="600"  border="0" cellspacing="0" cellpadding="0">
        <tr align="left" valign="top" bgcolor="#E2E2E2" class="txt-content-11-black">
          <td colspan="2" bgcolor="#A7C6F3" class="txt-content-11-black-2" style="padding: 5px 5px 5px 5px"><span class="txt-content-11-white-bold"><b>Update User Profile</b></span></td>
          </tr>
        <tr align="left" valign="middle" class="txt-content-11-black">
          <td width="135" valign="top" class="form-add">Name *</td>
          <td width="457" class="form-add"><input name="name" type="text" class="form-user" id="name" value="<?=$profile[name]?>"></td>
        </tr>
        <tr align="left" valign="middle" class="txt-content-11-black">
          <td valign="top" class="form-add">Username</td>
          <td class="form-add"><input name="username" type="text" class="form-user" disabled id="username" value="<?=$profile[username]?>"></td>
        </tr>
        <tr align="left" valign="middle" class="txt-content-11-black">
          <td valign="top" class="form-add">Permission *</td>
          <td class="form-add"><table width="260"  border="0" cellspacing="0" cellpadding="0">
            <tr align="left" valign="top" class="txt-content-11-black">
              <td width="30"><label>
                <input name="rule1" type="radio" id="rule1_1" value="2" <?php if($profile[rule1] == 2){?> checked <?php } ?> >
              </label></td>
              <td width="43">View</td>
              <td width="30"><input type="radio" name="rule1" id="rule1_2" value="1" <?php if($profile[rule1] == 1){?> checked <?php } ?> ></td>
              <td width="157">Add/Edit/Delete</td>
            </tr>
          </table></td>
        </tr>
        <tr align="left" valign="middle" class="txt-content-11-black">
          <td>&nbsp;</td>
          <td class="form-add"><input name="Submit" type="submit" class="btn-user" value="Save">
              <input name="Reset" type="reset" class="btn-user" value="Reset">
              <input name="id" type="hidden" id="id" value="<?=$profile[id]?>"></td>
        </tr>
      </table>
    </form></td>
  </tr>
  <tr >
  	<td colspan="2" style="padding: 20px">
	<form name="form1" method="post" action="changepwd_script.php" onSubmit="return checkChangePwd()">
    <table width="600"  border="0" cellspacing="0" cellpadding="0">
      <tr align="left" valign="top" bgcolor="#E2E2E2" class="txt-content-11-black">
<td colspan="2" bgcolor="#A7C6F3" class="txt-content-11-black-2" style="padding: 5px 5px 5px 5px"><span class="txt-content-11-white-bold"><b>Change Password</b></span></td>
      </tr>
      <tr align="left" valign="middle" class="txt-content-11-black">
        <td width="135" valign="top" class="form-add">New Password </td>
        <td width="457" class="form-add"><input name="password" type="password" class="form-user" id="password" AUTOCOMPLETE="off"></td>
      </tr>
      <tr align="left" valign="middle" class="txt-content-11-black">
        <td valign="top" class="form-add">Conform Password </td>
        <td class="form-add"><input name="cpassword" type="password" class="form-user" id="cpassword" AUTOCOMPLETE="off"></td>
      </tr>
      <tr align="left" valign="middle" class="txt-content-11-black">
        <td>&nbsp;</td>
        <td class="form-add"><input name="Submit" type="submit" class="btn-user" value="Save">
            <input name="Reset" type="reset" class="btn-user" value="Reset">
            <input name="id" type="hidden" id="id" value="<?=$profile[id]?>"></td>
      </tr>
    </table>
  </form></td></tr>
  </table>	   
</div>
</body>
</html>
