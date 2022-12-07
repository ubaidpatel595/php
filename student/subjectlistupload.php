<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","") or die("cannot connect"); 

mysqli_select_db($conn,"csdepartment") or die("ERROR:could not connect to the database!!!");
$data=array();

$csvfile = $_FILES['csvfile']['name'];
if(isset($csvfile))
print $csvfile;
else
print "error in html";

$ext = pathinfo($csvfile, PATHINFO_EXTENSION);

$base_name = pathinfo($csvfile, PATHINFO_BASENAME);

if (isset($_POST['submit'])) 
{

	if(!$_FILES['csvfile']['name'] == "")
    
	{ 

		if($ext == "csv")

		{
   			readfile($_FILES['csvfile']['tmp_name']);
			print"<br>";
			$handle = fopen($_FILES['csvfile']['tmp_name'], "r");
			$query="select * from subjects";
			$result=mysqli_query($conn,$query) or die("cannot query the data");
			$numr=mysqli_num_rows($result);
			if($numr!=0)
			$row=mysqli_fetch_row($result)or die("error in fetching row all");
			print " <table border=\"2\"><tr><th>Reg No</th></tr>";
			if($row)
			{	
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
				{	$status=0;
					$query="select scode from subjects";
					$result=mysqli_query($conn,$query)or die("cannot query the data");
					$row=mysqli_fetch_row($result)or die("error in fetching row scode");
		       			do
					{
						if($row[0]==$data[2])	
						{	$status=1;
					   		print "<tr><td>$row[0] is already exists</td></tr>";
							
						}
						$row=mysqli_fetch_row($result);
					}while($row);
					if($status==0)
					{
						$import="INSERT INTO subjects(sem,branch,scode,sname) VALUES('$data[0]','$data[1]','$data[2]','$data[3]')";
				 	  	mysqli_query($conn,$import) or die(mysql_error()); 
					}
				}
			print "</table>";

  			 }
			else
			{
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
				{
		       
				$import="INSERT INTO subjects(sem,branch,scode,sname) VALUES('$data[0]','$data[1]','$data[2]','$data[3]')";
		 	  	mysqli_query($conn,$import) or die(mysql_error()); 
				}



			}
 			 	fclose($handle);
   			 	echo "Import done";
			

		}

		else
		{

 			echo " Check Extension. your extension is ." . $ext;
		   
 		}

	}  

	else
	{
 		echo "Please Upload File";
	 }
}

?>

