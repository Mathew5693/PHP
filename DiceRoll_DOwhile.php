<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Two Funtions</title>
<meta http-equiv="content-type"content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php

$FaceNameSingular = array("one","two","three","four","five","six");
$FaceNamePlural = array("ones","twos","threes","fours","fives","sixes");

function CheckForDoubles($Die1, $Die2){
	
	global $FaceNameSingular;
	global $FaceNamePlural;
	$ReturnValue = False;
	
	if ($Die1 == $Die2){
		echo "The roll was double ",
			$FaceNamePlural[$Die1 - 1], ".<br />";
		$ReturnValue = true;
	}
	else {
		echo "The roll was a ",
			$FaceNameSingular[$Die1 - 1],
			" and a ", $FaceNameSingular[$Die2-1],
			".<br />";
		$ReturnValue = False;
	}
	return $ReturnValue;
}

function DisplayScoreText($Score, $Doubles){
	
	if($Doubles){
		if($Score == 2)
			echo "You rolled a snake eyes!<br />";
		if($Score == 12)
			echo "You rolled a boxcars!<br />";
	}
	else{
		if($Score == 3)
			echo "You rolled a loose deuce!<br />";
		if($Score == 5)
			echo "You rolled a fever five!<br />";
		if($Score == 7)
			echo "You rolled a natural!<br />";
		if($Score == 9)
			echo "You rolled a nina!<br />";
		if($Score == 11)
			echo "You rolled a yo!<br />";
		
}
}

$Dice = array();
$DoublesCount = 0;
$RollNumber = 1;
do {
$Dice[0] = rand(1,6);
$Dice[1] = rand(1,6);
$Score = $Dice[0] + $Dice[1];
echo "<p>";
echo "The total score for roll $RollNumber was
	$Score.<br />";


$Doubles = CheckForDoubles($Dice[0],$Dice[1]);
DisplayScoreText($Score, $Doubles);
echo "<p>";
if ($Doubles)
	++$DoublesCount;
++$RollNumber;
} while ($RollNumber <= 5);
echo "<p>Doubles occured on $DoublesCount of the five rolls.</p>";

?>

</body>





</body>
</html>