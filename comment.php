<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<footer>  

<?php
$page_id = isset($_GET["id"]) ? $_GET["id"] : $default_page_id;

// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$stmt = $pdo->prepare("INSERT INTO comment (name,email,comment_text,project_id) VALUES(?,?,?,?)");
$stmt->execute([$name,$email,$comment,$page_id]);
?>

<div class="full-comment">

  <div class="grid-container-project">

    <div class="grid-child in">
      <h2>Leave a comment!</h2><br>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <br><br>
        Comment: <br><textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
        <br><br><br>
        <input type="submit" name="submit" value="Submit" class="button">  
      </form>
    </div>

    <div class="grid-child out">
        <?php
        echo "<h2>Your Input:</h2><br>";
        echo "Name: ".$name;
        echo "<br>";
        echo "Comment: ".$comment;
        echo "<br>";
        ?>
    </div>

</div>

</footer>
</html>