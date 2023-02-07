<!DOCTYPE html>
<html>
<head>
<style>
	h1 {color: blue;}
	
</style>
</head>
<body>

<?php

$change = 159;
echo print "<h1>You are currently due $change cents</h1>";

$dollar;
$quarter;
$dime;
$nickel;
$cent;

$dollar = ($change - ($change % 100)) / 100;
$change = $change % 100;
$quarter = ($change - ($change % 25)) / 25;
$change = $change % 25;
$dime = ($change - ($change % 10)) / 10;
$change = $change % 10;
$nickel = ($change - ($change % 5)) / 5;
$change = $change % 5;
$cent = $change;


echo print "<div>You are due back $dollar dollar(s), $quarter quarter(s), $dime dime(s), $nickel nickels, and $cent cent(s)</div>";


?>
</body>
</html>