<?php
	//Continue Statments
	for($a =1;$a<=10;$a++){
		if($a==5){
			continue; // There continue statment skip will number 5 then continue all number
		}
		echo $a ."<br>";
	}
	
	echo "<br>";
	echo "<br>";
	
	//Break Statments
	for($x =1;$x<=10;$x++){
		if($x==5){
			break; // There when goto number 4 Break statment will end after 4 all things // Thats mean 5 ar aggg porjonto print hoba jokhoni 5 paba break hoya jaba;
		}
		echo $x ."<br>";
	}
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	//Goto Statments
	
	for($i =1;$i<=10;$i++){
		if($i == 5){
			goto abc; // This abc called label
			//when use goto statment it's will jumma goto lable;
		}
		echo $i . "<br>";
	}
	echo "Hello this is testing";
	abc:
		echo "Hello This is abc lable"; //This way to write label statment //when goto statment use first create lable
?>