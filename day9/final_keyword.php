<?php

// Demonstrating Final Keyword in php
// class cannot be extended

final class St_data {

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