<?php

$host = "localhost";
$user = "root";
$pass = "sidjn666";
$db = "sampledb";

$con = mysqli_connect($host, $user, $pass, $db);

if(!$con){

    die("Could Not Connect: ". mysqli_connect_error());

}
else{

    echo "Connection Established Successfully!<br>";

    $query = "SELECT * from sample_table1";

    $res = mysqli_query($con,$query);

    if(!$res){

        die("Could not view data!". mysqli_connect_error());
    }

    else{

        echo "<table border=1>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>Gender</th>";
        echo "<th>Date of Birth</th>";
        echo "<th>Contact No.</th>";
        echo "</tr>";

        while($row = mysqli_fetch_assoc($res)){ // or num(row) or array->numeric or string 

            echo "<tr>";
            echo "<td>".$row['id']." </td>";
            echo "<td>".$row['name']." </td>";
            echo "<td>".$row['gender']." </td>";
            echo "<td>".$row['date_of_birth']." </td>";
            echo "<td>".$row['Contact_No']." </td>";
            echo "</tr>";

        }

        echo "</table>";

        mysqli_close($con);

    }

    // OR

    // else{
    //     echo "<table border=1 >";
    //     while($row = mysqli_fetch_row($res)){ // or num(row)
    //         echo "<tr>";
    //         echo "<td>".$row[0]." </td>";
    //         echo "<td>".$row[1]." </td>";
    //         echo "<td>".$row[2]." </td>";
    //         echo "<td>".$row[3]." </td>";
    //         echo "<td>".$row[4]." </td>";
    //         echo "</tr>";
    //     }
    //     echo "</table>";
    // }
}

?>