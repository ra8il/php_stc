<?php

//Accessing Functions call by value

$a = 20;
$b = 30;

//function with arg and return type

function evaluate($a, $b){ //formal args
    if($a>$b)
        return $a-$b;

    else return $b-$a;
}

echo "Difference =".evaluate($a,$b); //actual args

//function without arg and return type

function evaluate1(){
    $a =10;
    $b = 20;

    if($a>$b)
        return $a-$b;

    else return $b-$a;
}

echo "Difference =".evaluate1();

//function with arg and w/o return type

function evaluate2($x, $y){
    $a =10;
    $b = 20;

    if($a>$b)
        echo $a-$b;

    else echo $b-$a;
}

$l = 15;
$m = 5;
echo "<br>w/ arg w/o return type: ";
evaluate2($l, $m);

//function w/o arg and w/o return type

function evaluate3(){
    $a =10;
    $b = 20;

    if($a>$b)
        echo $a-$b;

    else echo $b-$a;
}
echo "<br>w/o arg w/o return type: ";
evaluate3();


// CALL BY REFERENCE

//Assessing the function using call by Reference

function calculate(&$num){
    $num = $num + 10;
    return $num;
}

$n = 20;

calculate($n);

echo "<br>Output: ".$n;

?>