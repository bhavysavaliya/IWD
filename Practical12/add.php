<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = new mysqli("localhost", "root", "", "employee_db");
    $stmt = $conn->prepare("INSERT INTO employees (name, email, department) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $_POST['name'], $_POST['email'], $_POST['department']);
    $stmt->execute();
    header("Location: index.php");
}
?>
<style>
    body { font-family: Arial; padding: 20px; }
    table { border-collapse: collapse; width: 100%; }
    th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
    a { text-decoration: none; color: blue; }
    form input { padding: 5px; width: 200px; }
    button { padding: 5px 10px; }
</style>
<h2>Add Employee</h2>
<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Department: <input type="text" name="department" required><br><br>
    <button type="submit">Add</button>
</form>
