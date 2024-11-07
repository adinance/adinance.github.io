// Start
$(document).ready(function(){
	// FCKeditor
	$("textarea.FCKeditor").each(function(){
		var oFCKeditor = new FCKeditor(this.name);
		oFCKeditor.BasePath	= 'fckeditor/' ;
		oFCKeditor.Config['SkinPath'] = 'skins/office2003/';
		oFCKeditor.Width = '820';
		oFCKeditor.Height = '500px';
		oFCKeditor.ReplaceTextarea() ;
	});
  }
);