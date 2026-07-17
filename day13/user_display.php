<?php

// Program to display the logged in user of a session

session_start();


if(isset($_SESSION['username'])){
    echo "Welcome ".$_SESSION['username'];
    echo "<br>".$_SESSION['pass'];
}
else{
    echo "Please Sign In!";
}

session_destroy();
$_SESSION['pass']="1234";
echo "<br>Session Varibale Updated Successfully!";

echo "<br>".$_SESSION['pass'];

?>