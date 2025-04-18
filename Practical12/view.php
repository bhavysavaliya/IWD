<?php
$conn = new mysqli("localhost", "root", "", "employee_db");
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM employees WHERE id=$id");
$row = $result->fetch_assoc();
?>

<style>
    body { font-family: Arial; padding: 20px; }
    table { border-collapse: collapse; width: 100%; }
    th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
    a { text-decoration: none; color: blue; }
    form input { padding: 5px; width: 200px; }
    button { padding: 5px 10px; }
</style>

<h2>Employee Details</h2>
<p><strong>Name:</strong> <?= $row['name'] ?></p>
<p><strong>Email:</strong> <?= $row['email'] ?></p>
<p><strong>Department:</strong> <?= $row['department'] ?></p>
<a href="index.php">Back</a>
