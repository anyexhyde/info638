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
  $pdo = new PDO($attr, $user, $pass, $opts);
} catch(PDOException $e) {
  throw new PDOException($e->getMessage(), (int)$e->getCode());
}

// retrieve images and project details
// attempted a php function with a variable field for image_id to reduce repetition, but $pdo variable would be out of scope. could not figure out so had to hardcode

$img_query = "SELECT * FROM image WHERE image_id in (1,2,3,4,5,6,7,8,9)";
$stmt = $pdo->query($img_query);
$result = $stmt->fetchAll();
$img_array = array();
foreach ($result as $row) {
	$img_array[] = $row['image_filepath'];
}

$proj_query = "SELECT * FROM project WHERE project_id in (1,2,3,4,5,6,7,8,9)";
$stmt = $pdo->query($proj_query);
$result = $stmt->fetchAll();
$proj_array = array(array());
foreach ($result as $row) {
	$proj_array[0][] = $row['project_name'];
	$proj_array[1][] = $row['project_description'];
	$proj_array[2][] = $row['project_date'];
}


?>

<?php $title = "Projects - Anyelina's Portfolio"; ?>
<?php require_once(__DIR__.'/navbar.php'); ?>

<body>
    <h1 class="text-center">My Projects</h1><br> 
    <h3 class = "text-center">Projects about UX Design, UX Research, and print design</h3><br>
</body>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Projects - Anyelina's Portfolio</title>
	<!-- bootstrap CSS link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<!-- font awesome link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- css file -->
	<link rel="stylesheet" href="style.css">
</head>

<body>

<!--items in gallery-->
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card"><a href="project_template.php?id=1"><img src=<?php echo $img_array[0]?> class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title"><?php echo $proj_array[0][0]?></h5>
        <p class="card-text"><?php echo $proj_array[1][0]?></p>
      </div>
	   <ul class="list-group list-group-flush">
	    <li class="list-group-item">Date: <?php echo $proj_array[2][0]?></li>
	  </ul>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <a href="project_template.php?id=2"><img src=<?php echo $img_array[1]?> class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title"><?php echo $proj_array[0][1]?></h5>
        <p class="card-text"><?php echo $proj_array[1][1]?></p>
      </div>
      	   <ul class="list-group list-group-flush">
	    <li class="list-group-item">Date: <?php echo $proj_array[2][1]?></li>
	  </ul>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <a href="project_template.php?id=3"><img src=<?php echo $img_array[3]?> class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title"><?php echo $proj_array[0][2]?></h5>
        <p class="card-text"><?php echo $proj_array[1][2]?></p>
      </div>
      	   <ul class="list-group list-group-flush">
	    <li class="list-group-item">Date: <?php echo $proj_array[2][2]?></li>
	  </ul>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <a href="project_template.php?id=4"><img src=<?php echo $img_array[2]?> class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title"><?php echo $proj_array[0][3]?></h5>
        <p class="card-text"><?php echo $proj_array[1][3]?></p>
      </div>
      	   <ul class="list-group list-group-flush">
	    <li class="list-group-item">Date: <?php echo $proj_array[2][3]?></li>
	  </ul>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <a href="project_template.php?id=5"><img src=<?php echo $img_array[4]?> class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title"><?php echo $proj_array[0][4]?></h5>
        <p class="card-text"><?php echo $proj_array[1][4]?></p>
      </div>
	   <ul class="list-group list-group-flush">
	    <li class="list-group-item">Date: <?php echo $proj_array[2][4]?></li>
	  </ul>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <a href="project_template.php?id=6"><img src=<?php echo $img_array[5]?> class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title"><?php echo $proj_array[0][5]?></h5>
        <p class="card-text"><?php echo $proj_array[1][5]?></p>
      </div>
	   <ul class="list-group list-group-flush">
	    <li class="list-group-item">Date: <?php echo $proj_array[2][5]?></li>
	  </ul>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <a href="project_template.php?id=7"><img src=<?php echo $img_array[6]?> class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title"><?php echo $proj_array[0][6]?></h5>
        <p class="card-text"><?php echo $proj_array[1][6]?></p>
      </div>
	   <ul class="list-group list-group-flush">
	    <li class="list-group-item">Date: <?php echo $proj_array[2][6]?></li>
	  </ul>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <a href="project_template.php?id=8"><img src=<?php echo $img_array[7]?> class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title"><?php echo $proj_array[0][7]?></h5>
        <p class="card-text"><?php echo $proj_array[1][7]?></p>
      </div>
	   <ul class="list-group list-group-flush">
	    <li class="list-group-item">Date: <?php echo $proj_array[2][7]?></li>
	  </ul>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <a href="project_template.php?id=9"><img src=<?php echo $img_array[8]?> class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title"><?php echo $proj_array[0][8]?></h5>
        <p class="card-text"><?php echo $proj_array[1][8]?></p>
      </div>
	   <ul class="list-group list-group-flush">
	    <li class="list-group-item">Date: <?php echo $proj_array[2][8]?></li>
	  </ul>
    </div>
  </div>
</div>


	<!-- bootstrap js link -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
