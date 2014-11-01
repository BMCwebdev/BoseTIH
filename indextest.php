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


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<!--     <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script language="javascript" type="text/javascript">
    // bring it home : 31-OCT-2014
    // chad nale chad.nale@gmail.com

    function processForm()
    {
       document.getElementById("form1").submit();
    }
    
</script>

<script>
$(document).ready(function(){
    var Input = $('input[name=kp1_description]');
    var default_value = Input.val();

    Input.focus(function() {
        if(Input.val() == default_value) Input.val("");
    }).blur(function(){
        if(Input.val().length == 0) Input.val(default_value);
    });
})​
 </script>


	</head>
		
	<body>
	
	    <!-- <div class="container"> -->        

				<div class="headbar col-xs-12">
					<div class="row">
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
				
				
				
				
				
				
				<div>
				<div class="formarea form col-xs-12 col-sm-6">

										<div class="enrollnow"><p>ENROLL NOW.</p></div>
					<div class="greybox">
						<div class="greypadding">
						<p class="enrollmenttext"><em>One enrollment per participant - multiple enrollments will result in program disqualification. See <a href="rules.html" target="_blank"><strong>official rules</strong></a> for details.</em></p>
					
							<form id="form1" name="form1" action="processform.php" method="post">
							<div class="form-group">
							<input type="hidden" id="week" name="week" value="9"/>
							<table border="0" padding="1" cellspacing="1">
							<tr>
							    <td>Firstname</td>
							    <td class="wider"><input type="text" id="firstname" name="firstname" value="firstname"></td>
							</tr>
							<tr>
							    <td>Lastname</td>
							    <td><input type="text" id="lastname" name="lastname" value="lastname"></td>
							</tr>
							<tr>
							    <td>Address 1</td>
							    <td><input type="text" id="address1" name="address1" value="address1"></td>
							</tr>
							<tr>
							    <td>Address 2</td>
							    <td><input type="text" id="address2" name="address2" value="address2"></td>
							</tr>
							<tr>
							    <td>City</td>
							    <td><input type="text" id="city" name="city" value="city"></td>
							</tr>
							<tr>
							    <td>State</td>
							    <td><input type="text" id="state" name="state" value="state"></td>
							</tr>
							<tr>
							    <td>zipcode</td>
							    <td><input type="text" id="zipcode" name="zipcode" value="zipcode"></td>
							</tr>
							<tr>
							    <td>Email</td>
							    <td><input type="text" id="email" name="email" value="email"></td>
							</tr>
							<tr>
							    <td>Telephone</td>
							    <td><input type="text" id="telephone" name="telephone" value="telephone"></td>
							</tr>
							<tr>
							    <td>Password</td>
							    <td><input type="password" id="pin" name="pin" value=""></td>
							</tr>
							<tr>
							    <td>Bose optin</td>
							    <td><input type="checkbox" id="optinemail" name="optinemail" value="1"></td>
							</tr>
							<tr>
							    <td>Store Name</td>
							    <td><input type="text" id="storename" name="storename" value="storename"></td>
							</tr>
							<tr>
							    <td>Telephone</td>
							    <td><input type="text" id="storenumber" name="storenumber" value="storenumber"></td>
							</tr>
							<tr>
							<td>&nbsp;</td>
							<td><input type="button" id="btnsubmit" class="btn btn-primary" name="btnsubmit" onclick="javascript:processForm();" value="Submit">&nbsp;&nbsp;<br />
							<input type="reset" class="btn btn-primary"  value="Clear"></td>
							</tr>
							</table>
							</form>
					</div>
					</div>
					</div>
					<div style="height:50px;"></div>
					<div class="greybox">
					<div class="enrollnow2"><p>ENROLLED? PLEASE LOG-IN TO REPORT SALES</p></div>
						<div class="greypadding">					
							<form id="form1" name="form1" action="processform.php" method="post">
							<div class="form-group">
							<input type="hidden" id="week" name="week" value="9"/>
							<table border="0" padding="1" cellspacing="1">
							<tr>
							    <td>Firstname</td>
							    <td class="wider"><input type="text" id="firstname" name="firstname" value="firstname"></td>
							</tr>
							<tr>
							    <td>Lastname</td>
							    <td><input type="text" id="lastname" name="lastname" value="lastname"></td>
							</tr>
							<tr>
							    <td><p class="forgottext"><a href="#">Forgot password?</a> <br /> <a href="#">Need help?</a></p></td>
							    <td><input  type="button" class="btn btn-primary loginbutton"  value="Submit"></td>
							</tr>
							</table>
							</div>
							</form>
							
							
							
							    <form action="" method="post">
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
    <br/>
    <input type="submit" value="submit" />
    </form>



						</div>
					</div>
					</div>

					


					
					
					<div class="howitworks form col-xs-12 col-sm-6">
						<img src="assets/images/howitworks.png" alt="howitworks" />
					</div>
					
					<div class="clearfix"></div>
					
					<div class="footer col-xs-12">
					<p>Program open 11/2/14 – 1/3/15 to retail sales associates at participating authorized Bose retailers who are legal residents of the U.S. &amp; Canada, 18 or older. Sales reporting is provided to PROMOSIS, INC., the program administrator on behalf of Bose.  Program details may change at any time due to product availability.  No substitute or custom programs.</p>
					</div>
					
					
					
					
					
					
					
					
					
					
					
					
					


					
					

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	</body>
	</html>