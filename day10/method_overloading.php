<?php

// Program to demonstrate Polymorphism via Method overlaoding

class Student{
    public function __call($method, $arguments){

        if($method=="add"){
            $total = array_sum($arguments);
            echo "Total: ".$total;
        }
    }
}

echo "<br>";
$st1 = new Student();
$st1->add(32,48);
$st2 = new Student();
echo "<br>";
$st2->add(33,41,52);
$st3 = new Student();
echo "<br>";
$st3->add(33,41,52,57);


?>