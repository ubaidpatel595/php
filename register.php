<?php  
       $servername = "localhost";  
       $username = "root";  
       $password = "";  
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];	
	$lname = $_POST['lname'];	
	$ecode = $_POST['ecode'];
	 $role=$_POST['role'];
	$branch=$_POST['branch'];
	$pass = $_POST['pass'];
	
	
	//print "$fname,$mname,$lname,$ecode,$pass,$role,$branch";
	$conn = mysqli_connect ("localhost" , "root") or die("unable to connect to host");  
   	    $sql = mysqli_select_db ($conn,"csdepartment") or die("unable to connect to database");
	$query="select * from faculty";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_row($result);
	$status=0;
	if($row)
	{
		
		do
		{
			if($row[3]==$ecode)
			{
			$status=1;
			break;
			}
			$row=mysqli_fetch_row($result);
		}while($row);
			
		if($status==0)
		{
			$query = "INSERT INTO faculty (fname, mname, lname, ecode,branch,role, password) VALUES ('$fname','$mname' ,'$lname', '$ecode' ,'$branch','$role','$pass' )" ;
			$result=mysqli_query($conn,$query);
			if($result==NULL)
			print "error" ;
			else
			print "Registration succuessfull" ;
		}
		else
		{
			print "$ecode registration already exists ";
		}
	}
	else
	{
	$query = "INSERT INTO faculty (fname, mname, lname, ecode,branch,role, password) VALUES ('$fname','$mname' ,'$lname', $ecode,'$branch','$role','$pass' )" ;
		$result=mysqli_query($conn,$query);
		if($result==NULL)
		print "error" ;
		print "<h1>Registration succuessfull</h1>" ;
	}	
?>
	