<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if($_POST['username']=="admin" && $_POST['password']=="12345"){
                if(isset($_POST['remember'])){
                    setcookie("username",$_POST['username'],time()+59,"/");
                }else{
                    setcookie("username","", time()-3600,"/");
                }
                echo "Welcome ".$_POST['username'];
            }
        }
    ?>

</body>

</html>