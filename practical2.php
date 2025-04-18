<?php

$name = $email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>
    <h2>Enter Your Information</h2>
    <form method="post" action="">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Submitted Information</h2>
        <strong>Name:</strong> <?php echo $name; ?><br>
        <strong>Email:</strong> <?php echo $email; ?><br>
    <?php endif; ?>
</body>
</html>
