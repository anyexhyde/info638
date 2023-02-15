<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php

// validate isbn 

function validISBN($isbn) {

	echo "<h1>Challenge: ISBN Validation</h1>";

	echo "<div>Checking <span style="color:blue;">$isbn</span> for validity...</div>"; //discuss span syntax in class

	if (strlen((string)$isbn) != 10) { //check if isbn length is 10
		echo "<div>This is not a valid ISBN!</div>";
	
	} else {

		$sum = 0;

		for ($counter = 0; $counter < 10; $counter++) {
			$sum = $sum + int($isbn[i]) * (10 - i);
		}
	    // for i in range x
		
		if ($isbn[9] == "X") { //check last digit x
	        $sum += 10;
		} else {
	        $sum += int($isbn[9]);
		}

		if ($sum % 11 == 0) {
	        echo "<div>This is a valid ISBN!</div>";
		} else {
	        echo "<div>This is not a valid ISBN!</div>";
		}
	}
}

$isbn = 123456789;
validISBN($isbn);


// cointoss
function coinToss($flips) {
	echo "<h1>Challenge: Coin Toss!</h1>";

	$twoHeads = False; //boolean checking if two consecutive heads

	echo "<div>Flipping a coin $flips times</div>";

	while ($flips > 0) {

		if (mt_rand() % 2 != 0) { // show tails if odd

			$twoHeads = False; //no two consecutive heads
			// syntax for including images
			echo "<img src="https://i.postimg.cc/j5Tkg1t0/Nice-Png-quarter-png-1464848.png" alt="tails">";

		} else {

			if ($twoHeads == True) { // stop if two consecutive heads
				break;
			
			} else { // show heads if even
				
				echo "<img src="https://i.postimg.cc/HkZ5nZ60/kisspng-coin-5-state-quarters-connecticut-silver-5b9c73445f2386-2946652115369797803897.png" alt="heads">";
				$twoHeads = True;

			}
		}
		--$flips; //decrease flips remaining by 1
	}
} 

coinToss(5);

?>


</body>
</html>