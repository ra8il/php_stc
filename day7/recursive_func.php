<?php

//Program to find the sum of n natural numbers, with recursion

// base case -> base value (start and terminate)

//recursive -> repeat

function sum($num){
    if($num == 1)
        return 1;
    else 
        return $num + sum($num-1);
}

echo "sum of First $num natural numbers: ".sum(10);
?>