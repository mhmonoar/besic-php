<?php
	//////////////////count & size of function using associate array//////////////////// 
	//this function count array value
	$name = ["korim","ahsan","hasan","rohim","ponec","boll"];
	
	echo count($name);  // output 6
	echo "<br>";
	echo sizeof($name); // output 6
	echo "<br>";
	echo "<br>";
	/////////////using multidimantinal assoiate array////////////////////
	$foods = array(
		"fruits" => array("orange","apple", "banana"),
		"veggi" => array("Tomato", "carrot", "pumkings")
		
	);
	
	echo count($foods); // output 2
	echo "<br>";
	echo sizeof($foods); // output 2
	
	// if want to see internal value use mod, mod have 2 value true and false true=1, false =0, by defults have has false
	echo "<br>";
	echo "<br>";
	echo count($foods,1); // output 8
	
	echo "<br>";
	echo "<br>";
	
	////////////////every array value print useing count and for or foreach ///////////////////
	
	$fruits =array("orange","apple", "banana", "kewie", "Goaba");
		$len =count($fruits);
		//////useing for loop
		for($i=0;$i<$len;$i++){
			echo $fruits[$i] . "<br>";
		}
		
echo "<br>";
echo "<br>";
		///////useing for loop
	foreach($fruits as $pol){
		echo $pol . "<br>";
	}
?>