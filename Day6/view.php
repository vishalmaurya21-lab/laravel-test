<?php
require "db_connection.php";
$result = $conn->query("SELECT * FROM users ORDER BY id DESC");
?>

<h2>User List</h2>
<a href="form.php">Add New User</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Balance</th>
        <th>Action</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo $row['balance']; ?></td>
            <td>
                <a href="form.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']; ?>"
                   onclick="return confirm('You want to delete?');"> Delete
                </a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>