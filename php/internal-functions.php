<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

// TEST: If var $nothing is set, display '$nothing is SET'
if (isset ($nothing)) {
	echo "\$nothing is SET\n";
} else {
	echo "\$nothing is EMPTY\n";
}

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

// TEST: Update the 'is set' check on $something to see if it is 'empty'. What happens?

if (empty ($something)) {
	echo "\$something is EMPTY\n";
} else {
	echo "\$something is SET\n";
}


// Serialize the array $array, and output the results

$array2 = serialize($array);
echo $array2 . "\n";

// Unserialize the array $array, and output the results

$array = unserialize($array2);
var_dump($array);









?>