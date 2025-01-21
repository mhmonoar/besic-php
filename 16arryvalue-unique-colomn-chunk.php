<?php 

/*
array_values() associate arry to index array
array_unique() just give unique value

*/
$color = array("a"=>"red", "b"=>"Green", "c"=>"Orange", "d"=>"White", "e"=>"red");

$colorvalue = array_values($color);
echo "<pre>";
	print_r($colorvalue);
echo "</pre>";


//////////////////////
$colorvalueunique = array_unique($color); ///repeat value just show one tiem
echo "<pre>";
	print_r($colorvalueunique);
echo "</pre>";

?>