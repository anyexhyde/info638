<!DOCTYPE html>
<html>
<body>

<?php

$beers = 10;

echo print "<h1>Challenge: 99 bottles of beer</h1>";

while ($beers > 0) {
	echo print "<div>$beers bottles of beer on the wall, $beers bottles of beer!</div>";
	$beers -= 1;
	echo print "<div>Take one down and pass it around, $beers bottles of beer on the wall!</div>";
}

?>
</body>
</html>