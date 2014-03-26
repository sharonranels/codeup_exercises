<?php

class Hello {

	public $defaultMessage = "Hello, World!";








}


$h1 = new Hello();
$h2 = new Hello();

$h1->defaultMessage = "Hello, Codeup";

echo $h1-> defaultMessage . PHP_EOL;
echo $h2->