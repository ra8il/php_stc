<?php

// Program to demonstrate Hierarchicl inheritance in php

class Bank{
    public function greetings(){
        echo "<br>Welcome to Banking Environment";
    }
}

class SBI extends Bank{

private $name = "State Bank of India";
private $roi = 6;
public function SBI_Data(){
    echo "<br>Bank Name: ".$this->name;
    echo "<br> Rate of Interest: ".$this->roi;
}}

class ICICI extends Bank{
    private $name = "ICICI";
    private $roi = 8;
    public function ICICI_Data(){
    echo "<br>Bank Name: ".$this->name;
    echo "<br> Rate of Interest: ".$this->roi;
}}

$obj1 = new SBI;
$obj2 = new ICICI;

$obj1->greetings();
$obj1->SBI_Data();

$obj2->greetings();
$obj2->ICICI_Data();
?>