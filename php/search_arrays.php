<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// search for Tina and Bob in $names
// return True or False
$query = 'Tina';

$result = array_search($query, $names);

if ($result === false) {
	echo "FALSE\n";
} else {
	echo "TRUE\n";
}
var_dump($result);
	




?>