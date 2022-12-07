<?php
$scode=$_POST['scode'];
$sem=$_POST['sem'];
$dt=$_POST['datepicker-1']  ;
 $regno=$_POST['regno'] ;
$act=$_POST['update'];
print  "$scode <br>$sem<br> $dt <br> $act";

$conn=mysqli_connect("localhost","root","") or die("cannot connect"); 
mysqli_select_db($conn,"csdepartment") or die("ERROR:could not connect to the database!!!");
$query="select sem from subjects where scode='$scode' ";
$result=mysqli_query($conn,$query);
$dbsem=mysqli_fetch_row($result);
if($sem!=$dbsem[0])
{
    print "subject code and Semester mismatch <br>"   ;
}
else
{    
          
    $query="select * from students where sem='$sem' AND regno='$regno'";
    $result=mysqli_query($conn,$query);
     $row=mysqli_fetch_row($result);
    if($row)
     {   


         if($act=='insert')
        {
            $dt= date("Y-m-d H:i:s",strtotime(str_replace('/','-',$dt))) ;
           
            $query="select * from classtakendate where doc='$dt'" ;
            $result=mysqli_query($conn,$query);
            $row=mysqli_fetch_row($result);
            if($row)
            {
                $query="select * from attendence where scode='$scode' AND regno='$regno'";
                $result=mysqli_query($conn,$query);
               $row=mysqli_fetch_row($result);
                if(isset($result))
                print "Attendece For the $regno  Register Number Exists";
                else
                {
                
                $query="INSERT INTO attendence(doc,scode,regno) values('$dt','$scode','$regno')";
                mysqli_query($conn,$query) or die("error in insertion") ;
                }
                
            }
            else
            print "Attendence for this date is not at taken";
        
        }
        else
        {
             $dt= date("Y-m-d H:i:s",strtotime(str_replace('/','-',$dt))) ;
            $query="SELECT * from classtakendate where doc='$dt'" ;
            $result=mysqli_query($conn,$query);
            $row=mysqli_fetch_row($result);
            if($row)
            {
                $dquery="select * from attendence where scode='$scode' AND regno='$regno'";
                $dresult=mysqli_query($conn,$dquery) OR die("error in deletion") ;
                $drow=mysqli_fetch_row($dresult);
                if($drow)
                {                
                    $query="DELETE  FROM  attendence where regno='$regno'";
                 mysqli_query($conn,$query) OR die("error in deletion") ;
                 }
                 else
                 print "attendence already deleted";
                
            }
            else
            print "Attendence for this date is not at taken";       
        
        
        }
   
      }
      else
      print" Student entry doesnot exists";
   
}

?>