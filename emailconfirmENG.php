<?php
$to = "!!!!!!!!!!!!!!!!!";
$subject = "Bose &ldquo;Bring It Home!&rdquo; Program – Enrollment Confirmation";

$message = "
echo "<html>\n"; 
echo "<head>\n"; 
echo "    <title>Bose &ldquo;Bring It Home!&rdquo; Program – Enrollment Confirmation</title>\n"; 
echo "</head>\n"; 
echo "\n"; 
echo "<body>\n"; 
echo "<div>\n"; 
echo "<img src=\"/assets/images/hero.jpg\" alt=\"hero\" style=\"width:100%;\" />\n"; 
echo "</div>\n"; 
echo "\n"; 
echo "    <p>Bose and its promotion partner Promosis, Inc. sent you this message. To ensure delivery to your inbox (not bulk or spam folders), please add <a href=\"mailto:bringithome@email-hub.com\">bringithome@email-hub.com</a> to your address book.</p>\n"; 
echo "\n"; 
echo "    <p>Dear [first name],<br />\n"; 
echo "    <br />\n"; 
echo "    Thanks for enrolling in the Bose&#174; &ldquo;<em>Bring It Home!&rdquo;</em> SoundTouch&#8482; systems sales program.</p>\n"; 
echo "\n"; 
echo "    <p>Log-in to the site to submit each of your sales of a qualifying SoundTouch(TM) system<br />\n"; 
echo "    <br />\n"; 
echo "    If you qualify for a prize, it will be shipped to the address supplied during program enrollment. If your shipping address has changed since you enrolled, you must let us know the new address.</p>\n"; 
echo "\n"; 
echo "   <div>**********</div><br />\n"; 
echo "    <div>Your enrolled E-mail address is: [email address]</div><br />\n"; 
echo "    <div>***********</div>\n"; 
echo "    <br />\n"; 
echo "    Thanks again for joining our promotion, and good luck!<br />\n"; 
echo "    <br />\n"; 
echo "    [Official Rules link]<br />\n"; 
echo "    <br />\n"; 
echo "    Click here to be removed from our email list.</p>\n"; 
echo "</body>\n"; 
echo "</html>\n"; 
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <bringithome@email-hub.com>' . "\r\n";
/* $headers .= 'Cc: someone@someplace.com' . "\r\n"; */

mail($to,$subject,$message,$headers);
?>