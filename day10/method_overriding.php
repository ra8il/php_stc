<?php

// Program to demonstrate Polymorphism via Method overriding

class SBI{

    public $roi = 6;
    public function interest_rate(){

        echo "<br>Rate of Interest: ".$this->roi;
    }
}

class ICICI extends SBI{

    public $roi = 8;
    public function interest_rate(){

        echo "<br>Rate of Interest: ".$this->roi;
    }

}

$obj = new ICICI;
$obj->interest_rate();

$obj2 = new SBI;
$obj2->interest_rate();

?>