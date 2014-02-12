<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function setEmpty($checkvar) {
	if (isset($checkvar) && !empty($checkvar)) {
		return TRUE;
	} else {
			return FALSE;
	}
}

// TEST: If var $nothing is set, display '$nothing is SET'
//unset($nothing);
//unset($something);

if (setEmpty($nothing)) {
	echo "\$nothing is SET.\n";
} else {
	echo "\noting is not SET.\n";
}

// if (isset ($nothing)) {
// 	echo "\$nothing is SET\n";
// } else {
// 	echo "\$nothing is EMPTY\n";
// }

// TEST: If var $nothing is empty, display '$nothing is EMPTY'
if (empty ($nothing)) {
	echo "\$nothing is EMPTY\n";
} else {
	echo "\$nothing is SET\n";
}

// TEST: If var $something is set, display '$something is SET'

if (isset ($something)) {
	echo "\$something is SET\n";
} else {
	echo "\$something is EMPTY\n";
}


// Serialize the array $array, and output the results

$serial = serialize($array);
var_dump($serial) . "\n";

// Unserialize the array $array, and output the results

$unserial = unserialize($serial);
var_dump($unserial);









?>