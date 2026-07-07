<?php

echo "Accessiing of 2D Associative Array";

$st_details = array("T001"=>array("Name"=> "Sayon", "Age"=>20, "City"=>"Kolkata"),

"T002"=> array("Name"=> "Siddhansh", "Age"=>20, "City"=>"Moradabad"));

foreach($st_details as $st1=>$val1){
    foreach($val1 as $st2=>$val2)
        {
            echo "{$val1}=>{$st2}=>{$val2}";
        }
}

?>