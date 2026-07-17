<?php

session_start();
if(!isset($_SESSION['login']))
    {
        header("Location: login.php");
        exit(0);
    }

else if(!isset($_SESSION['username'])){
    header("Location: reg_form.php");
    exit(0);
}

echo "Welcome, ".$_SESSION["username"];

echo "<a href='../day13/logout.php'>Logout</a>";
?>