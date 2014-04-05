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
<?php echo $_POST["month"]; ?> <?php echo $_POST["day"]; ?> <?php echo $_POST["year"]; ?>
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

$message = "Dear Mercedes, " . $_POST["cfname"] . " " . $_POST["clname"] . " has sent a request for a Quinceañera. 
Her requested date for the Quinceañera is: 
Her information is:  First name: " . $_POST["cfname"] . " " . "Middle name: " . $_POST["cmname"] . " " . "Last name: " . $_POST["clname"] .

"She is registered?" . " " . $_POST["1yesno"] .
"She is baptized?" . " " . $_POST["2yesno"] .
"She has had first communion?" . " " . $_POST ["3yesno"] .
"She has been confirmed?" . " " . $_POST["4yesno"] .

"Her mailing address is:" . " " .
$_POST["streetaddress"] . " " .
$_POST["aptsuite"] . " " .
$_POST["city"] . " " . $_POST["state"] . " " . $_POST["zip"] . " " .

"Telephone number:" . " " . $_POST["telephone"] .
"E-mail Address:" . " " . $_POST ["email"] .

"Her parents are:" . $_POST["mfname"] . " " . $_POST["mlname"] . "and" . $_POST["ffname"] . " " . $_POST["flname"] . "This information is information that she filled out on the web form." ;

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('music@stignatiuschurch.org', 'Information email from quinceanera.php', $message);
?>

</body>
</html>
 	