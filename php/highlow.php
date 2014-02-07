<?php

//pick random number
$rndnumber = mt_rand(1 , 100);
$count_guesses = 0;
echo($rndnumber);

//prompt user to guess number

fwrite(STDOUT, 'Guess number ');

//Get input from user

$user_guess = fgets(STDIN);
$count_guesses += 1;
echo($user_guess);

//if user's guess is high, output LOWER
while($user_guess != $rndnumber) {

if ($user_guess > $rndnumber) {
	fwrite(STDOUT, "LOWER\n");
	fwrite(STDOUT, 'Guess again ');
	$user_guess = fgets(STDIN);
	$count_guesses += 1;
}

//if user's guess is low, output HIGHER  
	elseif ($user_guess < $rndnumber) {
	fwrite(STDOUT, "HIGHER\n");
	fwrite(STDOUT, 'Guess again ');
	$user_guess = fgets(STDIN);
	$count_guesses += 1;
}


}
 echo "GOOD GUESS\n";
 echo($count_guesses) . " Guesses\n";


//if user's guess is correct, declare GOOD GUESS

//Exit
?>
