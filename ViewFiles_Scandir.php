<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>View Files</title>
<meta http-equiv="content-type"content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php

$Dir = "files";
$DirEntries = scandir($Dir);
foreach($DirEntries as $Entry){
	if ((strcmp($Entry,'.') != 0) && (strcmp($Entry, '..')!= 0))
		echo "<a href = \"files/" . $Entry . "\">". $Entry . "</a><br />\n";
}
closedir($DirOpen);

?>

</body>
</html>