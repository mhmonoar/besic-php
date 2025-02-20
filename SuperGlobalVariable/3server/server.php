
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h2>This is Form Test</h2>
	<form action="show.php" method="POST"> 
	<!--
		*If use GET then must be use $_GET, If used get method then its will show in url address and 
		*If use POST then must be use $_POST, It's will not show in url adderess and but show in another page
		*$_REQUEST Method will work with $_GET and $_POST both variable;
	-->
		<lable>Name</lable>
			<input type="text"  name="name"/><br><br>
		<lable>Age</lable>
		<input type="Num"  name="age"/><br><br>
		<input type="submit" name="save"/>
	</form>
</body>
</html>