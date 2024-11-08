<? include "../../../ir/cms/modules-form56-1/header.php"; ?>
<script>
function checkType(str){
	var pos = str.lastIndexOf(".");
	var ext = str.substr(pos);
	switch (ext)
	{
            case ".pdf":
            case ".zip": return true;
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
		//Get the data from all the fields

		var year = $('select[name=year]');
		var file_th = $('input[name=file_th]');
                var title_th = $('input[name=title_th]');
                var title_en = $('input[name=title_en]');
		var status = $('input[name=status]:checked');
		
                if (title_th.val()=='') {
			title_th.addClass('hightlight');
			title_th.focus();
			return false;
		} else title_th.removeClass('hightlight');
                
                if (title_en.val()=='') {
			title_en.addClass('hightlight');
			title_en.focus();
			return false;
		} else title_en.removeClass('hightlight');
		

		if (year.val()=='') {
			year.addClass('hightlight');
			year.focus();
			return false;
		} else year.removeClass('hightlight');
                
		if(file_th.val() !="" && !checkType(file_th.val())){
                        alert("PDF File only.");
                        file_th.addClass('hightlight');
			file_th.focus();
			return false;
		} else file_th.removeClass('hightlight');
                
	    $('#frmAdd').submit();
	 });
  });
  
    function setStatus(val){
        document.getElementById("status_val").value = val;
    }
</script>
<?
$id = htmlspecialchars(trim($_REQUEST["id"]));
$arrDetail = getIRDocumentRecord(" WHERE id = '$id'  ");
?>
<div id="center1">
  <table width="95%"  border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="left" valign="top" class="txt-content-12-black"  style="padding: 10px 20px 0px 20px"><b><a href="../index.php" >Financecial Information &gt; <a href="index.php">Form 56-1</a> > Edit</b></td>
      <td align="right" valign="top" class="txt-search-12-black" style="padding: 10px 20px 0px 20px"><b>Welcome : </b><?=$_SESSION["s_admin_username"]?></td>
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
                <p><b>Title TH *</b></p>
                <p><input type="text" name="title_th" id="title_th" style="width:290px;" value="<?=$arrDetail['title_th']?>"></p>
                <p><b>Title EN *</b></p>
                <p><input type="text" name="title_en" id="title_en" style="width:290px;" value="<?=$arrDetail['title_en']?>"></p>
<!--                <p><b>Quater *</b></p>
                <p>
                    <select name="type_id" class="form-user" id="type_id">
                      <option value="" selected>-- Select --</option>
                      <option value="q1" <?php if($arrDetail['type']=='q1') echo "selected"; ?> >Quater 1</option>
                      <option value="q2" <?php if($arrDetail['type']=='q2') echo "selected"; ?> >Quater 2</option>
                      <option value="q3" <?php if($arrDetail['type']=='q3') echo "selected"; ?> >Quater 3</option>
                      <option value="q4" <?php if($arrDetail['type']=='q4') echo "selected"; ?> >Quater 4</option>
                    </select>
                </p>-->
                <input name="type_id" type="hidden" id="type_id" value="form">
                <p><b>Year *</b></p>
                <p>
                  <select name="year" class="form-user" id="year">
                    <option value="" selected>-- Select --</option>
                    <?php for($i=2010;$i<date("Y")+3;$i++){ ?>
                        <option value="<?=$i?>" <?php if($arrDetail[year]==$i){?> selected <?php } ?> ><?=$i?></option>
                    <?php } ?>
                  </select>
                </p>
                <p><b>File TH * (.pdf / .zip)</b></p>
                <p>
                    <?php if($arrDetail['file_th'] !=""){?>
                        <a href="../../../ir/uploads/form56-1/<?=$arrDetail['file_th']?>" target="_blank"><?=$arrDetail['file_th']?></a>
                        <img src="../images/icon/b_icon_trash.gif" width="12" height="13" onclick="deleteFile('<?=$id?>','<?=$arrDetail['file_th']?>','1')" >
                    <?php } else{ ?>
                        No file 
                    <?php } ?>
                    <input name="file_th" type="hidden" id="file_th" value="<?=$arrDetail['file_th']?>">
                </p>
                <p><input type="file" name="file_th" id="file_th"></p>
<!--                <p><b>File EN * (.pdf / .zip)</b></p>
                <p>
                    <?php if($arrDetail['file_en'] !=""){?>
                        <a href="../../../ir/uploads/form56-1/<?=$arrDetail['file_en']?>" target="_blank"><?=$arrDetail['file_en']?></a>
                        <img src="../images/icon/b_icon_trash.gif" width="12" height="13" onclick="deleteFile('<?=$id?>','<?=$arrDetail['file_en']?>','1')" >
                    <?php } else{ ?>
                        No file 
                    <?php } ?>
                    <input name="file_en" type="hidden" id="file_en" value="<?=$arrDetail['file_en']?>">
                </p>
                <p><input type="file" name="file_en" id="file_en"></p>-->
                <p><label>Status</label></p>
                <p>
                   <input name="status" type="radio" id="status" value="1" <?php if($arrDetail['status']==1) echo "checked"; ?>>Active
                   <input name="status" type="radio" id="status" value="0" <?php if($arrDetail['status']==0) echo "checked"; ?>>Inactive     
                   
                </p>
                <input name="id" type="hidden" id="id" value="<?=$id?>">
                <p><div id="add-button" >Save</div><div id="cancel-button" >Cancel</div><div class="loading"></div></p>
                <div class="clearfix"></div>
            </form>
        </div>
        </td>
      </tr>
  </table>	   
</div>
<? include "../../../ir/cms/modules-form56-1/footer.php";?>
<script>
var ajax = new Array();
function deleteFile(id,file,type){
	var path = "../../../ir/uploads/form56-1/";
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