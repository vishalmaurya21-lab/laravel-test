<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        abstract class Account{
            private $balance;
            abstract public function getBalance();
        }
        class BankAccount extends Account{
            function getBalance()
            {
                return $this->balance;
            }
        }
        
    ?>
</body>
</html>