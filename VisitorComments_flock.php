<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Visitor Comments</title>
<meta http-equiv="content-type"content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php

$fp = fopen($SaveFileName,"wb");
if ($fp === FALSE) {
echo "There was an error creating \"" .
htmlentities($SaveFileName) . "\".<br />\n";
}
else {
if (fwrite($fp, $SaveString)>0)
echo "Successfully wrote to file \"" .
htmlentities($SaveFileName) .
"\".<br />\n";
else
echo "There was an error writing to file \""
. htmlentities($SaveFileName) .
"\".<br />\n";
fclose($fp);
}

/* File name is " Comment.seconds.
microseconds.txt" */
$fp = fopen($SaveFileName,"wb");
if ($fp === FALSE) {
echo "There was an error creating \"" .
htmlentities($SaveFileName) .
"\".<br/>\n";
}
else {
if (flock($fp, LOCK_EX)){
if (fwrite($fp, $SaveString)>0)
echo "Successfully wrote to
file \"" .
htmlentities(
$SaveFileName) .
"\".<br />\n";
else
echo "There was an error
writing to
file \"" .
htmlentities(
$SaveFileName) .
"\".<br />\n";
flock($fp, LOCK_UN);
}
else {
echo "There was an " .
"error locking file \"" .
htmlentities(
$SaveFileName) .
" for writing\"." .
"<br />\n";
}
fclose($fp);
}


?>

<h2>Visitor Comments</h2>
<form action="VisitorComments.php" method="POST">
Your name: <input type="text" name="name" /><br />
Your email: <input type="text" name="email" /><br />
<textarea name="comment" rows="6" cols="100"></textarea><br />
<input type="submit" name="save" value="Submit your comment" /><br />
</form>

</body>
</html>