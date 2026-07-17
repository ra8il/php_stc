<?php

// Creating, Reading and Deleting Operationss

// Parameters
// domain -> local, web, hosting server

// setcookie(name, value, expire, path, domain, security, httponly);
// requires declaring multiple cookies

setcookie("username", "xyz", time()+3600,"/");

setcookie("Contact_no", "245345566", time()+3600, "/");

echo "Cookie has been Created!<br>";

if(isset($_COOKIE["Contact_no"])) // Globals
    echo "Welcome ".$_COOKIE["Contact_no"];
else
    echo "Cookie Not Found";

setcookie("Contact_no", "245345566", time()-3600, "/");

?>