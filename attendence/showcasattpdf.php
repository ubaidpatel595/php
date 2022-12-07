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

//for($i=1;$i<=40;$i++)
   // $pdf->Cell(0,10,'Printing line number '.$i,0,1);
   //$pdf->Output();


$sem = $_POST['sem'];
$branch = $_POST['branch'];
//print "semeste=$sem" ;

$conn=mysqli_connect("localhost","root","") or die("cannot connect"); 
mysqli_select_db($conn,"csdepartment") or die("ERROR:could not connect to the database!!!");

          


$squery="select scode from subjects where sem='$sem' AND branch='$branch'";
$result=mysqli_query($conn,$squery) or die("fail");
$srow=mysqli_fetch_row($result);
 $pdf->SetFont('Times','',15);
 if(strcmp($branch,'cs')==0)
 $pdf->Cell(180,10,'Computer Science Department',0,1,'C');
  if(strcmp($branch,'ec')==0)
 $pdf->Cell(180,10,'Electronics  Department',0,1,'C');
 
   if(strcmp($branch,'ee')==0)
 $pdf->Cell(180,10,' Electrical Electronics  Department',0,1,'C');
 
     if(strcmp($branch,'ce')==0)
 $pdf->Cell(180,10,'Civil Engineering Department',0,1,'C');
 
    if(strcmp($branch,'is')==0)
 $pdf->Cell(180,10,'Infromation Science Engineering Department',0,1,'C');
 
 
 
 

 $pdf->Cell(180,10,'Consolidated Attendence Statement ',0,1,'C');
 $c='Semester:'.$sem;
 $pdf->Cell(180,10,$c,0,1,'C');
     // $pdf->Cell(5,3,$sem,0,1,'C');
         $pdf->SetFont('Times','',10);
       	$pdf->Ln();  
         
$pdf->Cell(10,5,'SLNO',1);
$pdf->Cell(20,5,'REGNO',1);
$pdf->Cell(40,5,'NAME',1);

 // print"<table border=\"1\" align=\"center\"><tr><td> REGNO</td><td>Name</td>";
   
  do
  {         //print$pdf->Cell(7,3,$column_heading,1);
   $pdf->SetFont('Times','',8);
    $ctquery="select doc from  classtakendate where scode='$srow[0]'";
    $ctresult=mysqli_query($conn,$ctquery);
    $totalclass=mysqli_num_rows($ctresult);
          $disp=$srow[0].':'.$totalclass;
         $pdf->Cell(16,5,$disp,1);
         $srow=mysqli_fetch_row($result);
  
    }while($srow);
   //print "</tr>";
   	$pdf->Ln();
    


	$stquery="select * from students where sem='$sem' AND branch='$branch'";
	$stresult=mysqli_query($conn,$stquery);
	$strow=mysqli_fetch_row($stresult);
      	$k=1;	
    do
    {               // print "<tr> <td> $strow[1]</td><td>$strow[2]</td>";
                                  $pdf->Cell(10,05,$k,1);
                                 $pdf->Cell(20,05,$strow[1],1);
                                 
                                  $pdf->Cell(40,05,$strow[2],1);
                    $squery="select scode from subjects where sem='$sem' AND branch='$branch'";
                    $sbresult=mysqli_query($conn,$squery) or die("fail");
                    $srow=mysqli_fetch_row($sbresult);   
                    do
                    {
                                
		                        $ctquery="select doc from  classtakendate where scode='$srow[0]'";
                                $ctresult=mysqli_query($conn,$ctquery);
                                $totalclass=mysqli_num_rows($ctresult);
		                        $ctrow=mysqli_fetch_row($ctresult);	
		                       $i=0;
		              //cheking whether a student is absent in the absent table
                                 if(isset($ctrow))
                                 {        
                                        do
                                        {	                                  
                                         
                                                $query="select *  from attendence where scode='$srow[0]' and doc='$ctrow[0]' ";
			                                    $result=mysqli_query($conn,$query);
			     				                $f=0;
				                                $row=mysqli_fetch_row($result);
				                                 do
				                                {
                                                     if(strcmp($strow[1],$row[1])==0)
					                                 {
						                                   $f=1;
					                                   }
					                           $row=mysqli_fetch_row($result);
				                             }while($row);
				                             if($f==1)
    	                                    $i=$i;
	       		      	                   else
		          		                  {
					                            $i++;
					          
				                            }
                                                                                  
		                               $ctrow=mysqli_fetch_row($ctresult);
		                              }while($ctrow);   
                                            
                                              
                                          $pdf->Cell(16,5,$i,1);    
           	                            //print "<td> $i|$totalclass</td>";
                           
                                }
                                 else
                                 {
                                 // print "<td> 0|0</td>";
                                 $pdf->Cell(16,5,'0',1);
                                 }
             $srow=mysqli_fetch_row($sbresult);              
            }while($srow);
           // print"</tr>";
              	$pdf->Ln();
                $k++;
        
        
	$strow=mysqli_fetch_row($stresult);
	}while($strow);
  $pdf->Output();
   
?>