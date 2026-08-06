<?php

// Demostrating Exception Handling blocks in PHP

function compute($x,$y){
    if($y==0){
        throw new Exception('Divide by Zero is not permitted!');
    }
    else return $x/$y;
}

try{
    echo compute(30,0);
    echo "<br>";
    echo compute(30,15);
}

catch(Exception $e){
    echo "Exception: ".$e->getMessage();
}

?>