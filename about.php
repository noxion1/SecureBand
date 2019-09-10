<?php
include "config.php";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marty Robbins</title>
    <link type="text/css" rel="stylesheet" href="aboutstyle.css">
    <script src="js/script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav class="navigation-bar">
    <img class="logo" src="img/MartyRobbins.jpg">
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
    <a href="main.php">Home</a>
    <a href="tracks.php">Tracks</a>
    <a href="albums.php">Albums</a>
    <a  class="active" href="#">About Marty</a>
</nav>
    <p id="title-text">Marty Robbins</p>
    <p id="listeners-text">Listeners</p>
    <p id="listeners-number">285.6k</p>
    <br><br><br><br>
    <hr>

        <!-- Inhoud -->

    <div class="marty-info">

      <h1>About</h1> <h1 style=" color: red;">Marty Robbins </h1>

      <?php
       $sql = 'SELECT * FROM text';
       $query = mysqli_query($conn, $sql);

       if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

       while ($row = mysqli_fetch_array($query))
       		{
         ?>
         <p class="wat-info-over">
           <?php echo $row['aboutmarty'] ?>

         </p>
       <?php } ?>
    </div>

    <div class="foto-links">
      <img src="img/nigga.jpg" class="foto-link-img">
    </div>
    <div class="foto-rechts">
      <img src="img/rechts-foto.jpg" class="foto-rechts-img">
    </div>



  </body>
</html>
