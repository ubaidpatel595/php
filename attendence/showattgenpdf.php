<?php
error_reporting(3) ;
require('fpdf.php');
$scode=$_POST['scode'];
$sem=$_POST['sem'];
$conn=mysqli_connect("localhost","root","") or die("cannot connect"); 
mysqli_select_db($conn,"csdepartment") or die("ERROR:could not connect to the database!!!");
$fquery="select fcode from subjectalloted where scode='$scode'";
$fresult=mysqli_query($conn,$fquery);
$frow=mysqli_fetch_row($fresult);
$fcode=$frow[0];

$fquery="select fname,branch from faculty where ecode='$fcode'";
$fresult=mysqli_query($conn,$fquery);
$frow=mysqli_fetch_row($fresult);
$fname=$frow[0];
$branch=$frow[1];


$query="select sname from subjects where scode='$scode' ";
$result=mysqli_query($conn,$query)or die("fail");
if($result)
$srow=mysqli_fetch_row($result);
else
echo "table not read";

$subname=$srow[0];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->SetFillColor(230, 230, 0);
$pdf->SetTextColor(220,50,50);
$pdf->SetDrawColor(0, 80, 180);
$pdf->SetLineWidth(.3);
$pdf->SetFont('','B');




   $pdf->SetFont('Arial','B',8);
$pdf->Cell(30,5,'subjec code',0);
$pdf->Cell(30,5,$scode,0);
$pdf->Cell(30,5,'subject name',0);
 $pdf->Cell(30,5,$subname,0);
 $pdf->Ln();

$pdf->Cell(30,5,'staff code',0);
  $pdf->Cell(30,5,$fcode,0);
$pdf->Cell(35,5,'staff name',0) ;
 $pdf->Cell(35,5,$fname,0);
$pdf->Ln();



   



if($srow)
{	
	$subname=$srow[0];

	//selecting date of classess taken for the particular subject for displaying in the upper row
	$ctquery="select doc from  classtakendate where scode='$scode'";
	$ctresult=mysqli_query($conn,$ctquery);
	$totalclass=mysqli_num_rows($ctresult);

	
	$heading=array("SLN","Register No","Name");
	$pdf->Cell(5,3,$heading[0],1);
	$pdf->Cell(20,3,$heading[1],1);
	$pdf->Cell(30,3,$heading[2],1);
	$sl=1;
	/*foreach($heading as $column_heading)
		{
			$pdf->Cell(60,5,$column_heading,1);
			//print "$column_heading";
		}
	*/
	
	$ctrow=mysqli_fetch_row($ctresult);
	$date=$ctrow[0];
	$daymonth=array();
	$daymonth=explode("-",$date);
	//displaying classes taken date in the upper row
	$k=0;
    	
	do
	{
		//print "<td>$daymonth[2]/$daymonth[1]</td>";
		$heading[$k++] ="$daymonth[2]/$daymonth[1]";
			
		$ctrow=mysqli_fetch_row($ctresult);

		$date=$ctrow[0];
		$daymonth=explode("-",$date);
		
	}while($ctrow);
	$heading[$k++]="%";
	foreach($heading as $column_heading)
		{
			$pdf->Cell(7,3,$column_heading,1);
			//print "$column_heading";
		}
	//print "<br>";
	$pdf->Ln();
		$pdf->SetFillColor(224,235,255);
		$pdf->SetTextColor(0);
		$pdf->SetFont('');

	
	
	//selecting all the students from students table for the specific semester for that subject
	$stquery="select * from students where sem='$sem' AND branch='$branch' ";
	$stresult=mysqli_query($conn,$stquery);
	$strow=mysqli_fetch_row($stresult);
	$k=0;
	do
	{	$k=0;
		$pdf->Cell(5,3,$sl,1);
		//$heading[$k++]=$strow[1];
		$pdf->Cell(20,03,$strow[1],1);
		
		//$heading[$k++]=$strow[2];
		$pdf->Cell(30,03,$strow[2],1);
		
		
		$ctquery="select doc from  classtakendate where scode='$scode'";
		$ctresult=mysqli_query($conn,$ctquery);
		$ctrow=mysqli_fetch_row($ctresult);	
		$i=0;
		//cheking whether a student is absent in the absent table
		do
		{
			
	
			$query="select *  from attendence where scode='$scode' and doc='$ctrow[0]' ";
			$result=mysqli_query($conn,$query);
			
				$f=0;
				$row=mysqli_fetch_row($result);
				do
				{
					
					
					if($strow[1]==$row[1])
					{
						$f=1;
					}
					$row=mysqli_fetch_row($result);
				}while($row);
				if($f==1)
				$heading[$k++]=$i;
				else
				{
					$i++;
					$heading[$k++]=$i;					
				}
		$ctrow=mysqli_fetch_row($ctresult);
		}while($ctrow);
		$percentage=($i/$totalclass)*100;
		$percentage=round($percentage);

		$heading[$k++]=$percentage;
				
		$pdf->SetFont('Arial','B',6);	
		foreach($heading as $column)
		{
			$pdf->Cell(7,3,$column,1);
			//print "$column";
		}
		//print "<br>";
		$pdf->Ln();
		$strow=mysqli_fetch_row($stresult);
	$sl++;
	}while($strow);
$pdf->Output();
}
else
{
	echo "<b>subject code doesnot exists</b>";
}

?>