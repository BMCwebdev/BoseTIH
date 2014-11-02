<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<!--     <link rel="icon" href="../../favicon.ico"> -->

	<title>Bose&reg; &quot;Bring it Home&quot;</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/custom.css" rel="stylesheet">
    
	<link type="text/css" href="assets/webfont/stylesheet.css" rel="stylesheet" />


<!-- 	<link type="text/css" href="assets/css/validationEngine.jquery.css" rel="stylesheet" /> -->


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<!--     <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script language="javascript" type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
<script language="javascript" type="text/javascript">
    // bring it home : 31-OCT-2014
    // chad nale chad.nale@gmail.com

    function processForm()
    {
       document.getElementById("form1").submit();
    }
    function getStoreNumber()
    {
      var selectedAccount = document.getElementById("storename").value;
      if (null != selectedAccount) {
	$.ajax({
	  type: "POST",
	  url: "storenames.php",
	  data: { accountname: selectedAccount }
	})
	  .done(function( msg ) {
	    $("select#storenumber").html(msg);
	  });
	  
      }
    }
  
  $(document).ready(function(){
    var Input = $('input[name=kp1_description]');
    var default_value = Input.val();

    Input.focus(function() {
        if(Input.val() == default_value) Input.val("");
    }).blur(function(){
        if(Input.val().length == 0) Input.val(default_value);
    });
    
    // fetch list of account names....
    fetchAccountName();
  });
  // we need the list of account names
  function fetchAccountName()
  {
   $.ajax({
  type: "POST",
  url: "accountnames.php",
  data: { name: "John", location: "Boston" }
})
  .done(function( msg ) {
    $("select#storename").html(msg);
  });
  }
 </script>



	</head>
		
	<body>
	
	    <!-- <div class="container"> -->        

				<div class="headbar col-xs-12">
					<div>
					<div class="languagechoice col-xs-12 col-sm-6">
						<p class="center-block"><em>Voir cette page en Français?</em> <strong><a href="indexFR.html">Cliquez ici</a></strong></p>
					</div>
<!-- 					<div class="col-xs-4"></div> -->
					<div class="boselogo col-xs-12 col-sm-6"><img src="assets/images/boselogog.png" alt="boselogog" /></div>
					</div>
				</div>
				
				<div class="clearfix col-xs-12 nopadding">
					<img class="heroimgae" src="assets/images/hero.jpg" alt="hero" />
				</div>
				
				
				
				
				
				
				<div class="main-container">
				
				
					<div class="howitworks form col-xs-12 col-sm-6 col-sm-push-6">
						<img src="assets/images/howitworks.png" alt="howitworks" />
					</div>
					

					<div class="formarea form col-xs-12 col-sm-6 col-sm-pull-6">

					<div class="enrollnow"><p>ENROLL NOW.</p></div>
					<div class="greybox">
						<div class="greypadding">
						<p class="enrollmenttext"><em>One enrollment per participant - multiple enrollments will result in program disqualification. See <a href="rules.html" target="_blank"><strong>official rules</strong></a> for details.</em></p>
						<p>*=required field</p>
					
							<form id="form1" name="form1" action="processform.php" method="post">
							<div class="form-group">
							<input type="hidden" id="week" name="week" value="9"/>
							<table border="0" padding="1" cellspacing="1">
							<tr>
							    <td>First Name:*</td>
							    <td ><input type="text" id="firstname" name="firstname" class="validate[required]" ></td>
							</tr>
							<tr>
							    <td>Last Name:*</td>
							    <td><input type="text" id="lastname" name="lastname" class="validate[required]"></td>
							</tr>
							<tr>
							    <td>Shipping Address:* <br /><span style="font-size:10px;">(sorry, no P.O. boxes)</span></td>
							    <td><input type="text" id="address1" name="address1" class="validate[required]" ></td>
							</tr>
							<tr>
							    <td>Apartment #:</td>
							    <td><input type="text" id="address2" name="address2" ></td>
							</tr>
							<tr>
							    <td>City:*</td>
							    <td><input type="text" id="city" name="city" class="validate[required]" ></td>
							</tr>
							<tr>
							    <td>State:*</td>
							    <td>
							      <select name="state" id="state"  class="validate(selectstate)">
							        <option>Select</option>
							        	  <option value="AK" >AK - Alaska</option>
							
							              <option value="AL" >AL - Alabama</option>
							              <option value="AR" >AR - Arkansas</option>
							              <option value="AZ" >AZ - Arizona</option>
							              <option value="CA" >CA - California</option>
							              <option value="CO" >CO - Colorado</option>
							              <option value="CT" >CT - Connecticut</option>
							
							              <option value="DC" >DC - District of Columbia</option>
							              <option value="DE" >DE - Delaware</option>
							              <option value="FL" >FL - Florida</option>
							              <option value="GA" >GA - Georgia</option>
							              <option value="HI" >HI - Hawaii</option>
							              <option value="IA" >IA - Iowa</option>
							
							              <option value="ID" >ID - Idaho</option>
							              <option value="IL" >IL - Illinois</option>
							              <option value="IN" >IN - Indiana</option>
							              <option value="KS" >KS - Kansas</option>
							              <option value="KY" >KY - Kentucky</option>
							              <option value="LA" >LA - Louisiana</option>
							
							              <option value="MA" >MA - Massachusetts</option>
							              <option value="MD" >MD - Maryland</option>
							              <option value="ME" >ME - Maine</option>
							              <option value="MI" >MI - Michigan</option>
							              <option value="MN" >MN - Minnesota</option>
							              <option value="MO" >MO - Missouri</option>
							
							              <option value="MS" >MS - Mississippi</option>
							              <option value="MT" >MT - Montana</option>
							              <option value="NC" >NC - North Carolina</option>
							              <option value="ND" >ND - North Dakota</option>
							              <option value="NE" >NE - Nebraska</option>
							              <option value="NH" >NH - New Hampshire</option>
							
							              <option value="NJ" >NJ - New Jersey</option>
							              <option value="NM" >NM - New Mexico</option>
							              <option value="NV" >NV - Nevada</option>
							              <option value="NY" >NY - New York</option>
							              <option value="OH" >OH - Ohio</option>
							              <option value="OK" >OK - Oklahoma</option>
							
							              <option value="OR" >OR - Oregon</option>
							              <option value="PA" >PA - Pennsylvania</option>
							              <option value="RI" >RI - Rhode Island</option>
							              <option value="SC" >SC - South Carolina</option>
							              <option value="SD" >SD - South Dakota</option>
							              <option value="TN" >TN - Tennessee</option>
							
							              <option value="TX" >TX - Texas</option>
							              <option value="UT" >UT - Utah</option>
							              <option value="VA" >VA - Virginia</option>
							              <option value="VT" >VT - Vermont</option>
							              <option value="WA" >WA - Washington</option>
							              <option value="WI" >WI - Wisconsin</option>
							
							              <option value="WV" >WV - West Virginia</option>
							              <option value="WY" >WY - Wyoming</option>
							        </select>
							</td>
							</tr>
							<tr>
							    <td>Zip Code:*</td>
							    <td><input type="text" id="zipcode" name="zipcode" class="validate[required]" ></td>
							</tr>
							<tr>
							    <td>Email:</td>
							    <td><input type="text" id="email" name="email" ></td>
							</tr>
							<tr>
							    <td>Confirm Email:</td>
							    <td><input type="text" id="email" name="email" ></td>
							</tr>
							<tr>
							    <td>Password: <br /><span style="font-size:10px;">(minimum 5 characters)</span></td>
							    <td><input type="password" id="pin" name="pin" ></td>
							</tr>
							<tr>
							    <td>Confirm Password:</td>
							    <td><input type="password" id="pin" name="pin" ></td>
							</tr>
							<tr>
							    <td>Phone Number:</td>
							    <td><input type="text" id="phone" name="phone" ></td>
							</tr>
							<tr>
							    <td>Store Name:</td>
							    <td><select id="storename" name="storename" size="1" class="validate(selectstore)"  onChange="javascript:getStoreNumber();"></td>
							</tr>
							<tr>
							    <td>Store Number /<br />Location:</td>
							    <td><select id="storenumber" name="storenumber" style="min-width:90%"></select></td>
							</tr>
							<tr>
							    <td>Please send me <br />Bose email <br />communications:</td>
							    <td><input type="checkbox" id="optinemail" name="optinemail" value="1"></td>
							</tr>

							</table>
							
							
							<div style="position:relative">
