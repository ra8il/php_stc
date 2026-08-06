<html>
    <body>
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <table style="border: 1px solid black;">
            <tr>
                <td>ID:</td>
                <td><input type="number" name="id"></td>
            </tr>
            <tr><td><input type="submit" name="submit" value="Delete"></td>
        <td><input type="reset" name="reset" value="Reset"></td>
        </tr>
        </table>
    </form>

    </body>
</html>

<?php

$host = "localhost";
$user = "root";
$pass = "sidjn666";
$db = "sampledb";

$con = mysqli_connect($host, $user, $pass, $db);

if(!$con)
{
    die("Could Not Connect: ".mysqli_connect_error());
}
else
{
    echo "Connection Established Successfully!<br>";

    if(isset($_POST['submit']))
    {
        $id = (int)$_POST['id'];

        $query = "DELETE FROM sample_table1 WHERE id=$id";

        $res = mysqli_query($con, $query);

        if(!$res)
        {
            die("Could not Delete! ".mysqli_error($con));
        }
        else
        {
            echo "Data Deleted Successfully!<br><br>";
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
        if(mysqli_num_rows($res) > 0)
        {
            while($row = mysqli_fetch_array($res))
            {
                echo $row[0]." ";
                echo $row[1]." ";
                echo $row[2]." ";
                echo $row[3]." ";
                echo $row[4]."<br>";
            }
        }
        else
        {
            echo "No Records Found.";
        }
    }

    mysqli_close($con);
}

?>