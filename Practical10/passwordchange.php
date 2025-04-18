<?php
session_start();
$conn = new mysqli("localhost", "root", "", "employee_db");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $new_password = password_hash($_POST["new_password"], PASSWORD_DEFAULT);
    $id = $_SESSION["user_id"];
    $conn->query("UPDATE employees SET password='$new_password' WHERE id=$id");
    echo "Password updated.";
}
?>
<form method="post">
    New Password: <input name="new_password" type="password"><br>
    <button type="submit">Change Password</button>
</form>
