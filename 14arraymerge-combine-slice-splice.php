<?php 
	/*
	*there have 3 type of array marge function_exists
	**array_merge--- it's will work with index array and associate array
	**array_merge_recursive--- it's will work with miltidimantinal associate array
	**array_combine ---- it's will work with just index array
	*/
	
	$fruits1 = ["Apple", "Banana", "Orange"];
	$fruits2 = ["Pinapple", "Goava"];
	$fruits3 = ["A"=>"Hello", "B"=>"Hey", "C"=>"Hi"];
	/////////////array_merge//////////////
	$fruits = array_merge($fruits1,$fruits2);//array_merge() function with index array
	$fruits2out = array_merge($fruits1,$fruits3);//
	
	echo "<pre>";
		print_r($fruits);
	echo "</pre>";
	
	echo "<br>";
	echo "<br>";
	
	echo "<pre>";
		print_r($fruits2out); //array_merge() function with index and associate array exemple
	echo "</pre>";
	
	
	echo "<br>";
	echo "<br>";
	
	/////////////array_combine//////////////
	$fru1 = ["Mango", "Jackfruits", "watermilion"];
	$fru2 = ["kewie", "olive", "Papia"];
	$fruout = array_combine($fru1,$fru2);
	
	echo "<pre>";
		print_r($fruout); 
		/* 
		* array_combine funtion with index array
		* its first array treat will key and secon array will treat value 
		* when used combine function both array value must be same number of value
		*/
	echo "</pre>";
	
	
	
	echo "<br>";
	echo "<br>";
	
	/////////////array_merge_recursive//////////////
	
	
	$vegi1 = ["1"=>"Tomato","2"=>"Pumking", "3"=>"Onion"];
	$vegi2 = ["2"=>"alu",array("Monoar", "Hossen"), 10,25,$fru1];
	$vagitable = array_merge_recursive($vegi1,$vegi2);
	echo "<pre>";
		print_r($vagitable);
	echo "</pre>";
	
	echo "<br>";
	echo "<br>";
	////////////////////////Slice(array,start,length)//////////////
	
	$name = ["Hapiz","Hapsa", "Johir", "Alia", "Sokina"];
	$newname = array_slice($name,1,3);//output hapsa,johir,alia
	echo "<pre>";
		print_r($newname);
	echo "</pre>";
	echo "<br>";
	echo "<br>";
	
	////////////////////////Splice(array,start,length)or(array,start,count)//////////////
	
	/*
		*if there give one value just arry and stat point it's will give result start point to finish
	*/
	$color = ['Red','Orange','Black','Green','White'];
	$color2 = ['Yellow','Nevy','Offwhite','Gray','purple'];
	
	$colour = array_splice($color,2,1); // output black
	echo "<pre>";
		print_r($colour);
	echo "</pre>";
	echo "<br>";
	echo "<br>";
?>