<html>
    <form method="POST" action="">
        <table>
            <tr>
                <td>Username:</td>
                <td> <input type="text" name="user_name"> </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Store Cookie!" name="submit">
                </td>
            </tr>
        </table>
    </form>
</html>

// Fetching a cookie value using web form

<?php

// Taking Cookie value from the user
if(isset($_POST['submit'])){
    // 1. Tell the browser to save the cookie for future visits
    setcookie("user_name", $_POST['user_name'], time()+7200, "/");
    
    // 2. MAGIC TRICK: Manually fill the global array so it's readable on this current load!
    $_COOKIE["user_name"] = $_POST['user_name'];
}

// This check now passes perfectly even on the first click!
if(isset($_COOKIE["user_name"]) && !empty($_COOKIE["user_name"])) 
{
    echo "Welcome " . $_COOKIE["user_name"];
}
else {
    echo "Cookie Not Found";
}

?>