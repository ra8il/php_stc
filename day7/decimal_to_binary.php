<?php

//Program to convert from decimal to binary

function dec_to_bin($num){
    if($num == 0)
        return 0;
    dec_to_bin(intdiv($num,2)); 
    //(intdiv())division's integer part is stored
    echo $num%2;
    echo " ";
}

echo dec_to_bin(28);
?>