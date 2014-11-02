<?php
// bring it home : 31-OCT-2014
// chad nale chad.nale@gmail.com
require "site.inc";

$firstname = "chad";
$email = "chad.nale@gmail.com";

$result = welcomeEmailEN($firstname,$email);

print("email sent was = " . $result);

$resultFR = welcomeEmailFR($firstname, $email);
print("french email sent was = " . $resultFR);
?>