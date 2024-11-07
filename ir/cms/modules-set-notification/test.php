



<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="file_th" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>



<?php

echo $_FILES["file_th"]["type"];
echo $_FILES["file"]["size"];

?>

