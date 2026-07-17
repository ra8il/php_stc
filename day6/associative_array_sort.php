<?php

$arr_associative = array("Orange"=>20, "Mango"=>10, "Apple"=>15, "Pineapple"=>5);

echo "Given: <br>";
foreach($arr_associative as $key=>$val)
    echo $key."=>".$val."<br>";


asort($arr_associative);

echo "<br>Sorting in Ascending Order w.r.t Value: <br>";

foreach($arr_associative as $key=>$val)
    echo $key."=>".$val."<br>";


arsort($arr_associative);
echo "<br>Sorting in Descending Order w.r.t Value: <br>";

foreach($arr_associative as $key=>$val)
    echo $key."=>".$val."<br>";



//WRT KEYS

ksort($arr_associative);

echo "<br>Sorting in Ascending Order w.r.t Keys: <br>";

foreach($arr_associative as $key=>$val)
    echo $key."=>".$val."<br>";

krsort($arr_associative);

echo "<br>Sorting in Descending Order w.r.t Keys: <br>";

foreach($arr_associative as $key=>$val)
    echo $key."=>".$val."<br>";

$arr_associative1 = [
    "ID"=>"A001",
    "Name"=>"Abc",
    "City"=>"Moradabad",
    "State"=>"U.P."
];

echo "<br>First Key: ".array_key_first($arr_associative1);

echo "<br>Last Key: ".array_key_last($arr_associative1); 

echo "<br><br>";

print_r(array_keys($arr_associative1));
?>