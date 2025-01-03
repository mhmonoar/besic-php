<?php 
if(isset($_FILES['image'])){

	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_temp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];
	if(move_uploaded_file($file_temp, "uploads/" . $file_name)){
		echo "file upload successful";
	}else{
		echo "file upload unsuccessfull";
	}
}
?>
	<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action=""  method = "POST" enctype="multipart/form-data">
			<input type="file" name='image' /> <br /> <br />
			<input type="submit" />
		</form>
	
	</body>
	</html>