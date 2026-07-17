<?php

// Program to demonstrate calling of parent method inside child class

class SBI{

    public static $roi = 6;

    public function interest_rate(){

        echo "<br>Rate of Interest: ".self::$roi;
    
    }
}

class ICICI extends SBI{

    public static $roi = 8;

    public function interest_rate(){

        parent::interest_rate();
        echo "<br>Rate of Interest: ".self::$roi;
    
        }
}

$obj = new ICICI;
$obj->interest_rate();


?>