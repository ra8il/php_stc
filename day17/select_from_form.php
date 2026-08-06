<html>
    <body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table style="border:1px solid black;">
            <tr>
                <td><input type="submit" name="submit" value="View Records"></td>
                <td><input type="reset" value="Reset"></td>
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
    die("Could not connect: ".mysqli_connect_error());
}
else
{
    echo "Connection Established Successfully!<br><br>";

    if(isset($_POST['submit']))
    {
        $query = "SELECT * FROM sample_table1";

        $res = mysqli_query($con, $query);

        if(!$res)
        {
            die("Could not view records: ".mysqli_error($con));
        }
        else
        {
            if(mysqli_num_rows($res) > 0)
            {
                echo "<table border=2>";
                echo "<tr>";
                echo "<th>Student_ID</th>";
                echo "<th>Student_Name</th>";
                echo "<th>Student_Gender</th>";
                echo "<th>Date_Of_Birth</th>";
                echo "<th>Contact_No.</th>";
                echo "</tr>";

                while($row = mysqli_fetch_array($res))
                {
                    echo "<tr>";
                    echo "<td>".$row[0]."</td>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>".$row[2]."</td>";
                    echo "<td>".$row[3]."</td>";
                    echo "<td>".$row[4]."</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            else
            {
                echo "No Records Found!";
            }
        }
    }

    mysqli_close($con);
}

?>