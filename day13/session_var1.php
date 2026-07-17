<?php

session_start();

$_SESSION['cart'] = "Chips";
$_SESSION['cart'] = "Chocolate";
$_SESSION['cart'] = "Biscuits";
$_SESSION['cart'] = "Corn Flakes";

print_r($_SESSION['cart']);



?>