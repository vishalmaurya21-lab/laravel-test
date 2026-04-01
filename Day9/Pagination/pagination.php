<?php
$conn = mysqli_connect("localhost", "root", "", "demo_db") or die("Conection failed");
$limit_per_page = 5;
$page = "";

if (isset($_POST['page_no'])) {
    $page = $_POST['page_no'];
} else {
    $page = 1;
}
$offset = ($page - 1) * $limit_per_page;

$sql = "select * from employees LIMIT {$offset}, {$limit_per_page}";
$result = mysqli_query($conn, $sql) or die("Query can't run on database");

$output = "";
if (mysqli_num_rows($result) > 0) {
    $output .= '<table border="2px" width="100%">
            <tr style="background-color: grey;">
                <th>Eid</th>
                <th>Employee Name</th>
                <th>Salary</th>
                <th>Designation</th>
            </tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr>
                            <td>{$row["eid"]}</td>
                            <td>{$row['ename']}</td>
                            <td>{$row['salary']}</td>
                            <td>{$row['designation']}</td>
                        </tr>";
    }
    $output .= "</table>";
    $sql_records = "Select * from employees";
    $records = mysqli_query($conn, $sql_records) or die("Query Unsuccessfull");
    $total_record = mysqli_num_rows($records);
    $total_pages = ceil($total_record / $limit_per_page);

    $output .= '<div id="pagination" align="center">';
    for ($i = 1; $i <= $total_pages; $i++) {
        if ($i == $page) {
            $output .= "<a class='active' id='{$i}' href=''>{$i}</a> ";
        } else {
            $output .= "<a id='{$i}' href=''>{$i}</a> ";
        }
    }

    $output .= '</div>';
    echo $output;
} else {
    echo "<h2>No record found</h2>";
}
