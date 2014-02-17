<?php

$num_bottles = 99;
do {
	echo $num_bottles . " bottles of beer on the wall, " . $num_bottles . " of beer. Take one down and pass it around, " . ($num_bottles - 1) . " bottles of beer on the wall." . "\n";
	$num_bottles = ($num_bottles - 1);
} while ($num_bottles >=3);

echo "2 bottles of beer on the wall, 2 bottles of beer. Take one down and pass it around, 1 bottle of beer on the wall." . "\n";
echo "1 bottle of beer on the wall, 1 bottle of beer. Take one down and pass it around, no bottles of beer on the wall." . "\n";
echo "No bottles of beer on the wall, No bottles of beer. Go to the store and buy some more, 99, bottles of beer on the wall." . "\n";
?>