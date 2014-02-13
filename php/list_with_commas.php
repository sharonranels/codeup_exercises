<?php

// Converts array into list n1, n2, ..., and n3

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicists_array = explode (', ', $physicists_string);

function humanized_list($array) {
	$last_name = array_pop($array);
	return implode(', ', $array) . ' and ' . $last_name . '.' . PHP_EOL;

}


  // Your solution goes here!




echo 'Do you want to alphabetize the list of physicists? ';
        $input = strtoupper(trim(fgets(STDIN)));
        if ($input == 'Y') {
            sort($physicists_array);
        }

// THIS BECOMES THE FUNCTION:
//$famous_fake_physicists = implode(', ', $physicist_array) . ' and ' . $last_name . '.' . PHP_EOL;

$famous_fake_physicists = humanized_list($physicists_array);

echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";











// function names_in_common($compare, $names) {
// 	$in_names = [];
// 	foreach ($compare as $look_up) {
// 		$result = array_search($look_up, $names);

// 		if (is_numeric($result)) {
// 			$in_names[] = $result;
// 		}
// 	}
// 	return $in_names;






// List of famous peeps


// Humanize that list
//$famous_fake_physicists = humanized_list($physicists_string);

// Output sentence
//echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";

?>