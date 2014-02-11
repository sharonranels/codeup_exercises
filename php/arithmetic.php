<?php

function add($a, $b = 0) {
	if (is_numeric($a) && is_numeric($b)) {
    echo $a + $b . "\n";	
	} else { 
		echo "ERROR - you must give two numbers\n";
	}
    
}
add ("Sharon", 4);

function subtract($a, $b = 0) {
    echo $a - $b . "\n";
}
subtract (5, 4);
   

function multiply($a, $b = 0) {
    echo $a * $b . "\n";
}
multiply (5, 4);
   

function divide($a, $b = 0) {
    echo $a / $b . "\n";
}
divide (5, 4);

function modulus($a, $b = 0) {
    echo $a % $b . "\n";
}
modulus (5, 4);

      

?>