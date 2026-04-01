<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function devide($x,$y) : int {
            if($y==0){
                throw new exception("Cant devide by 0");
            }
            return $x/$y;
        }
        try{
            echo devide(5,0);

        }catch(Exception $e){
            // echo "Error ".$e->getMessage()."<br>"; 
            $file = $e->getFile()."<br>";
            $line = $e->getLine()."<br>";
            $code = $e->getCode()."<br>";
            $message = $e->getMessage()."<br>";
            echo "Exception thrown in $file on line $line:  Code $code $message";
        }finally{
            echo "Process Complete";
        }
    ?>
</body>
</html>