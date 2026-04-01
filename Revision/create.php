<?php
    $username=$age=$gender="";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Log In form</title>
</head>
<body>
    <h2 style="text-align: center;">Student Login Form</h2>
    <form action="" method="post" align="center">
        Name: <input type="text" name="username"><br><br>
        Age: <input type="number" name="age"><br><br>
        Gender: 
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female <br>
        Select Your country:
        <select name="country">
            <option value="India">India</option>
            <option value="China">China</option>
            <option value="Russia">Russia</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>