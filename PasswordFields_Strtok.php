<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Title Information</title>
<meta http-equiv="content-type"content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php

$Record = "jdoe:8w4dS03a39Yk2:1463:24:JohnDoe:/home/jdoe:/bin/bash";
$PasswordFields = array("login name", "optional encrypted password", "numerical user ID", "numerical group ID","user name or comment field","user home directory","optional user command interpreter");

$FieldIndex = 0;
$ExtraFields = 0;
$CurrField = strtok($Record, ":");
while ($CurrField != NULL){
	
	if ($FieldIndex < count($PasswordFields))
		echo "<p>The {$PasswordFields[$FieldIndex]} is <em>$CurrField</em></p>\n";
	else {
		
		++$ExtraFields;
		echo "<p>Extra Fields # $ExtraFields is <em>$CurrField</em></p>\n";
		
	}
	$CurrField = strtok(":");
	++$FieldIndex;
}



?>


</body>
</html>