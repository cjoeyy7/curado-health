<?php

require('fpdf181/fpdf.php');
require('connection.php');
//session_start();
if (isset($_POST['report'])) {

	$qry = mysqli_query($db,"SELECT * FROM attended  ");
	$results = mysqli_query($db," SELECT * FROM attended ORDER BY (id) DESC ");
	$view = mysqli_fetch_array($results);
////////next
class PDF extends FPDF
{
     function Header()
      {
      $this->SetFont('Arial','B',15);
      $this->cell(12);
      $this->image('');
    
      }
}


$pdf=new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',10);
$pdf->SetDrawColor(50,50,100);
$pdf->setTextColor('10', '10', '10');
$pdf->Image('fpdf181/header.png',80,0,50);
$pdf->cell(180,5,"",0,1);
	$pdf->Ln(5);//Line break
$pdf->Cell(140, 5, '', 0, 0);
$pdf->Cell(50, 5, 'OVERAL REPORT ', 0, 1, 'C');

$pdf->cell(140,10,' ATTENDED PATIENTS',0,1);
	
	
$pdf->SetFont('Arial','B',9);
$pdf->SetDrawColor(50,50,100);




             $pdf->cell(30,5,'PATIENT NAME:',1,0);
             $pdf->cell(40,5,'PATIENT SURNAME:',1,0);
			$pdf->cell(30,5,'DESEASES:',1,0);
             $pdf->cell(35,5,'DATE:',1,0);
             $pdf->cell(40,5,'REGION:',1,0);
             $pdf->cell(15,5,'SEX',1,1);
            while( $fetch = mysqli_fetch_array($qry))
            {
                 
             $pdf->cell(30,5,$fetch['patient_name'],1,0);
             $pdf->cell(40,5,$fetch['patient_lastname'],1,0);
			$pdf->cell(30,5,$fetch['diseases'],1,0);	
			$pdf->cell(35,5,$fetch['date'],1,0);
			 $pdf->cell(40,5,$fetch['region'],1,0);
             $pdf->cell(15,5,$fetch['sex'],1,1);
        
             
            
            }
      
			
			$pdf->cell(180,5,'',0,1);
			
			$pdf->cell(140,10,'PATIENTS RESULTS',0,1);
			$results = mysqli_query($db," SELECT * FROM patient_results   ");
	
			$pdf->cell(30,5,'PATIENT NAME:',1,0);
             $pdf->cell(40,5,'PATIENT SURNAME:',1,0);
			 $pdf->cell(30,5,'DOCTOR ATTEND:',1,0);
			$pdf->cell(20,5,'RESULTS:',1,0);
			$pdf->cell(30,5,'RESULTS ID:',1,0);
			$pdf->cell(40,5,'PRESRIPTION:',1,1);
	
	while($row = mysqli_fetch_array($results))
	{
		
		   $pdf->cell(30,5,$row['patient_name'],1,0);
             $pdf->cell(40,5,$row['patient_lastname'],1,0);
			$pdf->cell(30,5,'DR'.' '.$row['doc_surname'],1,0);
		
			$pdf->cell(20,5,$row['results'],1,0);
				 $pdf->cell(30,5,$row['results_id'],1,0);
             $pdf->cell(40,5,$row['presriptions'],1,1);
        
             
		
	}
            


                     
            
        $pdf->cell(80,5,'',0,1);
             $pdf->cell(80,5,'',0,1);
                          $pdf->cell(80,5,'',0,1);

	

	
$pdf->Output();
}
?>