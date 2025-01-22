<?php
	//if you want to transfre value in key position and key position in value then use flip function_exists
	////////////////array-flip function //////////////
	$a = array("Serial"=>001,"Fname"=>"Hossen", "Lname"=>"Khobir", "Age"=> 20);
	
	$arryflip = array_flip($a);
	
	echo "<pre>";
		print_r($arryflip);
	echo "</pre>";
	echo "<br>";
	echo "<br>";
	
	///////////////////array-change-key-case///////////////////
	
	//It's will work with key value fair 
	//It work with associate array
	//It's will change Just Key case
	
	$b = ["Nam1"=>"Aohon","nam2"=>"Ali","Nam3"=>"hasan"];
	$casechageUPPER = array_change_key_case($b,CASE_UPPER); 
	$casechageLOWER = array_change_key_case($b,CASE_LOWER);
	
	echo "<pre>";
		print_r($casechageUPPER);
	echo "</pre>";
	echo "<br>";
	echo "<br>";
	
	echo "<pre>";
		print_r($casechageLOWER);
	echo "</pre>";
	echo "<br>";
	echo "<br>";
	
	////////////////array sum and Product/////////
	//array_sum function will do plus all value
	//array_product function will multifly all value
	$n = array(1,2,3,4,5);
	
	$sumfun = array_sum($n);//it's will subtraction all value to 1 value ==return 15
	$productfun = array_product($n);//it's will multiply all value to 1 value == return 120
	echo "<pre>";
		print_r($sumfun);
	echo "</pre>";
	echo "<br>";
	echo "<br>";
	
	echo "<pre>";
		print_r($productfun);
	echo "</pre>";
	echo "<br>";
	echo "<br>";
	
	//////////////array rand and shuffle ////////////
	
	$color =['col1'=>"Red", "col2"=>"Green","col3"=>"Orange", "col4"=>"Blue", "col5"=>"Black"];
	
	$arryrand = array_rand($color, 1); 
	//its will show random 1 value second paramitter difine how much value you want to see
	// It's work with key or arry position show key or index value
	
	echo "<pre>";
		print_r($arryrand);
	echo "</pre>";
	echo "<br>";
	echo "<br>";
	shuffle($color);// it's will show messy value	it's will chang main value
	echo "<pre>";
		print_r($color);
	echo "</pre>";
	echo "<br>";
	echo "<br>";
?>