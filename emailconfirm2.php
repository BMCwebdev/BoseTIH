<?php
$to = "!!!!!!!!!!!!!!!!!!!!!!!!!";
$from = 'bringithome@email-hub.com';
$subject = "Bose &ldquo;Bring It Home!&rdquo; Program – Enrollment Confirmation";

$headers = "From: " . strip_tags($from) . "\r\n";
$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
/* $headers .= "CC: something@something.something\r\n"; */
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html>'; 
$message .= '<head>'; 
$message .= '    <title>Bose &ldquo;Bring It Home!&rdquo; Program – Enrollment Confirmation</title>'; 
$message .= '</head>'; 
$message .= ''; 
$message .= '<body>'; 
$message .= '<div>'; 
$message .= '<img src=\"/assets/images/hero.jpg\" alt=\"hero\" style=\"width:100%;\" />'; 
$message .= '</div>'; 
$message .= ''; 
$message .= '    <p>Bose and its promotion partner Promosis, Inc. sent you this message. To ensure delivery to your inbox (not bulk or spam folders), please add <a href=\"mailto:bringithome@email-hub.com\">bringithome@email-hub.com</a> to your address book.</p>'; 
$message .= ''; 
$message .= '    <p>Dear [first name],<br />'; 
$message .= '    <br />'; 
$message .= '    Thanks for enrolling in the Bose&#174; &ldquo;<em>Bring It Home!&rdquo;</em> SoundTouch&#8482; systems sales program.</p>'; 
$message .= ''; 
$message .= '    <p>Log-in to the site to submit each of your sales of a qualifying SoundTouch(TM) system<br />'; 
$message .= '    <br />'; 
$message .= '    If you qualify for a prize, it will be shipped to the address supplied during program enrollment. If your shipping address has changed since you enrolled, you must let us know the new address.</p>'; 
$message .= ''; 
$message .= '   <div>**********</div><br />'; 
$message .= '    <div>Your enrolled E-mail address is: [email address]</div><br />'; 
$message .= '    <div>***********</div>'; 
$message .= '    <br />'; 
$message .= '    Thanks again for joining our promotion, and good luck!<br />'; 
$message .= '    <br />'; 
$message .= '    [Official Rules link]<br />'; 
$message .= '    <br />'; 
$message .= '    Click here to be removed from our email list.</p>'; 
$message .= '</body>'; 
$message .= '</html>'; 
$message .= '';
?>