
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(empty($errors)){
            echo "<p style= 'color:green';> Form Submitted Successfully</p>";
    }
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name=$_POST['name'];
        echo "Name: ".$name."<br>";
        echo "Email: ".$email."<br>";
        echo "Password: ".$password."<br>";
    }

?>
</body>
</html>