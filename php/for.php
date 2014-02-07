<?php

// Write the output
// Notice the space after the ?

//fwrite(STDOUT, 'What is your first name? ');

// Get the input from user
//$first_name = fgets(STDIN);

// Output the user's name
//fwrite(STDOUT, "Hello $first_name\n");

fwrite(STDOUT, 'Please give start number: ');
$start_num = trim(fgets(STDIN));


fwrite(STDOUT, 'Please give end number: ');
$end_num = trim(fgets(STDIN));


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


//$min = is_numeric($argv[1]) ? intval($argv([1]) : 1;
//$max = is_numeric($argv[2]) ? intval($argv([1]) : 100;