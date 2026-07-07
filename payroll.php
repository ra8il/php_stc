<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $job = $_POST['job'];
    $exp_yrs = $_POST['experience'];

    // Assign salary based on job
    switch($job)
    {
        case "Manager":
            $basic = 50000;
            break;

        case "Software Developer":
            $basic = 45000;
            break;

        case "Accountant":
            $basic = 35000;
            break;

        case "HR Executive":
            $basic = 30000;
            break;

        case "Sales Executive":
            $basic = 28000;
            break;

        default:
            $basic = 5000;
    }

    // Salary Calculations
    $da = $basic * 0.20;      // 20% Dearness Allowance
    $pf = $basic * 0.08;      // 8% Provident Fund
    $exp_inc = $basic + ($basic * $exp_yrs / 10);

    $gross = $basic + $da + $exp_inc;
    $net = $gross - $pf;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Payroll Management</title>
</head>
<body>

<h1>Payroll Management System</h1>

<form method="POST">

    Employee Name:
    <input type="text" name="name" required>

    <br><br>

    Job Position:
    <select name="job" required>
        <option value="" hidden>-- Select Job --</option>
        <option value="Manager">Manager</option>
        <option value="Software Developer">Software Developer</option>
        <option value="Accountant">Accountant</option>
        <option value="HR Executive">HR Executive</option>
        <option value="Sales Executive">Sales Executive</option>
    </select>
    <br><br>

    Experience (yrs):
    <input type="number" name="experience" min="0">
    <br><br>

    <input type="submit" name="submit" value="Calculate Salary">

</form>

<?php

if(isset($net))
{
    echo "<hr>";
    echo "<h2>Salary Slip</h2>";

    echo "Employee Name : $name <br>";
    echo "Job Position : $job <br>";
    echo "Basic Salary : ₹$basic <br>";
    echo "DA (20%) : ₹$da <br>";
    echo "Experience Increment: $exp_yrs <br>";
    echo "Gross Salary : ₹$gross <br>";
    echo "PF (8%) : ₹$pf <br>";
    echo "<strong>Net Salary : ₹$net</strong>";
}

?>

</body>
</html>