<?php
//Program to demonstrate 1D array
$Programme = array("BCA", "MCA", "B.Sc", "B.Tech CSE");

// can be accessed using for, for each loop
echo "<h1>Demonstrating 1D Array using For Loop</h1>";
for($i=0; $i<count($Programme);$i++)
    echo $Programme[$i]."<br>";

//Accessing 1D array using For-Each loop
echo "<h1>Demonstrating 1D Array using For Loop</h1>";

// uses Temporary Variables
//store, process, flush
foreach($Programme as $prg)
    echo $prg."<br>";
?>
