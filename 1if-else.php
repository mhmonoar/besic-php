<?php
	$i=20;
	//$i = 17; (for elseif)
	//$i = 14; (for else)
	if($i>=18){
		echo "Your age is: {$i} You're eligible for vot";
	}elseif($i>=15){
		echo "Your age is: {$i} You're not elegible for vot";;
	}else{
		echo "Your condition is not valid";
	}
	
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	//2nd example for if,elseif,else
	$a =75;
	
	if($a<=100 && $a>=80){
		echo "You are in marit list got A+";
	}elseif($a<80 && $a >=70){
		echo "You are not in marit list but you got A";
	}elseif($a<70 && $a >= 60){
		echo "You got B+";
	}elseif($a<60 && $a>=33){
		echo "You got C";
	}elseif($a<33){
		echo "You got 'F' and you are Fail";
	}else{
		echo "Your input number is Wrong";
	}
?>