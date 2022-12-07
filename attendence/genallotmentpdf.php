<?php
error_reporting(3) ;
require 'config.php'; 
require 'fpdf.php';
 $pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',6);
$pdf->SetFillColor(230, 230, 0);
$pdf->SetTextColor(220,50,50);
$pdf->SetDrawColor(0, 80, 180);
$pdf->SetLineWidth(.3);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(190,5,'Computer Science Department',1);
$pdf->Cell(190,5,'Subjec Allotment List',1);
$fquery="select ecode,fname from faculty";

$fresult=mysqli_query($conn,$fquery);
$frow=mysqli_fetch_row($fresult);
$i=0;
$pdf->Cell(5,3,'SLNO',1);
/$pdf->Cell(20,3,'REGNO',1);
$pdf->Cell(30,3,'NAME',1);
$pdf->Cell(15,3,'SEMESTER',1);
$pdf->Cell(80,3,'SUBJECT NAME WITH CODE',1);
	$pdf->Ln();  
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
							$pdf->Cell(5,03,$i,1);
                                 $pdf->Cell(20,03,$frow[1],1);
                                 
                                  $pdf->Cell(30,03,$srow[0],1);
							$pdf->Cell(80,3,$arow[0].':'.$srow[1],1);
							
						//print "<tr><td>$i</td><td>$frow[1]</td><td>$srow[0]</td> <td> $arow[0]:$srow[1]</td></tr>";
						$f=0;
						}
						else
						{
							$pdf->Cell(5,03,'',1);
                                 $pdf->Cell(20,03,'',1);
								 $pdf->Cell(30,03,$srow[0],1);
								 $pdf->Cell(80,3,$arow[0].':'.$srow[1],1);
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


