<?php
if(isset($_POST['submit'])) {
   $to = 'fran@draigwen.com' ;     //put your email address on which you want to receive the information
   $subject = 'contact form test';   //set the subject of email.
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $message = "<table><tr><td>Your Name</td><td>".$_POST['InputName']."</td></tr>
               <tr><td>E-Mail</td><td>".$_POST['InputEmail']."</td></tr>
               <tr><td>Contact No</td><td>".$_POST['phoneNumber']."</td></tr>
               <tr><td>Message</td><td>".$_POST['InputMessage']."</td>
               </tr></table>" ;
   mail($to, $subject, $message, $headers);
   header('Location: contact.html');
}
?>
