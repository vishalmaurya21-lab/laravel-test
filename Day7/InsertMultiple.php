<?php
$host = "localhost";
$user = "root";
$db_password = "";
$db = "demo_db";

$conn = mysqli_connect($host, $user, $db_password, $db);

if (!$conn) {
    die("Database not found");
}

if (isset($_POST['submit'])) {

    $ename = $_POST['ename'];
    $salary = $_POST['salary'];
    $designation = $_POST['designation'];

    $stmt = $conn->prepare("INSERT INTO employees (ename, salary, designation) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $ename, $salary, $designation);
    $stmt->execute();
    $stmt->close();

    echo "Data Inserted successfully";
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}else{
    echo "all fields are required"; 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Employee Registration Form</h2>
    <form action="" method="post" align="center">
        <Label>Employee Name:</Label>
        <input type="text" name="ename"><br><br>
        <label>Salary: </label>
        <input type="number" name="salary"><br><br>
        <label>Designation: </label>
        <input type="text" name="designation"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Salary</th>
            <th>Designation</th>
        </tr>
        <?php $result = $conn->query('Select * from employees '); ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['eid']; ?></td>
                <td><?php echo $row['ename']; ?></td>
                <td><?php echo $row['salary']; ?></td>
                <td><?php echo $row['designation']; ?></td>
            </tr>
        <?php endwhile; ?>
        <?php $ename=$salary=$designation=""; ?>
    </table>
</body>

</html>