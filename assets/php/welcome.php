<html>
<body>

Welcome 
<br><?php echo $_POST["firstname"]; ?>
<br><?php echo $_POST["middlename"]; ?>
<br><?php echo $_POST["lastname"]; ?>
<br><?php echo $_POST["address1"]; ?>
<br><?php echo $_POST["city"]; ?>
<br><?php echo $_POST["state"]; ?>
<br><?php echo $_POST["zip"]; ?>
<br><?php echo $_POST["email"]; ?>
<br><?php echo $_POST["gender"]; ?>


<?php
// The message
$message = "Welcome " . $_POST["firstname"] . ". You are "  . $_POST["gender"] . ".";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('annat@webitects.com', 'Test email from Welcome php', $message);
?>


</body>
</html>