<?php
/*
	1. sort()--It's will came serialy by assending order
	2. rsort() --It's will come opposite/reverse desending
	3. asort() --It's will work with associate array and it's will come serialy assending order
	4. arsort()  --It's will work with associate array and it's will come desending order
	5. ksort()  --It's will do key serialy assinding order
	6. krsort()  --It's will do key serialy desending order
	7. natcasesort() -- It's will do naturaly sorting
	8. natsort()  --- It's will sort by Case wise
	9. array_multisort() --this function use for multipol array sorting, if use this function all array must be same value
	10.array_reverse() -- It's will reverse/start from oposite site/// reverse function work with any kind of array
*/
/////////////////////////sort//////////////////////
$fruitss = ["Orange", "Apple", "Jackfruits", "Malta", "Lichi", "Kewie"];
sort($fruitss);/////sort functin used
echo "<pre>";
	print_r($fruitss);
echo "</pre>";
//////////////////////////////////
echo "<br>";
echo "<br>";
////////////////////rsort/////////////////////////
$fruitsr = ["Orange", "Apple", "Jackfruits", "Malta", "Lichi", "Kewie"];
rsort($fruitsr);/////rsort functin used
echo "<pre>";
	print_r($fruitsr);
echo "</pre>";
///////////////////////////
echo "<br>";
echo "<br>";

////////////asort////////////////////////////////////////////////
$fruitsasas = ["A"=>"Orange", "B"=>"Apple", "N"=>"Jackfruits", "P"=>"Malta", "C"=>"Lichi", "D"=>"Kewie"];
asort($fruitsasas);/////asort functin used for associate array its will sort value
echo "<pre>";
	print_r($fruitsasas);
echo "</pre>";
///////////////////////////
echo "<br>";
echo "<br>";

/////////////arsort////////////////////////////////////////////////////////////////////
$fruitsasars = ["A"=>"Orange", "B"=>"Apple", "N"=>"Jackfruits", "P"=>"Malta", "C"=>"Lichi", "D"=>"Kewie"];
arsort($fruitsasars);/////arsort functin used for associate array its will sort value reverse ut
echo "<pre>";
	print_r($fruitsasars);
echo "</pre>";
///////////////////////////
echo "<br>";
echo "<br>";
////////////////////////ksort/////////////////////////////////////////////////////////
$fruitsaks = ["A"=>"Orange", "B"=>"Apple", "N"=>"Jackfruits", "P"=>"Malta", "C"=>"Lichi", "D"=>"Kewie"];
ksort($fruitsaks);/////its will sort associate array key
echo "<pre>";
	print_r($fruitsaks);
echo "</pre>";
///////////////////////////
echo "<br>";
echo "<br>";
/////////////////////////////krsort/////////////////////////////////////
$fruitsakrs = ["A"=>"Orange", "B"=>"Apple", "N"=>"Jackfruits", "P"=>"Malta", "C"=>"Lichi", "D"=>"Kewie"];
krsort($fruitsakrs);/////its will sort associate array key
echo "<pre>";
	print_r($fruitsakrs);
echo "</pre>";
///////////////////////////
echo "<br>";
echo "<br>";

///////////////////natsort///////////////////
$arraynsort= array("img12.png", "img10.png", "img2.png", "img1.png");

natsort($arraynsort);/////its will sort associate array key
echo "<pre>";
	print_r($arraynsort);
echo "</pre>";
///////////////////////////
echo "<br>";
echo "<br>";
////////////////

/////////////////natcasesort///////////////
///////////////////natsort///////////////////
$arraynCsort= array("Img12.png", "Img10.png", "img2.png", "img1.png");

natcasesort($arraynCsort);/////its will sort associate array key
echo "<pre>";
	print_r($arraynCsort);
echo "</pre>";
///////////////////////////
echo "<br>";
echo "<br>";


////////////////array_multisort(array1,array2)///////////////

$x = ["Zabra", "Tiger", "Monkey"];
$y = ["Hilsha", "Boktifish", "Catfish"];

array_multisort($x,$y);
echo "<pre>";
	print_r($x);
echo "</pre>";
///////////////////////////
echo "<br>";
echo "<br>";
echo "<pre>";
	print_r($y);
echo "</pre>";
///////////////////////////
echo "<br>";
echo "<br>";


///////////////////////////array_reverse()//////////////

$snacks = ["Barger", "Biscut", "sandwich", "chikenloloy", "Bun"];

$revArray = array_reverse($snacks);  /// reverse function work with any kind of array
echo "<pre>";
	print_r($revArray);
echo "</pre>";
///////////////////////////
echo "<br>";
echo "<br>";
/////////////////////////////////////////////////////////////////end sort function//////////////////////////////////////////////////////////////////////////




/////////////////Arrray Traversing function/////////////////
echo "<h2>Titl=>Traversing Function start</h2>";
/*
	This function use for take different moment from array value 
	in arrray by defolt internal value 0
	
	next() --move next value
	prev() --bake previous value
	end()  -- move end point
	current() -- carrent position
	key()  -- carrent position index value key will return 
	pos()  --- Like carrent function
	each(() --- It's wil return exeact value and key
	reset()---
*/

$veggitable = ["Tomato", "Potato", "Pumking", "Borboti", "Carrot"];
///////////current///////////
echo "<b>Current Position: </b>". current($veggitable) . "<br>"; //Return will carrent position
////////////Key/////////////
echo "<b>Key: </b>". key($veggitable) . "<br>"; //Return current position key
///////////position or pos///////////
echo "<b>Current Position: </b>". pos($veggitable) . "<br>"; //Return will carrent position
echo "<br><br>";

////////////////next//////////
next($veggitable);
echo "<b>Current Position: </b>". current($veggitable) . "<br>"; //after using next function
next($veggitable);
echo "<b>Current Position: </b>". current($veggitable) . "<br>"; //after using next function
echo "<br><br>";
/////////////previous or prev////
prev($veggitable);
echo "<b>Using Prev: </b>". current($veggitable) . "<br>"; //after using doble next then use prev function
echo "<br><br>";
/////////////end/////////////////
end($veggitable);
echo "<b>Using End: </b>". current($veggitable) . "<br>"; //return end Using end function
echo "<br><br>";
///////////using each function/////////////////
echo "<h2 style='color:red;'> Each() function This code is not work Need to check this again </h2>";
/*
$neach= each($veggitable);
echo "<pre>";
	print_r($neach);
echo "</pre>";
echo "<br><br>";
*/
/////////////reset//////////
reset($veggitable);
echo "<b>Using End: </b>". current($veggitable) . "<br>"; //if array position anywhere it's will come first value
?>