<?php
$default_page_id = 1;
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
  $pdo = new PDO($attr, $user, $pass, $opts);
} catch(PDOException $e) {
  throw new PDOException($e->getMessage(), (int)$e->getCode());
}

require_once(__DIR__.'/navbar.php');

$page_id = isset($_GET["id"]) ? $_GET["id"] : $default_page_id;
$stmt = $pdo->prepare("SELECT * FROM project WHERE project_id = ?");
$stmt->execute([$page_id]);
$result = $stmt->fetch();

$project_name = $result['project_name'];
$project_description = $result['project_description'];
$project_text = $result['project_text'];

$stmt = $pdo->prepare("SELECT image_filepath FROM image WHERE image_id = ?");
$stmt->execute([$page_id]);
$result = $stmt->fetch();
$image_filepath = $result['image_filepath'];
?>

<!-- project section -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Project - Anyelina's Portfolio</title>
	<!-- bootstrap CSS link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<!-- font awesome link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- css file -->
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<!--Project Description-->

	<div class="grid-container-project">

    	<h1><?php echo $project_name?></h1><br>
        <p><?php echo $project_description?>
		<br><br><?php echo $project_text?></p> 

		 <img src=<?php echo $image_filepath?> width="800" height="600">
	</div>
</body>
</html>

<!-- comment section -->

<footer>
  <?php
  require_once(__DIR__.'/comment.php'); 
  ?>
</footer>