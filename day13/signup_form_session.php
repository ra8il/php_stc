<html>
    <body>
        <h1>Registration Form</h1>
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
                        <input type="submit" value="submit" name="submit">
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

// Signup form using sessions in PHP

session_start();

if(isset($_POST['submit'])){
    $_SESSION['user']=$_POST['username'];
    $_SESSION['pass']=$_POST['password'];
    
    echo "Regsitered Successfully!";

    echo "<button><a href='login.php'>GoTo Login</a></button>";
}
?>