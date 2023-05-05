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

?>

<?php

require_once(__DIR__.'/navbar.php');

$email = NULL;

// Get data from form 
if (isset($_POST["name"]) && !empty($POST["name"]) && isset($_POST["email"]) && !empty($POST["email"]) && isset($_POST["message"]) && !empty($POST["message"])) {

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "anyelinawu@gmail.com";
$subject = "This is the subject line";
$txt ="Name = ". $name . "\r\n  Email = "
    . $email . "\r\n Message =" . $message;
 
$headers = "From: noreply@demosite.com" . "\r\n" .
            "CC: somebodyelse@example.com";

if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

$stmt = $pdo->prepare("INSERT INTO visitor (name,email,message) VALUES(?,?,?)");
$stmt->execute([$name,$email,$message]);

}
 
?>

<!DOCTYPE html>
<html>
  <head>
    <link
      rel="stylesheet"
      href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section id="last">
      <!-- heading -->
      <div class="full">
        <h3>Send me a message!</h3>
 
        <div class="lt">
 
          <!-- form  -->
          <form class="form-horizontal"
                method="post" action="contact.php">
            <div class="form-group">
              <div class="col-sm-12">
                <!-- name  -->
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="NAME"
                  name="name"
                  value=""
                />
              </div>
            </div>
 
            <div class="form-group">
              <div class="col-sm-12">
                <!-- email  -->
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="EMAIL"
                  name="email"
                  value=""
                />
              </div>
            </div>
 
            <!-- message  -->
            <textarea
              class="form-control-contact"
              rows="10"
              placeholder="MESSAGE"
              name="message">
            </textarea>
 
            <button
              class="btn btn-primary send-button"
              id="submit"
              type="submit"
              value="SEND">
              <span class="send-text">SEND</span>
            </button>
          </form>
        </div>
 
        <!-- Contact information -->
        <div class="rt">
          <ul class="contact-list">
            <li class="list-item">
              <i class="fa fa-map-marker fa-1x">
                <span class="contact-text place"><span style="font-family:arial;">
                  Queens, NY
                </span></span>
             </i>
            </li>
 
            <li class="list-item">
              <i class="fa fa-envelope fa-1x">
                <span class="contact-text gmail">
                  <a href="mailto:yourmail@gmail.com" title="Send me an email"><span style="font-family:arial;">
                    anyelinawu@gmail.com</span></a>
                </span>
              </i>
            </li>
 
            <li class="list-item">
              <i class="fa fa-phone fa-1x">
                <span class="contact-text phone"><span style="font-family:arial;">
                  (917) 592-8085
                </span></span>
              </i>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </body>
</html>