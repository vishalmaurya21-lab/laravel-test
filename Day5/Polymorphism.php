<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // class Account
    // {
    //     function getType()
    //     {
    //         echo "Generic Account<br>";
    //     }
    // }
    // class  extends Account
    // {
    //     function getType()
    //     {
    //         echo "Saving Account<br>";
    //     }
    // }
    // $gaccount = new Account();
    // $gaccount->getType();
    // $saccount = new SavingAccount();
    // $saccount->getType();
    
    ?>

    <?php 
        class Person{
           function SayHello(){
                echo "I'm saying hello from Person<br>";
            }
        }
        class Person1 extends Person{
            function sayHello(){
                echo "Hello from Person1<br>";
            }
        }
        $p=new Person();
        $p->SayHello();
        $p1=new Person1();
        $p1->SayHello();
    ?>
</body>

</html>