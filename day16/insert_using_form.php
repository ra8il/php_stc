<html>
    <body>
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <table style="border: 1px solid black;">
            <tr>
                <td>ID:</td>
                <td><input type="number" name="id"></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="st_name" id="id"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="gender" value="M">Male
                <input type="radio" name="gender" value="F">Female</td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="dob" id="dob"></td>
            </tr>
            <tr>
                <td>Contact No:</td>
                <td><input type="number" size='11' name="contact_no"></td>
            </tr>
            <tr><td><input type="submit" name="submit" value="Insert"></td>
        <td><input type="reset" name="reset" value="Reset"></td>
        </tr>
        </table>
    </form>

    </body>
</html>

<?php

$host = "localhost";
$user = "rahil";
$pass = "rahiljn888";
$db = "sampledb";

$con = mysqli_connect($host, $user, $pass, $db);

if(!$con){

    die("Could Not Connect: ". mysqli_connect_error());

}
else{

    echo "Connection Established Successfully!<br>";

    if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $st_name = $_POST['st_name'];
    $gender = $_POST['gender'];
    $dob = $_POST["dob"];
    $contact_no = $_POST['contact_no'];

    $query = "INSERT INTO sample_table1 VALUES ($id, '$st_name', '$gender', '$dob', $contact_no)";

    $res = mysqli_query($con,$query);

    if(!$res){

        die("Could not view data!". mysqli_connect_error());
    }

    else{
        echo "Data Inserted Successfully!";
    }
}

$query = "SELECT * from sample_table1";

    $res = mysqli_query($con,$query);

    if(!$res){

        die("Could not view data!". mysqli_connect_error());
    }

    else{

        echo "<table border=1>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>Gender</th>";
        echo "<th>Date of Birth</th>";
        echo "<th>Contact No.</th>";
        echo "</tr>";

        while($row = mysqli_fetch_assoc($res)){ // or num(row) or array->numeric or string 

            echo "<tr>";
            echo "<td>".$row['id']." </td>";
            echo "<td>".$row['name']." </td>";
            echo "<td>".$row['gender']." </td>";
            echo "<td>".$row['date_of_birth']." </td>";
            echo "<td>".$row['Contact_No']." </td>";
            echo "</tr>";

        }

        echo "</table>";

        mysqli_close($con);

    }
    }

?>