<?php 
//Accessing 2D Array using For Loop

$stationary_price = array(array("Pen",20),array("Pencil",8), array("Eraser", 5), array("Sharpner", 10), array("Punching Machine", 60));

for($i=0; $i<5; $i++){
    for($j=0;$j<2;$j++){
        echo $stationary_price[$i][$j];
    }
}

echo "<br>";

foreach($stationary_price as $val){
    foreach($val as $val1){
        echo $val1;
    }
}

?>
