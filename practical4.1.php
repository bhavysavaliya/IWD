<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $carModel = strtolower(trim($_POST["car_model"]));

    $cars = [
        "safari" => "Tata", 
        "nexon" => "Tata", 
        "tigor" => "Tata", 
        "tiago" => "Tata",
        "xuv700" => "Mahindra",
        "xuv300" => "Mahindra", 
        "bolero" => "Mahindra",
        "i20" => "Hyundai", 
        "verna" => "Hyundai", 
        "venue" => "Hyundai", 
        "creta" => "Hyundai",
        "swift" => "Suzuki", 
        "alto" => "Suzuki", 
        "baleno" => "Suzuki",
         "breza" => "Suzuki",
        "fortuner" => "Toyota",
         "fortuner legender" => "Toyota", 
        "fortuner legender+" => "Toyota",
         "fortuner gr sports" => "Toyota"
    ];

    $result = isset($cars[$carModel])
        ? "The car company for <em>$carModel</em> is <strong>{$cars[$carModel]}</strong>."
        : "Sorry, car model <em>$carModel</em> not found in our list.";
}
?>
<!DOCTYPE html>
<html>
<head><title>Car Company Finder</title></head>
<body>
    <h2>Find the Car Company</h2>
    <form method="post">
        Enter Car Model: <input type="text" name="car_model" required>
        <input type="submit" value="Find Company">
    </form>
    <?php if ($result) echo "<h3>$result</h3>"; ?>
</body>
</html>
