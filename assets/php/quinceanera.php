<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>
<body>
	<div class="formdata">
		<h4>Thank you for your interest in celebrating your quincea&#241;era at St. Ignatius parish!</h4>
		<h4>Quincea&#241;era Registration Information </h4>
		<h4>The name of the person celebrating the quincea&#241;era is:</h4>
		<p><?php echo $_POST["cfname"]; ?> <?php echo $_POST["cmname"]; ?> <?php echo $_POST["clname"]; ?></p>
		<h4>Parent's Names are:</h4>
		<p><?php echo $_POST["ffname"]; ?> <?php echo $_POST["flname"]; ?> <br/>
		<?php echo $_POST["mfname"]; ?> <?php echo $_POST["mlname"]; ?></p>
		<h4>Your Mailing Address Is</h4>
		<p><?php echo $_POST["streetaddress"]; ?> <br/>
		<?php echo $_POST["aptsuite"]; ?> <br/>
		<?php echo $_POST["city"]; ?> <?php echo $_POST["state"]; ?> <?php echo $_POST["zip"]; ?> </p>
		<h4>Your Telephone and email addresses are:</h4>
		<p>(mobile): <?php echo $_POST["ctelephone"]; ?><br/>
		(home): <?php echo $_POST["htelephone"]; ?><br/>
		E-mail: <?php echo $_POST["email"]; ?></p>
		<h4>Are you a registered parishioner?</h4> 
		<p><?php echo $_POST["1yesno"]; ?> </p>
		<h4>Have you been baptized?</h4> 
		<p><?php echo $_POST["2yesno"]; ?> </p>
		<h4>Have you received first communion?</h4> 
		<p><?php echo $_POST["3yesno"]; ?> </p>
		<h4>Have you been confirmed?</h4> 
		<p><?php echo $_POST["4yesno"]; ?> </p>

		<h4>Requested Date of Quincea&#241;era</h4> 
		<h4>Your first date choice is:</h4> <p><?php echo $_POST["1month"]; ?> <?php echo $_POST["1day"]; ?>, <?php echo $_POST["1year"]; ?></p>
		<h4>Your first date choice is:</h4> <p><?php echo $_POST["2month"]; ?> <?php echo $_POST["2day"]; ?>, <?php echo $_POST["2year"]; ?></p>
	</div>

<?php
// The message

$message = "Dear Mercedes," . "\r\n" . 
$_POST["cfname"] . " " . $_POST["cmname"] . " " . $_POST["clname"] . " " .  "is requesting to celebrate her quinceañera at St. Ignatius." . "\r\n" .
"Her mailing address is:" . "\r\n" .
$_POST["streetaddress"] . "\r\n" .
$_POST["aptsuite"] . "\r\n" .
$_POST["city"] . ", " . $_POST["state"] . " " . $_POST["zip"] . "\r\n" .
"Telephone number (mobile):" . " " . $_POST["ctelephone"] . "\r\n" .
"Telephone number (home):" . " " . $_POST["htelephone"] . "\r\n" .
"E-mail Address:" . " " . $_POST ["email"] . "\r\n" .
"Her father's name is:" . " " .  $_POST["ffname"] . " " . $_POST["flname"] . "\r\n" . 
"Her mother's name is:" . " " . $_POST["mfname"] . " " . $_POST["mlname"] . "\r\n" . 
"She is registered?" . " " . $_POST["1yesno"] . "\r\n" . 
"She is baptized?" . " " . $_POST["2yesno"] . "\r\n" . 
"She has had first communion?" . " " . $_POST ["3yesno"] . "\r\n" . 
"She has been confirmed?" . " " . $_POST["4yesno"] . "\r\n" . 
"Her first choice date for the quinceañera is:" . "\r\n" .
$_POST["1month"] . " " . $_POST["1day"]  . ", " . $_POST["1year"] . "\r\n" .
"Her second choice date for the quinceañera is: \r\n" .
$_POST["2month"] . " " . $_POST["2day"]  . ", " . $_POST["2year"] . "\r\n" .
"This information is information that she filled out on the website quinceañera response form." ;

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('music@stignatiuschurch.org', 'Quinceañera Date Request from the Website', $message);
?>

</body>
</html>
 	