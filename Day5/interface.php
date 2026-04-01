<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        interface Live{
            function sound();
            function sleep();
        }
        class Animal implements Live{
            
            function sound(){
                echo "are you listning<br> ";
            }   
            function sleep(){
                echo "Are you sleeping son! ";
            }
        }

        $animal=new Animal();
        $animal->sound();
        $animal->sleep();
    ?>
</body>
</html>