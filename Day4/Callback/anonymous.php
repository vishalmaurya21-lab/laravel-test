<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $numbers=[1,2,3,4,5];
        $res=array_map(function($i){ return $i*$i;}, $numbers);
        print_r($res);

        function setexclaim($str) : string {
            return $str."! ";
        }
        function setquest($str) : string {
            return $str."?";
        }
        function printformatted($str, $format) : void {
            echo $format($str);
        }

        printformatted("Hii ","setexclaim");
        printformatted("Who are you ","setquest");
    ?>
</body>
</html>