<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Visitor Feedback</title>
<meta http-equiv="content-type"content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php

$Dir = "comments";
if (is_dir($Dir)) {
$CommentFiles = scandir($Dir);
foreach ($CommentFiles as $FileName) {
if (($FileName != ".") && ($FileName !=
"..")) {
echo "From <strong>$FileName</
strong><br />";
echo "<pre>\n";
$Comment = file_get_contents
($Dir . "/" .
$FileName);
echo $Comment;
echo "</pre>\n";
echo "<hr />\n";
}
}
}


?>

<h2>Visitor Feedback</h2>
<hr />

</form>

</body>
</html>