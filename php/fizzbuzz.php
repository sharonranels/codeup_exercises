<?php

// write program that counts from 1 to 100
// check each number to see if divisible by 3 or 5
// if divisible by 3 write Fizz
//  if divisible by 5 write Buzz
// if divisible by 3 or 5 write FizzBuzz
// otherwise write number

for ($number = 1; $number <= 100; $number ++) {
	if ($number % 15 == 0) {
		echo "FizzBuzz\n";
	}
		elseif ($number % 5 == 0) {
			echo "Buzz\n";
		}
		elseif ($number % 3 == 0) {
			echo "Fizz\n";
		}
		else {
			echo "$number\n";
		}
}








?>
