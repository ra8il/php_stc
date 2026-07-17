<?php

// Program to demonstrate anonymuous feature in php

$ob = new class{
    public function welcome(){
        echo "Welcome to the PHP Short-Term Training Session!";
    }
};

$ob->welcome();

?>