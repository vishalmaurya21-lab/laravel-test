<?php
    
    $conn=mysqli_connect("localhost","root","","demo_db");
    $name=$_POST['fullname'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $country=$_POST['country'];
    $insert="INSERT INTO student (name, age, gender, country) VALUES ('$name', '$age', '$gender', '$country')";
    
    if(mysqli_query($conn, $insert)){
        echo "Record Inserted {$name}";
    }else{
        echo "Record can't inserted";
    }
    
?>
