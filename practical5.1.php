<?php 
 
$input = "Hello world! This is a test."; 
 
$length = 0; 
while (isset($input[$length])) { 
    $length++; 
} 
 
$inWord = false; 
$wordCount = 0; 
 
for ($i = 0; $i < $length; $i++) { 
    $char = $input[$i]; 
     
    if (($char >= 'A' && $char <= 'Z') ||  
        ($char >= 'a' && $char <= 'z') ||  
        ($char >= '0' && $char <= '9')) { 
 
        if (!$inWord) { 
            $inWord = true; 
            $wordCount++; 
        } 
    } else { 
        $inWord = false; 
    } 
} 
 
echo "String Length: " . $length . "<br>"; 
echo "Word Count: " . $wordCount . "<br>"; 
 
?>