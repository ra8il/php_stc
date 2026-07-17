<?php

// Program to demonstrate multi-level inheritance

class Cl1{

    public $id = "C001";
    public function viewId(){
        echo "Client ID: ".$this->id;
    }
}

class Cl2 extends Cl1{
    public $name = "XYZ";
    public function viewName(){
        echo "<br>Client Name: ".$this->name;
    }

}

class Cl3 extends Cl2{
    public $country = "Canada";
    public function viewCountry(){
        echo "<br>Country: ".$this->country;
    }
}

$obj = new Cl3();
$obj->viewId();
$obj->viewName();
$obj->viewCountry();

?>