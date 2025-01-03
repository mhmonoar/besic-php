<?php

/*//index arrey
$name =[0=>"Monoar", 1=>"Masud", 2=>"Hossen", 3=>"Ali"];
$nam = "Hello my is khan. I am not terorist";
$names =["Monoar", "Masud", "Hossen", "Ali", "Hadnd"];
$num =[1,2,3,4];
//associate array
$foods =array("a"=>"Apple", "b"=>"Orange", "c"=>"Hossen", "d"=>"Lemon", "e"=>"Kukwy", "f"=>"Apple", "g"=>"Orange");
$foodsd =array("a"=>"Apple", "b"=>"Orange", "c"=> "Alu", "d"=>"chalu");
//multidimantial associate array
$foos =array(
	"fruit"=> array("a"=>"Apple", "b"=>"Orange"), 
	array("c"=>"Banana", "d"=>"Lemon", "e"=>"Kukwy"),
	$name
	
	);
echo implode("------",$names);
/*echo "<pre>";
print_r($strtoarry);
echo "</pre>";

$strn = "Hello world";

$nAry = chunk_split($strn,2,"..");

echo  $nAry;*/

$new = "Hello World";
echo md5($new). "<br>";

echo md5($new,true). "<br>";
echo sha1($new). "<br>";
echo sha1($new,true). "<br>";

$encode = convert_uuencode($new);
echo $encode . "<br>";
$decode = convert_uudecode($encode);
echo $decode . "<br>";


$b2x =  bin2hex($new);
echo $b2x . "<br>";
echo hex2bin($b2x);

echo "<br>";
echo "<br>";

echo chr(0X10);
echo "<br>";
echo "<br>";

echo ord("Monoar");



echo "<br>";
echo "<br>";


$nStr = "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable";

echo "<br>";

echo max(10,20,5,11,30,2);
echo "<br>";
echo floor(5.1);
echo "<br>";
echo ceil(5.1);
echo "<br>";
echo round(5.4);
echo "<br>";
echo round(5.6);
echo "<br>";
echo intdiv(8,2);
echo "<br>";
echo sqrt(9);
echo "<br>";
echo pow(8,2);
echo "<br>";
echo rand();
echo "<br>";
echo rand(5,10);
echo "<br>";
echo mt_rand(5,10);
echo "<br>";
echo lcg_value();
echo "<br>";
echo "Time is Now:".date("H:i:sA"). "<br>";
echo "Date  is Now: " .date("d/m/y"). "<br>";


$date = date_create("1994-04-22 10:25:00",timezone_open("Asia/Dhaka"));
echo date_format($date,"d/m/Y H:i:s A");