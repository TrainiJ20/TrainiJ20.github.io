<!DOCTYPE html>
<?php
if (isset($_GET['logout'])) {
  session_destroy();
  if (isset($_SESSION['id'])) {
    unset($_SESSION['id']);
  }
  header("location: account/login.php");
}
?>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CSS/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css">
    <title>GTN</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $('#togglePro').on('click', function (){
          $(".frame").fadeToggle("fast");
      });
      $( ".frame" ).click(function() {
        $(".frame").fadeToggle("fast");
      });
    });
    </script>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div class="frame">
      <iframe src="profile.php" frameborder="0" scrolling="no" id="pro"> </iframe>
    </div>
    <div class="hero">
      <div class="container">
        <h1>Guess the Number</h1>
        <h4>Are you smarter than a computer?</h4>
        <br>
        <a href="problem.php" class="large button">Find out!</a>
      </div>
    </div>
    <div class="padded">
        <div class="container">
          <h1>How it works</h1>
            <p>Guess the number relies on advanced algorithms to deduce the minimum number of guesses to maximise your experience.</p>
            <br>
            <a href="algorithm.php" class="button">The algorithm</a>
          <br><br><br><br>
        </div>
    </div>
    <div class="padded light">
      <div class="container">
        <h1>Proof</h1>
          <p>The algorithm behind the game has been thoroughly tested, proven by the various test cases and desk checks done</p>
          <br>
          <a href="proof.php" class="button">The proof</a>
        <br><br><br><br>
      </div>
    </div>
    <div class="padded">
        <div class="container">
            <h1>Skills</h1>
            <p>To display this solution to the problem, I needed the ability to code in HTML</p>
            <br>
            <a href="skills.php" class="button">See more</a>
            <br><br><br><br><br><br>
        </div>
    </div>

    <?php include 'footer.php'; ?>
  </body>
</html>
