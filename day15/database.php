<?php

$host = 'localhost';
$user = "root";
$pass = "sidjn666";
$db = "sampledb";

// Connecting to mysql database

$con = mysqli_connect($host, $user, $pass, $db);
if(!$con){
    die("Could not connect". mysqli_connect_errno());
}
else{
    echo "Connection Established Successfully!";
}


$query = "insert into sample_table1 values(110,'ABC','M','2002-11-23',0911235612),(111, 'DEF', 'F', '2001-09-21', 0813451236),(112, 'LMN', 'M', '2004-10-12',0987832627)";

$res = mysqli_query($con, $query);
if(!$res){
    die("Could not insert". mysqli_connect_errno());
}
else{
    echo "Record Inserted Successfully!";
}


?>