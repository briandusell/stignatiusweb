<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>
<body>
<div class="formdata">
	<h3>Thank you for being a part of St. Ignatius parish!</h3>
	<h3>Your parish registration form responses are:</h3>
	<hr>
	
	<h3>Part One: General Information</h3>
	<h4>You would like to:</h4>
	<p><?php echo $_POST["regisaction"]; ?></p>
	<h4>Family Name</h4>
	<p><?php echo $_POST["familyname"]; ?></p>
	<h4>The number of people in your household is:</h4>
	<p><?php echo $_POST["householdcount"]; ?></p>
	<h4>Preferred mailing name for correspondence:</h4>
	<p><?php echo $_POST["mailingname"]; ?></p>
	<h4>Primary Language:</h4>
	<p><?php echo $_POST["primarylang"]; ?></p>
	<h4>Your Mailing Address Is</h4>
	<p><?php echo $_POST["streetaddress"]; ?><br/>
	<?php echo $_POST["aptsuite"]; ?><br/>
	<?php echo $_POST["city"]; ?> <?php echo $_POST["state"]; ?> <?php echo $_POST["zip"]; ?></p>
	<h4>Your Telephone and email addresses are:</h4>
	<p><?php echo $_POST["mphone"]; ?><br/>
	<?php echo $_POST["hphone"]; ?><br/>
	<?php echo $_POST["email"]; ?></p>
	<h4>Length of time you have been worshipping at St. Ignatius Parish:</h4>
	<p><?php echo $_POST["timeinparish"]; ?></p>
	<h4>You are involved in parish ministries?</h4> 
	<p><?php echo $_POST["1yesno"]; ?></p>
	<h4>The ministries in which you are involved:</h4> 
	<p><?php echo $_POST["ministrytype"]; ?></p>
	<h4>St. Ignatius parish may be of service to you in the following manner:
	<p><?php echo $_POST["parishneed"]; ?></p>
	<hr>
	
	<h3>Part Two: Head of Household Information</h3>
	<h4>Name:</h4>
	<p><?php echo $_POST["hhsurname"]; ?> <?php echo $_POST["hhfname"]; ?> <?php echo $_POST["hhmname"]; ?> <?php echo $_POST["hhlname"]; ?></p>
	<h4>Date of birth</h4>
	<p><?php echo $_POST["hhmonth"]; ?> <?php echo $_POST["hhday"]; ?> <?php echo $_POST["hhyear"]; ?></p>
	<h4>Country of Birth:</h4> 
	<p><?php echo $_POST["hhbcountry"]; ?></p>
	<h4>Primary Language:</h4>
	<p><?php echo $_POST["hhprimarylang"]; ?></p>	
	<h4>Marital Status:</h4>
	<p><?php echo $_POST["hhmaritalstatus"]; ?></p>	
	<h4>Religion:</h4>  
	<p><?php echo $_POST["hhreligion"]; ?></p>	
	<h4>Occupation:</h4> 
	<p><?php echo $_POST["hhoccupation"]; ?></p>	
	<h4>Telephone (Mobile):</h4>
	<p><?php echo $_POST["hhmphone"]; ?></p>	
	<h4>Telephone (Home):</h4>
	<p><?php echo $_POST["hhhphone"]; ?></p>	
	<h4>E-mail address:</h4> 
	<p><?php echo $_POST["hhemail"]; ?></p>	
	<h4>Sacraments Received:</h4>
	<h4>Baptism:</h4> 
	<p><?php echo $_POST["1hhyesno"]; ?></p>
	<h4>Communion:</h4> 
	<p><?php echo $_POST["2hhyesno"]; ?></p>
	<h4>Confirmation:</h4>   
	<p><?php echo $_POST["3hhyesno"]; ?></p>
	<hr>
	
	<h3>Part Three: Spouse Information</h3>
	<h4>Name:</h4>
	<p><?php echo $_POST["ssurname"]; ?> <?php echo $_POST["sfname"]; ?> <?php echo $_POST["smname"]; ?> <?php echo $_POST["slname"]; ?></p>
	<h4>Date of birth</h4>
	<p><?php echo $_POST["smonth"]; ?> <?php echo $_POST["sday"]; ?> <?php echo $_POST["syear"]; ?></p>
	<h4>Country of Birth:</h4> 
	<p><?php echo $_POST["sbcountry"]; ?></p>
	<h4>Primary Language:</h4>
	<p><?php echo $_POST["sprimarylang"]; ?></p>	
	<h4>Marital Status:</h4>
	<p><?php echo $_POST["smaritalstatus"]; ?></p>	
	<h4>Religion:</h4>  
	<p><?php echo $_POST["sreligion"]; ?></p>	
	<h4>Occupation:</h4> 
	<p><?php echo $_POST["soccupation"]; ?></p>	
	<h4>Telephone (Mobile):</h4>
	<p><?php echo $_POST["smphone"]; ?></p>	
	<h4>Telephone (Home):</h4>
	<p><?php echo $_POST["shphone"]; ?></p>	
	<h4>E-mail address:</h4> 
	<p><?php echo $_POST["semail"]; ?></p>	
	<h4>Sacraments Received:</h4>
	<h4>Baptism:</h4> 
	<p><?php echo $_POST["1syesno"]; ?></p>
	<h4>Communion:</h4> 
	<p><?php echo $_POST["2syesno"]; ?></p>
	<h4>Confirmation:</h4>   
	<p><?php echo $_POST["3syesno"]; ?></p>
	<hr>
	
	<h3>Part Four: Additional Household Member Information</h3>
	
	<h3>First Member</h3>
	<h4>Relationship to Head of Household</h4>
	<p><?php echo $_POST["1amrelationship"]; ?></p>
	<h4>Name:</h4>
	<p><?php echo $_POST["1amfname"]; ?> <?php echo $_POST["1ammname"]; ?> <?php echo $_POST["1amlname"]; ?></p>
	<h4>Date of birth</h4>
	<p><?php echo $_POST["1ammonth"]; ?> <?php echo $_POST["1amday"]; ?> <?php echo $_POST["1amyear"]; ?></p>
	<h4>Country of Birth:</h4> 
	<p><?php echo $_POST["1ambcountry"]; ?></p>
	<h4>Primary Language:</h4>
	<p><?php echo $_POST["1amprimarylang"]; ?></p>	
	<h4>Sacraments Received:</h4>
	<h4>Baptism:</h4> 
	<p><?php echo $_POST["11amyesno"]; ?></p>
	<h4>Communion:</h4> 
	<p><?php echo $_POST["21amyesno"]; ?></p>
	<h4>Confirmation:</h4>   
	<p><?php echo $_POST["31amyesno"]; ?></p>
	<hr>
	<h3>Second Member</h3>
	<h4>Relationship to Head of Household</h4>
	<p><?php echo $_POST["2amrelationship"]; ?></p>
	<h4>Name:</h4>
	<p><?php echo $_POST["2amfname"]; ?> <?php echo $_POST["2ammname"]; ?> <?php echo $_POST["2amlname"]; ?></p>
	<h4>Date of birth</h4>
	<p><?php echo $_POST["2ammonth"]; ?> <?php echo $_POST["2amday"]; ?> <?php echo $_POST["2amyear"]; ?></p>
	<h4>Country of Birth:</h4> 
	<p><?php echo $_POST["2ambcountry"]; ?></p>
	<h4>Primary Language:</h4>
	<p><?php echo $_POST["2amprimarylang"]; ?></p>	
	<h4>Sacraments Received:</h4>
	<h4>Baptism:</h4> 
	<p><?php echo $_POST["12amyesno"]; ?></p>
	<h4>Communion:</h4> 
	<p><?php echo $_POST["22amyesno"]; ?></p>
	<h4>Confirmation:</h4>   
	<p><?php echo $_POST["32amyesno"]; ?></p>
	<hr>
	<h3>Third Member</h3>
	<h4>Relationship to Head of Household</h4>
	<p><?php echo $_POST["3amrelationship"]; ?></p>
	<h4>Name:</h4>
	<p><?php echo $_POST["3amfname"]; ?> <?php echo $_POST["3ammname"]; ?> <?php echo $_POST["3amlname"]; ?></p>
	<h4>Date of birth</h4>
	<p><?php echo $_POST["3ammonth"]; ?> <?php echo $_POST["3amday"]; ?> <?php echo $_POST["3amyear"]; ?></p>
	<h4>Country of Birth:</h4> 
	<p><?php echo $_POST["3ambcountry"]; ?></p>
	<h4>Primary Language:</h4>
	<p><?php echo $_POST["3amprimarylang"]; ?></p>	
	<h4>Sacraments Received:</h4>
	<h4>Baptism:</h4> 
	<p><?php echo $_POST["13amyesno"]; ?></p>
	<h4>Communion:</h4> 
	<p><?php echo $_POST["23amyesno"]; ?></p>
	<h4>Confirmation:</h4>   
	<p><?php echo $_POST["33amyesno"]; ?></p>
	<hr>
	<h3>Fourth Member</h3>
	<h4>Relationship to Head of Household</h4>
	<p><?php echo $_POST["4amrelationship"]; ?></p>
	<h4>Name:</h4>
	<p><?php echo $_POST["4amfname"]; ?> <?php echo $_POST["4ammname"]; ?> <?php echo $_POST["4amlname"]; ?></p>
	<h4>Date of birth</h4>
	<p><?php echo $_POST["4ammonth"]; ?> <?php echo $_POST["4amday"]; ?> <?php echo $_POST["4amyear"]; ?></p>
	<h4>Country of Birth:</h4> 
	<p><?php echo $_POST["4ambcountry"]; ?></p>
	<h4>Primary Language:</h4>
	<p><?php echo $_POST["4amprimarylang"]; ?></p>	
	<h4>Sacraments Received:</h4>
	<h4>Baptism:</h4> 
	<p><?php echo $_POST["14amyesno"]; ?></p>
	<h4>Communion:</h4> 
	<p><?php echo $_POST["24amyesno"]; ?></p>
	<h4>Confirmation:</h4>   
	<p><?php echo $_POST["34amyesno"]; ?></p>
	<hr>
	<h3>Fifth Member</h3>
	<h4>Relationship to Head of Household</h4>
	<p><?php echo $_POST["5amrelationship"]; ?></p>
	<h4>Name:</h4>
	<p><?php echo $_POST["5amfname"]; ?> <?php echo $_POST["5ammname"]; ?> <?php echo $_POST["5amlname"]; ?></p>
	<h4>Date of birth</h4>
	<p><?php echo $_POST["5ammonth"]; ?> <?php echo $_POST["5amday"]; ?> <?php echo $_POST["5amyear"]; ?></p>
	<h4>Country of Birth:</h4> 
	<p><?php echo $_POST["5ambcountry"]; ?></p>
	<h4>Primary Language:</h4>
	<p><?php echo $_POST["5amprimarylang"]; ?></p>	
	<h4>Sacraments Received:</h4>
	<h4>Baptism:</h4> 
	<p><?php echo $_POST["15amyesno"]; ?></p>
	<h4>Communion:</h4> 
	<p><?php echo $_POST["25amyesno"]; ?></p>
	<h4>Confirmation:</h4>   
	<p><?php echo $_POST["35amyesno"]; ?></p>
	<hr>
	<h3>Sixth Member</h3>
	<h4>Relationship to Head of Household</h4>
	<p><?php echo $_POST["5amrelationship"]; ?></p>
	<h4>Name:</h4>
	<p><?php echo $_POST["6amfname"]; ?> <?php echo $_POST["6ammname"]; ?> <?php echo $_POST["6amlname"]; ?></p>
	<h4>Date of birth</h4>
	<p><?php echo $_POST["6ammonth"]; ?> <?php echo $_POST["6amday"]; ?> <?php echo $_POST["6amyear"]; ?></p>
	<h4>Country of Birth:</h4> 
	<p><?php echo $_POST["6ambcountry"]; ?></p>
	<h4>Primary Language:</h4>
	<p><?php echo $_POST["6amprimarylang"]; ?></p>	
	<h4>Sacraments Received:</h4>
	<h4>Baptism:</h4> 
	<p><?php echo $_POST["16amyesno"]; ?></p>
	<h4>Communion:</h4> 
	<p><?php echo $_POST["26amyesno"]; ?></p>
	<h4>Confirmation:</h4>   
	<p><?php echo $_POST["36amyesno"]; ?></p>
	<hr>
	<h3>Seventh Member</h3>
	<h4>Relationship to Head of Household</h4>
	<p><?php echo $_POST["7amrelationship"]; ?></p>
	<h4>Name:</h4>
	<p><?php echo $_POST["7amfname"]; ?> <?php echo $_POST["7ammname"]; ?> <?php echo $_POST["7amlname"]; ?></p>
	<h4>Date of birth</h4>
	<p><?php echo $_POST["7ammonth"]; ?> <?php echo $_POST["7amday"]; ?> <?php echo $_POST["7amyear"]; ?></p>
	<h4>Country of Birth:</h4> 
	<p><?php echo $_POST["7ambcountry"]; ?></p>
	<h4>Primary Language:</h4>
	<p><?php echo $_POST["7amprimarylang"]; ?></p>	
	<h4>Sacraments Received:</h4>
	<h4>Baptism:</h4> 
	<p><?php echo $_POST["17amyesno"]; ?></p>
	<h4>Communion:</h4> 
	<p><?php echo $_POST["27amyesno"]; ?></p>
	<h4>Confirmation:</h4>   
	<p><?php echo $_POST["37amyesno"]; ?></p>
	<hr>
	<h3>Eighth Member</h3>
	<h4>Relationship to Head of Household</h4>
	<p><?php echo $_POST["8amrelationship"]; ?></p>
	<h4>Name:</h4>
	<p><?php echo $_POST["8amfname"]; ?> <?php echo $_POST["8ammname"]; ?> <?php echo $_POST["8amlname"]; ?></p>
	<h4>Date of birth</h4>
	<p><?php echo $_POST["8ammonth"]; ?> <?php echo $_POST["8amday"]; ?> <?php echo $_POST["8amyear"]; ?></p>
	<h4>Country of Birth:</h4> 
	<p><?php echo $_POST["8ambcountry"]; ?></p>
	<h4>Primary Language:</h4>
	<p><?php echo $_POST["8amprimarylang"]; ?></p>	
	<h4>Sacraments Received:</h4>
	<h4>Baptism:</h4> 
	<p><?php echo $_POST["18amyesno"]; ?></p>
	<h4>Communion:</h4> 
	<p><?php echo $_POST["28amyesno"]; ?></p>
	<h4>Confirmation:</h4>   
	<p><?php echo $_POST["38amyesno"]; ?></p>
	
