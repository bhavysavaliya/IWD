<?php 
function displayCurrentDateTime() { 
     
    echo "Current Date and Time (Y-m-d H:i:s): " . date('Y-m-d H:i:s') . "<br>"; 
    echo "Current Date (d/m/Y): " . date('d/m/Y') . "<br>"; 
    echo "Current Date (l, F j, Y): " . date('l, F j, Y') . "<br>"; 
    echo "Current Time (h:i A): " . date('h:i A') . "<br>"; 
    echo "Current Time (H:i:s): " . date('H:i:s') . "<br>"; 
    echo "Current Date and Time (D, M d, Y g:i A): " . date('D, M d, Y g:i A') . "<br>"; 
} 
 
displayCurrentDateTime(); 
?> 