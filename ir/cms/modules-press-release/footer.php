
</body>
</html>


<script>
  $().ready(function () {
	  $("#add-button").corner("15px");
		$("#form-add-area").corner("5px"); 
		$("textarea.FCKeditor").each(function(){
		var oFCKeditor = new FCKeditor(this.name);
		oFCKeditor.BasePath	= '../fckeditor/' ;
		oFCKeditor.Config['SkinPath'] = 'skins/silver/';
		oFCKeditor.Width = '820';
		oFCKeditor.Height = '500px';
		oFCKeditor.ReplaceTextarea() ;
	});
	
	$("#add-button").click(function(){
		$('#frmAdd').submit();					
	 });
	 $("#add-button").hover(
        function() {            
            $(this).addClass('active');  
      });
	 $("#add-button").mouseout(
        function() {            
            $(this).removeClass('active');  
      });
  });
</script>