<?php
// The message

$message = "Dear St. Ignatius Staff," . "\r\n" . 
$_POST["hhsurname"] . " " . $_POST["hhfname"] . " " . $_POST["hhmname"] . " " . $_POST["hhlname"] . "\r\n" . 
"has filled out the Parish Registration form on the St. Ignatius website and would like to have the following action taken regarding their parish registration" . "\r\n" . $_POST["regisaction"] . "\r\n" . 
"Here is their information as they entered it on the site." . "\r\n" . "\r\n" . 

"PART ONE: GENERAL INFORMATION". "\r\n" . 
"Registration action:" . " " . $_POST["regisaction"] . "\r\n" . 
"Family Name:" . " " . $_POST ["familyname"] . "\r\n" . 
"Number of people in household:" . " " . $_POST ["householdcount"] . "\r\n" . 
"Mailing Name:" . " " . $_POST ["mailingname"] . "\r\n" . 
"Primary Language:" . " " . $_POST ["primarylang"] . "\r\n" . 
"Street Address:" . " " . $_POST ["streetaddress"] . "\r\n" . 
"Apt. or Suite:" . " " . $_POST ["aptsuite"] . "\r\n" . 
"City:" . " " . $_POST ["city"] . " " . "State:" . " " . $_POST ["state"] . " " . "Zip:" . " " . $_POST ["zip"] . "\r\n" . 
"Telephone (mobile):" . " " . $_POST ["mphone"] . "\r\n" . 
"Telephone (home):" . " " . $_POST ["hphone"] . "\r\n" . 
"Email:" . " " . $_POST ["email"] . "\r\n" . 
"Worshipping at St. Ignatius parish for:" . " " . $_POST ["timeinparish"] . "\r\n" . 
"Involved in parish ministries?:" . " " . $_POST ["1yesno"] . "\r\n" . 
"Ministries in which they are involved:" . " " . $_POST ["ministrytype"] . "\r\n" . 
"The parish may assist this registrant in the following manner:" . " " . $_POST ["parishneed"] . "\r\n" . "\r\n" . 

