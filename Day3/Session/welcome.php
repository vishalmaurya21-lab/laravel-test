<?php
session_start();
if (session_status() === PHP_SESSION_NONE) {
    echo "Session is NOT started.";
} else {
    echo "Session is already started.";
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>

    <?php
    if (isset($_POST['login'])) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
    }

    // Check if user is logged in
    if (isset($_SESSION['username'])) {
        echo "Welcome " . htmlspecialchars($_SESSION['username']) . "<br>";
        echo "Email is " . htmlspecialchars($_SESSION['email']) . "<br>";
        echo "Password is " . htmlspecialchars($_SESSION['password']) . "<br>";
    }
    ?>

    <form method="get">
        <input type="submit" name="logout" value="Logout">
    </form>
    <?php
    if (isset($_GET['logout'])) {
        session_unset();
        session_destroy();
        
        if (session_status() === PHP_SESSION_NONE) {
            echo "Session is NOT started.";
        } else {
            echo "Session is already started.";
        }
        header("Location: login.php");
        exit();
        
    }
    ?> 
    

</body>

</html>