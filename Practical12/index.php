<?php
$conn = new mysqli("localhost", "root", "", "employee_db");
$result = $conn->query("SELECT * FROM employees");
?>
<style>
    body { font-family: Arial; padding: 20px; }
    table { border-collapse: collapse; width: 100%; }
    th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
    a { text-decoration: none; color: blue; }
    form input { padding: 5px; width: 200px; }
    button { padding: 5px 10px; }
</style>

<h2>Employee List</h2>
<a href="add.php">Add Employee</a>
<table border="1" cellpadding="8">
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Department</th><th>Actions</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['department'] ?></td>
        <td>
            <a href="view.php?id=<?= $row['id'] ?>">View</a> |
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
