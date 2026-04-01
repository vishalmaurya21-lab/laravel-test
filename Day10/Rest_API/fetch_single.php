<?php
// header('Content-Type: application/json');
// header('Access-Control-Allow-Origin: *');

// $data=json_decode(file_get_contents("php://input"),true);
// include "config.php";

// $student_id=$data['sid'];

// $sql = "select * from student where id = {$student_id}";
// $result = mysqli_query($conn, $sql) or die("SQL query failed");

// if (mysqli_num_rows($result) > 0) {
//     $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
//     echo json_encode($output);
// } else {
//     echo json_encode(array('message' => 'no record found', 'status' => false));
// }

?>
<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include "config.php";

// Get sid from GET or JSON
$student_id = $_GET['sid'] ?? null;
if(!$student_id){
    $data = json_decode(file_get_contents("php://input"), true);
    $student_id = $data['sid'] ?? null;
}

if(!$student_id){
    echo json_encode(["message" => "Student ID is required", "status" => false]);
    exit();
}

// Prepared statement
$stmt = $conn->prepare("SELECT * FROM student WHERE id = ?");
$stmt->bind_param("i", $student_id);
$stmt->execute();
$result = $stmt->get_result();


if($result->num_rows > 0){
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
}else{
    echo json_encode(["message" => "No record found", "status" => false]);
}
?>