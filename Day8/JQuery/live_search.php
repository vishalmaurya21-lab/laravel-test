<?php
$search_val = trim($_POST['search']);
$conn = mysqli_connect("localhost", "root", "", "ajax_practice") or die("Database not connected");
$sql = "Select * from comments where message like '%{$search_val}%'";

$result = mysqli_query($conn, $sql);
$output = "";

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['message']}</td>
                <td>{$row['created_at']}</td>
            </tr>
        ";
    }

    echo $output;
} else {
    echo "
        <tr>
            <td colspan='3' style='text-align:center;'>No record found</td>
        </tr>
    ";
}
?>