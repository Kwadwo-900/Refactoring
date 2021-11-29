<?php
if(isset($_POST['Mail'])){
    $f_name = $_POST['f_name'];
    $email = $_POST['email'];
    $l_name = $_POST['l_name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <admin@officialdamn.com>' . "\r\n"; //change it to the anyusername@domain <compulsary> Important as it will be used as the sender's mail
    $to = "teamovercomers545@gmail.com"; //Change this email to organisation's mail   <compulsary>
    //Body for the email template
    $body = "<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;1,200;1,300&display=swap');
    @media only screen and (max-width:600px){
    .container {
        width:100% !important;
    }
    }
</style>

<div class='main_container' style='background-color:rgb(245,245,245); padding:5vh 5vw 5vh 5vw; font-size:1.3em;'>
    <div class='container' style='margin:auto; width:100%; background-color:rgb(255,255,255); font-family:\"Montserrat\", sans-serif;'>
    <div style='font-weight:600;'>A new form submitted from website.</div>
    <div>Details are:</div>
    <div style='margin-top:20px; color:rgb(31, 127, 255);'>First Name</div>
    <div>$f_name</div>
    <div style='margin-top:20px; color:rgb(31, 127, 255);'>Last Name</div>
    <div>$l_name</div>
    <div style='margin-top:20px; color:rgb(31, 127, 255);'>Email</div>
    <div>$email</div>
    <div style='margin-top:20px; color:rgb(31, 127, 255);'>Message</div>
    <div>$message</div>";
    

}
mail($to,$subject,$body,$headers);
header("Location: /pages/contact.html");
?>