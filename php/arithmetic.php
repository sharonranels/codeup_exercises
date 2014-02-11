<?php


function isValid($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return true;
	} else { 
		return false;
	}
}

		// echo "ERROR - you must give two numbers\n";
		// var_dump($a);
		// var_dump($b);
		// exit(0);


function add($a, $b = 0) {
	if (isValid($a, $b)) {
    	return $a + $b . "\n";	
    } else {
    	return "not valid\n";
    }
  }    

echo add (5, 4);


function subtract($a, $b = 0) {
    if (isValid($a, $b)) {
    	return $a - $b . "\n";	
    } else {
    	return "not valid\n";
    }    
}
echo subtract (5, 'a');
   

function multiply($a, $b = 0) {
    if (isValid($a, $b)) {
    	return $a * $b . "\n";	
    } else {
    	return "not valid\n";
    }    
}
echo multiply (5, 4);
   

function isValid0($a, $b) {
	if ($b != 0) {
		return true;
	} else { 
		return false;
	}
}
		// echo "ERROR - you cannot divide by 0\n";
		// var_dump($a);
		// var_dump($b);
		// exit(0);



function divide($a, $b = 0) {
	if (isValid($a, $b) && isValid0($a, $b)) {
    	return $a / $b . "\n";	
    } else {
    	return "not valid\n";
    }    
}
echo divide ("Sharon", 4);


 //    isValid($a, $b);
	// isValid0($a, $b);
 //    echo $a / $b . "\n";



function modulus($a, $b = 0) {
    if (isValid($a, $b) && isValid0($a, $b)) {
    	return $a / $b . "\n";	
    } else {
    	return "not valid\n";
    }    
}
echo modulus (5, 0);
      
// echo divide ("Sharon", 4);isValid($a, $b);
// 	isValid0($a, $b);
//     echo $a % $b . "\n";

?>