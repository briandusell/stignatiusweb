<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>
<body>
<div class="formdata">
	<h4>Thank you for your interest in the St. Ignatius Music Ministry!</h4>
	<h4>Form Responses</h4>
	<h4>Your Name Is:</h4>
	<p><?php echo $_POST["fname"]; ?> <?php echo $_POST["lname"]; ?></p>
	<h4>Your Mailing Address Is</h4>
	<p><?php echo $_POST["streetaddress"]; ?><br/>
	<?php echo $_POST["aptsuite"]; ?><br/>
	<?php echo $_POST["city"]; ?> <?php echo $_POST["state"]; ?> <?php echo $_POST["zip"]; ?></p>
	<h4>Your Telephone and email addresses are:</h4>
	<p><?php echo $_POST["ctelephone"]; ?><br/>
	<?php echo $_POST["htelephone"]; ?><br/>
	<?php echo $_POST["email"]; ?></p>
	<h4>Have you sung in a choir before?</h4> 
	<p><?php echo $_POST["1yesno"]; ?></p>
	<h4>Can you read music?</h4> 
	<p><?php echo $_POST["2yesno"]; ?></p>
	<h4>Do you play a musical instrument?</h4> 
	<p><?php echo $_POST["3yesno"]; ?></p>
	<h4>Are you able to attend weekly choir practices?</h4> 
	<p><?php echo $_POST["4yesno"]; ?></p>
	<h4>In what area of the music ministry would you like to participate?</h4>
	<p><?php echo $_POST["ministrytype"]; ?></p>
	<h4>What other areas of the music ministry interest you?</h4>
	<p><?php echo $_POST["otherinterest"]; ?></p>
</div>

<?php
// The message

$message = "Dear Brian," . "\r\n" . 
"My name is" . " " . $_POST["fname"] . " " . $_POST["lname"] . " " . "and I would like to become part of the St. Ignatius music ministry." . "\r\n" .
"Sung in a choir before?" . " " . $_POST["1yesno"] . "\r\n" . 
"Can read music?" . " " . $_POST["2yesno"] . "\r\n" . 
"Plays a musical instrument?" . " " . $_POST ["3yesno"] . "\r\n" . 
"Can attend weekly choir practices?" . " " . $_POST["4yesno"] . "\r\n" . 
"I am interested in " . " " . $_POST["ministrytype"] . "\r\n" . 
"I am also interested in " . " " . $_POST["otherinterest"] . "\r\n" . 
"My mailing address is:" . "\r\n" .
$_POST["streetaddress"] . "\r\n" .
$_POST["aptsuite"] . "\r\n" .
$_POST["city"] . ", " . $_POST["state"] . " " . $_POST["zip"] . "\r\n" .
"Cell Telephone number:" . " " . $_POST["ctelephone"] . "\r\n" .
"Home Telephone number:" . " " . $_POST["htelephone"] . "\r\n" .
"E-mail Address:" . " " . $_POST ["email"] . "\r\n" .
"This information was filled out on the form located in the St. Ignatius music ministry main page." . "\r\n" . 
"Sincerely," . "\r\n" . 
$_POST["fname"] . " " . $_POST["lname"]  ;

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('music@stignatiuschurch.org', 'Music Ministry Interest Response from the Website', $message);
?>

</body>
</html>
 	