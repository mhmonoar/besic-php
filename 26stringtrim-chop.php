<?php
echo "<h2>String Trim And Chop Functions</h2>";
echo "<h4>String Trim Functions trim(string,charlist)</h4>";
/*
	when used this function and want to delete specific charlist right and left then use this functions
	there is two more functions:
	**rtrim(string,charlist)
	**ltrim(string,charlist)
*/

$a = "Hello I love the world, I love my country Hello";
	echo trim($a,"llo") . "<br>";//where its find llo first start or last end
////////////right//////////
echo "<h4>rtrim(string,charlist)</h4>";
	echo rtrim($a,"Hello"). "<br>";//its will trim right side
///////////left//////////
echo "<h4>ltrim(string,charlist)</h4>";
	echo ltrim($a,"Hello"). "<br>";//its will trim left side
	
	
////////////////////////end trim////////////////////////////

echo "<h2>chop(string,charlist)</h2>";
/*
	It's work like rtrim thats means it's will trim right side
	* If want to remove extra space in right side just use string not need to use charlist
*/

$str = "Hello world     ";
	echo chop($str,"ld"). "<br>";
	
//for extra space remove
	echo chop($str);
?>