<?php
// bring it home : 31-OCT-2014
// chad nale chad.nale@gmail.com
require "site.inc";

$accountNames = getUniqueAccountNames();

print($accountNames);

//SEARS HOLDING COMPANY
$stores = getStoresForAccount("BRANDSMART USA");

print($stores);



?>