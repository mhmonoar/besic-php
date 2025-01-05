<?php

/*switch(Expression){
	case condition 1: 
		statments;
	break;
	case condition 2: 
		statments;
	break;
	......
	default: statments;
}*/
	$weekday = 7;
	switch($weekday){
		case 1:
			echo "Today is Saturday";
		break;
		case 2:
			echo "Today is Sunday";
		break;
		case 3:
			echo "Today is Monday";
		break;
		case 4:
			echo "Today is Tuesday";
		break;
		case 5:
			echo "Today is Wesnesday";
		break;
		case 6:
			echo "Today is Thusday";
		break;
		case 7:
			echo "Today is Friday";
		break;
		default:
			echo "Wrond input";
	}
?>