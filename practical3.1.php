<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["num1"];
    $b = $_POST["num2"];
    $op = $_POST["operator"];

    $result = match($op) {
        "add" => $a + $b,
        "subtract" => $a - $b,
        "multiply" => $a * $b,
        "divide" => $b == 0 ? "Cannot divide by zero!" : $a / $b,
        default => "Invalid operation"
    };
}
?>
<!DOCTYPE html>
<html>
<head><title>Calculator</title></head>
<body>
    <h2>Calculator</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="First Number" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">−</option>
            <option value="multiply">×</option>
            <option value="divide">÷</option>
        </select>
        <input type="number" name="num2" placeholder="Second Number" required>
        <input type="submit" value="Calculate">
    </form>
    <?php if ($result !== "") echo "<h3>Result: $result</h3>"; ?>
</body>
</html>
