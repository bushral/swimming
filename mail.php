<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "alnbarybushra@gmail.com";
$subject = "Mail From swimming website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";

if($email!=NULL){
    $maill=mail($to,$subject,$txt,$headers);
      if( $maill == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
    header("Location:thankyou.html");
}
//redirect

?>
