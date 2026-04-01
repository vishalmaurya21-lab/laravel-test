<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class BankAccount{
            protected $balance;

            function setBalance($ammount){
                if($ammount>0){
                    $this->balance=$ammount;
                }
            } 
            function getbalance(){
                return $this->balance;
            }
        }
        $account=new BankAccount();
        $account->setBalance(5000000000000);
        echo $account->getbalance();

    ?>

</body>
</html>