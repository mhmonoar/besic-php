<?php
	session_start();
	echo "<pre>";
		print_r($_SESSION);
	echo "</pre>";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		echo "Favorite Color is: " . $_SESSION["favcolor"];
	?>
</body>
</html>