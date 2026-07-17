<?php

trait Bank{
    public function greetings(){
        echo "<br>Welcome to Banking Environment";
    }
}

trait Nat_Bank{
    public function nat_bank_intro(){
        echo "<br>National Banks are regulated under government policies to ensure the citizen welfare";
    }
}

class SBI{
    use Bank, Nat_Bank;

private $name = "State Bank of India";
private $roi = 6;
public function SBI_Data(){
    echo "<br>Bank Name: ".$this->name;
    echo "<br> Rate of Interest: ".$this->roi;
}}

$obj = new SBI;

$obj->greetings();
$obj->nat_bank_intro();
$obj->SBI_Data();

?>