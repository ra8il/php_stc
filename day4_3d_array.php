<?php 
//Accessing of 3D Array using for Loop

$program_details=array(array
(array
("BCA",3, 40000),array("B.Tech CS Hons",2,100000),array("BCA [H.] CS",4,50000),
),
array(array("MCA",2,10000),array("M.Tech CSE", 4, 110000),array("M.Tech CSE Hons", 4, 110000))
);

//Foreach Loop
foreach($program_details as $val){
    foreach($val as $val1){
        foreach($val1 as $val2){
            echo $val2."";
        }
        echo "<br>";
    }
    echo "<br>";
}

?>


