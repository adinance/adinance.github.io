<?php include "../../../ir/cms/modules-banner-top/header.php"; ?>
<script>
function  checkType(str){
	var pos = str.lastIndexOf(".");
	var ext = str.substr(pos);
	switch (ext)
	{
            case ".jpg":
            case ".png": return true;
            break;
            default: return false;
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

		var file_banner = $('input[name=file_banner]');
		if(file_banner.val() !="" && !checkType(file_banner.val())){
                        alert(file_banner.val());
                        file_banner.addClass('hightlight');
			file_banner.focus();
			return false;
		} else file_banner.removeClass('hightlight');
                
	    $('#frmAdd').submit();
	 });
  });
  
    function setStatus(val){
        document.getElementById("status_val").value = val;
    }
</script>
<div id="center1">
  <table width="95%"  border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="left" valign="top" class="txt-content-12-black"  style="padding: 10px 20px 0px 20px"><b><a href="../index.php" >Home &gt; <a href="index.php">Top Banner</a> > Edit</b></td>
      <td align="right" valign="top" class="txt-search-12-black" style="padding: 10px 20px 0px 20px"><b>Welcome : </b><?=$_SESSION["s_admin_username"]?></td>
    </tr>
    <tr>
      <td align="left" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px"></td>
<!--      <td align="right" valign="top" class="txt-content-11-black" style="padding: 10px 20px 0px 20px"><div id="addnew-button" >Add New</div></td>-->
    </tr>
    <tr>
        <td colspan="2" align="left" valign="top" class="txt-content-11-black" style="padding: 0px 20px 0px 20px;">
        <div id="form-add-area" style="width:870px;">
            <form action="edit_script.php" method="post" enctype="multipart/form-data" name="frmAdd" class="form-add"  id="frmAdd" >
                
                <p style="font-weight:bold; border-bottom:1px solid #666;">* Format Type </p>
                <p><br/></p>
                <p><img src="../../../image/banner.jpg" /></p>
                <p><br/></p>
                <p><b>Banner 850 x 150 pixels ( *.jpg, *.gif, *.png ) </b></p>
                <p>
                    <input name="file_banner" type="hidden" id="file_banner" value="banner.jpg">
                </p>
                <p><input type="file" name="file_banner" id="file_banner"></p>
                <p>
                <div id="add-button" >Save</div>
                <!--<div id="cancel-button" >Cancel</div>-->
                <div class="loading"></div></p>
                <div class="clearfix"></div>
            </form>
        </div>
        </td>
      </tr>
  </table>	   
</div>
<?php include "../../../ir/cms/modules-banner-top/footer.php";?>
