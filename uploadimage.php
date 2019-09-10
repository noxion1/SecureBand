<?php

$conn = mysqli_connect("localhost", "root", "", "myband");
if($conn) {

echo "connected";
}

if(isset($_POST['uploadfilesub'])) {

$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];

$folder = "images/";

move_uploaded_file($filetmpname, $folder.$filename);

$sql = "INSERT INTO `uploadedimage` (`imagename`)  VALUES ('$filename')";
$qry = mysqli_query($conn,  $sql);
if( $qry) {
echo "</br>image uploaded";
}
}

?>


<!DOCTYPE html>
<html>
<body>
<!--Make sure to put "enctype="multipart/form-data" inside form tag when uploading files -->
<form action="" method="post" enctype="multipart/form-data" >
<!--input tag for file types should have a "type" attribute with value "file"-->
<input type="file" name="uploadfile" />
<input type="submit" name="uploadfilesub" value="upload" />
</form>
</body>
</html>
