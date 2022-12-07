<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Show attendence</title>
</head>
<body>
<?php

$scode=$_POST['scode'];
$sem=$_POST['sem'];
//print "$scode <br> $sem";
$conn=mysqli_connect("localhost","root","") or die("cannot connect"); 
mysqli_select_db($conn,"csdepartment") or die("ERROR:could not connect to the database!!!");
$fquery="select fcode from subjectalloted where scode='$scode'";
$fresult=mysqli_query($conn,$fquery);
$frow=mysqli_fetch_row($fresult);
$fcode=$frow[0];

$fquery="select fname from faculty where ecode='$fcode'";
$fresult=mysqli_query($conn,$fquery);
$frow=mysqli_fetch_row($fresult);
$fname=$frow[0];


$query="select sname,branch from subjects where scode='$scode' ";
$result=mysqli_query($conn,$query)or die("fail");
if($result)
$srow=mysqli_fetch_row($result);
else
echo "table not read";
$subname=$srow[0];
$branch=$srow[1];
print "<center>Subect code:<b>$scode</b><br>Subect Name:<b>$subname</b><br>Satff Name :<b>$fname</b></center>";
if($srow)
{
	//print "$scode==$srow[0]";	
	$subname=$srow[0];
	//selecting date of classess taken for the particular subject for displaying in the upper row
	$ctquery="select doc from  classtakendate where scode='$scode'";
	$ctresult=mysqli_query($conn,$ctquery);
	$totalclass=mysqli_num_rows($ctresult);

	print"<table border=\"1\" align=\"center\"><tr><td> REGNO</td><td>Name</td>";
	
	$ctrow=mysqli_fetch_row($ctresult);
	$date=$ctrow[0];
	$daymonth=array();
	$daymonth=explode("-",$date);
	//displaying classes taken date in the upper row	
	do
	{
		print "<td>$daymonth[2]/$daymonth[1]</td>";
		$ctrow=mysqli_fetch_row($ctresult);
        
        if(isset($ctrow[0])  )
        {
		$date=$ctrow[0];
		$daymonth=explode("-",$date);
        }
		
	}while($ctrow);
	print "<td>%</td></tr>";
	//selecting all the students from students table for the specific semester for that subject
	$stquery="select * from students where sem='$sem' AND branch='$branch' ";
	$stresult=mysqli_query($conn,$stquery);
	$strow=mysqli_fetch_row($stresult);
	
	do
	{
		print "<tr> <td> $strow[1]</td><td>$strow[2]</td>";
		//$strow=mysqli_fetch_row($stresult);
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
				print"<td> $i</td>";
				else
				{
					$i++;
					print"<td> $i</td>";
				}
		$ctrow=mysqli_fetch_row($ctresult);
		}while($ctrow);
		$percentage=($i/$totalclass)*100;
		$percentage=round($percentage);
		print "<td> $percentage</td></tr>";
	$strow=mysqli_fetch_row($stresult);
	}while($strow);


}
else
{
	echo "<b>subject code doesnot exists</b>";
}
print "</table>";
?>