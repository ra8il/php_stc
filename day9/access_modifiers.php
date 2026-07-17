<?php

class St_data{
    public $x = 50;
    private $y = 80;
    protected $z = 100;
    public function greeting(){
     echo "Welcome to data zone!";
        }
}

class Student extends St_data{
    public function display(){
        echo $this->x."<br>".$this->y."<br>".$this->z;
    }
}

$st = new Student();
$st->greeting();
$st->display();

?>