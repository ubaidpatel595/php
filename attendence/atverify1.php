<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8" />
 <title>sms example</title>
<style>
 body{
 margin: 0;
 padding: 3em 0;
 color: #fff;
 background: #0080d2;
 font-family: Georgia, Times New Roman, serif;
}
 
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
   </style>
      </head>
  <body>
   <div id="container">  
   <ul>  
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


	if($row)
	{

		if($row[0]==$pass)
    	{
			print "<li> <label for=\"subjetc select\" > selec the subject:</label></li>"; 
	
            print"<form action=\"attmodify.html\" method=\"post\" name=\"form1\">";
			$query="select scode from subjectalloted  where fcode='$fcode' ";
			$result=mysqli_query($conn,$query);

			print "<li><select name=\"subj\" id=\"subj\">";
			do
			{	$row=mysqli_fetch_row($result);
				$mquery="select sname from subjects where scode='$row[0]' ";
				$mresult=mysqli_query($conn,$mquery);
				$mrow=mysqli_fetch_row($mresult);

				
				print"<option value=\"$row[0]\">$row[0]    $mrow[0] </option>";
			}while($row);
			print"</select></li>";
			print "<li><input type=\"submit\" value=\"submit\"></li> </ul>";
			print"</form>";


			
		
			

		}
		else
			print "<center> <h1> Invalid faculty code or password</h1> </center>";
		


	
	}
	else
	{
		print "Invalid password";
	}

  	
?>
</body>
</html>