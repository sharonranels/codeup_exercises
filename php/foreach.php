<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// foreach ($things as $thing) {
// 	if (is_int($thing)) {
// 		echo "{$thing} is an integer\n";
// 	} elseif (is_float($thing)) {
// 		echo "{$thing} is a float\n";
// 	}elseif (is_bool($thing)) {
// 		echo "{$thing} is a boolean\n";
// 	}elseif (is_array($thing)) {
// 		foreach ($thing as $arraything) {
// 			echo "{$arraything} is an array item\n";
// 		}
// 		//echo "{$thing} is a array\n"; - substituted by above
// 	}elseif (is_null($thing)) {
// 		echo "{$thing} is a null\n";
// 		}else {
// 		echo "{$thing} is a string\n";
// 	}
// }



// foreach ($things as $thing) {
// 	if (is_scalar($thing)) {
// 		echo "{$thing} is a scalar\n";
	
// }
// }



foreach ($things as $thing) {
	if (is_int($thing)) {
		echo "$thing\n";
	} elseif (is_float($thing)) {
		echo "$thing\n";
	}elseif (is_bool($thing)) {
		echo "$thing\n";
	}elseif (is_array($thing)) {
	foreach ($thing as $arraything) {
 			echo "$arraything\n";
 	 		}
		//echo "{$thing} is a array\n"; - substituted by above
	}elseif (is_null($thing)) {
		echo "$thing\n";
		}else {
		echo "$thing\n";
	}
}

?>