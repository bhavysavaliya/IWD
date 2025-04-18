<?php 
function displayTrigFunctions($angleInDegrees) { 
     
    $angleInRadians = deg2rad($angleInDegrees); 
 
    $sinValue = sin($angleInRadians); 
    $cosValue = cos($angleInRadians); 
    $tanValue = tan($angleInRadians); 
 
    echo "Angle: $angleInDegrees degrees<br>"; 
    echo "Sin: " . $sinValue . "<br>"; 
    echo "Cos: " . $cosValue . "<br>"; 
    echo "Tan: " . $tanValue . "<br>"; 
} 
 
$angle = 45;  
displayTrigFunctions($angle); 
?> 