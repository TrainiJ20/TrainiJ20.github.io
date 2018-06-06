<!DOCTYPE html>
<?php include('process.php') ?>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    <link rel="stylesheet" type="text/css" href="../CSS/login.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css">
    <title>Signup</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-d6mLG25RVjhEXZGWbZt1s7nKtPv3kk8&libraries=places&callback=initialize&language=en"></script>
    <script type="text/javascript">
      function initialize() {
        var options = {
          types: ['geocode'],
          componentRestrictions: {country: 'au'}
        };

        var input = document.getElementById('autocomplete');
        var autocomplete = new google.maps.places.Autocomplete(input, options);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <?php include('../header.php'); ?>
    <div class="form">
      <form method="post" action="signup.php">
        <h1>Sign up</h1>
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
        <input type="text" name="fname" class="cname" placeholder="First" value="<?php echo $fname ?>">
        <input type="text" name="lname" class="cname" placeholder="Last" value="<?php echo $lname ?>"><br><br>
        <input type="text" name="address" placeholder="Home address" autocomplete="on" value="<?php echo $address ?>">
        <br><br>
        <div class="select">
          <select name="type">
            <option value="" selected disabled hidden>I am...</option>
            <option value="s">a student</option>
            <option value="d">an educator</option>
            <option value="e">a visitor</option>
          </select>
        </div><br>
        <input type="text" name="email" placeholder="email@address.com" value="<?php echo $email ?>"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="password" name="confirm" placeholder="Confirm password"><br><br>
        <input type="submit" value="Sign Up" name="signup" class="button">
        <p>Already a member? <a href="login.php" class="link">Login</a></p>
      </form>
    </div>
    <?php include '../footer.php'; ?>
  </body>
</html>
