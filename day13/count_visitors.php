<?php

session_start();


if(isset($_SESSION['count'])){
    $_SESSION['count']++;
}
else {
    $_SESSION['count']=0;
}

echo "<br> No. of times page visited: ".$_SESSION['count'];

?>