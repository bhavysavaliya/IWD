<!DOCTYPE html>
<html>
<head><title>Employee Info</title></head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['name']; $e = $_POST['email']; $p = $_POST['phone']; $d = $_POST['department'];
    if (!preg_match("/^[a-zA-Z ]+$/", $n)) echo "Invalid name<br>";
    elseif (!preg_match("/^[\w\.-]+@[\w\.-]+\.\w+$/", $e)) echo "Invalid email<br>";
    elseif (!preg_match("/^[0-9]{10}$/", $p)) echo "Invalid phone<br>";
    else {
        echo "<h2>Employee Details:</h2>Name: $n<br>Email: $e<br>Phone: $p<br>Department: $d<br>";
    }
} else {
?>
<h2>Employee Information</h2>
<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="text" name="email" required><br><br>
    Phone: <input type="text" name="phone" required><br><br>
    Department: <input type="text" name="department"><br><br>
    <input type="submit" value="Submit">
</form>
<?php } ?>
</body>
</html>
