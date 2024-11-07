<?php
require_once "../inc/config_txt.php";
require_once "../inc/isLogin.php";
require_once "../../../inc/mysql-command.php";
require_once "../inc/function.inc.php";
require_once "../inc/functionFinancialStatement.inc.php";
require_once "../inc/pagination.php";
// Order by name , point , launch_date default order_id
$order = " order_id asc";
if(isset($_GET["order"]) && ($_GET["order"] !="")){
$order .= " , ".$_GET["order"];
}
// Condition for search
$cond= "";
if(isset($_REQUEST["keyword"]) && ($_REQUEST["keyword"] !="")){
$keyword = $_REQUEST["keyword"];
$keyword = " WHERE title LIKE'%$keyword%' OR code LIKE %$keyword%'  ";
}
// Paginate
$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
$page = ($page == 0 ? 1 : $page);
$perpage = $page_size; // Check page_size in inc/config_txt.php
if(isset($_REQUEST["perpage"]) && ($_REQUEST["perpage"] !="")){
$perpage =	$_REQUEST["perpage"];
}
$startpoint = ($page * $perpage) - $perpage;
// Call getStatementlist
$mList = getStatementList($cond ,$order,$startpoint,$perpage);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET?>">
<meta name="description" content="<?php echo $content_description?>" /> 
<meta name="keywords" content="<?php echo $content_keywords?>" /> 
<title><?php echo TITLE?></title>
<link href="../css/site.css" rel="stylesheet" type="text/css">
<?php include "../inc/yui.php" ?>
<script type="text/javascript" src="../js/checkRegUser.js"></script>
<script type="text/javascript" src="../js/checkSearch.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery.corner.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.7.1.custom.min.js"></script>
<script>
  $().ready(function () {
	 $("#addnew-button").corner("15px");
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
	   
	   
	   $("#search-button").corner("15px");
	   $("#keyword").corner("5px");
	  $("#search-button").click(function(){
		 $('#frmFilter').submit();
	  });
	   $("#search-button").hover(
        function() {            
            $(this).addClass('active');  
        });
	   $("#search-button").mouseout(
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
      <td align="left" valign="top" class="txt-content-12-black"  style="padding: 10px 20px 0px 20px">
      <b><a href="../index.php" >Home</a> : Financecial Information -&gt; Financial Statement</b>
      </td>
      <td align="right" valign="top" class="txt-search-12-black" style="padding: 10px 20px 0px 20px"><b>Welcome :</b>
        <?php echo $_SESSION["s_admin_username"]?></td>
    </tr>
    <tr>
      <td align="left" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px">All (<?php echo sumStatement(''); ?>) | Active (<?php echo sumStatement('1'); ?>) | inactive (<?php echo sumStatement('2'); ?>)</td>
      <td align="right" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px">
      <?php if($_SESSION["s_admin_rule1"] == "1"){  ?>
      <div id="addnew-button" >Add New</div>
      <?php } ?>
      </td>
    </tr>
    <tr>
      <td align="left" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px">&nbsp;</td>
      <td align="right" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px">View : <a href="index.php?perpage=all">All</a> | <a href="index.php?perpage=10">10</a> | <a href="index.php?perpage=30">30</a> | <a href="index.php?perpage=50">50</a> per page</td>
    </tr>
  <tr>
    <td colspan="2" align="left" valign="top" class="txt-content-11-black" style="padding: 20px">
      <form name="form1" method="post" action="delete_script.php" onSubmit="return confirm('Confirm to delete?'); ">
        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr bgcolor="<?php echo $cms_bghead?>" >
            <td width="5%" class="txt-content-11-white-2">No.</td>
            <td width="20%" class="txt-content-11-white-2">Type</td>
            <td width="10%" class="txt-content-11-white-2">Year</td>
            <td width="10%" class="txt-content-11-white-2">Yearly</td>
            <td width="10%" class="txt-content-11-white-2">Quarter3</td>
            <td width="10%" class="txt-content-11-white-2">Quarter2</td>
            <td  class="txt-content-11-white-2">Quarter1</td>
            <td width="10%" class="txt-content-11-white-2">Status</td>
            <?php if($_SESSION["s_admin_rule1"] == 1){ ?>
            <td width="5%" class="txt-content-11-white-2">Edit
              <input name="tid" type="hidden" id="tid" value="<?php echo $type_id?>"></td>
            <td width="5%" class="txt-content-11-white-2"><input type="submit" name="Submit" value="delete"></td>
            <?php } ?>
            </tr>
         </table>
          <div id="contentLeft"> 
            <ul>
        <?php 
		$i=1;
		foreach($mList as $key=>$value){
			$no = (($page-1)*$perpage)+$i;
		switch($value[status]){
							case 2: $status = "Inactive"; break; 
							case 1: $status = "Active"; break;
		}
		switch($value[type_id]){
							case 2: $typename = "MD&A"; break; 
							case 1: $typename = "Financial Statement"; break;
		}
		
		
		
		
		?>
         <li id="recordsArray_<?php echo $value[id]?>">
           <table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr class="txt-content-11-black-2" bgcolor="<?php echo $cms_bgout?>" onMouseOver="this.style.backgroundColor='<?php echo $cms_bgover?>';" onMouseOut="this.style.backgroundColor='<?php echo $cms_bgout?>'" >
            <td width="5%" valign="top" class="txt-content-11-black-2"><?php printf("%04d",$no); ?></td>
            <td width="20%" valign="top" class="txt-content-11-black-2">
            <?php echo $typename?>
            </td>
            <td width="10%" valign="top" class="txt-content-11-black-2">
            <?php echo $value[year]?>
            </td>
            <td width="10%" valign="top" class="txt-content-11-black-2">
            <?php if($value[pdf1] !=""){ ?>
            <a href="../../data/irfile/statement/pdf/<?php echo $value[pdf1]?>" target="_blank">view</a>
            <?php }else{ ?>
             -
            <?php } ?>
            </td>
            <td width="10%" valign="top" class="txt-content-11-black-2">
            <?php if($value[pdf2] !=""){ ?>
            <a href="../../data/irfile/statement/pdf/<?php echo $value[pdf2]?>" target="_blank">view</a>
            <?php }else{ ?>
             -
            <?php } ?>
            
            </td>
            <td width="10%" valign="top" class="txt-content-11-black-2">
            <?php if($value[pdf3] !=""){ ?>
            <a href="../../data/irfile/statement/pdf/<?php echo $value[pdf3]?>" target="_blank">view</a>
            <?php }else{ ?>
             -
            <?php } ?>
            </td>
            <td  valign="top" class="txt-content-11-black-2">
            <?php if($value[pdf4] !=""){ ?>
            <a href="../../data/irfile/statement/pdf/<?php echo $value[pdf4]?>" target="_blank">view</a>
            <?php }else{ ?>
             -
            <?php } ?>
            </td>
            <td width="10%"valign="top" class="txt-content-11-black-2"><?php echo $status?></td>
            <?php if($_SESSION["s_admin_rule1"] == 1){ ?>
            <td width="5%" valign="top" class="txt-content-11-black-2"><a href="edit.php?id=<?php echo $value[id]?>"><img src="../images/edit.gif" width="16" height="16" border="0"></a></td>
            <td width="5%" align="center" valign="top" class="txt-content-11-black-2"><input name="id[]" type="checkbox" id="id[]" value="<?php echo $value[id]?>"></td>
            <?php } ?>
            </tr>
          
          </table>
           </li>
        <?php 
		$i++;
		}
		?>
     </ul>
          </div>
      </form>
      <br><br>
      <?php echo Pages("main_finance_statement",$perpage,"index.php?perpage=$perpage&",$cond); ?>
      </td>
  </tr>
  </table>	   
</div>
<script type="text/javascript">
$(document).ready(function(){ 
						   
	$(function() {
		$("#contentLeft ul").sortable({ opacity: 0.6, cursor: 'move', update: function() {
			var order = $(this).sortable("serialize") + '&action=updateRecordsListings&page=<?php echo $page?>&pagesize=<?php echo $pagesize?>'; 
			$.post("updateDB.php", order, function(theResponse){
				$("#contentRight").html(theResponse);
			}); 															 
		}								  
		});
	});

});	
</script>
</body>
</html>
