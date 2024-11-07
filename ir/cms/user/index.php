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
$order = "id desc";
if(isset($_GET["order"]) && ($_GET["order"] !="")){
$order = $_GET["order"];
}
$limit = "";
$userList = getUserList($order,$limit);

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
      <td align="left" valign="top" class="txt-content-12-black"  style="padding: 10px 20px 0px 20px"><b><a href="../index.php" >Home</a> : User</b></td>
      <td align="right" valign="top" class="txt-search-12-black" style="padding: 10px 20px 0px 20px"><b>Welcome :</b>
        <?=$_SESSION["s_admin_username"]?></td>
    </tr>
    <tr>
      <td align="left" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px">&nbsp;</td>
      <td align="right" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px"><div id="addnew-button" >Add New</div></td>
    </tr>
  <tr>
    <td colspan="2" align="left" valign="top" class="txt-content-11-black" style="padding: 20px">
	<form name="form1" method="post" action="delete_select_script.php">
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr bgcolor="<?=$cms_bghead?>" >
          <td width="5%" class="txt-content-11-white-2">No.</td>
          <td width="15%" class="txt-content-11-white-2">Name<a href="<?php echo $_SERVER['PHP_SELF']."?order=name asc"; ?>" >&nbsp;<img src="../images/icon/asc.gif" width="7" height="4" border="0">&nbsp;</a><a href="<?php echo $_SERVER['PHP_SELF']."?order=name desc"; ?>" ><img src="../images/icon/desc.gif" border="0"></a></td>
          <td width="15%" class="txt-content-11-white-2">Username<a href="<?php echo $_SERVER['PHP_SELF']."?order=username asc"; ?>" >&nbsp;<img src="../images/icon/asc.gif" width="7" height="4" border="0">&nbsp;</a><a href="<?php echo $_SERVER['PHP_SELF']."?order=username desc"; ?>" ><img src="../images/icon/desc.gif" border="0"></a></td>
          <td width="10%" class="txt-content-11-white-2">Level</td>
          <td width="10%" class="txt-content-11-white-2">Status</td>
          <td width="25%" class="txt-content-11-white-2">Permission</td>
          <?php if($_SESSION["s_admin_rule1"] == 1){ ?>
          <td width="5%" class="txt-content-11-white-2">Edit</td>
          <td width="5%" class="txt-content-11-white-2"><input type="submit" name="Submit" value="delete"></td>
          <?php } ?>
        </tr>
		<?php 
		$i=1;
		foreach($userList as $key=>$value){
		$status = "";
		$permission = "";
		$level = "Webmaster";
		if($value[status] ==1) $status = "Active";
		$permissionList = getPermission($value[id]);
		if($permissionList[rule1] != 0){
		  $permission .= gerPermissionName($permissionList[rule1]);
		  
		}
		if($_SESSION["s_admin_username"] == "administrator") $level = "Administrator";
		
		
		?>
        <tr class="txt-content-11-black-2" bgcolor="<?=$cms_bgout?>" onMouseOver="this.style.backgroundColor='<?=$cms_bgover?>';" onMouseOut="this.style.backgroundColor='<?=$cms_bgout?>'" >
          <td width="5%" class="txt-content-11-black-2"><?php printf("%04d",$i); ?></td>
          <td width="15%" class="txt-content-11-black-2"><?=$value[name]?></td>
          <td width="15%" class="txt-content-11-black-2"><?=$value[username]?></td>
          <td width="10%" class="txt-content-11-black-2"><?=$level?></td>
          <td width="10%" class="txt-content-11-black-2"><?=$status?></td>
          <td width="25%" class="txt-content-11-black-2"><?=$permission?></td>
           <?php if($_SESSION["s_admin_rule1"] == 1){ ?>
          <td width="5%" class="txt-content-11-black-2"><a href="edit.php?id=<?=$value[id]?>"><img src="../images/edit.gif" width="16" height="16" border="0"></a></td>
          <td width="5%" align="center" class="txt-content-11-black-2">
<?php if($_SESSION["s_admin_username"] == "administrator"){ ?>
    <input name="id[]" type="checkbox" id="id[]" value="<?=$value[id]?>">
<?php } ?>
</td>
<?php } ?>
        </tr>
		<?php 
		$i++;
		}
		?>
      </table>
    </form></td>
  </tr>
  </table>	   
</div>
</body>
</html>