"PART TWO: HEAD OF HOUSEHOLD INFORMATION" . "\r\n" . 
"Name:" . " " . $_POST ["hhsurname"] . " " . $_POST ["hhfname"] . " " . $_POST ["hhmname"] . " " . $_POST ["hhlname"] . "\r\n" . 
"Date of Birth:" . " " . $_POST ["hhmonth"] . " " . $_POST ["hhday"] . " " . $_POST ["hhyear"] . "\r\n" . 
"Country of Birth:" . " " . $_POST ["hhbcountry"] . "\r\n" . 
"Primary Language:" . " " . $_POST ["hhprimarylang"] . "\r\n" . 
"Marital Status:" . " " . $_POST ["hhmaritalstatus"] . "\r\n" . 
"Religion:" . " " . $_POST ["hhreligion"] . "\r\n" . 
"Occupation:" . " " . $_POST ["hhoccupation"] . "\r\n" . 
"Telephone (mobile):" . " " . $_POST ["hhmphone"] . "\r\n" . 
"Telephone (home):" . " " . $_POST ["hhhphone"] . "\r\n" . 
"Email:" . " " . $_POST ["hhemail"] . "\r\n" . 
"Sacraments received:" . "\r\n" . 
"Baptism:" . " " . $_POST ["1hhyesno"] . "\r\n" . 
"Holy Communion:" . " " . $_POST ["2hhyesno"] . "\r\n" . 
"Confirmation:" . " " . $_POST ["3hhyesno"] . "\r\n" . "\r\n" . 

