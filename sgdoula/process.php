<?php
if(isset($_POST['submit'])) {
   $to = 'fran@draigwen.com' ;     //put your email address on which you want to receive the information
   $subject = 'Contact form from caerphillydoula.co.uk';   //set the subject of email.
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $headers .= 'From: webmaster@caerphillydoula.co.uk' . "\r\n";
   $headers .= 'Reply-To: webmaster@caerphillydoula.co.uk' . "\r\n";
   $message = "You have received the following contact email through the website: \r\n";
   $message .= "<table><tr><td>Name</td><td>".$_POST['InputName']."</td></tr>
               <tr><td>Email</td><td>".$_POST['InputEmail']."</td></tr>
               <tr><td>Contact No</td><td>".$_POST['phoneNumber']."</td></tr>
               <tr><td>Message</td><td>".$_POST['InputMessage']."</td>
               </tr></table>" ;
   mail($to, $subject, $message, $headers);
   header('Location: contact.php');
}
?>
