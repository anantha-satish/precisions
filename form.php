<?php
//get data from form  
$name = $_POST['name'];
$contact = $_POST['contact'];
$email= $_POST['email'];
$message= $_POST['subject'];
$to = "info@ivfprecisions.com";
$subject = "Update from IVF Precisions";
$txt = "Name:- ". $name . "\r\nContact:- " . $contact . "\r\nEmail:- " . $email . "\r\nMessage:- " . $message;
$headers = "From:" . $email . "\r\n" .
"CC: arnab.kd@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>