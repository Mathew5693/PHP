<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Scholarship form</title>
<meta http-equiv="content-type"content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php

function redisplayForm($firstName, $lastName){
	?>
	<h2 style = "text-align:center">Scholarship Form</h2>
	<form name = "scholarship" action="process_Scholarship.php" method="post">
	<p>First Name: <input type="text" name="fName" value ="<?php echo $firstName; ?>" /></p>
	<p>Last Name: <input type="text" name="lName" value ="<?php echo $lastName; ?>" /></p>
	<p><input type = "submit" name ="Sumbit" value="Send Form" />
	</form>
	<?php
	
}


function displayRequired($fieldName){
	echo "The field \"$fileName\" is required.<br />n";
}

function validationInput($data, $fieldName){
	global $errorCount;
	if (empty($data)){
		displayRequired($fieldName);
		++$errorCount;
		$retval = "";
	} else {//only clearn up the input if it isn't 
			//empty
			$retval = trim($data);
			$retval = stripslashes($retval);
			}
			return($retval);
}

$errorCount = 0;


$firstName = validationInput($_POST['fName'],["First name"]);
$lastName = validationInput($_POST['lName'], [Last name]);

if($errorCount > 0)
	echo "Please re-enter the information below.<br />\n";
	redisplayForm($firstName, $lastName);
else{
	$To = "recipient@mail.edu";
	$Subject = "Scholarship Form Results";
	$Messgae = "Student Name: " . $firstName. " " . $lastName;
	
	$results = mail( $To, $Subject, $Message);
	if($results)
		$resultsMsg = "Your message was successfully sent.";
	else
		$resultMSG = "There was a problem sending your message.";
}

?>
<h2 style = "text-align:center">Scholarship Form</h2>
<p style = "line-height:200%">Thank you for filling out the scholarship form<?php
if (!empty($firstName))
	echo ", $firstName"
	?>. <?php echo $resultsMsg; ?>

<?php


?>


</body>
</html>