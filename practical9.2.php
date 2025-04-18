<?php
// Set cookie when the button is pressed
if (isset($_POST['set_cookie'])) {
    setcookie('username', 'JohnDoe', time() + 3600, '/');
    $message = "Cookie set! Welcome, JohnDoe!";
} else {
    $message = isset($_COOKIE['username']) ? "Hello, " . $_COOKIE['username'] : "Click to set a cookie!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Demo</title>
</head>
<body>
    <h2>PHP Cookie Example</h2>
    <p><?php echo $message; ?></p>

    <!-- Button to set the cookie -->
    <form method="POST">
        <button type="submit" name="set_cookie">Set Cookie</button>
    </form>
</body>
</html>
