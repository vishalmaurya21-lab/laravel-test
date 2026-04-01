<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arr = getenv();
    foreach ($arr as $key => $val)
        echo "$key=>$val<br>";
    ?>

    <?php
    echo "Path: " . getenv("PATH");
    ?>
    <?php
    echo "Hello\nWorld";
    echo "Hello\tWorld.\n";
    echo "This is single quote: It\'s Me.\n";
    echo "This is double quote: \"Hello, World!\"\n";
    echo "This is a backslash: \\\n";
    ?>
</body>

</html>