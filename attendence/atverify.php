<?php
	$fcode=$_POST['fcode'];
	$pass=$_POST['psw'];
	//echo "$fcode";
	//echo "$pass";
	$conn=mysqli_connect("localhost","root","") or die("cannot connect"); 

	mysqli_select_db($conn,"csdepartment") or die("ERROR:could not connect to the database!!!");
	$query="select password from faculty where ecode='$fcode'" ;
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_row($result);
	print "<html>";
	print "<head><title></title></head><body>";

	if($row)
	{

		if($row[0]==$pass)
    	{
			print "<h1>selec the subject:</h1>"; 
	
            print"<form action=\"atmark.php\" method=\"post\" >";
			$query="select scode from subjectalloted  where fcode='$fcode' ";
			$result=mysqli_query($conn,$query);

			print "<select name=\"subj\" id=\"subj\">";
			do
			{	$row=mysqli_fetch_row($result);
				$mquery="select sname from subjects where scode='$row[0]' ";
				$mresult=mysqli_query($conn,$mquery);
				$mrow=mysqli_fetch_row($mresult);

				
				print"<option value=\"$row[0]\">$row[0]    $mrow[0] </option>";
			}while($row);
			print"</select>";
			print "<input type=\"submit\" value=\"submit\">";
			print"</form>";


			
		
			

		}
		else
			print "<center> <h1> Invalid faculty code or password</h1> </center>";
		


	
	}
	else
	{
		print "Invalid password";
	}
print "</body>";
print "</html>";
	
	
		
?>