"PART THREE: SPOUSE INFORMATION" . "\r\n" . 
"Name:" . " " . $_POST ["ssurname"] . " " . $_POST ["sfname"] . " " . $_POST ["smname"] . " " . $_POST ["slname"] . "\r\n" . 
"Date of Birth:" . " " . $_POST ["smonth"] . " " . $_POST ["sday"] . " " . $_POST ["syear"] . "\r\n" . 
"Country of Birth:" . " " . $_POST ["sbcountry"] . "\r\n" . 
"Primary Language:" . " " . $_POST ["sprimarylang"] . "\r\n" . 
"Marital Status:" . " " . $_POST ["smaritalstatus"] . "\r\n" . 
"Religion:" . " " . $_POST ["sreligion"] . "\r\n" . 
"Occupation:" . " " . $_POST ["soccupation"] . "\r\n" . 
"Telephone (mobile):" . " " . $_POST ["smphone"] . "\r\n" . 
"Telephone (home):" . " " . $_POST ["shphone"] . "\r\n" . 
"Email:" . " " . $_POST ["semail"] . "\r\n" . 
"Sacraments received:" . "\r\n" . 
"Baptism:" . " " . $_POST ["1syesno"] . "\r\n" . 
"Holy Communion:" . " " . $_POST ["2syesno"] . "\r\n" . 
"Confirmation:" . " " . $_POST ["3syesno"] . "\r\n" . "\r\n" . 
	
