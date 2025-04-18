<?php
session_start();
$conn = new mysqli("localhost", "root", "", "employee_db");

if (!isset($_SESSION["user_id"])) {
    die("Please log in first.");
}

$userId = $_SESSION["user_id"];
$result = $conn->query("SELECT * FROM employees WHERE id = $userId");
$user = $result->fetch_assoc();
?>

<h2>Welcome, <?php echo $user["name"]; ?></h2>
<p>Email: <?php echo $user["email"]; ?></p>

<h3>Profile Picture</h3>
<?php if ($user['image']): ?>
    <img src="uploads/<?php echo $user['image']; ?>" width="150" alt="Profile Image">
<?php else: ?>
    <p>No profile image uploaded yet.</p>
<?php endif; ?>

<p><a href="imagepage.php">Upload Profile Picture</a></p>

