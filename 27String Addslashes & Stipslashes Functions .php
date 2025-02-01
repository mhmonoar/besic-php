<?php
echo "<h2>String addslashes and Stripslashes Functions</h2>";
////////////////////
	echo "<h4>addslashes functions addslashes(string)</h4>";
	
	/*
		*For protect Hacking Sql Injection  useing addslashes function 
		*when used addslashes function its will add slashes in string right and left side
		*Its will work with under string quotaion
	*/
$a = "My Name is 'Monoar Hossen'";
	$addsl = addslashes($a);
		echo $addsl. "<br>";

echo "<h4>Remove slashes functions stripslashes(string)</h4>";
	//for remove slashes use strip function
	echo stripslashes($addsl);
	
echo "<br>";
echo "<br>";
///////////////////////////////////
echo "<h2>String addcslashes and Stripcslashes Functions</h2>";

/*
	*for specific word or character add or remove slashes use those functions
*/
$b = "Hello World";
echo "<h4>Add Slasheses stripcslashes(string,character)</h4>";
	$pluscslashes = addcslashes($b,"Wd"); //you can used here words
	echo $pluscslashes."<br>";
	
echo "<h4>Add Slasheses stripcslashes(string,character)</h4>";
	$removecslashes =stripcslashes($b);
	echo $removecslashes."<br>";
	
?>