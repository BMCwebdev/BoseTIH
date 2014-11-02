<?php
require "site.inc";
// store names....
$accountname = $_REQUEST["accountname"];

$stores = getStoresForAccount($accountname);
print($stores);


?>
