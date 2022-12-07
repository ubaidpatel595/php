<?php
$sem=$_POST['sem'];
print "semeste=$sem" ;

$conn=mysqli_connect("localhost","root","") or die("cannot connect"); 
mysqli_select_db($conn,"csdepartment") or die("ERROR:could not connect to the database!!!");

print "<h1> Computer science Department</h1>";
print "Consolidated Attendence report <br>";

$squery="select scode from subjects where sem='$sem'";
$result=mysqli_query($conn,$squery) or die("fail");
$srow=mysqli_fetch_row($result);
  print"<table border=\"1\" align=\"center\"><tr><td> REGNO</td><td>Name</td>";
  
  do
  {         print"<td>$srow[0]</td>";
         $srow=mysqli_fetch_row($result);
  
    }while($srow);
    print "</tr>";
    


	$stquery="select * from students where sem='$sem'";
	$stresult=mysqli_query($conn,$stquery);
	$strow=mysqli_fetch_row($stresult);
    do
    {                print "<tr> <td> $strow[1]</td><td>$strow[2]</td>";
                    $squery="select scode from subjects where sem='$sem'";
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
                                                     if($strow[1]==$row[2])
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
                                              
           	                            print "<td> $i|$totalclass</td>";
                           
                                }
                                 else
                                 {
                                  print "<td> 0|0</td>";
                                 }
             $srow=mysqli_fetch_row($sbresult);              
            }while($srow);
            print"</tr>";
        
        
	$strow=mysqli_fetch_row($stresult);
	}while($strow);
?>