<?php


function validate($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		echo "ERROR - you must give two numbers\n";
		var_dump($a);
		var_dump($b);
		exit(0);
}
}

function add($a, $b = 0) {
	validate($a, $b);
    echo $a + $b . "\n";	    
}
add (5, 4);


function subtract($a, $b = 0) {
    validate($a, $b);
    echo $a - $b. "\n";	  
}
subtract (5, 4);
   

function multiply($a, $b = 0) {
    validate($a, $b);
    echo $a * $b . "\n";
}
multiply (5, 4);
   




function validate0($a, $b) {
	if ($b == 0) {
		echo "ERROR - you cannot divide by 0\n";
		var_dump($a);
		var_dump($b);
		exit(0);
}
}

function divide($a, $b = 0) {
	validate($a, $b);
	validate0($a, $b);
    echo $a / $b . "\n";
}
	divide (5, 4);




function modulus($a, $b = 0) {
    validate($a, $b);
	validate0($a, $b);
    echo $a % $b . "\n";
}
	modulus (5, 4);
      

?>