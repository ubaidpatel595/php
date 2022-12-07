 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="webmenu/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: #333; 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: red;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: red;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
</style>
</head>
<body>

  <div class="navbar">




<?php
	$fcode=$_POST['fcode'];
	$pass=$_POST['password'];
	$role=$_POST['role'];
	
   // print "role=$role";
	$conn=mysqli_connect("localhost","root","") or die("cannot connect"); 

	mysqli_select_db($conn,"csdepartment") or die("ERROR:could not connect to the database!!!");
	$query="select password ,role ,ecode from faculty where ecode='$fcode'" ;
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_row($result);
	print "<html>";
	print "<head><title></title></head><body> ";
    
    
    
    

	if( mysqli_num_rows($result)!=0 )
	{
		//chec which role user logging and place options accordingly
		if( ($row[0]==$pass) &&($row[2]==$fcode) )
    	{
			print"$row[0]==$pass <br> $row[1]==$role <br> $row[2]==$fcode";
		    if(strcmp($row[1],'hod')==0)
            { 
		?>	
			
							                 <div class="subnav">
                                       <button class="subnavbtn">HOD <i class="fa fa-caret-down"></i></button> 
									           <div class="subnav-content">
          										  <a href="faculty/deregister.html">Faculty Deregistration</a>
                                                  <a href="faculty/allotment.php">Subject Allotment</a>
                                                  <a href="faculty/viewallotment.html">View Subject Allotment </a>
                                            	  <a href="attendence/allotmentreport.php">Subject Allotment Report </a>
                                                  <a href="attendence/login.html">Attendence Entry</a>
                                            	  <a href="attendence/attmodlogin.html">Attendence Modification</a>
                                                  <a href="attendence/show.html">View Attendence</a>
                                                  <a href="attendence/showreport.html">Generate Attendence Report</a>
                                            	  <a href="attendence/showcas.html">Consolidated AT Report</a>
            
								        	</div>
                                       </div>     
							
		<?php                         
		}
		else
			if(strcmp($row[1],'faculty')==0 )
            {
    	?>	
							<div class="subnav">
                                    <button class="subnavbtn">staff<i class="fa fa-caret-down"></i></button>
                                    <div class="subnav-content">
                                                  <a href="attendence/login.html">Attendence Entry</a>
                                            	  <a href="attendence/attmodlogin.html">Attendence Modification</a>
                                                  <a href="attendence/show.html">View Attendence</a>
                                                  <a href="attendence/showreport.html">Generate Attendence Report</a>
                                            	  <a href="attendence/showcas.html">Consolidated AT Report</a>
            
                                      </div>
                            </div> 
							
			
		
			
		<?php
		}
         else
			if(strcmp($row[1],'admin')==0 )
    	{?>	
        
                        <div class="subnav">
                                <button class="subnavbtn">Aadmin<i class="fa fa-caret-down"></i></button>
                                <div class="subnav-content">
                                          <a href="student/studentlistupload.html">Upload Student List</a>
                                          <a href="student/subjectlistupload.html">Upload Subjects List</a>
                                          <a href="#"> Delete Student Record</a>
                                 </div>
                         </div> 
         <?php
         }
        else
		{	
		print "Invalid role";
		}
	}
	else 
	print "Invalid Credtentials";
  }
   else
   print "No users exists";

	print "</div></body>";
print "</html>";
		
		
		
		?>

							
							  
							

							

							
							

	
		
