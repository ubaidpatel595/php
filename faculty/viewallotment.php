<?php

require 'config.php';  // Database connection
//////// End of connecting to database ////////
$branch=$_POST['branch'];
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<title> View Attendance </title>
<script src="jquery-3.5.1.min.js" > </script> 
<style>
 
 
#container {
 width: 600px;
 background: #fff;
 color: #555;
 border: 3px solid #ccc;
 -webkit-border-radius: 10px;
 -moz-border-radius: 10px;
 -ms-border-radius: 10px;
 border-radius: 10px;
 border-top: 3px solid #ddd;
 padding: 1em 2em;
 margin: 0 auto;
 -webkit-box-shadow: 3px 7px 5px #000;
 -moz-box-shadow: 3px 7px 5px #000;
 -ms-box-shadow: 3px 7px 5px #000;
 box-shadow: 3px 7px 5px #000;
}
 
ul {
 list-style: none;
 padding: 0;
}
 
ul > li {
 padding: 0.12em 1em
}
 
label {
 display: block;
 float: left;
 width: 130px;
}
 
input, textarea {
 font-family: Georgia, Serif;
}
table {
  border-collapse: collapse;
  width:75%;
  align:center;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
h1,h2 ,h3 {
	text-align: center;}

</style>

</head>
<body>



<h1> Government Polytechnic kalaburgi</h1>
<h2> Computer Science Department</h2>
<h3> Subject Allotment List</h3>
<table>
<tr> <th> SLNO</th><th>Name</th> <th>Semester</th><th>Subject code with Name</th> </tr>
<?php
$fquery="select ecode,fname from faculty where branch='$branch'";

$fresult=mysqli_query($conn,$fquery);
$frow=mysqli_fetch_row($fresult);

if($frow)
{
	do
	{	//print "<tr><td>$frow[1]<td>";
		$i=0;
		$aquery="select scode from subjectalloted where fcode='$frow[0]'";
		$aresult=mysqli_query($conn,$aquery);
		$arow=mysqli_fetch_row($aresult);
			if($arow)
			{     $f=1; 
                 $i=0;
				do
				{       $i++;
						$squery="select sem,sname from subjects where scode='$arow[0]' AND branch='$branch'";
						$sresult=mysqli_query($conn,$squery);
						$srow=mysqli_fetch_row($sresult);
						if($f==1)
						{
						print "<tr><td>$i</td><td>$frow[1]</td><td>$srow[0]</td> <td> $arow[0]:$srow[1]</td></tr>";
						$f=0;
						}
						else
							print "<tr><td></td><td></td><td>$srow[0]</td> <td> $arow[0]:$srow[1]</td></tr>";
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

?>


</table>

</body>
</html>