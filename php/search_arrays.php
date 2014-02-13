<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query_names = ['Tina', 'Bob'];

// search for Tina and Bob in $names
// return True or False

//function query_name($query, $names) {
// this function is going to compare a name to names in an array


function count_matches($needles, $haystack) {
	$number_of_matches = 0;
	foreach ($needles as $needle) {
		$result = array_search(needle, haystack);
		if(is_numeric($result)) {
			$number_of_matches++;

		}
	}
	return $number_of_matches;
}

function names_in_common($compare, $names) {
	$in_names = [];
	foreach ($compare as $look_up) {
		$result = array_search($look_up, $names);

		if (is_numeric($result)) {
			$in_names[] = $result;
		}
	}
	return $in_names;
}

var_dump(names_in_common($compare, $names));


// function look_for_name($temp_lookup, $temp_names) {
// 	$result = array_search($temp_lookup, $temp_names);

// 	if (is_numeric($result)) {
// 		return "TRUE\n";
// 	} else {
// 		return "FALSE\n";
// 	}
// }

// $answer1 = look_for_name('Tina', $names);
// $answer2 = look_for_name('Bob', $names);
// echo $answer1;
// echo $answer2;


//$result = array_search($query, $names);

	



?>