<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Book and Authors</title>
<meta http-equiv="content-type"content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php

$Books = array("The Adventures of Huckleberry Finn", "Minteen Eighty-Four", "The Cat and the Hat");
$Authors = array("Mart Twain", "George Orwell", "Lewis Carrol", "Dr. Suess");
$RealNames = array("Samual Clemens", "Eric Blair", "Charles Dodson", "Theordor Geisel");
for ($i = 0; $i < count($Books); ++$i)
	echo "<p>The real name of {$Authors[$i]}, ". "the author of \"{$Books[$i]}\", ". "is {$RealNames[$i]}.</p>";

?>

</body>
</html>