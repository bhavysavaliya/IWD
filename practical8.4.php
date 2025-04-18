<!DOCTYPE html>
<html>
<head><title>Hidden POST</title></head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
    echo "<h2>Hidden Name: {$_POST['hiddenName']} (Received via POST method)</h2>";
else {
?>
<h2>Hidden POST Method</h2>
<form method="post">
    <input type="hidden" name="hiddenName" value="JohnDoe123">
    <input type="submit" value="Send Hidden Info via POST">
</form>
<?php } ?>
</body>
</html>
