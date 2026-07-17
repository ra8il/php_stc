<?php

//Demonstrating the uses of Constructor

class Employee{
    public $name;
    public function __construct($n, $c, $p, $d){
        $this->name = $n;
        $this->city = $c;
        $this->profession = $p;
        $this->designation = $d;
    }

    public function display(){
        echo "Employee Name: ".$this->name."<br>";
        echo "Employee city: ".$this->city."<br>";
        echo "Employee profession: ".$this->profession."<br>";
        echo "Employee designation: ".$this->designation."<br>";
    }
}

$emp = new Employee("XYZ", "Bareilly", "Data Processing", "Data Analyst");
$emp->display();

?>