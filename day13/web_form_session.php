<?php

// Validation of a web Login form through session

session_start();
$user = "admin";
$pass = "4567";

if($user == "admin" && $pass == "4567"){
    $_SESSION['username'] = $user;
    $_SESSION['password'] = $pass;
    echo "<br>Login Succssful";
}
else{
    echo "Invalid Login";
}

?>