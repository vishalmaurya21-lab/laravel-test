<?php
    include "connection.php";
    $id=$_POST['id'];
    $update="select * from student where id = ".$id;

    
    if(isset($_POST['update'])){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $country=$_POST['country'];

        $sql="UPDATE student set name='$name', age='$age', gender='$gender', country=' ";

    }

    
?>
<form action="" method="post" align="center">
        Name: <input type="text" name="username" value="<? "><br><br>
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