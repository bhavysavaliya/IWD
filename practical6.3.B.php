<?php 
function displayNumberConversions($decimal) { 
echo "Decimal: $decimal<br>"; 
echo "Binary: " . decbin($decimal) . "<br>";    
echo "Octal: " . decoct($decimal) . "<br>";     
    echo "Hexadecimal: " . dechex($decimal) . "<br>";  
} 
 
$decimalNumber = 255;   
displayNumberConversions($decimalNumber); 
?> 