<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Car{
        public $brand;
        public $name;
        public $model;

        function __construct($brand, $name, $model){
            $this->brand=$brand;
            $this->name=$name;
            $this->model=$model;
        }

        function __destruct(){
            echo "Company: ".$this->brand."<br>Name: ". $this->name."<br>Model: ".$this->model;
        }

    }
    $car1=new Car("Ford","Mustang",1969);
    

    ?>
</body>
</html>