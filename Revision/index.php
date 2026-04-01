<?php 
    include "connection.php";
    $select="select * from student";
    $result=mysqli_query($conn,$select);
?>

<a href="create.php">Insert record</a>
<table border="1">
    <tr>
        <th>ID </th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Country</th>
        <th>Action</th>
    </tr>
    <?php while($row=$result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['age']; ?></td>  
        <td><?= $row['gender']; ?></td>  
        <td><?= $row['country']; ?></td>
        
        <td>
            <a href="update.php?id= <? $row['id']; ?>">Edit</a>
            <a href="delete.php?id= <? $row['id']; ?>">Delete</a>
        </td>  
    </tr>  
    <?php endwhile; ?>
</table>