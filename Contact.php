<?php
if (isset($_POST['submit'])){
    $Name = $_POST['Name'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];

    $mailTo = "sandrojimena0814@gmail.com";
    $headers = "From: ".$Email;
    $txt = "You have received an email from ".$Name.".\n\nPhone: ".$Phone."\nEmail: ".$Email."\n\nMessage:\n".$Message;

    mail($mailTo, $Subject, $txt, $headers);
    header("Location: Contact.php?mailsend=success");
    exit();
}
?>
