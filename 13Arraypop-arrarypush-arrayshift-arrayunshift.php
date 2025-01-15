<?php 
	$fruits1= ["Apple", "Banana", "Orange", "Lichy"];
	
	
	////////Array Pop funtion////////////
	//if use array_pop function it's will remove last value from Array
	
	array_pop($fruits1);
	
	echo "<pre>";
		print_r($fruits1);//remove Lichy
	echo "</pre>";
	
	
	echo "<br>";
	echo "<br>";
	
	////////Array Push funtion////////////
	//if use array_push function it's will add value in last position in the array
	$fruits2= ["Apple", "Banana", "Orange"];
	
	array_push($fruits2, "Jackfruits", "Kewei");
	echo "<pre>";
		print_r($fruits2);//add jackfruits and kewei in last 
	echo "</pre>";
	
	echo "<br>";
	echo "<br>";
	////////Array Shift funtion////////////
	//if use shift function it's will remove first value from array
	$fruits3= ["Apple", "Banana", "Orange", "Lichy"];
	
	array_shift($fruits3);
	
	echo "<pre>";
		print_r($fruits3);//remove apple 
	echo "</pre>";
	
	echo "<br>";
	echo "<br>";
	
	
	////////Array unShift funtion////////////
	//if use unshift function it's will add value in first
	$fruits4= ["Apple", "Banana", "Orange"];
	
	array_unshift($fruits4, "Goava");
	
	echo "<pre>";
		print_r($fruits4);//add Goava in  first position
	echo "</pre>";
	
	echo "<br>";
	echo "<br>";
?>