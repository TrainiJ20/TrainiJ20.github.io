<header>
  <div class="container">

    <div class="logo">
      <a href="http://gtn/index.php"><h1>GTN</h1></a>
    </div>

    <div class="nav">
      <ul>
          <li><a href="http://gtn/problem.php">Problem</a></li><li>|</li>
          <li><a href="http://gtn/algorithm.php">Algorithm</a></li><li>|</li>
          <li><a href="http://gtn/proof.php">Proof</a></li><li>|</li>
          <li><a href="http://gtn/skills.php">Skills</a></li>
        <?php
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            if (!isset($_SESSION['id'])) {
                echo '<li><a href="http://gtn/account/login.php" class="button">Log in</a></li>';
            } else {
              echo '<img src="http://gtn/images/profile_image.jpg" class="profilepic" id="togglePro" />';
            }
            ?>
      </ul>
    </div>

  </div>
</header>
