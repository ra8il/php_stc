<?php 
//Programme to demonstrate 1D Associative Array

//Numeric - Numeric Keys Index
//Associatve - String Index

$student = array(
    "En_No." => "T001",
    "Name" => "Siddhansh",
    "Age" => "21"
    );

    echo "Accessing 1D Associative Array: <br>";

    foreach($student as $st=> $val)
        echo $st."=>".$val."<br>";

    echo $student["Name"];
?>