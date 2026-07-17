<?php

// Program to demonstrate Abstract Class in php
// Interface Implementation
abstract class Employee{

    abstract function salary();
}

class IT_Employee extends Employee{
private $sal = 90000;    
public function salary(){
    echo "Salary of IT Employee: ".$this->sal;
    }
}

$obj = new IT_Employee;

$obj->salary();

?>