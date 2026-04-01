<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        trait message1{
            public $name="Unknown";
            function msg1(){
                echo "Hii, Welcome in trait";
            }
        }
        class Welcome{
            use message1;
        }
        $obj=new Welcome();
        
        echo $obj->name."<br>";
        $obj->msg1();
    ?>
</body>
</html>