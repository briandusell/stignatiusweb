<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>
<body>
<div class="formdata">
<h4>Thank you for your interest in St. Ignatius volunteer ministries!</h4>
<h4>These are your form responses</h4>
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
<h4>Are you a registered parishioner?</h4> 
<p><?php echo $_POST["1yesno"]; ?></p>
<h4>Which ministry is your first choice in which to participate?</h4>
<p><?php echo $_POST["1ministrytype"]; ?></p>
<h4>Which ministry is your second choice in which to participate?</h4>
<p><?php echo $_POST["2ministrytype"]; ?></p>
<h4>What other areas of volunteer ministry interest you?</h4>
<p><?php echo $_POST["otherinterest"]; ?></p>

</div>

<?php
// The message

$message = "Dear Christine," . "\r\n" . 
"My name is" . " " . $_POST["fname"] . " " . $_POST["lname"] . " " . "and I am interested in volunteering for ministry at St. Ignatius Parish." . "\r\n" .
"My mailing address is:" . "\r\n" .
$_POST["streetaddress"] . "\r\n" .
$_POST["aptsuite"] . "\r\n" .
$_POST["city"] . ", " . $_POST["state"] . " " . $_POST["zip"] . "\r\n" .
"Cell Telephone number:" . " " . $_POST["ctelephone"] . "\r\n" .
"Home Telephone number:" . " " . $_POST["htelephone"] . "\r\n" .
"E-mail Address:" . " " . $_POST ["email"] . "\r\n" . 
"Registered parishioner?" . " " . $_POST["1yesno"] . "\r\n" . 
"My first choice for ministry is: " . " " . $_POST["1ministrytype"] . "\r\n" . 
"My second choice for ministry is: " . " " . $_POST["2ministrytype"] . "\r\n" . 
"I am also interested in " . " " . $_POST["otherinterest"] . "\r\n" . 
"This information was filled out on the form located in the St. Ignatius ministry main page." . "\r\n" . 
"Sincerely," . "\r\n" . 
$_POST["fname"] . " " . $_POST["lname"]  ;

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('volunteer@stignatiuschurch.org', 'Volunteer Ministry Interest Inquiry from the Website', $message);
?>

</body>
</html>
 	