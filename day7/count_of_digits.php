<html>
    <body>
        <form method="post" action="">
            <table>
                <tr>
                    <td>Enter the Number:</td>
                    <td><input type="number" name="num"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="submit">
                        <input type="reset" value="reset" name="reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
if(isset($_POST['num']) && isset($_POST['submit'])){

    $num = $_POST['num'];


// Program to count the digits in a number

function digit_count($num){
    if($num == 0)
        return 0;
    else
        return 1 + digit_count(intdiv($num,10));
}
echo "No. of Digits: ".digit_count($num);
}
?>