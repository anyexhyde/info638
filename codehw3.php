<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>

		span {
			color:blue;
			font-weight: bold;
		}

		html {
  			font-family: "helvetica neue", helvetica, arial, sans-serif;
		}

		thead th,
		tfoot th {
		  font-family: "open sans";
		}

		th {
		  letter-spacing: 2px;
		}

		td {
		  letter-spacing: 1px;
		}

		tbody td {
		  text-align: center;
		}

		tfoot th {
		  text-align: right;
		}

		table {
  		border-collapse: collapse;
		}

		th, td {
  		border: 1px solid black;
		}

		tbody tr:nth-child(even){
  		background-color: #CFE1FF;
  		color: #000;
}
	</style>
</head>
<body>

<?php

// book lists

$bookArray = array(
			array('Title' => "PHP and MySQL Web Development", 'Author' => "Luke Welling", 'Num Pages' => "144", 'Type' => "Paperback", 'Price' => "31.63"),
			array('Title' => "Web Design with HTML, CSS, JavaScript and jQuery", 'Author' => "Jon Duckett", 'Num Pages' => "135", 'Type' => "Paperback", 'Price' => "41.23"),
			array('Title' => "PHP Cookbook: Solutions & Examples for PHP Programmers", 'Author' => "David Sklar", 'Num Pages' => "14", 'Type' => "Paperback", 'Price' => "40.88"),
			array('Title' => "JavaScript and JQuery: Interactive Front-End Web Development", 'Author' => "Jon Duckett", 'Num Pages' => "251", 'Type' => "Paperback", 'Price' => "22.09"),
			array('Title' => "Modern PHP: New Features and Good Practices", 'Author' => "Josh Lockhart", 'Num Pages' => "7", 'Type' => "Paperback", 'Price' => "28.49"),
			array('Title' => "Programming PHP", 'Author' => "Kevin Tatroe", 'Num Pages' => "26", 'Type' => "Paperback", 'Price' => "28.96"),


);

echo "<table><tr><th>Title</th><th>Author</th><th>Number of Pages</th><th>Type</th><th>Price ($)</th></tr>";

foreach ($bookArray as $book){
    echo "<tr><td>".$book['Title']."</td><td>".$book['Author']."</td><td>".$book['Num Pages']."</td><td>".$book['Type']."</td><td>".$book['Price']."</td></tr>";
    $totalPrice += (int)$book['Price'];
}

print "<br><div>Your total price is <span>$totalPrice<br></span></div>";

// coin toss

function cointoss($heads) {
	echo "<h1>Challenge 2: Head Toss!</h1>";

	$headCount = 0;

	echo "<div>Flipping heads $heads times</div>";

	while ($heads != $headCount) {

		if (mt_rand() % 2 != 0) { // show tails if odd

			$headCount = 0; //no two consecutive heads
			// syntax for including images
			echo "<img src='https://i.postimg.cc/j5Tkg1t0/Nice-Png-quarter-png-1464848.png' alt='tails'>";

		} else {

			if ($headCount == $heads) { // stop if target head number reached
				echo "<img src='https://i.postimg.cc/HkZ5nZ60/kisspng-coin-5-state-quarters-connecticut-silver-5b9c73445f2386-2946652115369797803897.png' alt='heads'>";
				break;
			
			} else { // show heads if even
				
				echo "<img src='https://i.postimg.cc/HkZ5nZ60/kisspng-coin-5-state-quarters-connecticut-silver-5b9c73445f2386-2946652115369797803897.png' alt='heads'>";
				$headCount++;

			}
		}
	}
}

cointoss(5);
	
?>

</body>
</html>