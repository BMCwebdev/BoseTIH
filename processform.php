<?php
require "site.inc";
// this is the processing page for the sweepstake form
 $result = storeEnrollmentForm();
 if($result == "Email exists already...")
 {
    die("Email already exists....");
 }
 print("completed....<br><hr>");
 // now print out the data so we can see what went in
 getJSONData();
 print("<br><hr>");


?>