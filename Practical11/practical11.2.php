<?php 
$to = "recipient@example.com"; 
$subject = "Salary Slip"; 
$message = "Dear Employee,\n\nYour salary slip is attached.\n\nRegards,\nHR 
Department"; 
$headers = "From: hr@example.com"; 
if (mail($to, $subject, $message, $headers)) { 
echo "Email sent successfully."; 
} else { 
echo "Failed to send email."; 
} 
?>