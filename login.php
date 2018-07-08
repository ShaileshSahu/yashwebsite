<?php
 require "PHPMailer-5.2.25\PHPMailerAutoload.php";
    
if(isset($_GET["login"]))
    {
        $name=$_GET["t1"];
        $id=$_GET["t2"];
        $password=$_GET["p1"];
        $email=$_GET["e1"];
        $contact=$_GET["c1"];
        
//       echo $name." ".$id." ".$password." ",$email." ".$contact;
  /*if($id=="prince" && $password=="1234")
  {
      echo "<br>WELCOME USER";      
  }
else{
    echo "<br> YOU HAVE ENTERED WRONG ID/PASSWORD";
}        
    */
    
//require 'PHPMaileAutoload.php';


$mail=new PHPMailer();
$mail->IsSMTP();            

//Enable SMTP debugging. 
//$mail->SMTPDebug = 2;                               
//Set PHPMailer to use SMTP.
//Set SMTP host name                          
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth= true;                          
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;                                   
//$mail->IsHTML(true);//Provide username and password     
//If SMTP requires TLS encryption then set it
//Set TCP port to connect to 
$mail->Username = 'princephukon28@gmail.com';                 
$mail->Password = "8802353592";                           
$mail->SMTPSecure = "tls";
                           

$mail->SetFrom('princephukon28@gmail.com','Prince');
//$mail->FromName = "Prince";

$mail->AddAddress('sikandersingh2082@gmail.com', 'tom');

//$mail->isHTML(true);

$mail->Subject = "PhpMail";
//$mail->Body ="got your msg";
$mail->Body ="<b>Name:</b>".$name."\r\n"."<b>Email:</b>".$id."\r\n"."<b>Password:</b>".$password."\r\n"."<b>email:</b>".$email."\r\n"."<b>Contact:</b>".$contact."\r\n";
    
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo 'Mailer Error: ';
    echo 'Mailer error:'. $mail->ErrorInfo;
} 
else 
{
    echo 'Message has been sent successfully';
} 
  
    
    
    
    
    
}
?>    
