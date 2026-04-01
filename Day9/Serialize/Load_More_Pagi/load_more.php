<?php
$conn = mysqli_connect("localhost","root","","demo_db") 
        or die("Connection failed");

$limit = 5;

if(isset($_POST['page_no'])){
    $page=$_POST['page_no'];
}else{
    $page=0;

}

$sql = "SELECT * FROM employees LIMIT $page, $limit";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
        $output.='
        <div style="border:1px solid #ccc; padding:10px; margin:10px;">
            <p><strong>ID:</strong> '.$row["eid"].'</p>
            <p><strong>Name:</strong> '.$row["ename"].'</p>
            <p><strong>Salary:</strong> '.$row["salary"].'</p>
            <p><strong>Designation:</strong> '.$row["designation"].'</p>
        </div>';
    }

}
?>