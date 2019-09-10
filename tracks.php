<?php
include "config.php";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Marty Robbins</title>
    <link type="text/css" rel="stylesheet" href="tracksstyle.css">
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
    <a  class="active" href="#">Tracks</a>
    <a href="albums.php">Albums</a>
    <a href="about.php">About Marty</a>
</nav>
    <p id="title-text">Marty Robbins</p>
    <p id="listeners-text">Listeners</p>
    <p id="listeners-number">285.6k</p>
    <br><br><br><br>
    <hr>
        <!-- Inhoud -->
        <div class="sidebar-rechts">
        </div>
        <div class="sidebar-links">
          <div class="tracks-list">

          <p> <a  class="link" href="https://en.wikipedia.org/wiki/Marty_Robbins">Wikepedia</a></p>
          <br>
            <p> <a class="link" href="https://www.last.fm/music/Marty+Robbins/+tracks">Tracks List</a></p>
          </div>
        </div>

    <div class="marty-info">

      <?php
       $sql = 'SELECT * FROM tracks';
       $query = mysqli_query($conn, $sql);

       if (!$query) {
 die ('SQL Error: ' . mysqli_error($conn));
}

       while ($row = mysqli_fetch_array($query))
           {
         ?>
         <p class="song-list">
           <a onclick="alert('Currently Unavaible'); "; target="_blank">&#9654;</a>
           <?php echo $row['id'] ?>
           <?php echo "-";?>
           <?php echo $row['name'] ?>
         <?php echo $row['views'] ?> <hr>
         </p>
       <?php } ?>

    </div>





  </body>
</html>
