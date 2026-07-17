<?php

// Redirecting session page to another web page

session_start();
echo "My Page!";
$_SESSION["emp_name"]= "Sanjay Singh";



header("Location: nextfile.php");

// header("Refresh: 3; URL=nextfile.php");
?>