<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $cars = ['Tesla', 'Mahindra', 'BMW'];
    foreach ($cars as $car) {
        $car = "Ford";
    }
    // unset($cars);
    var_dump($cars);
    $numbers = [1, 2, 3, 4, 5, 6];

    $even = array_filter($numbers, function ($num) {
        return $num % 2 == 0;
    });

    print_r($even);
    ?>
</body>

</html>