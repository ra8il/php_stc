<?php

// Demonstrating Traits in a PHP class


// properties -> class can use or reuse data in other classes (w/o inheritance)
//re-use traits functions and functionality
trait data{

public function display(){

echo "Welcome to summer internship session!";

}}

class data1{
    use data;
}     

$d1 = new data1();

$d1->display();

?>