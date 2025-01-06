<?php 
	//There i will work likes row
	//There j will works like column
	for($i=1;$i<=100;$i+=10){
		for($j=$i;$j<$i+10;$j++){
			echo "$j";
		}
		echo "<br>";
	}
	
	echo "<br>";
	echo "<br>";
	
	//There x will work likes row
	//There y will works like column
	$n = 10;
	for($x=1;$x<=$n;$x++){
		for($y=1;$y<$x;$y++){
			echo "*";
		}
		echo "<br>";
	}
	
?>