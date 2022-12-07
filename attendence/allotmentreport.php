<?php
require('fpdf.php');
class PDF extends FPDF
{



// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$conn=mysqli_connect("localhost","root","") or die("cannot connect"); 
mysqli_select_db($conn,"csdepartment") or die("ERROR:could not connect to the database!!!");
  
 $pdf->SetFont('Times','',12);
         $pdf->Cell(180,10,'Computer Science Department',0,1,'C');
 $pdf->Cell(180,10,'Subject Allotment List ',0,1,'C');

         $pdf->SetFont('Times','',10);
       	$pdf->Ln();  
         
$pdf->Cell(10,6,'SLNO',1);
//$pdf->Cell(20,3,'REGNO',1);
$pdf->Cell(30,6,'NAME',1);
$pdf->Cell(30,6,'SEMESTER',1);
$pdf->Cell(60,6,'SUBJECT NAME WITH CODE',1);
$pdf->Ln();
$fquery="select ecode,fname from faculty";
$fresult=mysqli_query($conn,$fquery);
$frow=mysqli_fetch_row($fresult);
$i=0;
 if($frow)
{
	do
	{	
		$i++;
		$aquery="select scode from subjectalloted where fcode='$frow[0]'";
		$aresult=mysqli_query($conn,$aquery);
		$arow=mysqli_fetch_row($aresult);
			if($arow)
			{     $f=1;
				do
				{
						$squery="select sem,sname from subjects where scode='$arow[0]'";
						$sresult=mysqli_query($conn,$squery);
						$srow=mysqli_fetch_row($sresult);
						if($f==1)
						{
							$pdf->Cell(10,06,$i,1);
                                 $pdf->Cell(30,06,$frow[1],1);
                                 
                                  $pdf->Cell(30,06,$srow[0],1);
							$pdf->Cell(60,6,$arow[0].':'.$srow[1],1);
								$pdf->Ln(); 
						//print "<tr><td>$i</td><td>$frow[1]</td><td>$srow[0]</td> <td> $arow[0]:$srow[1]</td></tr>";
						$f=0;
						}
						else
						{
							$pdf->Cell(10,06,'',1);
                                 $pdf->Cell(30,06,'',1);
								 $pdf->Cell(30,06,$srow[0],1);
								 $pdf->Cell(60,6,$arow[0].':'.$srow[1],1);
									$pdf->Ln();  
							//print "<tr><td></td><td></td><td>$srow[0]</td> <td> $arow[0]:$srow[1]</td></tr>";
						}
						$arow=mysqli_fetch_row($aresult);
				}while($arow);
				//print "</tr>";
				
			}
		$frow=mysqli_fetch_row($fresult);
	}while($frow);
				
						
}
else
{
	print "Register Faculty Details First";
}
 $pdf->Output();
?>