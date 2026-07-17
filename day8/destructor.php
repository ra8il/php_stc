<?php

//Demonstrating the uses of Destructor

class Employee{

    public function __destruct(){
        echo "Object Destroyed!";
    }

    public function display(){
       echo "display called<br>";
    }
}

$emp = new Employee();
$emp->display();

?>