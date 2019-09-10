<?php
include "config.php";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Marty Robbins</title>
    <link type="text/css" rel="stylesheet" href="albumsstyle.css">
    <script src="js/script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav class="navigation-bar">
    <img class="logo" src="img/MartyRobbins.jpg">
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
    <a href="main.php">Home</a>
    <a href="tracks.php">Tracks</a>
    <a  class="active" href="#">Albums</a>
    <a href="about.php">About Marty</a>
</nav>
    <p id="title-text">Marty Robbins</p>
    <p id="listeners-text">Listeners</p>
    <p id="listeners-number">285.6k</p>
    <br><br><br><br>
    <hr>

        <!-- Inhoud -->

    <div class="marty-info">

      <?php
       $sql = 'SELECT * FROM uploadedimage';
       $query = mysqli_query($conn, $sql);

       if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

       while ($row = mysqli_fetch_array($query))
       		{
         ?>
         <p class="wat-info-over">
           <?php
           echo "<div id='img_div'>";
           echo "<img class='album-img-ding' src='images/".$row['imagename']. "'>";
           echo "<p class='text-over-album'>".$row['info']."</p>";
           echo "</div>";
            ?>

         </p>
       <?php } ?>

    </div>





  </body>
</html>
