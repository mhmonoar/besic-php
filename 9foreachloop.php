<?php
	//////////////////////////For Each /////////////////////////
	/*
		foreach ($array as $value){
			statments;
		}
	*/
	
	///////////////// EX O1 ////////////////
	$color =["Black","Blue","Orange", "Green", "Red", "White"];
	foreach($color as $rong){
		echo $rong . "<br>";
	}
	echo "<br>";
	echo "<br>";
	///////////////// EX O2 ////////////////
	$colour =["color1"=>"Black","color2"=>"Blue","color3"=>"Orange", "color4"=>"Green", "color5"=>"Red", "color6"=>"White"];
	echo "<ul>";
	foreach($colour as $rongkey => $value){
		echo "<li>$rongkey  => $value </li>";
	}
	echo "</ul>";
?>