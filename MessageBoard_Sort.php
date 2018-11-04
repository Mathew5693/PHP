<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Message Board</title>
<meta http-equiv="content-type"content="text/html; charset=iso-8859-1" />
</head>

<body>

<h1>Message Board</h1>
<?php

if (isset($_GET['action'])) {
	if ((file_exists("MessageBoard/messages.txt")) &&(filesize("MessageBoard/messages.txt") != 0)) {
		$MessageArray = file("MessageBoard/messages.txt");
		switch ($_GET['action']) {
		case 'Delete First':
		array_shift($MessageArray);
		break;
		case 'Delete Last':
		array_pop($MessageArray);
		break;
		ascending order.
		case 'Sort Ascending':
		sort($MessageArray);
		break;
		case 'Sort Descending':
		rsort($MessageArray);
		break;
	}
	if (count($MessageArray)>0) {
		$NewMessages = implode($MessageArray);
		$MessageStore = fopen("MessageBoard/messages.txt","wb");
			if ($MessageStore === false)
				echo "There was an error updating the message file\n";
			else {
				fwrite($MessageStore,$NewMessages);
				fclose($MessageStore);
			}
	
	}
		else
	unlink("MessageBoard/messages.txt");
	}
}

	if ((!file_exists("MessageBoard/messages.txt")) || (filesize("MessageBoard/messages.txt") == 0))
		echo "<p>There are no messages posted.</p>\n";
	else {
		$MessageArray = file("MessageBoard/messages.txt");

		echo "<table style=\"background-color:lightgray\" border=\"1\" width=\"100%\">\n";

		$count = count($MessageArray);
		
	for ($i = 0; $i < $count; ++$i) {
		$CurrMsg = explode("~",
		$MessageArray[$i]);
		$KeyMessageArray[$CurrMsg[0]] =
		$CurrMsg[1] . "~" . $CurrMsg[2];
		}
		
	$Index = 1;

	foreach($KeyMessageArray as $Message) {
		$CurrMsg = explode("~", $Message);
		echo "<tr>\n";
		echo "<td width=\"5%\" style=\"text-align:center\"><span style=\"font-weight:bold\">" . $Index . "</span></td>\n";
		echo "<td width=\"85%\"><span style=\"font-weight:bold\"> Subject:</span> " . htmlentities(key($KeyMessageArray)) . "<br />";
		echo "<span style=\"font-weight:bold\"> Name:</span> " . htmlentities($CurrMsg[0]) . "<br />";
		echo "<span style=\"text-decoration:underline; font-weight:bold\"> Message</span><br />\n" . htmlentities($CurrMsg[1]) . "</td>\n";
		echo "<td width=\"10%\" style=\"text-align:center\">" . "<a href='MessageBoard.php?" . "action=Delete%20Message&" . "message=" . ($Index - 1) . "'>Delete This Message</a>" . "</td>\n";
		echo "</table>\n";
		++$Index;
		next($KeyMessageArray);
	}
}


?>
<p>
<a href="PostMessage.php">Post New Message</a><br />
<a href="MessageBoard_Sort.php?action=Sort%20Ascending">Sort Subjects A-Z</a><br />
<a href="MessageBoard_Sort.php?action=Sort%20Descending">Sort Subjects A-Z</a><br />
<a href="MessageBoard.php?action=Delete%20First">Delete First Message</a><br />
<a href="MessageBoard.php?action=Delete%20Last">Delete Last Message</a>
</p>


</body>
</html>