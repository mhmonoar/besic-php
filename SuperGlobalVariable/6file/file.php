<?php 
if(isset($_FILES['image'])){
	
	/*
	***See the $_FILE super global variable value
	echo "<pre>";
		print_r($_FILES);
	echo "</pre>";
*/
$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$file_tmp = $_FILES['image']['tmp_name'];
$file_type = $_FILES['image']['type'];
// move_uploaded_file($file_tmp, "uploads/" . $file_name
if(move_uploaded_file($file_tmp, "uploads/" . $file_name)){
	echo "File successfully uploaded";
}else{
	echo "Error in upload";
}

}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="" method= "POST" enctype="multipart/form-data">
		<input type="file" name="image"/> <br><br>
		<input type="submit" /> <br>
	</form>
</body>
</html>