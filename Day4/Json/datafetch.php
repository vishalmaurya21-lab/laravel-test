<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json</title>
</head>

<body>
    <?php
    $value = ["name" => "Vishal", "Age" => 22, "Salary" => PHP_INT_MAX];
    echo json_encode($value);
    ?>
    <?php
    $jsonString = '{"id":101,"name":"Alice","email":"alice@example.com","active":true}';

    // Decode JSON to PHP associative array
    $dataArray = json_decode($jsonString, true);

    var_dump($dataArray);
    ?>
</body>

</html>