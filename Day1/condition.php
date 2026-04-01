<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $color = "red";

    $text = match ($color) {
        "red" => "your favourite color is red",
        "black" => "your favourite color is black",
        "green" => "your favourite color is green",
        default => "apka favourite color?",
    };
    echo $text;
    echo "<br>";

    $day = 4;
    $text = match ($day) {
        1, 2, 3, 4, 5 => "these days are so long",
        6, 7 => "Weekends are the best",
        default => "Invalid dates"
    };
    echo $text;
    echo "<br>";
    $favcolor = "pink"; // no conditions will match this
    $texts="";
    try {
        $texts = match ($favcolor) {
            "red" => "Your favorite color is red!",
            "blue" => "Your favorite color is blue!",
            "green" => "Your favorite color is green!",
        };
    } catch (\UnhandledMatchError $e) {
        var_dump($e);
    }

    echo $texts;
    ?>
</body>

</html>