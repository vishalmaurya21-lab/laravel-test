<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $num1 = 3;
    $num2 = 4;
    echo "i)";
    echo $num1 + $num2 . "<br>";



    // echo "Name: " . $name . " <br> Age: " . $age;
    // Must declare your variable inthe function for the access

    function mytest()
    {
        $name = 'Vishal';
        $age = 22;
        echo "ii)";
        echo "Welcome $name you are $age year old<br>";
    }
    mytest();

    echo "iii)";
    $txt = "google.com";
    echo "I love $txt!<br>";

    echo "iv)";
    // Concatination
    $ename = "3";
    $eid = 5;
    echo $ename + $eid;

    // Static Variable
    echo "<br>v)";
    function myTests()
    {
        static $x = 0;
        echo $x;
        $x++;
    }

    myTests();
    myTests();
    myTests();
    ?>

    <!-- Gobal Variable -->
    <?php
    echo "<br>vi)";
    $x = 5;
    $y = 5;

    function GlobalTest1()
    {
        global $x, $y;
        $y = $x + $y;
    }
    GlobalTest1();
    echo $y;
    ?>
    <!-- Super Global -->
    <?php
    echo "<br>vii)";
    $x = 10;
    $y = 20;

    function SuperGlobalTest()
    {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    SuperGlobalTest();
    echo $y;
    ?>
    <!-- Data Type -->
    <?php
    echo "<br>viii)";
    $x = 'A';
    $x = true;
    var_dump($x);
    echo gettype($x) . " ";
    $y = 5;
    echo get_debug_type($y) . " ";

    $car = array("BMW", "Mercedes", "Audi");
    var_dump($car) . " ";

    // Object data type
    class Car
    {
        public $color;
        public $model;

        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }

        public function message()
        {
            return "My car is " . $this->color . " " . $this->model;
        }
    }
    $myCar = new Car("Green", "BMW");
    echo $myCar->message();
    print "<br>";
    echo gettype($myCar) . " ";
    var_dump($myCar);

    ?>

    <!-- String -->
    <?php
    $x = "John Marshal";
    echo "Hello $x\n";
    echo "\tHow are you?\n<br>"; //Every \properti not works 

    echo "ix)";
    echo strlen($x) . "<br>";

    echo str_word_count("Hello World!") . " ";

    $txt = "I really love PHP!";
    var_dump(str_contains($txt, "love")) . " ";

    echo strpos("Hello World", "World") . " "; //It's check the word index in string

    $txt = "Hello my name is vishal";
    var_dump(str_starts_with($txt, "Hello my")) . " ";

    echo (str_ends_with($txt, "vishal")) ? "true" . " " : "false" . " "; //Return only bool

    echo strtoupper($txt) . " ";
    echo strtolower($txt) . " ";

    echo str_replace("Hello", "Hii", $txt) . " ";

    $a = "Hello";
    $b = "World";
    $c = "$a $b"; //OR
    $d = $a . " " . $b;
    echo $d . " ";

    echo substr($x, 5, 3) . " ";  //John Marshal  Mar
    echo substr($x, -5, 3) . " "; //rsh
    echo substr($x, 5, -3) . " "; // Mars 

    $x = "I'am belongs to \"Uttar Pradesh\" form the east."; //"Uttar Pradesh"
    echo $x . " ";

    ?>
    <!-- Php Numbers -->
    <?php
    $a = 4;
    $b = 4.7;
    $c = "8";

    var_dump($a) . " ";
    var_dump(is_int($a));
    var_dump($b) . " ";
    var_dump($c) . " ";

    $a = PHP_FLOAT_EPSILON;
    echo $a;

    $x = 1.24e11;

    var_dump(is_infinite($a));
    $x = acos(8);  // cos(60)=.5 and acos(.5)=60
    var_dump(is_nan($x)) . " ";

    $x = 124.0123;
    var_dump(is_numeric($x));
    echo intval($x) . "<br>";

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "25 km"; // String
    $d = "km 25"; // String
    $e = "hello"; // String
    $f = true;    // Boolean
    $g = NULL;    // NULL

    $a = (int) $a;
    $b = (int) $b;
    $c = (int) $c;
    $d = (int) $d;
    $e = (int) $e;
    $f = (int) $f;
    $g = (int) $g;

    var_dump($a); //5
    var_dump($b); //5
    var_dump($c); //25
    var_dump($d); //0
    var_dump($e); //0
    var_dump($f); //1
    var_dump($g); //0
    echo "<br>";

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "25 km"; // String
    $d = "km 25"; // String
    $e = "hello"; // String
    $f = true;    // Boolean
    $g = NULL;    // NULL

    $a = (float) $a;
    $b = (float) $b;
    $c = (float) $c;
    $d = (float) $d;
    $e = (float) $e;
    $f = (float) $f;
    $g = (float) $g;
    var_dump($a); //5
    var_dump($b); //5.34
    var_dump($c); //25
    var_dump($d); //0
    var_dump($e); //0
    var_dump($f); //1
    var_dump($g); //0
    echo "<br>";

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = 0;       // Integer
    $d = -1;      // Integer
    $e = 0.1;     // Float
    $f = "hello"; // String
    $g = "";      // String
    $h = true;    // Boolean
    $i = NULL;    // NULL

    $a = (bool) $a;
    $b = (bool) $b;
    $c = (bool) $c;
    $d = (bool) $d;
    $e = (bool) $e;
    $f = (bool) $f;
    $g = (bool) $g;
    $h = (bool) $h;
    $i = (bool) $i;
    var_dump($a); //True
    var_dump($b); //True
    var_dump($c); //False
    var_dump($d); //true
    var_dump($e); //true
    var_dump($f); //true
    var_dump($g); //false
    var_dump($h); //true
    var_dump($i); //false
    echo "<br>";

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (array) $a;
    $b = (array) $b;
    $c = (array) $c;
    $d = (array) $d;
    $e = (array) $e;
    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    echo "<br>";

    class MyCar
    {
        public $color;
        public $model;

        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }

        public function message()
        {
            return "My car is " . $this->color . " " . $this->model;
        }
    }
    $myCar = new MyCar("Green", "BMW");
    $myCar = (array) $myCar;
    var_dump($myCar);
    echo "<br>";


    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (object) $a;
    $b = (object) $b;
    $c = (object) $c;
    $d = (object) $d;
    $e = (object) $e;

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    echo "<br>";


    $a = array("Volvo", "BMw", "Mahindra");
    $b = array("Car" => "tesla", "age" => 22, "salary" => 100000000);
    $a = (object)($a);
    $b = (object)($b);
    var_dump($a);
    echo "<br>";

    var_dump($b);
    echo "<br>";



    ?>
    <!-- Math Functions -->
    <?php

    echo "Value of PI: " . pi();
    echo "<br>";
    $a = array(10, 20, 3, 90);
    echo "Min in array " . min($a);
    echo "<br>";
    echo "Max in array " . max($a);
    echo "<br>";
    echo "Absolute Value" . abs(-30);
    echo "<br>";
    echo "Square root if number: " . sqrt(6);

    echo "<br>";
    echo (round(3.60));
    echo "<br>";
    echo (round(0.49));
    echo "<br>";

    echo (rand(10, 1000));

    echo "<br>";
    define("Name", "Who are you");
    echo Name;
    echo "<br>";
    function Const_function()
    {
        define("admin", "Vishal Kumar");
    }
    Const_function();
    echo admin;
    echo "<br>";


    $x = 100;
    $y = "101";

    var_dump($x !== $y); // returns true because types are not equal

    

    ?>

</body>

</html>