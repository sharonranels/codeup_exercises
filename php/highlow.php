<?php

// Dump arg count
//var_dump($argc);
// Dump arg vars
//var_dump($argv);

//check numbers
if (($argc != 3) || (!is_numeric($argv[1])) || (!is_numeric($argv[2]))) {
	echo "Please give two numbers between 1 and 100";
	exit(0);
}



//is_numeric($element)

$min = $argv[1];
$max = $argv[2];

// If there are 2 args + filename
if ($argc == 3) {
  	// Echo them out directly
    	echo "arg1 is {$argv[1]} and arg2 is {$argv[2]}\n";
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

exit(0);


//Exit
?>
