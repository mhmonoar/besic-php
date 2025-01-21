<?php
/*
1. array_keys()---it's will show array keys 
2. array_key_first()--- it's will show array first key
3. array_key_last()--- it's will show array last key
4. array_key_exists(keyname, array) or key_exists()-- if there have key exist then show 0/1 that's mean true= 1, false = 0 or nothing show

*/
/////////////////////////////////arrry key function start///////////////////////////////////////////
$color = ["Black","Orange","Red","Yellow","White","Sky Blue","Blue"];
$color1 = ["col1"=>"Black","col2"=>"Orange","col3"=>"Red"];
//////////////array_keys/////////////////
$outcolor = array_keys($color);

echo "<pre>";
	print_r($outcolor);
echo "</pre>";

echo "<br>";
echo "<br>";

echo "<pre>";
	print_r($color);
echo "</pre>";

echo "<br>";
echo "<br>";

//////////////////////array_key_first////////////////////////
$outcolor1 = array_key_first($color1);

echo "<pre>";
	print_r($outcolor1);//show col1
echo "</pre>";



echo "<br>";
echo "<br>";


////////////////////array_key_last////////////////////////////
$outcolor2 = array_key_last($color1);
echo "<pre>";
	print_r($outcolor2);//show col3
echo "</pre>";



echo "<br>";
echo "<br>";


/////////////////array_key_exists///////////////////
$keyexist = array_key_exists("col1", $color1);
echo "<pre>";
	print_r($keyexist);//show result 1
echo "</pre>";

echo "<br>";
echo "<br>";

if($keyexist){
	echo "Array key Exist";
}else{
	echo "Array Key not exiest";
}
//////////////////////////////////////////End Array key functions////////////////////////////////////////////////




/////////////////////////array Intersect Start///////////////////////////

/*
	1. array_intersect()
	2. array_intersect_key()
	3. array_intersect_assoc()
	4. array_intersect_uassoc()
	5. array_intersect_ukey()
	6. array_uintersect()
	7. array_uintersect_assoc()
	8. array_uintersect_uassoc()
	
	***it's case sensative
	
*/

$a1 = array("a"=>"red", "b"=> "Green", "C"=> "Blue", "d"=> "Yellow");
$a2 = array("a"=>"red", "n"=> "Green", "C"=> "Blue");

$arryinter = array_intersect($a1,$a2); // It's will match just value



echo "<pre>";
	print_r($arryinter);
echo "<pre>";

echo "<br>";
echo "<br>";


$arryinterkey = array_intersect_key($a1,$a2); // It's will match just Key
echo "<pre>";
	print_r($arryinterkey);
echo "<pre>";
echo "<br>";
echo "<br>";
$arryinterkeyassoc = array_intersect_assoc($a1,$a2); // It's will match value key both

echo "<pre>";
	print_r($arryinterkeyassoc);
echo "<pre>";

echo "<br>";
echo "<br>";
/////////////////////////end Intersect ///////////////////////////





/////////////////////////Difference Start///////////////////////////

/*
	1. array_diff()
	2. array_diff_key()
	3. array_diff_assoc()
	4. array_diff_uassoc()
	5. array_diff_uassoc()
	6. array_diff_ukey()
	7. array_udiff_assoc()
	8. array_udiff_assoc()
	9. array_udiff()
*/

$x = ["a"=>"Sanjoy", "b"=>"Rohim", "c"=>"korim"];
$y = ["a"=>"Sanjoy", "d"=>"Rohim", "n"=>"Munna"];
$ndiff = array_diff($x,$y);

echo "<pre>";
	print_r($ndiff); ///just value difference sort
echo "<pre>";

echo "<br>";
echo "<br>";
$ndiffkey = array_diff_key($x,$y);
echo "<pre>";
	print_r($ndiffkey); //just key different sort
echo "<pre>";

echo "<br>";
echo "<br>";

$ndiffassoc = array_diff_assoc($x,$y);
echo "<pre>";
	print_r($ndiffassoc); //key and value both
echo "<pre>";

echo "<br>";
echo "<br>";
?>