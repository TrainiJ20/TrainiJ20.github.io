<!DOCTYPE html>
<?php include('process.php') ?>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    <link rel="stylesheet" type="text/css" href="../CSS/login.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css">
    <title>Login</title>
  </head>
  <body>
    <?php include '../header.php'; ?>
    <div class="form">
      <form method="post" action="login.php">
        <h1>Login</h1>
        <?php
          if ($errors != []) {
            echo '<div class="error">';
            foreach ($errors as $error) {
              echo "<li>".$error."</li>";
            }
            echo '</div>';
          }
        ?>
        <br>
        <input type="text" name="email" placeholder="email@address.com" value="<?php echo $email ?>"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br><br>
        <input type="submit" value="Login" name="login" class="button">
        <p>Not yet a member? <a href="signup.php" class="link">Sign up</a></p>
      </form>
    </div>
    <?php include '../footer.php'; ?>
  </body>
</html>
