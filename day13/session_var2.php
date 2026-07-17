<?php

// Display the array of session variable in a session

session_start();

$_SESSION['Name'] = "Aman Kumar";
$_SESSION['Department'] = "IT";
$_SESSION['Designation'] = "IT Manager";
$_SESSION['Salary'] = "70000";

echo "<br> Name:";
echo ($_SESSION['Name']);
echo "<br> Department: ";
echo ($_SESSION['Department']);
echo "<br> Designation: ";
echo ($_SESSION['Designation']);
echo "<br> Salary: ";
echo ($_SESSION['Salary']);

?>