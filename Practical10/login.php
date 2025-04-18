<?php
session_start();
$conn = new mysqli("localhost", "root", "", "employee_db");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = $conn->query("SELECT * FROM employees WHERE email = '$email'");
    $user = $result->fetch_assoc();
    
    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user_id"] = $user["id"];
        header("Location: homepage.php");
        exit;
    } else {
        echo "<p style='color: red;'>Invalid email or password.</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <p><a href="passwordchange.php">Change Password</a></p>
</body>
</html>
