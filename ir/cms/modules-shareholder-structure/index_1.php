<?php include "../../../ir/cms/modules-shareholder-structure/header.php"; ?>
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
<?php
// Order by name , point , launch_date default order_id
$order = " order_id asc , amount desc";
if(isset($_GET["order"]) && ($_GET["order"] !="")){
$order .= " , ".$_GET["order"];
}
$condition= " where 1=1 ";
if(isset($_REQUEST["keyword"]) && ($_REQUEST["keyword"] !="")){
    $keyword = $_REQUEST["keyword"];
    $keyword = " and ( name_th LIKE '%$keyword%' 
                OR name_en LIKE '%$keyword%' ) ";
    $condition = $condition.$keyword;
}

if(isset($_REQUEST["actived"]) && ($_REQUEST["actived"] !="")){
    $actived = $_REQUEST["actived"];
    $actived = " and ( actived = '$actived' ) ";
    $condition = $condition.$actived;
}

include "../../../ir/cms/paging.php";
$mList = getShareholderStructurePagingList($condition ,$order,$startpoint,$perpage);
?>
<div id="center1">
    <?//=$mList?>
  <table width="95%"  border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td align="left" valign="top" class="txt-content-12-black"  style="padding: 10px 20px 0px 20px"><b>Shareholder Information &gt; Shareholder Structure</b></td>
        <td align="right" valign="top" class="txt-search-12-black" style="padding: 10px 20px 0px 20px"><b>Welcome : </b><?=$_SESSION["s_admin_username"]?></td>
    </tr>
    <tr>
        <td align="left" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px">All <a href="index.php?perpage=<?=$_REQUEST["perpage"]?>">(<?php echo countIRShareholder(''); ?>) </a>| Active <a href="index.php?perpage=<?=$_REQUEST["perpage"]?>&actived=1">(<?php echo countIRShareholder('1'); ?>)</a> | inactive <a href="index.php?perpage=<?=$_REQUEST["perpage"]?>&actived=0">(<?php echo countIRShareholder('0'); ?>)</a></td>
        <td align="right" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px"><?php if($_SESSION["s_admin_rule1"] == "1") echo '<div id="addnew-button" >Add New</div>'; ?></td>
    </tr>
    <tr>
        <td align="left" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px">
            <div style="float:left; width:160px;" id="search-area"> 
                <form action="index.php" name="frmFilter" id="frmFilter" >
                <input name="keyword" type="text" class="form-search" id="keyword" style="height:20px;" value="<?=$_REQUEST["keyword"]?>">
                </form>
            </div>
        <div id="search-button" style="float:left;">search</div>
        </td>
      <td align="right" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px">View : <a href="index.php?perpage=all&actived=<?=$_REQUEST["actived"]?>">All</a> | <a href="index.php?perpage=10&actived=<?=$_REQUEST["actived"]?>">10</a> | <a href="index.php?perpage=30&actived=<?=$_REQUEST["actived"]?>">30</a> | <a href="index.php?perpage=50&actived=<?=$_REQUEST["actived"]?>">50</a> per page</td>
    </tr>
  <tr>
    <td colspan="2" align="left" valign="top" class="txt-content-11-black" style="padding: 20px">
      <form name="form1" method="post" action="delete_script.php" onSubmit="return confirm('Confirm to delete?'); ">
            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                <tr bgcolor="<?=$cms_bghead?>" >
                    <td width="5%" class="txt-content-11-white-2">No.</td>
                    <td width="30%" class="txt-content-11-white-2">Name TH</td>
                    <td width="30%" class="txt-content-11-white-2">Name EN</td>
                    <td width="10%" class="txt-content-11-white-2">Amount</td>
                    <td width="10%" class="txt-content-11-white-2">Percent</td>
                    <td width="10%" class="txt-content-11-white-2">Status</td>
                    <?php if($_SESSION["s_admin_rule1"] == 1){ ?>
                    <td width="5%" class="txt-content-11-white-2">Edit<input name="tid" type="hidden" id="tid" value="<?=$type_id?>"></td>
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
                    switch($value['actived']){
                        case 0: $status = "Inactive"; break; 
                        case 1: $status = "Active"; break;
                    }
                    ?>
                    <li id="recordsArray_<?=$value[id]?>">
                        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                            <tr class="txt-content-11-black-2" bgcolor="<?=$cms_bgout?>" onMouseOver="this.style.backgroundColor='<?=$cms_bgover?>';" onMouseOut="this.style.backgroundColor='<?=$cms_bgout?>'" >
                                <td width="5%"  valign="top" class="txt-content-11-black-2"><?php printf("%04d",$no); ?></td>
                                <td width="30%" valign="top" class="txt-content-11-black-2"><?=$value['name_th']?></td>
                                <td width="30%" valign="top" class="txt-content-11-black-2"><?=$value['name_en']?></td>
                                <td width="10%" valign="top" class="txt-content-11-black-2"><?=number_format($value['amount'])?></td>
                                <td width="10%"valign="top" class="txt-content-11-black-2"><?=$value['percent']?></td>
                                <td width="10%"valign="top" class="txt-content-11-black-2"><?=$status?></td>
                                <?php if($_SESSION["s_admin_rule1"] == 1){ ?>
                                    <td width="5%" valign="top" class="txt-content-11-black-2"><a href="edit.php?id=<?=$value['id']?>"><img src="../images/edit.gif" width="16" height="16" border="0"></a></td>
                                    <td width="5%" align="center" valign="top" class="txt-content-11-black-2"><input name="id[]" type="checkbox" id="id[]" value="<?=$value['id']?>"></td>
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
      <?php echo Pages("ir_document",$perpage,"index.php?perpage=$perpage&",$condition); ?>
      </td>
  </tr>
  </table>	   
</div>
<script type="text/javascript">
$(document).ready(function(){ 
    $(function() {
        $("#contentLeft ul").sortable({ opacity: 0.6, cursor: 'move', update: function() {
            var order = $(this).sortable("serialize") + '&action=updateRecordsListings&page=<?=$page?>&pagesize=<?=$pagesize?>'; 
            $.post("updateDB.php", order, function(theResponse){
                    $("#contentRight").html(theResponse);
            }); 															 
        }								  
        });
    });
});	
</script>
<?php include "../../../ir/cms/modules-shareholder-structure/footer.php";?>
