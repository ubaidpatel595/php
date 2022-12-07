<?php
$fcode=$_POST['fcode'];

$conn=mysqli_connect("localhost","root","") or die("cannot connect"); 
mysqli_select_db($conn,"csdepartment") or die("ERROR:could not connect to the database!!!");
$query="select * from faculty where ecode='$fcode'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_row($result);
if($row)
{
    $query="select * from subjectalloted where fcode='$fcode'";
    $sbresult=mysqli_query($conn,$query);
    $sbrow=mysqli_fetch_row($sbresult);
    print "the following subjects alloted to the faculty=$fcode will be deleted from subject handling list";
    do
    {
        print " $sbrow[1] ";
        $sbrow=mysqli_fetch_row($sbresult);
    
    }while($sbrow) ;
    

                $query="DELETE FROM subjectalloted where fcode='$fcode'";
                $sbresult=mysqli_query($conn,$query);
                $query="DELETE FROM faculty where ecode='$fcode'";
                $sbresult=mysqli_query($conn,$query);
                 print "Faculty Entry Deleted Succuessfully";
     
}
else
{  print "faculty entery doesnot exists";
}

?>