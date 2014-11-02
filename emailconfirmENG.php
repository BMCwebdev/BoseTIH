<?php
$to = "!!!!!!!!!!!!!!!!!";
$subject = "Bose &ldquo;Bring It Home!&rdquo; Program – Enrollment Confirmation";

$message = "
<html>
<head>
    <title>Bose &ldquo;Bring It Home!&rdquo; Program – Enrollment Confirmation</title>
</head>

<body>
<div>
<img src="/assets/images/hero.jpg" alt="hero" style="width:100%;" />
</div>

    <p>Bose and its promotion partner Promosis, Inc. sent you this message. To ensure delivery to your inbox (not bulk or spam folders), please add <a href="mailto:bringithome@email-hub.com">bringithome@email-hub.com</a> to your address book.</p>

    <p>Dear [first name],<br />
    <br />
    Thanks for enrolling in the Bose&#174; &ldquo;<em>Bring It Home!&rdquo;</em> SoundTouch&#8482; systems sales program.</p>

    <p>Log-in to the site to submit each of your sales of a qualifying SoundTouch(TM) system<br />
    <br />
    If you qualify for a prize, it will be shipped to the address supplied during program enrollment. If your shipping address has changed since you enrolled, you must let us know the new address.</p>

   <div>**********</div><br />
    <div>Your enrolled E-mail address is: [email address]</div><br />
    <div>***********</div>
    <br />
    Thanks again for joining our promotion, and good luck!<br />
    <br />
    [Official Rules link]<br />
    <br />
    Click here to be removed from our email list.</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <bringithome@email-hub.com>' . "\r\n";
/* $headers .= 'Cc: someone@someplace.com' . "\r\n"; */

mail($to,$subject,$message,$headers);
?>