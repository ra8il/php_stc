<?php

// Program to demonstrate calling of parent constructor in a child class

class Grains{
    public function __construct(){
        echo "Class Grains Constructor is Called!";
    }
}

class Wheat extends Grains{
    public function __construct(){
        parent::__construct();
        echo "<br> Class Wheat Constructor is Called!";
    }
}

$ob = new Wheat();

?>