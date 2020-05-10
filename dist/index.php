<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ajax-dischi</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="app.css">
    <!-- <script src="app.js" charset="utf-8"></script> -->
    <?php
    require 'api.php';
     ?>
  </head>
  <body>
    <div class="container-nav">
      <div class="row-nav">
        <div class="logo-spotify">
          <img src="img/logo-spotify.png" alt="">
        </div>
      </div>
    </div>
    <div class="container-centrale">
      <div class="container-centrale-album">
        <?php foreach ($db as $album) {?>
        <div class="album">
          <img src="<?php echo $album['poster'] ?>" alt="">
          <h2><?php echo $album['title'] ?></h2>
          <h3><?php echo $album['author'] ?></h3>
          <h3><?php echo $album['year'] ?></h3>
        </div>
        <?php } ?>

      </div>

    </div>
  </body>
</html>
