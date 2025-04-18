<?php 
require('fpdf/fpdf.php'); 
 
$employee = [ 
    'name' => 'John Doe', 
    'id' => 'EMP123', 
    'department' => 'Finance', 
    'basic' => 50000, 
    'hra' => 10000, 
    'bonus' => 5000, 
    'deductions' => 3000, 
    'net' => 62000 
]; 
 
$pdf = new FPDF(); 
$pdf->AddPage(); 
$pdf->SetFont('Arial', 'B', 16); 
$pdf->Cell(0, 10, 'Salary Slip', 0, 1, 'C'); 
$pdf->Ln(5); 
$pdf->SetFont('Arial', '', 12); 
 
foreach ($employee as $key => $value) { 
    $pdf->Cell(50, 10, ucfirst($key), 1); 
    $pdf->Cell(50, 10, $value, 1); 
    $pdf->Ln(); 
} 
 
$pdf->Output('salary_slip.pdf', 'I'); // 'I' for browser view, 'D' for download 
?>