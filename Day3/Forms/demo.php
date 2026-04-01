<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <?php $name=$email=$website=$comment=""; ?>
        Name: <input type="text" name="name" value="<?php echo $name; ?>"><br><br>

        E-mail: <input type="text" name="email" value="<?php echo $email; ?>"><br><br>

        Website: <input type="text" name="website" value="<?php echo $website; ?>"><br><br>

        Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea><br><br>

        Gender:
        <input type="radio" name="gender"
            <?php if (isset($gender) && $gender == "female") echo "checked"; ?>
            value="female">Female <br><br>
        <input type="radio" name="gender"
            <?php if (isset($gender) && $gender == "male") echo "checked"; ?>
            value="male">Male <br><br> 
        <input type="radio" name="gender"
            <?php if (isset($gender) && $gender == "other") echo "checked"; ?>
            value="other">Other <br> <br>
        
        <?php
            date_default_timezone_set("Asia/Kolkata");
            echo date("y/m/d")."<br>";
            echo date("h:i:s:A");
        ?>
        <input type="submit">
    </form>
</body>

</html>