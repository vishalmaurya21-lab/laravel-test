<?php
$nameErr = $emailErr = "";
$name = $email = "";
$errors =[]; 

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name=trim($_POST['name']);
        $email=trim($_POST['email']);
        $password=trim($_POST['password']);

        if(empty($name)){
            $errors['name']="Name is required";
        }
        if(empty($email)){
            $errors['email']="Email is required";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email']="Email is required";
        }

        if(empty($passwrod)){
            $errors['password']="Password is required";
        }elseif(strlen($passwrod)<6){
            $errors['password']="Password must be only 6  digit";
        }

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
    <form action="test.php" method="post">
        Name:
        <input type="text" name="name" value="<?= htmlspecialchars($name) ?>">
        <span style="color:red"><?= $errors['name'] ?? '' ?></span>
        <br><br>

        Email:
        <input type="text" name="email" value="<?= htmlspecialchars($email) ?>">
        <span style="color:red"><?= $errors['email'] ?? '' ?></span>
        <br><br>

        Password:
        <input type="password" name="password">
        <span style="color:red"><?= $errors['password'] ?? '' ?></span>
        <br><br>

        <input type="submit">

    </form>
</body>

</html>
