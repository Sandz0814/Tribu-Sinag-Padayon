<?php

if (isset($_POST['submit'])){
    $Name = $POST['Name'];
    $Phone = $POST['Phone'];
    $Email = $POST['mail'];
    $Subject = $POST['Subject'];

    $mailTo = "sandrojimena0814@gmail.com";
    $headers = "From: ".$Email";
    $txt = "You have receive an email from ".$Name.". \n\n.$


    mail($mailTo, $Subject, $txt, $headers);
    header("Location: Contact.php?mailsend");


}