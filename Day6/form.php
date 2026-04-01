<?php
require "db_connection.php";

$nameErr = $emailErr = $balanceErr = "";
$name = $email = $balance = "";
$id = "";
$isEdit = false;
$isValid = true;

/* ================= CHECK EDIT MODE ================= */
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $isEdit = true;

    $stmt = $conn->prepare("SELECT name,email,balance FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($name, $email, $balance);
    $stmt->fetch();
    $stmt->close();
}

/* ================= FORM SUBMIT ================= */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $isEdit = !empty($id);

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $balance = trim($_POST['balance']);

    // ===== NAME VALIDATION =====
    if (empty($name)) {
        $nameErr = "Name is required";
        $isValid = false;
    }

    // ===== EMAIL VALIDATION =====
    if (empty($email)) {
        $emailErr = "Email is required";
        $isValid = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        $isValid = false;
    } else {

        if ($isEdit) {
            $checkStmt = $conn->prepare("SELECT id FROM users WHERE email=? AND id!=?");
            $checkStmt->bind_param("si", $email, $id);
        } else {
            $checkStmt = $conn->prepare("SELECT id FROM users WHERE email=?");
            $checkStmt->bind_param("s", $email);
        }

        $checkStmt->execute();
        $checkStmt->store_result();

        if ($checkStmt->num_rows > 0) {
            $emailErr = "Email already exists";
            $isValid = false;
        }

        $checkStmt->close();
    }

    // ===== BALANCE VALIDATION =====
    if ($balance === "") {
        $balanceErr = "Balance is required";
        $isValid = false;
    } elseif (!is_numeric($balance) || $balance < 0) {
        $balanceErr = "Balance must be positive number";
        $isValid = false;
    }

    // ===== INSERT OR UPDATE =====
    if ($isValid) {

        if ($isEdit) {
            $stmt = $conn->prepare("UPDATE users SET name=?, email=?, balance=? WHERE id=?");
            $stmt->bind_param("ssdi", $name, $email, $balance, $id);
        } else {
            $stmt = $conn->prepare("INSERT INTO users(name,email,balance) VALUES(?,?,?)");
            $stmt->bind_param("ssd", $name, $email, $balance);
        }

        $stmt->execute();
        $stmt->close();

        header("Location: view.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $isEdit ? "Edit User" : "Create User"; ?></title>
</head>
<body>

<h2><?php echo $isEdit ? "Edit User" : "Create User"; ?></h2>

<form method="post" align="center">

    <input type="hidden" name="id" value="<?php echo $id; ?>">

    Name:
    <input type="text" name="name"
        value="<?php echo htmlspecialchars($name); ?>">
    <span style="color:red"><?php echo $nameErr; ?></span>
    <br><br>

    Email:
    <input type="text" name="email"
        value="<?php echo htmlspecialchars($email); ?>">
    <span style="color:red"><?php echo $emailErr; ?></span>
    <br><br>

    Balance:
    <input type="number" step="0.01" name="balance"
        value="<?php echo htmlspecialchars($balance); ?>">
    <span style="color:red"><?php echo $balanceErr; ?></span>
    <br><br>

    <input type="submit"
        value="<?php echo $isEdit ? "Update User" : "Create User"; ?>">

</form>

<br>
<a href="view.php">Back to List</a>

</body>
</html>