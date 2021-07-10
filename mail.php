<?php
    //get data from form  
    $name = $_POST['name'];
    $email= $_POST['email'];
    $his_subject = $_POST['subject'];
    $message= $_POST['message'];
    $to = "sriprakhar2@gmail.com";
    $subject = "Mail From Portfolio";
    
    $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject =" . $his_subject . "\r\n Message =" . $message ;
    $headers = "From: noreply@yoursite.com" . "\r\n" .
    "CC: somebodyelse@example.com";
    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
    }
    //redirect
    header("Location:thankyou.html");
?>