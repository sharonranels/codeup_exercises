<?php

// Converts array into list n1, n2, ..., and n3
//function humanized_list($array) {



	//}
  // Your solution goes here!


$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode (', ', $physicists_string);

$last_name = array_pop($physicists_array);

$famous_fake_physicists = implode(', ', $physicists_array) . ' and ' . $last_name . '.' . PHP_EOL;

echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";

//var_dump($physicists_array);
//echo $last_name;











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