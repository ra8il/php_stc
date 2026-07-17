<?php

// Program to demonstrate the uses of static keyword

class Calculator{
    public static $index = 6; //static members
    public static function display(){ // static function
        echo self::$index; //self->class
    }
}

Calculator::display();

?>