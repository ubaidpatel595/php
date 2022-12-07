<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="UTF-8">
<title> Attendence Marking Page</title>
     <link href ="jquery-ui.css"  rel = "stylesheet">
     <script src ="jquery-3.2.1.min.js"> </script>
      <script src ="jquery-1.10.2.js"> </script>
      <script src ="jquery-ui.js"> </script>
                 
   <script>
         $(function() {
            $( "#datepicker-1" ).datepicker({ dateFormat: 'yy-mm-dd' });
         });
             $( "subj" ).focus(function() {
  $( this ).blur();
});

         
         
      </script>



<style>
   
    ul {
 list-style: none;
 padding: 0
 align-items:center;
}
 
ul > li {
 padding: 0.12em 1em
        align-items:center;
}
 
label {
 display: block;
 float: left;
 width: 130px;align-items:center;
 
}
</style>     


</head>
<body>

<?php
$scode=$_POST['subj'];


$conn=mysqli_connect("localhost","root","") or die("cannot connect"); 
mysqli_select_db($conn,"csdepartment") or die("ERROR:could not connect to the database!!!");
$query="select sem,branch from subjects where scode='$scode' ";
$result=mysqli_query($conn,$query);
$sem=mysqli_fetch_row($result);
//print "semester=$sem[0]";

$query="select regno,name from students where sem='$sem[0]'  AND branch='$sem[1]'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_row($result);



//print" <center><label for=\"classdate\"> Date:</label>  <input type=\"date\" id=\"doc\" name=\"doc\" /> </center>";
?>


<form name="form1" action="absententry.php" method="post"> 
<center> <ul >
<li> <input  type="text" name="subj"  value="<?php print $scode;?>"   /> <br>  semester=<?php print $sem[0] ;?> </li> 


<li> Date:<input type="date" class ="datepicker" id="datepicker-1" name="datepicker-1" data-date-format="yyyy/mm/dd" / ></li>
</ul>
</center>

<?php
	
print "<marquee  height=\"20\" bgcolor=\"red\">	Please select all absentess before submit,Repeated submit for same subject code on same date Not Allowed </marquee>";
print"<table align=\"center\" border=\"3\"><tr><td>Reg No</td><td>Name</td><td>Select Absent</td></tr>";
print "<tr><td>IF</td><td>  ALL ARE PRESENT SELECT THIS CHECK BOX</td> <td><input type=\"checkbox\" name=\"status[]\"/  value=\"11\" multiple ></td></tr>";
if($row)
{
	$i=0;	
	do
	{
		print "<tr><td>$row[0]</td><td>  $row[1] </td> <td><input type=\"checkbox\" name=\"status[]\"/  value=\"$row[0]\" multiple  ></td></tr>";
		$row=mysqli_fetch_row($result);
		
		
	}while($row);


}
   	print"</table> ";

?>
   
<center><input type="submit" value="submit" />   </center>
</form>
</body>
</html>

