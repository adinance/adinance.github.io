<html>
<head>
    <title>File Upload In Codeigniter</title>
</head>
<body>
<?php echo $msg;?> 
<?php echo form_open_multipart('upload_controller/do_upload');?>
<?php //echo "<input type='file' name='userfile[]' webkitdirectory  size='20'  multiple/>"; ?>
<?php echo "<input type='file' name='userfile[]' multiple size='20' />"; ?>
<?php echo "<input type='submit' name='submit' value='upload' /> ";?>
<?php echo "</form>"?>
</body>
</html>