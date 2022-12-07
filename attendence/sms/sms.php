<?php
 

 if (isset( $_POST['phoneNumber'], $_POST['carrier'], $_POST['smsMessage'] ) &&!empty( $_POST['phoneNumber'] ) && !empty( $_POST['carrier'] )) 
 {
  $message = wordwrap( $_POST['smsMessage'], 70 );
  $to = $_POST['phoneNumber'] . '@' . $_POST['carrier'];
  $result = @mail( $to, '', $message );
  print 'Message was sent to ' . $to;
 } 
 else
  {
     print 'Not all information was submitted.';
 }
 

 
?>
