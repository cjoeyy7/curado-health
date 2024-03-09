<?php

include('connection.php');
require('fpdf181/fpdf.php');

$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->SetDrawColor(50,50,100);
$pdf->setTextColor('10', '10', '10');
$pdf->Image('fpdf181/header.png',80,0,50);
$pdf->cell(180,5,"",0,1);
$pdf->cell(180,5,"",0,1);
$pdf->cell(180,5,"",0,1);

$pdf->SetFont('Arial', '', 12);
//$pdf->Ln(10);//Line break
$_GET['results'];
$results = $_GET['results'];
$print = mysqli_query($db,"SELECT * FROM patient_results WHERE results_id='$results'");
$diseases = mysqli_query($db,"SELECT * FROM attended WHERE identity_number='".$_SESSION['doc_id']."'");
$tora = mysqli_fetch_array($diseases);

$fetch = mysqli_fetch_array($print);
$date = $fetch['date'] ;


$pdf->Cell(55, 5, 'Name', 0, 0);
$pdf->Cell(58, 5, $fetch['patient_name'], 0, 0);
$pdf->Cell(25, 5, 'Date', 0, 0);
$pdf->Cell(52, 5, $date, 0, 1);

$pdf->Cell(55, 5, 'Surname', 0, 0);
$pdf->Cell(58, 5, $fetch['patient_lastname'], 0, 0);
$pdf->Cell(25, 5, 'Result id', 0, 0);
$pdf->Cell(52, 5, $fetch['results_id'], 0, 1);

$pdf->Cell(55, 5, 'ID Number', 0, 0);
$pdf->Cell(58, 5, $fetch['identity_number'], 0, 1);

$pdf->Line(10, 30, 200, 30);

$pdf->Ln(10);
$pdf->Cell(55, 5, 'Diseases tested', 0, 0);
$pdf->Cell(58, 5,  $tora['diseases'], 0, 1);

$pdf->Cell(55, 5, 'Results', 0, 0);
$pdf->Cell(58, 5, $fetch['results'], 0, 1);

$pdf->Cell(55, 5, '', 0, 0);
$pdf->Cell(58, 5, '', 0, 1);

$pdf->Cell(55, 5, '', 0, 0);
$pdf->Cell(58, 5, '', 0, 1);

$pdf->Line(10, 60, 200, 60);

$pdf->Ln(10);//Line break
$pdf->Cell(55, 5, 'Doctor', 0, 0);
$pdf->Cell(58, 5, $fetch['doc_name'] . ' ' . $fetch['doc_surname'], 0, 1);

$pdf->Line(155, 75, 195, 75);
$pdf->Ln(5);//Line break
$pdf->Cell(140, 5, '', 0, 0);
$pdf->Cell(50, 5, ': Signature', 0, 1, 'C');

$pdf->Output();

?>