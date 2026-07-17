<?php

// program to Demonstrate Interface in php

interface race{
    public function begin();
}

class Bicycle implements race{
    public function begin(){
        echo "<br>Bicycle Race Started!...";
    }
}

class Bike implements race{
    public function begin(){
        echo "<br>Bike Race Started!...";
    }
}

class Car implements race{
    public function begin(){
        echo "<br>Car Race Started!...";
    }
}

$obj1 = new Bicycle;
$obj2 = new Bike;
$obj3 = new Car;

$obj1->begin();
$obj2->begin();
$obj3->begin();


?>