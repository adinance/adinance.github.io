<!doctype html>  
<html>  
  <head>  
   <title> Example of Upload Multiple Files and Images in Codeigniter </title>  
  </head>  
<body>  
    <h1> Upload Multiple file and image in Codeigniter </h1>    
    <strong><?php if(isset($totalFiles)) echo "Successfully uploaded ".count($totalFiles)." files"; ?></strong>  
         
    <form method='post' action='<?php echo BASE_URL?>imageupload/uploadImage' enctype='multipart/form-data'>  
     
      <input type='file' name='files[]' multiple=""> <br/><br/>  
      <input type='submit' value='Upload' name='upload' />  
     
    </form>  
     
</body>  
</html>  