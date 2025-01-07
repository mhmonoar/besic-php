<?php
////////////////////////////////////
///array print using for loop Ex-1
$names = [10,"Masud", 5.1, "Hello"];

for($i=0;$i<4;$i++){
	echo $names[$i] . "<br>";
}
echo "<br>";
echo "<br>";
///////////////////////////////////
///array print unorderlist using for loop Ex-2

$nam = [10,"Masud", 5.1, "Hello", 15, 20, "Hello2", "Hello3"];
echo "<ul>";
for($j=0;$j<4;$j++){
	echo "<li>$nam[$j]</li>";
}
echo "</ul>";
echo "<br>";
echo "<br>";


///////////////////////Associative Array/////////////// It's will key value pair

$x = array("First Name"=>"Monoar", "Second Name"=> "Hossen", "Age"=> 28);
echo "<pre>";
	print_r($x);
echo "</pre>";
?>