"PART FOUR:ADDITIONAL MEMBER INFORMATION" . "\r\n" . 
"First Member" . "\r\n" .
"Relationship to Head of Household" . " " . $_POST ["1amrelationship"] . "\r\n" .
"Name:" . " " . $_POST ["1amfname"] . " " . $_POST ["1ammname"] . " " . $_POST ["1amlname"] . "\r\n" . 
"Date of Birth:" . " " . $_POST ["1ammonth"] . " " . $_POST ["1amday"] . " " . $_POST ["1amyear"] . "\r\n" . 
"Country of Birth:" . " " . $_POST ["1ambcountry"] . "\r\n" . 
"Primary Language:" . " " . $_POST ["1amprimarylang"] . "\r\n" . 
"Sacraments received:" . "\r\n" . 
"Baptism:" . " " . $_POST ["11amyesno"] . "\r\n" . 
"Holy Communion:" . " " . $_POST ["21amyesno"] . "\r\n" . 
"Confirmation:" . " " . $_POST ["31amyesno"] . "\r\n" . "\r\n" . 

"Second Member" . "\r\n" .
"Relationship to Head of Household" . " " . $_POST ["2amrelationship"] . "\r\n" .
"Name:" . " " . $_POST ["2amfname"] . " " . $_POST ["2ammname"] . " " . $_POST ["2amlname"] . "\r\n" . 
"Date of Birth:" . " " . $_POST ["2ammonth"] . " " . $_POST ["2amday"] . " " . $_POST ["2amyear"] . "\r\n" . 
"Country of Birth:" . " " . $_POST ["2ambcountry"] . "\r\n" . 
"Primary Language:" . " " . $_POST ["2amprimarylang"] . "\r\n" . 
"Sacraments received:" . "\r\n" . 
"Baptism:" . " " . $_POST ["12amyesno"] . "\r\n" . 
"Holy Communion:" . " " . $_POST ["22amyesno"] . "\r\n" . 
"Confirmation:" . " " . $_POST ["32amyesno"] . "\r\n" . "\r\n" . 

