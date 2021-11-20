<!DOCTYPE html>
<?php require "path.php"; ?>
<html lang="en">

<head>
  <?php include "lib.php"; ?>
  <title>BioNaP Group-IISER Kolkata: Publications</title>
  <link rel="stylesheet" href="./static/css/publications.css" type="text/css">
</head>

<body>
  <?php include 'menu.php'; ?>
  <div class="publications">
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
</body>

</html>
<?php include 'gototop.php'; ?>