<?php
session_start();
if (!isset($_SESSION["username"])) $_SESSION["username"] = "JohnDoe";
?>
<!DOCTYPE html>
<html>
<head><title>Session Example</title></head>
<body>
<?php if (!isset($_GET['view'])) { ?>
<h2>Session Started</h2>
<p>Username stored in session.</p>
<a href="?view=1">Go to next page</a>
<?php } else { ?>
<h2>Session Data Retrieved</h2>
<p>Username: <?= $_SESSION["username"] ?></p>
<?php } ?>
</body>
</html>