"Third Member" . "\r\n" .
"Relationship to Head of Household" . " " . $_POST ["3amrelationship"] . "\r\n" .
"Name:" . " " . $_POST ["3amfname"] . " " . $_POST ["3ammname"] . " " . $_POST ["3amlname"] . "\r\n" . 
"Date of Birth:" . " " . $_POST ["3ammonth"] . " " . $_POST ["3amday"] . " " . $_POST ["3amyear"] . "\r\n" . 
"Country of Birth:" . " " . $_POST ["3ambcountry"] . "\r\n" . 
"Primary Language:" . " " . $_POST ["3amprimarylang"] . "\r\n" . 
"Sacraments received:" . "\r\n" . 
"Baptism:" . " " . $_POST ["13amyesno"] . "\r\n" . 
"Holy Communion:" . " " . $_POST ["23amyesno"] . "\r\n" . 
"Confirmation:" . " " . $_POST ["33amyesno"] . "\r\n" . "\r\n" . 

"Fourth Member" . "\r\n" .
"Relationship to Head of Household" . " " . $_POST ["4amrelationship"] . "\r\n" .
"Name:" . " " . $_POST ["4amfname"] . " " . $_POST ["4ammname"] . " " . $_POST ["4amlname"] . "\r\n" . 
"Date of Birth:" . " " . $_POST ["4ammonth"] . " " . $_POST ["4amday"] . " " . $_POST ["4amyear"] . "\r\n" . 
"Country of Birth:" . " " . $_POST ["4ambcountry"] . "\r\n" . 
"Primary Language:" . " " . $_POST ["4amprimarylang"] . "\r\n" . 
"Sacraments received:" . "\r\n" . 
"Baptism:" . " " . $_POST ["14amyesno"] . "\r\n" . 
"Holy Communion:" . " " . $_POST ["24amyesno"] . "\r\n" . 
"Confirmation:" . " " . $_POST ["34amyesno"] . "\r\n" . "\r\n" . 

