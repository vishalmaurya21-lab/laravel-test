<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        Name:<input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        <input type="submit">
    </form>
    <?php 
        $name=$_GET['name'];
        $email=$_GET['email'];

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)===true){
            echo "Valid email";
        }else{
            echo "Invalid email";
        }
    ?>
</body>
</html>