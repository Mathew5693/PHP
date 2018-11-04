<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Two Funtions</title>
<meta http-equiv="content-type"content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php

function displayMessage($FirstMessage){
	
	echo "<p>$FirstMessage</p>";
	
}



function returnMessage(){
	
	return "<p>This message was returned from a funtion.</p>";
}

displayMessage("This message was displayed from a funtion.");
$ReturnValue = returnMessage();
echo $ReturnValue;

?>

</body>





</body>
</html>