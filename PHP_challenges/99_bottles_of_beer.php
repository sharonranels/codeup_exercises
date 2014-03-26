<?php

$num_bottles = 99;
$bottle = " bottle";
$plural = "s";
$what = " of beer";
$location = " on the wall";
$do = " Take one down, pass it around, ";
$comma = ", ";
$period = ".";



do {
	if ($num_bottles > 2) {
	echo "$num_bottles . $bottle . $plural . $what . $location . $comma . $bottle . $plural . $what . $period . $do . ($num_bottles = $num_bottles - 1) . $what $location";
} while ($num_bottles >=3);

echo "2 bottles of beer on the wall, 2 bottles of beer. Take one down and pass it around, 1 bottle of beer on the wall." . "\n";
echo "1 bottle of beer on the wall, 1 bottle of beer. Take one down and pass it around, no bottles of beer on the wall." . "\n";
echo "No bottles of beer on the wall, No bottles of beer. Go to the store and buy some more, 99, bottles of beer on the wall." . "\n";
?>