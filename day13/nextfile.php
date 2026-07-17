<?php

session_start();
if(!isset($_SESSION['login']))
    {
        header("Location: login.php");
        exit(0);
    }
echo "Welcome, ".$_SESSION["username"];

echo "<a href='logout.php'>Logout</a>";
?>