<?php
$host = 'localhost'; 
$data = 'awuzhai_638'; 
$user = 'awuzhai_mysql'; 
$pass = 'CPMmnVDZpQfN'; 
$chrs = 'utf8mb4';
$attr = "mysql:host=$host;dbname=$data;charset=$chrs";
$opts = 
[
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false,
]; 

try {
  $conn = new PDO($attr, $user, $pass, $opts);
} catch(PDOException $e) {
  throw new PDOException($e->getMessage(), (int)$e->getCode());
}

?>


<?php $title = "About - Anyelina's Portfolio"; ?>
<?php require_once(__DIR__.'/navbar.php'); ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About - Anyelina's Portfolio</title>
	<!-- bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- css file -->
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<!--About me-->

	<div class="grid-container">

    <div class="grid-child text">
    	<h1>About Me</h1><br>
        <p>I'm an UX Designer and a Master's student at Pratt Institute. My work emphasizes digital equity and quirky, yet effective designs. Beyond design, I'm also growing as a programmer and artist!
		</p><br>
		<p>I was born in Iquique, Chile, a coastal city in the Atacama Desert. I later moved to Santiago, Chile and attended an international school where I met friends from many cultural backgrounds. This sparked my interest in learning how people live their everyday lives in different cities, from observing people at subway stations around the world, to the different stickers and emojis used in popular social media platforms by country.<br><br> 
		I continued my higher education in the U.S. and followed no path until my last two years of undergrad, where I started my degree from scratch and dove into art and design.<br><br> 
		I am now a designer based in New York City and I aspire to create digital platforms that can engage more people than ever.
</p> 
    </div>

    <div class="grid-child image">
        <img src="images/camel.jpg" width="800" height="600">
    </div>
  
</div>
\





<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>