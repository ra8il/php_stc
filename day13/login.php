<html>
    <body>
        <h1>Login Form</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <table style="border: 3px solid black;" >
                <th>
                    <td>
                        Username:
                    </td>
                    <td>
                        Password:
                    </td>
                </th>
                <tr>
                    <td>
                        <input type="text" name="username" id="username">
                </td>
                <td>
                    <input type="password" name="password" id="password">
                </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="login" name="login">
                    </td>
                    <td>
                        <input type="reset" value="reset" name="reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php

session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == $_SESSION['user'] && $password==$_SESSION['pass']){
        $_SESSION['login'] = true;
        header('Location: nextfile.php');
    }
    else{
        echo "Invalid Username or Password!";
    }
}

?>