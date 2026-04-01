<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Form</title>
</head>

<body>
    <h2>LogIn Page</h2>

    <form action="" method="post">
        ID: <input type="text" name="id"><br><br>
        Name: <input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        <input type="submit" value="Login"><br>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
        if ($id === false) {
            echo "Invalid ID<br>";
        } else {
            echo "Valid ID<br>";
        }

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        if ($email === false) {
            echo "Invalid Email Address<br>";
        } else {
            echo "Valid Email Address<br>";
        }
    }
    ?>

</body>
</html>
