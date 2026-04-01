<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function ArgFunction($lastname, ...$firstname)
    {
        $txt = "";
        $len = count($firstname);
        for ($i = 0; $i < $len; $i++) {
            $txt = $txt . "Hi, $firstname[$i] $lastname.<br>";
        }
        return $txt;
    }
    $names = ArgFunction("Maurya","Vishal", "Kumar");
    echo $names;
    ?>
    
</body>

</html>