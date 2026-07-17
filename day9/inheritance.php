<?php

// Demonstrating Inheritance in php

// (a class inherits properties of another class)

// example of -> SINGLE INHERITANCE

class St_data {

    public $name = "ABCD";
    public function input(){
        echo "Student's Name: ". $this->name;
    }
}

class Lib_data extends St_data{
    public $lib_id = "L001";
    public function viewID(){
        echo "<br>Student's Library ID: ". $this->lib_id;
    }
}

$lib = new Lib_data();
$lib->input();
$lib->viewID();

?>