"Fifth Member" . "\r\n" .
"Relationship to Head of Household" . " " . $_POST ["5amrelationship"] . "\r\n" .
"Name:" . " " . $_POST ["5amfname"] . " " . $_POST ["5ammname"] . " " . $_POST ["5amlname"] . "\r\n" . 
"Date of Birth:" . " " . $_POST ["5ammonth"] . " " . $_POST ["5amday"] . " " . $_POST ["5amyear"] . "\r\n" . 
"Country of Birth:" . " " . $_POST ["5ambcountry"] . "\r\n" . 
"Primary Language:" . " " . $_POST ["5amprimarylang"] . "\r\n" . 
"Sacraments received:" . "\r\n" . 
"Baptism:" . " " . $_POST ["15amyesno"] . "\r\n" . 
"Holy Communion:" . " " . $_POST ["25amyesno"] . "\r\n" . 
"Confirmation:" . " " . $_POST ["35amyesno"] . "\r\n" . "\r\n" . 

"Sixth Member" . "\r\n" .
"Relationship to Head of Household" . " " . $_POST ["6amrelationship"] . "\r\n" .
"Name:" . " " . $_POST ["6amfname"] . " " . $_POST ["6ammname"] . " " . $_POST ["6amlname"] . "\r\n" . 
"Date of Birth:" . " " . $_POST ["6ammonth"] . " " . $_POST ["6amday"] . " " . $_POST ["6amyear"] . "\r\n" . 
"Country of Birth:" . " " . $_POST ["6ambcountry"] . "\r\n" . 
"Primary Language:" . " " . $_POST ["6amprimarylang"] . "\r\n" . 
"Sacraments received:" . "\r\n" . 
"Baptism:" . " " . $_POST ["16amyesno"] . "\r\n" . 
"Holy Communion:" . " " . $_POST ["26amyesno"] . "\r\n" . 
"Confirmation:" . " " . $_POST ["36amyesno"] . "\r\n" . "\r\n" . 

"Seventh Member" . "\r\n" .
"Relationship to Head of Household" . " " . $_POST ["7amrelationship"] . "\r\n" .
"Name:" . " " . $_POST ["7amfname"] . " " . $_POST ["7ammname"] . " " . $_POST ["7amlname"] . "\r\n" . 
"Date of Birth:" . " " . $_POST ["7ammonth"] . " " . $_POST ["7amday"] . " " . $_POST ["7amyear"] . "\r\n" . 
"Country of Birth:" . " " . $_POST ["7ambcountry"] . "\r\n" . 
"Primary Language:" . " " . $_POST ["7amprimarylang"] . "\r\n" . 
"Sacraments received:" . "\r\n" . 
"Baptism:" . " " . $_POST ["17amyesno"] . "\r\n" . 
"Holy Communion:" . " " . $_POST ["27amyesno"] . "\r\n" . 
"Confirmation:" . " " . $_POST ["37amyesno"] . "\r\n" . "\r\n" . 

"Eighth Member" . "\r\n" .
"Relationship to Head of Household" . " " . $_POST ["8amrelationship"] . "\r\n" .
"Name:" . " " . $_POST ["8amfname"] . " " . $_POST ["8ammname"] . " " . $_POST ["8amlname"] . "\r\n" . 
"Date of Birth:" . " " . $_POST ["8ammonth"] . " " . $_POST ["8amday"] . " " . $_POST ["8amyear"] . "\r\n" . 
"Country of Birth:" . " " . $_POST ["8ambcountry"] . "\r\n" . 
"Primary Language:" . " " . $_POST ["8amprimarylang"] . "\r\n" . 
"Sacraments received:" . "\r\n" . 
"Baptism:" . " " . $_POST ["18amyesno"] . "\r\n" . 
"Holy Communion:" . " " . $_POST ["28amyesno"] . "\r\n" . 
"Confirmation:" . " " . $_POST ["38amyesno"] . "\r\n" . "\r\n" . 

"This information was filled out on the form located in the St. Ignatius parish registration page." ;

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('music@stignatiuschurch.org', 'Parish Registration form submitted from the St. Ignatius website', $message);
?>

</body>
</html>
 	