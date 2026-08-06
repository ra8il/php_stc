<?php

$host="localhost";
$user="rahil";
$pass="rahiljn888";
$db="sampledb";

try
{
    $con=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    die('Connection not established:'.$e->getMessage());
}

echo "Connection established successfully";

$query="SELECT Emp_ID FROM Employee_table";
$res=$con->query($query);

?>

<html>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

<table>

<tr>
    <td>Emp ID:</td>
    <td>
        <select name="emp_id">
            <option value="Select">Select</option>

            <?php

            while($row=$res->fetch(PDO::FETCH_ASSOC))
            {
            ?>

            <option value="<?php echo $row['Emp_ID'];?>">
                <?php echo $row['Emp_ID'];?>
            </option>

            <?php
            }
            ?>

        </select>
    </td>
</tr>

<tr>
    <td>
        <input type="submit" value="Delete" name="submit">
        <input type="reset" value="reset" name="reset">
    </td>
</tr>

</table>

</form>

</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $empid=$_POST['emp_id'];

    $query="DELETE FROM Emp_table WHERE Emp_ID='$empid'";

    $res=$con->exec($query);

    if(!$res)
    {
        echo "<br>Record could not Deleted";
    }
    else
    {
        echo "<br>Record Deleted Successfully";
    }
}

?>