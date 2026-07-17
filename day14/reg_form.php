<html>
    <body>
        <h1>Registration Form</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <table style="border: 3px solid black;" >
                    <tr>
                        <td>
                            Username: 
                        </td>
                        <td>
                            <input type="text" name="username" id="username">
                        </td>
                </tr>
                 <tr>
                        <td>
                            Password: 
                        </td>
                        <td>
                            <input type="password" name="password" id="password">
                        </td>
                </tr>
                 <tr>
                        <td>
                            Confirm Password:
                        </td>
                        <td>
                            <input type="password" name="conf_password" id="conf_password">
                        </td>
                </tr>
                 <tr>
                        <td>
                            Email: 
                        </td>
                        <td>
                            <input type="email" name="email" id="email">
                        </td>
                </tr>
                 <tr>
                        <td>
                            Date of Birth: 
                        </td>
                        <td>
                            <input type="date" name="dob" id="dob">
                        </td>
                </tr>
                 <tr>
                        <td>
                            Contact:
                        </td>
                        <td>
                            <input type="tel" name="cno" id="cno">
                        </td>
                </tr>

            </table>
        </form>
    </body>
</html>

<?php 

session_start();

if(isset($_POST['register'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $conf_pass = $_POST['conf_password'];
    $email = $_POST['email'];
    $cno = $_POST['cno'];
    $dob = $_POST['dob'];

    if($pass != $conf_pass){
        echo "Password does not match!";
    }
    else{
        $_SESSION['username']=$user;
        $_SESSION['password']=$pass;
        $_SESSION['email']=$email;
        $_SESSION['Contact_No']=$cno;
        $_SESSION['date_of_birth']=$dob;
        $_SESSION['msg'] = "Registered Successfully!";

        header('Location: login.php');
        exit();
        }

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
}

?>