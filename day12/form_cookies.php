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

<?php

// Taking Cookie value from the user

if(isset($_POST['submit'])){

    setcookie("user_name", $_POST['user_name'], time()+7200, "/");

}
if(isset($_COOKIE["user_name"]) && !empty(($_COOKIE["user_name"]))) // Globals
{
    echo "Welcome ".$_COOKIE["user_name"];

    // setcookie("user_name", $_POST['user_name'], time()-7200, "/");
    }
else
    echo "Cookie Not Found";

?>
