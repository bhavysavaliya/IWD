<?php
$conn = new mysqli("localhost", "root", "", "employee_db");
$id = $_GET['id'];
$conn->query("DELETE FROM employees WHERE id=$id");
header("Location: index.php");
?>
<style>
    body { font-family: Arial; padding: 20px; }
    table { border-collapse: collapse; width: 100%; }
    th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
    a { text-decoration: none; color: blue; }
    form input { padding: 5px; width: 200px; }
    button { padding: 5px 10px; }

</style>
