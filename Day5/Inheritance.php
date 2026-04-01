<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class Demo{
            public $name;
            private $balance;
            protected $age;

            //Parameterise Constructir 
            function __construct($name, $balance, $age)
            {
                $this->name=$name;
                $this->balance=$balance;
                $this->age=$age;
            }

            // Setter Method
            function setName($name){
                $this->name=$name;
            }
            function setBalance($balance){
                $this->balance=$balance;
            }

            function setAge($age){
                $this->age=$age;
            }

            // Getter Emthod
            function getName(){
                return $this->name;
            }
            function getBalance(){
                return $this->balance; 
            }
            function getAge(){
                return $this->age;
            }
            function sayHello(){
                echo "Nothing ! say hello";
            }
        }
        // $vishal=new Demo("Vishal",PHP_INT_MAX,21);
        // echo ($vishal->name)."<br>";
        // echo ($vishal->getBalance())."<br>";
        // echo ($vishal->getAge())."<br>";
    ?>
    <?php 
        class Human extends Demo{
            
        function namaste(){
                echo "<br>Namaste";
            }         
        }
        $devam=new Human("Devam Shah",31098,23);
        $devam->sayHello();
        echo $devam->getAge();
        $devam->namaste();
    ?>
</body>
</html>