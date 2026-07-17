<?php

//Demonstrating OOPS concepts in php

class Employee{
    public $name = "ABCD";
    public $city = "Moradabad";
    public $profession = "Software Development";
    public $designation = "Team Leader";
    
    public function view(){
        echo "Employee Name: ".$this->name;
        echo "<br>City: ".$this->city;
    }

    public function viewProf(){
        return $this->profession;
    }

    public function viewDesig(){
        return $this->designation;
    }

}

$emp = new Employee();

$emp->view();

echo "<br>Profession of Employee: ". $emp->viewProf();

echo "<br>Designation of Employee: ".$emp->viewDesig();

?>