<?php 
    session_start();
    $username=""; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>LogIn Form</h2>
    <form action="welcome.php" method="post">
        Name : <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br><br>
        Email: <input type="text" name="email"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="Login">

    </form>
</body>
</html>