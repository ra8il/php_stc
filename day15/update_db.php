<?php

$host = 'localhost';
$user = "root";
$pass = "sidjn666";
$db = "sampledb";

// Connecting to mysql

$con = mysqli_connect($host, $user, $pass, $db);
if(!$con){
    die("Could not connect". mysqli_connect_errno());
}
else{
    echo "Connection Established Successfully!";
}


$query = "UPDATE sample_table1 SET contact='9164836539' where id=110";

$res = mysqli_query($con, $query);
if(!$res){
    die("Could not update". mysqli_connect_errno());
}
else{
    echo "Record Updated Successfully!";
}

?>