<?php

$host = "localhost";
$user = "root";
$pass = "sidjn666";
$db = "sampledb";

try
{
    // Database Connection
    $con = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // Enable Exception Mode
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection Established Successfully!<br>";

    // Create Table
    $query = "CREATE TABLE IF NOT EXISTS Emp_Table
    (
        Emp_ID VARCHAR(15) PRIMARY KEY,
        Emp_Name VARCHAR(30),
        Gender VARCHAR(1),
        Date_of_Birth DATE,
        Designation VARCHAR(15),
        Salary INT,
        Contact_No VARCHAR(15)
    )";

    $con->exec($query);

    echo "Table Created Successfully!<br>";

    // Insert Records
    $query = "INSERT INTO Emp_Table
    VALUES
    ('E001','ABCD','M','2009-12-20','Clerk',20000,'+91-8971456112'),
    ('E002','KLMN','F','2008-11-25','Manager',50000,'+91-6512312345'),
    ('E003','PQRS','M','2010-07-13','Director',100000,'+91-9876543210')";

    $con->exec($query);

    echo "Records Inserted Successfully!";

}
catch(PDOException $e)
{
    die("Error: " . $e->getMessage());
}

?>