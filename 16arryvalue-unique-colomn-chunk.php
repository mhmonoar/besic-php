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

echo "<br>";
echo "<br>";
//////////////////////
$colorvalueunique = array_unique($color); ///repeat value just show one tiem
echo "<pre>";
	print_r($colorvalueunique);
echo "</pre>";
echo "<br>";
echo "<br>";
/////////////////////array column//////////////////////////

/*
		take some feild from multidimantinal array and make new array
*/

$veggi = array( 
		array("Id"=>"001","fname"=>"Mohon", "lname"=>"Hasan"), 
		array("Id"=>"002","fname"=>"Gulger", "lname"=>"Hasan"),
		array("Id"=>"002","fname"=>"Sohan", "lname"=>"Sarkan"),
		);
		
$colomntest = array_column($veggi,"Id");
echo "<pre>";
	print_r($colomntest);
echo "</pre>";
echo "<br>";
echo "<br>";

/*
	from a array to take some number of value then make different array
*/
$cars =["BMW", "FARARI","LAMBERGINI", "TOYOTA", "MERSIDICE", "HUNDA"];

$car = array_chunk($cars,2); // it's will make different array evey array will have 2 value
echo "<pre>";
	print_r($car);
echo "</pre>";
echo "<br>";
echo "<br>";

?>