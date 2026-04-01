<?php
$conn = mysqli_connect("localhost", "root", "", "ajax_practice")
    or die("Connection failed");

$sql = "SELECT * FROM comments";
$result = mysqli_query($conn, $sql)
    or die("Query failed");

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

mysqli_close($conn);
?>