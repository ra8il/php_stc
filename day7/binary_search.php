<?php 

// Binary Search using recursion

function bin_search($arr,$minL, $maxL,$key){
    if($minL>$maxL)
        return -1;

    $mid = intdiv($minL + $maxL, 2);
    if ($arr[$mid]==$key)
        return $mid;
    else if ($key<$arr[$mid])
        return bin_search($arr, $minL, $mid-1, $key);
    else
        return bin_search($arr, $mid+1, $maxL, $key);

}

$arr = [2,5,7,11,13,19,23];
echo bin_search($arr,0,count($arr)-1,19);

?>