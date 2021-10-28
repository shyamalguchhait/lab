<!DOCTYPE html>
<?php require "path.php"; ?>
<html lang="en">

<head>
  <!-- CSS only -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="IISER Kolkata BioNaP group official webpage">
  <meta name="keywords" content="Research, Publication, Member, Visitor, Collaborator">
  <meta name="author" content="">
  <title>The Bio-Optics and Nano-Photonics Group of IISER-K</title>
  <link href="./static/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script src="./static/bootstrap-5.0.2-dist/popperjs/popper.min.js" type="text/javascript"></script>
  <script src="./static/bootstrap-5.0.2-dist/popperjs/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
  <script src="./static/bootstrap-5.0.2-dist/js/bootstrap.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="./static/css/index.css" type="text/css">
  <link rel="stylesheet" href="./static/css/publications.css" type="text/css">
  <link rel="shortcut icon" href="image/logo.png">
</head>

<body>
  <div class="publications">
    <?php include 'menu.php'; ?>
    <div class="container mt-3">
      <h1 class="h1">Selected publications</h1>
      <h2 class="h2">Journal publications</h2>
      <?php
      $path = $pathpub;
      $folder = "/journal/";
      $array = scandir($path . $folder, 1);
      $list = count($array);
      for ($i = 0; $i < $list - 2; $i++) {
        echo '<div class="row">
                <div class="col-sm" > 
                <h3 class="h3"> Year: ' . $array[$i] . '</h3></div></div>';
        $pathn = $path . $folder . $array[$i];
        $arrayn = scandir($pathn); // year folder
        $listn = count($arrayn);
        for ($n = 2; $n < $listn; $n++) {
          $fil = fopen($path . $folder . $array[$i] . "/" . $arrayn[$n], "r");
          $data = fgets($fil);
          $title = strtok($data, "`");
          $author = strtok("`");
          $journal = strtok("`");
          $year = strtok("`");
          $link = strtok("`");
          echo '<div class="row">
                  <div class="col-sm" > ';
          echo '<div >
                    <div class="title">' . '<a href=' . $link . ' target="_blank">' . $title . '</a>' . ", " . $author . ", " . $journal . ", " . $year . '</div>
                  </div>';
          fclose($fil);
          echo '</div></div>';
        }
      }
      ?>

    </div>
  </div>

  <div class="fill-0">
    <div class="container mt-3">
      <h1 class="h1"></h1>
      <h2 class="h2">Conference proceedings</h2>
      <?php
      $folder = "/conference/";
      $array = scandir($path . $folder, 1);
      $list = count($array);
      for ($i = 0; $i < $list - 2; $i++) {
        echo '<div class="row">
                <div class="col-sm padding-1 ol-group" > 
                <h3 class="h3"> Year: ' . $array[$i] . '</h3></div></div>';
        $pathn = $path . $folder . $array[$i];
        $arrayn = scandir($pathn); // year folder
        $listn = count($arrayn);
        for ($n = 2; $n < $listn; $n++) {
          $fil = fopen($path . $folder . $array[$i] . "/" . $arrayn[$n], "r");
          $data = fgets($fil);
          $title = strtok($data, "`");
          $author = strtok("`");
          $journal = strtok("`");
          $year = strtok("`");
          $link = strtok("`");
          echo '<div class="row">
                  <div class="col-sm padding-1 ol-group" > ';
          echo '<div>
                  <div class="title">' . '<a href=' . $link . ' target="_blank">' . $title . '</a>' . ", " . $author . ", " . $journal . ", " . $year . '</div>
                </div>';

          fclose($fil);
          echo '</div></div>';
        }
      }
      ?>

    </div>
  </div>

  <div class="fill-0">
    <div class="container mt-3">
      <h1 class="h1"></h1>
      <h2 class="h2">Book chapters</h2>
      <?php
      $folder = "/book/";
      $array = scandir($path . $folder, 1);
      $list = count($array);
      for ($i = 0; $i < $list - 2; $i++) {
        echo '<div class="row">
                <div class="col-sm padding-1 ol-group" > 
                <h3 class="h3"> Year: ' . $array[$i] . '</h3></div></div>';
        $pathn = $path . $folder . $array[$i];
        $arrayn = scandir($pathn); // year folder
        $listn = count($arrayn);
        for ($n = 2; $n < $listn; $n++) {
          $fil = fopen($path . $folder . $array[$i] . "/" . $arrayn[$n], "r");
          $data = fgets($fil);
          $title = strtok($data, "`");
          $author = strtok("`");
          $journal = strtok("`");
          $year = strtok("`");
          $link = strtok("`");
          echo '<div class="row">
                  <div class="col-sm padding-1 ol-group" > ';
          echo '<div >
                  <div class="title">' . '<a href=' . $link . ' target="_blank">' . $title . '</a>' . ", " . $author . ", " . $journal . ", " . $year . '</div>
                </div>';

          fclose($fil);
          echo '</div></div>';
        }
      }
      ?>

    </div>
  </div>
  <?php include "gototop.php" ?>
  <?php include 'footer.php' ?>
</body>

</html>
<?php include 'gototop.php'; ?>