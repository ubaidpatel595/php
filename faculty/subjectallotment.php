<?php
$fcode;
$scode[]=array();

$fcode = $_POST['staff'];
//$scode = $_POST['subjects']; 
//echo "For faculty code :" .$fcode;
//print"$fcode<br>";


//echo "the following subjects are alloted<br>";
if(isset($_POST['subjects']))  
        { 
	
	$i=0;
	foreach($_POST['subjects'] as $s)
	{
		$scode[$i]=$s;
		$i++;
		//print $s;
		//print "<br>";	
	} 


	$conn=mysqli_connect("localhost","root","") or die("cannot connect"); 

	mysqli_select_db($conn,"csdepartment") or die("ERROR:could not connect to the database!!!");
		
		$query="select * from subjectalloted";
		$result=mysqli_query($conn,$query);
		$row=mysqli_fetch_row($result);
		
		if($row)
		{
			$c=count($scode);
			//print "subjects seletec=$c";
			print "<table >";
			for($i=0;$i<count($scode);$i++)
			{
				$flag=0;
				$query="select * from subjectalloted";
				$result=mysqli_query($conn,$query);
				$row=mysqli_fetch_row($result);
				do
				{	
					if( ($fcode==$row[0])&& ($scode[$i]==$row[1] ))
					{
						print "<tr><td>$row[1] </td> <td>alreadyalloted to you</td></tr>";
						$flag=1;
					}
					else
					if($scode[$i]==$row[1])
					{
						print "<tr><td> $row[1] </td> <td> alloted to $row[0]</tr>";
						$flag=1;
					}
					$row=mysqli_fetch_row($result);
			

				}while($row);
				
				if($flag==0)
				{
					$query="INSERT INTO subjectalloted(fcode,scode) values('$fcode','$scode[$i]')";
                    mysqli_query($conn,$query);
                    print "<h1> Subject Alloted.</h1>";
                    
				}
			
		
			}
			print "</table>";
		}
		else
		{
		$query="INSERT INTO subjectalloted(fcode,scode) values('$fcode','$scode[0]')";
		mysqli_query($conn,$query)    ;
		}



		
	}       
             else
        echo "Select an option first !!"; 




?>
