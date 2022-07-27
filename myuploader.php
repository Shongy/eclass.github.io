<html><head><title>My Uploader</title></head>


<body>
<center><fieldset style = width:400px>
<h1>My Uploader</h1>
<form name = "upload" enctype = "multipart/form-data" action = "myuploader.php" method = "post">

<br>File: <input name = "picturefile" type = "file" size = 150 required />
<br>
<br><input name = "submit" type = "submit" value = "Upload Picture">
</form>

<?php
	if (!isset($_FILES))exit;
    if (!isset($_POST["submit"])) exit;

	$tempname	= $_FILES["picturefile"]["tmp_name"];
	$type		= $_FILES["picturefile"]["type"];
	$filename	= $_FILES["picturefile"]["name"];
	$filesize	= $_FILES["picturefile"]["size"];
    $fileextension = strtolower(substr($filename, -3));
	
	
	$filepath = "../CMUE-CLASS/main/$filename";
	
	$moveSuccessful = move_uploaded_file($tempname,$filepath);
		
    if ($moveSuccessful)
			{
				
				clearstatcache();
			}
			
		else
		{
			echo "WE'RE HAVING A PROBLEM UPLOADING YOUR FILES! TRY AGAIN OR CONTACT THE ADMIN";
		}
	
	
?>

</fieldset></center>
</body>
</html>