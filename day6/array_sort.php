<?php 

// Sorting of Numeric Array

$arr = array(60,20,10,90);

echo "Given Array: <br>";

foreach($arr as $val)
    echo $val."<br>";

sort($arr);

echo "<br>Array after Sorting in Ascending Order: <br>";

foreach($arr as $val)
    echo $val."<br>";

//Descending rsort

rsort($arr);

echo "<br>Array after Sorting in Descending Order: <br>";

foreach($arr as $val)
    echo $val."<br>";

//Natural Sort

echo "Natural Sort: <br>";
natsort($arr);

foreach($arr as $val)
    echo $val."<br>";

//USORT (Comparison)

usort($arr, function($a,$b){
    return $b - $a;
});

print_r($arr);


// Array Operations to locate / traverse the elements

$arr_num = array(15,5,35,17,22);

echo "<br>";

print_r($arr_num);

//CURRENT

echo "<br>First Element of Numeric Array: <br>".current($arr_num);

//NEXT

echo "<br>First Element of Numeric Array: <br>".next($arr_num);

//PREV 

echo "<br>Prev Element of Numeric Array: <br>".prev($arr_num);

//END
echo "<br>Last Element of Numeric Array: <br>".end($arr_num);

//RESET

echo "<br>Reset Element of Numeric Array: <br>".reset($arr_num);



?>