<?php

// GLOBAL
$x = 10;
$y = 5;
function myTest1(){
    global $x, $y;
    echo $x + $y;
}
myTest1();


// LOCAL
function myTest2(){
    $a = 1;
    $b = 2;
    echo $a + $b;
}
myTest2();
// echo $a + $b; //Error


// STATIC
function myTest3(){
    static $z = 0;
    echo $z;
    $z++;
}
myTest3();
myTest3();
myTest3();
myTest3();



?>