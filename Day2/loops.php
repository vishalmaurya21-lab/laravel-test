<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $n=0;
        while($n!=10){
            echo $n;
            $n++;
        }
        echo "<br>";
        $n=5;
        for($i=0;$i<$n;$i++){
            echo $i;
        }
        echo "<br>";

        $n=0;
        do{
            echo $n;
            // $n++;
             $n+=1;
        }while($n!=1);
        echo "<br>";

        $colors=array("Yellow","Blue","Green","Black");
        foreach($colors as $color){
            echo $color." ";
        }
        echo "<br>";
        $member=array("Vishal"=>22,"Devam"=>23,"Manshvi"=>25);
        foreach($member as $key=>$value){
            echo "$key's age $value"."<br>";
        }

        class Car{
            public $color;
            public $model;

            public function __construct($color,$model)
            {
                $this->color=$color;
                $this->model=$model;
            }
        
        }
        $myCar=new Car("Black","Audi");
        foreach($myCar as $x=>$y){
            echo "$x:$y <br>";
        }

        

    ?>
</body>
</html>