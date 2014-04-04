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
$message = <<<EMAIL
$_POST[fname] $_POST[lname] has sent a request for a quinceañera.

First name: $_POST[fname]
Middle name: $_POST[mname]
Last name: $_POST[lname]

Telephone number: $POST[telephone]

EMAIL;

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('music@stignatiuschurch.org', 'Information email from quinceanera.php', $message);
?>


</body>
</html>
