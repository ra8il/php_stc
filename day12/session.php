<?php

// Creating and Destroying session in PHP
// Login to LogOut is a SESSION
// -> SERVER

// Credential on server
// Session values can staore multiple values
//CREATING
session_start();
$_SESSION["username"] = "pqrs"; // Session Variable
$_SESSION["nationality"] = "Indian";

echo "Session Varibales are Set!";

if(isset($_SESSION['username']) && isset($_SESSION["nationality"]))
    {

// ACCESSING
echo "<br>Username: ".$_SESSION['username'];
echo "<br> Nationality: ".$_SESSION["nationality"];
}

else
{
    echo "Session variables are not found!";
}

unset($_SESSION['nationality']);

echo $_SESSION['username'];
echo $_SESSION['nationality'];

session_destroy(); // end the existence of session
session_unset();

echo $_SESSION['username'];
echo $_SESSION['nationality'];

?>