<?php 
	$cooki_name = "user";
	$cooki_value= "Hello world";
	//setcooki(name,value,expire,path,domin,secure,httponly)
	/*
		name = Cookie name
		value = value means user system whatever you want to save this value
		expire = when set cooki and how much time it's stay expire means time it's will define second, if not set time it's won't distroy
		path = when cookie set then retrip which location then use path there / mean website every where you can access
		domain = when cookie sst and see it exicating website or see it other subdomain or domain then use it
		secure = secure mena true and false, true = when set https then just see with secure site , false= when see it http
		httponly = there is alseo true and false value true = just access with server site , false = anythig use and access cookie like javascript bbscript(client site)
		
	*/
	setcookie($cooki_name,$cooki_value,time()+(86400*30),"/");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
	<?php 
	if(!isset($_COOKIE[$cooki_name])){//if user give permition for cookie set thats why use if else
		echo "Cookie is not set";
	}else{
		echo $_COOKIE[$cooki_name];
	}
		
	?>
</body>
</html>