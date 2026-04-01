<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPs with MySQLi</title>
</head>

<body>
    <?php
    require 'Database.php';
    require 'User.php';

    // Connect to DB
    $db = new Database();

    // Create a new user
    // $user = new User($db->conn);
    // $user->setName("Devam");
    // $user->setEmail("devam@example.com");
    // $user->create();

    // Load an existing user
    $user2 = new User($db->conn);
    $user2->load(16); // load user with id=1
    echo "Balance: " . $user2->getBalance() . "<br>";

    // Deposit money
    $user2->deposit(500);
    echo "Updated Balance: " . $user2->getBalance();
    ?>
</body>

</html>