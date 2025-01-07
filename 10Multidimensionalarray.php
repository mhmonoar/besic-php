<?php
	$employ =[
		[1, "Amir Khan", "Manager", 500000],
		[2, "saruk Khan", "CEO", 30000],
		[3, "salman Khan", "WD", 20000],
		[4, "Imran Khan", "DM", 15000],
		[5, "Emran Khan", "CM", 10000]
	];
	
	/////////////////using for loop/////////////
	
	for($row=0;$row<=3;$row++){
		for($col=0;$col<=3;$col++){
			echo $employ[$row][$col] . " ";
		}
		echo "<br>";
	}
	echo "<br>";
	echo "<br>";
	/////////////////using foreach loop/////////////
	
	
	echo "<table border = '2px' cellpadding='5px' cellspecing = '0'>";
	echo "
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Digister</th>
			<th>Salary</th>
		</tr>
	";
	foreach($employ as $emp1){
		echo "<tr>";
		foreach($emp1 as $emp2){
			echo "<td>$emp2  </td>";
		}
		
		echo "<tr>";
	}
	echo "</table>";
	 
	 echo "<br>";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	?>