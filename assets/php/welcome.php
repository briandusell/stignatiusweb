<html>
<body>

<p>Welcome 
<br><?php echo $_POST["cfname"]; ?> <?php echo $_POST["cmname"]; ?> <?php echo $_POST["clname"]; ?>
<br><?php echo $_POST["streetaddress"]; ?>
<br><?php echo $_POST["aptsuite"]; ?>
<br><?php echo $_POST["city"]; ?> <?php echo $_POST["state"]; ?> <?php echo $_POST["zip"]; ?>
<br><?php echo $_POST["email"]; ?>
<br><?php echo $_POST["telephone"]; ?>
</p>
<p>Are you registered at St. Ignatius Parish</p>
<?php echo $_POST["1yesno"]; ?>

<?php
// The message
$message = "Dear Mercedes, My name is " . $_POST["cfname"]  . $_POST["clname"] . " and I would like to register as a parishioner of St. Ignatius Church. " .  
"My address is " . $_POST["streetaddress"] .  $_POST["aptsuite"] .  $_POST["city"] .  $_POST["state"] .  $_POST["zip"] . " . You may contact me via telephone: " . 
$_POST["telephone"] . " or e-mail: " . $_POST["email"] . ". Thank you so much for your kind help with this. Best Regards, " . $_POST["cfname"] .  $_POST[" clname"] ;

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('music@stignatiuschurch.org', 'Test email from Welcome php', $message);
?>

</body>
</html>