<?php

require_once('recaptchalib.php');

// Get a key from https://www.google.com/recaptcha/admin/create
$publickey = "6Lcx4PwSAAAAAHa6T8y4MMurRFzEy2PM4gvMM9OS";
$privatekey = "6Lcx4PwSAAAAAHF4RSSRpGRvuZ6OroYN-NEFnNHS";

# the response from reCAPTCHA
$resp = null;
# the error code from reCAPTCHA, if any
$error = null;

# was there a reCAPTCHA response?
if ($_POST["recaptcha_response_field"]) {
        $resp = recaptcha_check_answer ($privatekey,
                                        $_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]);

        if ($resp->is_valid) {
                echo "You got it!";
        } else {
                # set the error code so that we can display it
                $error = $resp->error;
        }
}
echo recaptcha_get_html($publickey, $error);
?>

<input type="button" id="btnsubmit" class="btn btn-primary" name="btnsubmit" onclick="javascript:processForm();" value="Submit">
</div>




							</form>
					</div>
					</div>
					</div>
					<div style="height:50px;"></div>
					<div class="greybox">
					<div class="enrollnow2"><p>ENROLLED? PLEASE LOG-IN TO REPORT SALES</p></div>
						<div class="greypadding">					
							<form id="form2" name="form1" action="" method="">
							<div class="form-group">
							<input type="hidden" id="week" name="week" value="9"/>
							<table border="0" padding="1" cellspacing="1">
							<tr>
							    <td>Email:</td>
							    <td ><input type="text" id="loginemail" name="loginemail" ></td>
							</tr>
							<tr>
							    <td>Password:</td>
							    <td><input type="text" id="loginpassword" name="loginpassword" ></td>
							</tr>
							<tr>
							    <td><p class="forgottext"><a href="#">Forgot password?</a> <br /> <a href="#">Need help?</a></p></td>
							    <!-- <td><input  type="button" class="btn btn-primary loginbutton"  value="Submit"></td> -->
							    <td><strong><p style="font-size:12px;">Login will be available once <br />product registration is open.</p></strong></td>
							</tr>
							</table>
							</div>
							</form>
						</div>
					</div>
					</div>

					

					<div class="clearfix"></div>
					
					<div class="footer col-xs-12">
					<p>Program open 11/2/14 – 1/3/15 to retail sales associates at participating authorized Bose retailers who are legal residents of the U.S. &amp; Canada, 18 or older. Sales reporting is provided to PROMOSIS, INC., the program administrator on behalf of Bose.  Program details may change at any time due to product availability.  No substitute or custom programs.</p>
					</div>
					
					

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
<!--
	<script src="assets/js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
	<script src="assets/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
-->
<!--
		<script>
		jQuery(document).ready(function(){
-->
<!--
			// binds form submission and fields to the validation engine
			jQuery("#form1").validationEngine();
		});
            
	</script>
-->

	</body>
	</html>