<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Title Information</title>
<meta http-equiv="content-type"content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php

$StringText = "mAdAm, i'M aDaM.";

$UppercaseText = strtoupper($StartingText);
$LowercaseText = strtolower($StartingText);
echo "<p>$UppercaseText</p>\n";
echo "<p>$LowercaseText</p>\n";

echo "<p>" . ucfirst($LowercaseText) . "</p>\n";
echo "<p>" . lcfirst($UppercaseText) . "</p>\n";
$WorkingText = ucowrds($LowercaseText);
echo "<p>$WorkingText</p>\n";

echo "<p>" . md5($WorkingText) . "</p>\n";
echo "<p>" . substr($WorkingText,0,6) . "</p>\n";
echo "<p>" . substr($WorkingText,7) . "</p>\n";
echo "<p>" . strrev($WorkingText) . "</p>\n";
echo "<p>" . str_shuffle($WorkingText) . "</p>\n";


?>


</body>
</html>