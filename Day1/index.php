<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Form</title>
</head>
<body>
    <h2 align="center">LogIn Form</h2>
    <form method="post" align="center">
        <label for="Name">Username: </label>
        <input type="text" name="username"><br><br>

        <label for="Password">Password: </label>
        <input type="password" name="password"><br><br>
        
        <input type="submit" name="submit" value="LogIn">
    </form>
</body>
</html>
<?php
    
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        if($username=="admin" && $password=="12345"){
            header("Location: welcome.php");
        }else{
            echo "Wrong username or password";
        }
    }
?>