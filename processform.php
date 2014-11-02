<?php
// bring it home : 31-OCT-2014
// chad nale chad.nale@gmail.com

require "site.inc";



$isFrench = false;
if(0 < strpos($_SERVER["HTTP_REFERER"], "indexFR.html"))
{
    $isFrench = true;
}

print("isFrench=" . $isFrench);
die();
// this is the processing page for the sweepstake form
 $result = storeEnrollmentForm();
 if($result == "Email exists already...")
 {
    die("Email already exists....");
 }
 print("completed....<br><hr>");
 // now print out the data so we can see what went in
 getJSONData();
 
 
 // here we email out the correct email based upon where it came from...
 print("<br><hr>");


?>