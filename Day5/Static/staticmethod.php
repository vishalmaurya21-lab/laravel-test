<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class greeting
    {
        static function welcome()
        {
            echo "Hello World";
        }
    }
    greeting::welcome();
    ?>
    <!-- Static methods -->
    <?php
    class calc
    {
        static function sum($x, $y): int
        {
            return $x * $y;
        }
    }
    $res = calc::sum(3, 4);
    echo $res;
    ?>
    <?php 
        class greetings{
            static function welcome(){
                echo "Hello World";
            }
            function __construct()
            {
                self::welcome();    
            }
        }
        new greetings();
    ?>

    <?php 
        class A{
            static function welcome(){
                echo "Hello World";
            }
        }
        class B{
            function message(){
                A::welcome();
            }
        }
    ?>
    
</body>

</html>