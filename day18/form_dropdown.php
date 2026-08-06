<html>
<body>

<?php

$host = "localhost";
$user = "rahil";
$pass = "rahiljn888";
$db = "sampledb";

$con = mysqli_connect($host, $user, $pass, $db);

if(!$con)
{
    die("Could Not Connect: ".mysqli_connect_error());
}
else
{
    echo "Connection Established Successfully!<br>";
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table border="1">

        <tr>
            <td>ID:</td>
            <td>
                <select name="id" required>
                    <option value="">--Select ID--</option>

                    <?php
                    $query = "SELECT id FROM sample_table1";
                    $res = mysqli_query($con, $query);

                    while($row = mysqli_fetch_assoc($res))
                    {
                        echo "<option value='".$row['id']."'>".$row['id']."</option>";
                    }
                    ?>

                </select>
            </td>
        </tr>

        <tr>
            <td><input type="submit" name="submit" value="Delete"></td>
            <td><input type="reset" value="Reset"></td>
        </tr>

    </table>
</form>

</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $id = $_POST['id'];

    $query = "DELETE FROM sample_table1 WHERE id=$id";

    $res = mysqli_query($con, $query);

    if(!$res)
    {
        die("Could not Delete! ".mysqli_error($con));
    }
    else
    {
        echo "<br>Data Deleted Successfully!<br><br>";
    }
}

$query = "SELECT * FROM sample_table1";

$res = mysqli_query($con, $query);

if(!$res)
{
    die("Could not view data! ".mysqli_error($con));
}
else
{
    echo "<table border='1'>";

    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Gender</th>";
    echo "<th>Date of Birth</th>";
    echo "<th>Contact No.</th>";
    echo "</tr>";

    while($row = mysqli_fetch_assoc($res))
    {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['date_of_birth']."</td>";
        echo "<td>".$row['Contact_No']."</td>";
        echo "</tr>";
    }

    echo "</table>";
}

mysqli_close($con);

?>