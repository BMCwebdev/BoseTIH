<?php
// bring it home : 31-OCT-2014
// chad nale chad.nale@gmail.com

function getDBConnection()
{
	$dbhost = "localhost";
	$dbuser = "bmcweb_boseTIH";
	$dbpwd = "boseTIH2014";
	$dbschema = "bmcweb_bosetakeithome";

	$isdebug = false;
	
	//$isdebug = true;
	if($isdebug)
	{
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpwd = "mysql";
		$dbschema = "firstandgo";
	}
	
	
	// get the database connection
	$db = new mysqli($dbhost, $dbuser, $dbpwd, $dbschema);
	// check to see if it errored out... if it did send exception message
	if($db->connect_errno > 0)
	{
		die('Unable to connect to database [' . $db->connect_error . ']');
	}
	return $db;
}
// strip bad input from post vars
function cleanStringValues($str)
{
	$str = trim($str);
	$str = stripcslashes($str);
	$str = (filter_var($str, FILTER_SANITIZE_STRING));
	return $str;
}

function verifyLogin($username, $pin)
{
	// this needs to verify username / password
	$mysqli = getDBConnection();
	$storedPin = "";
	$verified = false;
	/* Create a prepared statement */
	if($stmt = $mysqli -> prepare("SELECT pin FROM enrollments WHERE email=?")) {
	      $stmt -> bind_param("s", $username);
	      $stmt -> execute();
	      $stmt -> bind_result($result);
	      $stmt -> fetch();
	      $storedPin = $result;
	      $stmt -> close();
	}
	$mysqli->close();
	// now see if the stored matches what we got in
	// this is the newer method will not work on brians server
	//$verified = password_verify($pin, $storedPin);
	
	// switching to MD5 less secure
	if($storedPin == md5($pin))
	   $verified = true;
	
	return $verified;
}
function emailExists($email)
{
	$mysqli = getDBConnection();
	$myArray = array();
	$exists = false;
	if ($result = $mysqli->query("SELECT * FROM enrollments where email='" . $email . "'"))
	{
		while($row = $result->fetch_array(MYSQL_ASSOC))
		{
			$exists = true;
		}
	}
	$mysqli->close();
	return $exists;
}
function getUniqueAccountNames()
{
	$mysqli = getDBConnection();
	$myArray = array();
	$jsonStr = "";
	if ($result = $mysqli->query("SELECT distinct accountname from stores order by accountname ASC"))
	{
		while($row = $result->fetch_array(MYSQL_ASSOC))
		{
			$myArray[] = $row;
		}
		$jsonStr = $jsonStr . json_encode($myArray);
	}

	$result->close();
	$mysqli->close();
	// now print out the json string
	//$json_string = json_encode($jsonStr, JSON_PRETTY_PRINT);
	return $jsonStr;
}
function getStoresForAccount($accountname)
{
	$mysqli = getDBConnection();
	$myArray = array();
	$jsonStr = "";
	if ($result = $mysqli->query("SELECT storename, sapnumber, address1, address2, city, state from stores where accountname='" . $accountname . "'"))
	{
		while($row = $result->fetch_array(MYSQL_ASSOC))
		{
			$myArray[] = $row;
		}
		$jsonStr = $jsonStr . json_encode($myArray);
	}

	$result->close();
	$mysqli->close();
	// now print out the json string
	//$json_string = json_encode($jsonStr, JSON_PRETTY_PRINT);
	return $jsonStr;
}
// this will be the code that does the enrollment entry
function storeEnrollmentForm()
{
	$passedEmail = cleanStringValues($_POST["email"]);
	if(0 == strlen($passedEmail) || true == emailExists($passedEmail))
	{
		return "Email exists already...";	
	}
	$dbConn = getDBConnection();
	// need to make sure email doesn't already exist....
	
	
	
	// sql statement...
	$sql = "INSERT INTO enrollments " .
		"(firstname, lastname, address1, address2, city, state, zipcode, email, telephone, " .
		"pin, storenumber, storename, optinemail, submitteddate) " .
		"values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";	
	if($stmt = $dbConn->prepare($sql))
	{
		// bind the params
		$stmt->bind_param('ssssssssssssis', $firstname, $lastname, $address1, $address2, $city, $state,
				  $zipcode, $email, $telephone,$pin, $storenumber, $storename,
				  $optinemail,$submitteddate);
		// now set the params to the post values
		$firstname = cleanStringValues($_POST["firstname"]);
		$lastname = cleanStringValues($_POST["lastname"]);
		$address1 = cleanStringValues($_POST["address1"]);
		$address2 = cleanStringValues($_POST["address2"]);
		$city = cleanStringValues($_POST["city"]);
		$state = cleanStringValues($_POST["state"]);
		$zipcode = cleanStringValues($_POST["zipcode"]);
		$email = cleanStringValues($_POST["email"]);
		$telephone = cleanStringValues($_POST["telephone"]);
		// need to store password_hash("rasmuslerdorf", PASSWORD_DEFAULT)
		// can't use the password_hash on older versions switching to MD5
		//$pin = password_hash(cleanStringValues($_POST["pin"]),PASSWORD_DEFAULT);
		$pin = md5(cleanStringValues($_POST["pin"]));
		$storenumber = cleanStringValues($_POST["storenumber"]);
		$storename = cleanStringValues($_POST["storename"]);
		// see if nfl is submitted it's a chcekbox so only when it is there
		if(null != $_POST["optinemail"])
			$optinemail = 1;
		else
			$optinemail = 0;
		$submitteddate = date('Y-m-d H:i:s');
		// now
		$stmt->execute();
		$stmt->close();
		
	}else
	{
		printf("Error - SQLSTATE %s.\n", $dbConn->sqlstate);
		printf("Prepared statement error: %s\n", $db->error);
		die("fatal error");
	}
	$dbConn->close();
	return "ok";
	
}
function getJSONData()
{
	$mysqli = getDBConnection();
	$myArray = array();
	$jsonStr = "";
	if ($result = $mysqli->query("SELECT * FROM enrollments"))
	{
		while($row = $result->fetch_array(MYSQL_ASSOC))
		{
			$myArray[] = $row;
		}
		$jsonStr = $jsonStr . json_encode($myArray);
	}

	$result->close();
	$mysqli->close();
	// now print out the json string
	//$json_string = json_encode($jsonStr, JSON_PRETTY_PRINT);
	print($jsonStr);
}
?>


