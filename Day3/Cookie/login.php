<?php $username=""; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Page</title>
</head>
<body>
    <h2>LogIn Form</h2>
    <form action="test.php" method="post" style="text-align: center;">
        Name: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br><br>
        Password: <input type="password" name="password"><br> <br>
        <input type="checkbox" name="remember">Remember Me<br><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>