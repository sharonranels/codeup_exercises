<?php


function get_num ($prompt_user) {
	do {
		fwrite(STDOUT, $prompt_user);
		$input_num = trim(fgets(STDIN));
		if (!is_numeric($input_num)) {
			echo "You must give a number. Please try again.\n";
		}
	} while (!is_numeric($input_num));
	return $input_num;
}

$start_num = get_num('Please give start number: ');

//BEFORE FUNCTION:

// do {
// 	fwrite(STDOUT, 'Please give start number: ');
// 	$start_num = trim(fgets(STDIN));
// 	if (!is_numeric($start_num)) {
// 		echo "You must give a number. Please try again.\n";
// 	}
// } while (!is_numeric($start_num));

$end_num = get_num('Please give end number: ');

// do {
// 	fwrite(STDOUT, 'Please give end number: ');
// 	$end_num = trim(fgets(STDIN));
// 	if (!is_numeric($end_num)) {
// 		echo "You must give a number. Please try again.\n";
// 	}
// } while (!is_numeric($end_num));

fwrite(STDOUT, 'Please give the increment you would like to count by: ');
$count_increment = trim(fgets(STDIN));
// if ($count_increment !is_numeric || NULL, 1

if (!is_numeric($count_increment) || ($count_increment == NULL)) {
	$count_increment = 1;
}
var_dump($start_num);
var_dump($end_num);
var_dump($count_increment);

for ($i = $start_num; $i <= $end_num; $i += $count_increment) {
    echo "\$i has a value of {$i}\n";
}




// if (is_numeric($argv[1])) {
// 	$min = intval($argv[1]);
// } else {
// 	$min = 1;
// }
// $max = is_numeric($argv[2]) ? intval($argv[2]) : 100;



//$min = is_numeric($argv[1]) ? intval($argv([1]) : 1;
//$max = is_numeric($argv[2]) ? intval($argv([1]) : 100;