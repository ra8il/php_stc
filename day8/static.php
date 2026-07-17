<?php

// Demonstrating static members in a class

// Normal -> accessed through objects

// Static -> accessed w/o class object

class Sample
{
    public static $n = 0; // belongs to class itself

    public static function display(){

        echo self::$n; // holds 1 variable

    }

}

Sample::display(); // (::) -> scope resolution

echo Sample::$n;

?>