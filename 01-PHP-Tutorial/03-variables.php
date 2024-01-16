<?php
/*
PHP supports the following data types:
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource 
*/

// Declaring Variable
$x = 19;
$y = "Fairuz";

// Output Variable
echo "my name " . $y . " and my age is " . $x . PHP_EOL;


// Get the type
var_dump($y);
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);


// Assign Multiple Values
$a = $b = $c = 10;
echo $a;
echo $b;
echo $c;

?>