<?php 
 
$array = [5, 3, 8, 1, 2]; 
 
$length = 0; 
while (isset($array[$length])) { 
    $length++; 
} 
 
for ($i = 0; $i < $length - 1; $i++) { 
    for ($j = 0; $j < $length - $i - 1; $j++) { 
        if ($array[$j] > $array[$j + 1]) { 
            $temp = $array[$j]; 
            $array[$j] = $array[$j + 1]; 
            $array[$j + 1] = $temp; 
        } 
    } 
} 
 
echo "Sorted Array: "; 
for ($i = 0; $i < $length; $i++) { 
    echo $array[$i] . " "; 
} 
echo "<br>"; 
 
?> 
