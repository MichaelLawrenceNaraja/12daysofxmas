<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Comptaible" content="IE=Edge">
	<title>12 Days of Xmas</title>
</head>
<body>
	<h1>12 Days of Christmas</h1>
	<?php
	$gift = ["a partridge in a pear tree", "2 turtle doves", "3 french hens", "4 calling birds", "5 golden rings", "6 geese are layings", "7 swans a swimming", "8 maids a milking", "9 ladies dancing", "10 lords a leaping", "11 pipers piping", "12 drummers drumming"];

	for ($row = 0; $row < 12; $row ++) {
		switch ($row) {
			case '0':
				echo "On the ". ($row + 1) ."st day of christmas my true love sent to me:";
				break;
			case '1':
				echo "On the ". ($row + 1) ."nd day of christmas my true love sent to me:";
				break;
			case '2':
				echo "On the ". ($row + 1) ."rd day of christmas my true love sent to me:";
				break;
			default:
				echo "On the " . ($row + 1) ."th day of christmas my true love sent to me:";
		}
		echo "<br>";
		for ($col = $row; $col >= 0	; $col--) {
			if ($row == 0) {
				echo $gift[$col] . "<br>";
			}
			else if ($col == 0) {
				echo "and " . $gift[$col] . "<br>";
			}
			else {
				echo $gift[$col] . "<br>";
			}
			/*OR
			if ($row > 0 && $col ==0) {
				echo "and " . $gift[$col] . "<br>";
			}
			else {
				echo $gift[$col] . "<br>";
			}
			*/
		}
		echo '<br>';
	}
	?>
</body>
</html>