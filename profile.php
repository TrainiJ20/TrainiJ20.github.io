<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  if (isset($_SESSION['id'])) {
    $con = mysqli_connect('localhost', 'root', '', 'pro');
    $id = $_SESSION['id'];
    $query = "SELECT * FROM users WHERE id='$id' LIMIT 1";
    $results = mysqli_query($con, $query);
    $row = mysqli_fetch_array($results,MYSQLI_BOTH);
    $id = $row["id"];
    $email = $row["email"];
    $fname = $row["fname"];
    $lname = $row["lname"];
    $address = $row["address"];
    $suburb = $row["suburb"];
  } else {
    die();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CSS/profile.css">
    <title>Pro</title>
  </head>
  <body>
    <div class="profile">
      <div class="name">
        <img src="http://gtn/images/profile_image.jpg">
        <h2><?php echo $fname." ".$lname ?></h2>
        <p><?php echo $suburb ?></p>
      </div>
      <div class="info">
        <p>Email: <?php echo $email ?></p>
      </div>
    </div>
  </body>
</html>
