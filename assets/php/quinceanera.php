<html>
<body>
<div class="formdata">
<h4>Quinceanera Registration Information </h4>
<h4>Are you a registered parishioner?</h4> 
<?php echo $_POST["1yesno"]; ?>
<h4>Have you been baptized?</h4> 
<?php echo $_POST["2yesno"]; ?>
<h4>Have you received first communion?</h4> 
<?php echo $_POST["3yesno"]; ?>
<h4>Have you been confirmed?</h4> 
<?php echo $_POST["4yesno"]; ?>

<h4>Requested Date of Quinceanera</h4> 
<h4>Your first date choice is:</h4> <?php echo $_POST["1month"]; ?> <?php echo $_POST["1day"]; ?> <?php echo $_POST["1year"]; ?>
<h4>Your first date choice is:</h4> <?php echo $_POST["2month"]; ?> <?php echo $_POST["2day"]; ?> <?php echo $_POST["2year"]; ?>

<h4>Your Name Is:</h4>
<?php echo $_POST["cfname"]; ?> <?php echo $_POST["cmname"]; ?> <?php echo $_POST["clname"]; ?>

<h4>Your Parent's Names are:</h4>
<?php echo $_POST["ffname"]; ?> <?php echo $_POST["flname"]; ?>
<br><?php echo $_POST["mfname"]; ?> <?php echo $_POST["mlname"]; ?>
<h4>Your Mailing Address Is</h4>
<?php echo $_POST["streetaddress"]; ?>
<br><?php echo $_POST["aptsuite"]; ?>
<br><?php echo $_POST["city"]; ?> <?php echo $_POST["state"]; ?> <?php echo $_POST["zip"]; ?>
<h4>Your Telephone and email addresses are:</h4>
<?php echo $_POST["telephone"]; ?>
<br><?php echo $_POST["email"]; ?>
</div>

<?php
// The message

$message = "Dear Mercedes," . "\r\n" . 
$_POST["cfname"] . " " . $_POST["clname"] . " has sent a request for a Quinceanera." . "\r\n" .
"Her first choice date for the Quinceanera is:" . "\r\n" .
$_POST["1month"] . " " . $_POST["1day"]  . " " . $_POST["1year"] . "\r\n" .
"Her second choice date for the Quinceanera is: \r\n" .
$_POST["2month"] . " " . $_POST["2day"]  . " " . $_POST["2year"] . "\r\n" .
"Her full name is: " . $_POST["cfname"] . " "  . $_POST["cmname"] . " " . $_POST["clname"] . ". \r\n" . 
"She is registered?" . " " . $_POST["1yesno"] . "\r\n" . 
"She is baptized?" . " " . $_POST["2yesno"] . "\r\n" . 
"She has had first communion?" . " " . $_POST ["3yesno"] . "\r\n" . 
"She has been confirmed?" . " " . $_POST["4yesno"] . "\r\n" . 
"Her mailing address is:" . "\r\n" .
$_POST["streetaddress"] . "\r\n" .
$_POST["aptsuite"] . "\r\n" .
$_POST["city"] . ", " . $_POST["state"] . " " . $_POST["zip"] . "\r\n" .
"Telephone number:" . " " . $_POST["telephone"] . "\r\n" .
"E-mail Address:" . " " . $_POST ["email"] . "\r\n" .
"Her parents are:" . $_POST["mfname"] . " " . $_POST["mlname"] . " and " . $_POST["ffname"] . " " . $_POST["flname"] . "\r\n" . 
"This information is information that she filled out on the web form. \r\n" . "Regards," . "\r\n" . 
"Brian" ;

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('music@stignatiuschurch.org', 'Quinceanera Date Request from the Website', $message);
?>

</body>
</html>
 	