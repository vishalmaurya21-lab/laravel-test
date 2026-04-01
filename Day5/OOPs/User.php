<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPs with database</title>
</head>

<body>
    <?php
    class User
    {
        private $conn;
        private $id;
        private $name;
        private $email;
        private $balance;

        function __construct($db)
        {
            $this->conn = $db;
        }
        function setName($name)
        {
            $this->name = $name;
        }
        function setEmail($email)
        {
            $this->email = $email;
        }
        function setBalance($balance)
        {
            $this->balance = $balance;
        }
        function getBalance()
        {
            return $this->balance;
        }

        function create()
        {
            $stmt = $this->conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
            $stmt->bind_param("ss", $this->name, $this->email);
            return $stmt->execute();
        }
        function load($id)
        {
            $stmt = $this->conn->prepare("Select * from users where id= ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();

            $result = $stmt->get_result()->fetch_assoc();
            if ($result) {
                $this->id = $result['id'];
                $this->name = $result['name'];
                $this->email = $result['email'];
                $this->balance = $result['balance'];
            }
        }
        // Update balance
        public function deposit($amount): int
        {
            if ($amount > 0) {
                $this->balance += $amount;
                $stmt = $this->conn->prepare("UPDATE users SET balance=? WHERE id=?");
                $stmt->bind_param("di", $this->balance, $this->id);
                return $stmt->execute();
            }
            return false;
        }
        public function withdraw($ammount): int
        {
            $this->balance -= $ammount;
            $stmt = $this->conn->prepare("Update users SET balance=? WHERE id=?");
            $stmt->bind_param("di", $this->balance, $this->id);
            return $stmt->execute();
        }
    }
    ?>
</body>

</html>