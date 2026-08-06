<?php

// Demonstracting User Defined Exception in PHP

class MarksException extends Exception{}

    function valid_marks($score){
        if(($score<0)||($score>100)){
            throw new MarksException('Marks must be between 0 and 100');
        }
            return "Valid Marks:".$score;
    }
    try{
        echo valid_marks(94)."<br>";
        echo valid_marks(102)."<br>";
        echo valid_marks(-2)."<br>";
    }
    catch(MarksException $e){
        echo "Error".$e->getMessage();
    }


?>