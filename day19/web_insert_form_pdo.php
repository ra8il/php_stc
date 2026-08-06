<?php

$host = "localhost";
$user = "rahil";
$pass = "rahiljn888";
$db = "sampledb";

try
{
    $con = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //ERROR reflected in mode, Handle Exception

    echo "Connection Established Successfully!<br><br>";
}
catch(PDOException $e)
{
    die("Connection not established! " . $e->getMessage());
}


?>

<html>

<head>
    <style>
        td{

        border: 2px solid black;

        }
    </style>
</head>

<body>
    
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> // way data will trasfer from server to post , action-> submit-> server data location

<table>
    <tr>
        <td>Emp ID:</td>
        <td><input type="text" name="emp_id"></td>
    </tr>
    <tr>
        <td>Emp Name:</td>
        <td><input type="text" name="emp_name"></td>
    </tr>
    <tr>
        <td>Gender:</td>
        <td><input type="radio" name="gender" value="M">Male
        <input type="radio" name="gender" value="F">Female
    </td>
    </tr>
    <tr>
        <td>Date Of Birth: </td>
        <td><input type="date" name="dob"></td>
    </tr>
    <tr>
        <td>Designation:</td>
        <td><input type="text" name="designation"></td>
    </tr>
    <tr>
        <td>Salary:</td>
        <td><input type="number" name="salary"></td>
    </tr>
    <tr>
        <td>Contact No:</td>
        <td><input type="tel" name="contact_no"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Submit" name="submit"></td>
        <td><input type="reset" value="reset"></td>
    </tr>

</table>

</form>

</body>

</html>


<?php

if(isset($_POST["submit"])){

$emp_id = $_POST["emp_id"];
$emp_name = $_POST["emp_name"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$designation = $_POST["designation"];
$salary = $_POST["salary"];
$contact_no = $_POST["contact_no"];

  $query = "INSERT INTO Emp_Table
    VALUES ('$emp_id', '$emp_name', '$gender','$dob','$designation',$salary,'$contact_no')";

    $con->exec($query);

}

$query = "SELECT * FROM Emp_Table";

$res = $con->query($query);

echo "<table border=1>";
echo "<tr>";
echo "<th>Emp_ID</th>";
echo "<th>Emp_Name</th>";
echo "<th>Gender</th>";
echo "<th>Date_of_Birth</th>";
echo "<th>Designation</th>";
echo "<th>Salary</th>";
echo "<th>Contact_No</th>";
echo "</tr>";

while($row = $res->fetch(PDO::FETCH_ASSOC))
{
    echo "<tr>";
    echo "<td>".$row['Emp_ID']."</td>";
    echo "<td>".$row['Emp_Name']."</td>";
    echo "<td>".$row['Gender']."</td>";
    echo "<td>".$row['Date_of_Birth']."</td>";
    echo "<td>".$row['Designation']."</td>";
    echo "<td>".$row['Salary']."</td>";
    echo "<td>".$row['Contact_No']."</td>";
    echo "</tr>";
}
echo "</table>";

?>