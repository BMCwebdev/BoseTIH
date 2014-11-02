<?php
// bring it home : 31-OCT-2014
// chad nale chad.nale@gmail.com

require "site.inc";
// determine if this is french....
$isFrench = false;
if(0 < strpos($_SERVER["HTTP_REFERER"], "indexFR.html"))
{
    $isFrench = true;
}

// this is the processing page for the sweepstake form
 $result = storeEnrollmentForm($isFrench);
 if($result == "Email exists already...")
 {
    die("Email already exists....");
 }
 print("completed....<br><hr>");
 // now print out the data so we can see what went in
 getJSONData();
 // here we need to send the email...
 
 // here we email out the correct email based upon where it came from...
 print("<br><hr>");


?>