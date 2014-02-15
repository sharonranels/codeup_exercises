<?php

// Dump arg count
//var_dump($argc);
// Dump arg vars
//var_dump($argv);

if ($argc != 3) {
	echo "You must give two numbers between 1 and 100\n";
	exit(0);
	
}


// $min = is_numberic($argv[1]) ? intval($argv([1]) : 1;
if (is_numeric($argv[1])) {
	$min = intval($argv[1]);
} else {
	$min = 1;
}
$max = is_numeric($argv[2]) ? intval($argv[2]) : 100;



//check numbers
if (($argc != 3) || (!is_numeric($min)) || (!is_numeric($max)) || ($min < 0) || ($min > $max ) || ($max > 100)) {
	echo "Please give two numbers between 1 and 100\n";
	exit(0);
} else {
	echo "You've selected $min as a minimum and $max as a maximum.
Please guess the randomly seleted number in that range.\n";
}




//pick random number
$rndnumber = mt_rand($min, $max);
$count_guesses = 0;
echo($rndnumber);

//prompt user to guess number

fwrite(STDOUT, 'Guess number ');

//Get input from user

$user_guess = fgets(STDIN);
$count_guesses += 1;


//if user's guess is high, output LOWER
while($user_guess != $rndnumber) {

	if ($user_guess > $rndnumber) {
		fwrite(STDOUT, "LOWER\n");
		fwrite(STDOUT, 'Guess again ');
		
	}

	//if user's guess is low, output HIGHER  
	elseif ($user_guess < $rndnumber) {
		fwrite(STDOUT, "HIGHER\n");
		fwrite(STDOUT, 'Guess again ');
		
	}
	$user_guess = fgets(STDIN);
	$count_guesses += 1;

}
//if user's guess is correct, declare GOOD GUESS
echo "GOOD GUESS\n";
echo($count_guesses) . " Guesses\n";

//Exit
exit(0);

?>
