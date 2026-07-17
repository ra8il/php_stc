<?php

// Demonstrating Encapsulation in php

class Employee{

    private $sal=60000;
    public function getSal(){
        return $this->sal;
    }
}

$emp = new Employee();
echo "Salary: ".$emp->getSal();

?>