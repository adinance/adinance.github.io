<? include "../../../ir/cms/modules-annual-report/header.php"; ?>
<script>
var numericExpression = /^[0-9]+$/;
  $().ready(function () {
        $("#news_date").datepicker({ dateFormat: 'yy-mm-dd' });
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
		var name_th = $('input[name=name_th]');
                var name_en = $('input[name=name_en]');
                var amount = $('input[name=amount]');
                var percent = $('input[name=percent]');
		
                if (name_th.val()=='') {
			name_th.addClass('hightlight');
			name_th.focus();
			return false;
		} else name_th.removeClass('hightlight');
                
                if (name_en.val()=='') {
			name_en.addClass('hightlight');
			name_en.focus();
			return false;
		} else name_en.removeClass('hightlight');
                
                if (amount.val()=='') {
			amount.addClass('hightlight');
			amount.focus();
			return false;
		} else amount.removeClass('hightlight');
                
                if (percent.val()=='') {
			percent.addClass('hightlight');
			percent.focus();
			return false;
		} else percent.removeClass('hightlight');
		
	    $('#frmAdd').submit();
	 });
	   
	   
  });
</script>
<?
$type_id = trim($_REQUEST["type_id"]);
?>
<div id="center1">
  <!-- main container-->
  <table width="95%"  border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="left" valign="top" class="txt-content-12-black"  style="padding: 10px 20px 0px 20px"><b>Shareholder Information &gt; <a href="index.php">Shareholder Structure</a> > Add New</b></td>
      <td align="right" valign="top" class="txt-search-12-black" style="padding: 10px 20px 0px 20px"><b>Welcome : </b><?=$_SESSION["s_admin_username"]?></td>
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
            <p><b>Name TH *</b></p>
                <p><input type="text" name="name_th" id="name_th" style="width:200px;" ></p>
                <p><b>Name EN *</b></p>
                <p><input type="text" name="name_en" id="name_en" style="width:200px;" ></p>
                <p><b>Amount (Number Only Ex. 999999) *</b></p>
                <p><input type="text" name="amount" id="amount" style="width:200px;" ></p>
                <p><b>Percent *</b></p>
                <p><input type="text" name="percent" id="percent" style="width:200px;" ></p>
            <p><label>Status</label></p>
            <p>
               <input name="status" type="radio" id="status" value="1" checked> Active
               <input name="status" type="radio" id="status" value="0" > Inactive     
            </p>
            <div id="add-button" >Save</div><div id="cancel-button" >Cancel</div><div class="loading"></div>
         </p>
         <div class="clearfix"></div>
        </form>
        </div>
        </td>
    </tr>
  </table>	   
</div>
<? include "../../../ir/cms/modules-annual-report/footer.php";?>
