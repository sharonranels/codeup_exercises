<?php

//pick random number
$rndnumber = mt_rand(1 , 100);
echo($rndnumber);

//prompt user to guess number

fwrite(STDOUT, 'Guess number ');

//Get input from user

$user_guess = fgets(STDIN);
echo($user_guess);

//if user's guess is high, output LOWER
while($user_guess != $rndnumber) {

if ($user_guess > $rndnumber) {
	fwrite(STDOUT, "LOWER\n");
	fwrite(STDOUT, 'Guess again ');
	$user_guess = fgets(STDIN);
}

//if user's guess is low, output HIGHER  
	elseif ($user_guess < $rndnumber) {
	fwrite(STDOUT, "HIGHER\n");
	fwrite(STDOUT, 'Guess again ');
	$user_guess = fgets(STDIN);
}


}
 echo "GOOD GUESS\n";


//if user's guess is correct, declare GOOD GUESS

//Exit
?>
