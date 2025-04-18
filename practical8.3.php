<!DOCTYPE html>
<html>
<head><title>GET Example</title></head>
<body>
<?php
if (isset($_GET['username'])) {
    echo "<h2>Hello, {$_GET['username']}! (Passed via GET method)</h2>";
} else {
?>
<h2>Enter Name</h2>
<form method="get">
    Name: <input type="text" name="username"><br><br>
    <input type="submit" value="Send via GET">
</form>
<?php } ?>
</body>
</html>
