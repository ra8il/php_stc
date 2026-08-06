<?php

function testNumber($n){
    if(!is_numeric($n)){
        throw new InvalidArgumentException('<br>Input data must be a Number<br>');
    }
    if($n<0){
        throw new Exception('<br>Number Cannot be Negative!<br>');
    }
    return sqrt($n);
}

try{
    echo testNumber(36)."<br>";
    echo testNumber(-14);
    echo testNumber("ABC");
}

catch(InvalidArgumentException $e){
    echo "Invalid Argument!".$e->getMessage();
}

catch(Exception $e){
    echo "Invalid Magnitude of Argument".$e->getMessage();
}

finally{
    echo "<br>Program Executed Completely!";
}
?>