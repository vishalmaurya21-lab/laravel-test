<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Database
    {
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db = "demo_db";

        public $conn;

        public function __construct()
        {
            $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
            if ($this->conn->connect_error) {
                die("Connection  failed: " . $this->conn->connect_error);
            }
        }
    }
    ?>
</body>

</html>