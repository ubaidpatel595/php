<?php
error_reporting(1);
$conn=mysqli_connect("localhost","root","") or die("cannot connect"); 

mysqli_select_db($conn,"csdepartment") or die("ERROR:could not connect to the database!!!");

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
   			//readfile($_FILES['csvfile']['tmp_name']);
			$handle = fopen($_FILES['csvfile']['tmp_name'], "r");
			$query="select * from students";
			$result=mysqli_query($conn,$query);
			$row=mysqli_fetch_row($result);
			print " <table border=\"2\"><tr><th>Reg No</th></tr>";
			if($row)
			{	
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
				{	$status=0;
					$query="select * from students";
					$result=mysqli_query($conn,$query);
					$row=mysqli_fetch_row($result);
		       			do
					{
						if($row[1]==$data[1])	
						{	$status=1;
					   		print "<tr><td>$row[1] is already exists</td></tr>";
						}
						$row=mysqli_fetch_row($result);
					}while($row);
					if($status==0)
					{
						$import="INSERT INTO students(sem,regno,name,branch,mobile) VALUES('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')";
				 	  	mysqli_query($conn,$import) or die(mysql_error()); 
					}
				}
			print "</table>";

  			 }
			else
			{
				while (($data=fgetcsv($handle, 1000, ",")) !== FALSE) 
				{
		       
				$import="INSERT INTO students(sem,regno,name,branch,mobile) VALUES('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')";
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