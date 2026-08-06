<?php

$host = "localhost";
$user = "rahil";
$pass = "rahiljn888";
$db = "sampledb";

try
{
    $con = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection Established Successfully!<br>";
}
catch(PDOException $e)
{
    die("Connection not established! " . $e->getMessage());
}

// Delete Query
$query = "DELETE FROM Emp_Table WHERE Emp_ID='E002'";

$con->exec($query);

echo "Record Deleted Successfully!";

?>