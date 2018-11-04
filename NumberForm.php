<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Number form</title>
<meta http-equiv="content-type"content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php

$DisplayForm = TRUE;
$Number = "";

if (isset($_POST['Submit'])) {
	$Number = $_POST['Number'];
	if(is_numeric($Number)){
		$DisplayForm = FALSE;
	}else
	{
		echo "<p>You need to enter a numeric value.</p>\n";
		$DisplayForm = TRUE;
	}
	
}

if($DisplayForm){
?>
	<form name="NumberForm" action="NumberForm.php" method="post">
	<p>Enter a Number:<input type= "text" name="Number" value="<?php echo $Number; ?>" /></p>
	<p><input type="submit" name="Submit" value="Send Form" /></p>
	</form>
<?php
		
}


?>

</body>
</html>