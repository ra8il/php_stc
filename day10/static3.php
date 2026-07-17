<?php
// Program to demonstrate change in a static variale

class Student{

    public static $frequency = 0;

    public function __construct(){
        self::$frequency++;

    }
}

new Student();
new Student();
new Student();

echo "No. of Students: ".Student::$frequency;