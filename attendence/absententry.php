<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Absentees entry </title>

 
</head>
<body>

<?php
$atdate=$_POST['datepicker-1'];
$scode=$_POST['subj'];

$attlist[]=array();
if(isset($_POST['status']))
$attlist=$_POST['status'];

$conn=mysqli_connect("localhost","root","") or die("cannot connect"); 
mysqli_select_db($conn,"csdepartment") or die("ERROR:could not connect to the database!!!");


$date= date("Y-m-d H:i:s",strtotime(str_replace('/','-',$atdate))) ;
//$temp1=explode(' ',$date,1);

//$query="insert into classtakendate(scode,doc) values('$scode','$date')";
//mysqli_query($conn,$query);
$query="select doc  from attendence where scode='$scode' and doc='$date'";
$result=mysqli_query($conn,$query);
$srow=mysqli_fetch_row($result);
if($srow)
{
	if(!isset($_POST['status']))
	print "Please select absentees";
	else
	print" <center><h1>attendence already entered</h1></center>" ;
}
else
{
	
	$query="insert into classtakendate(scode,doc) values('$scode','$date')";
	mysqli_query($conn,$query);
	$i=0;
	if($attlist[0]==11)
	{
		print "<center><h1> ALL ARE PESENT</h1></center>";
		$query="insert into attendence(doc,regno,scode) values('$date','11','$scode')";
		mysqli_query($conn,$query);
		

	}
	else
	{		

		foreach($attlist as $st)
		{
			$query="insert into attendence(doc,regno,scode) values('$date','$st','$scode')";
			mysqli_query($conn,$query);
			$i++;
		}
		print" <center><b>Total number of absentees=$i";
	}


}




?>
</b>
</center>
</body>
</html>
