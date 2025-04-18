<?php
session_start();
$conn = new mysqli("localhost", "root", "", "employee_db");

if (!isset($_SESSION["user_id"])) exit("Please log in.");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["image"])) {
    $userId = $_SESSION["user_id"];
    $targetFile = "uploads/" . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $conn->query("UPDATE employees SET image='" . basename($_FILES["image"]["name"]) . "' WHERE id=$userId");
        header("Location: homepage.php");
        exit;
    } else {
        echo "Upload failed.";
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="image" required>
    <button type="submit">Upload</button>
</form>
