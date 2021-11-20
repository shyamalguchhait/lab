<!DOCTYPE html>
<html>

<head>
  <?php include "lib.php"; ?>
  <title>BioNaP Group-IISER Kolkata: Achievement</title>
  <link rel="stylesheet" href="./static/css/achievement.css" type="text/css">
</head>

<body>
  <?php include 'menu.php'; ?>
  <?php require "path.php" ?>

  <div class="achievement">
    <div class="container mt-3">
      <h1 class="h1">Student's archievement<h1>
          <h2 class="h2">Scholarship Fellowships & Awards</h2>
          <?php
          $path = $pathachiv;
          $array = scandir($path . "/international/");
          $list = count($array);
          for ($i = 2; $i < $list; $i++) {
            echo '<div class="row">
                <div class="col-sm">';
            $fil = fopen($path . "/international/" . $array[$i], "r");
            $data = fgets($fil);
            $title = strtok($data, ":");
            $name = strtok(":");
            echo '<h3 class="h3">' . $title . '</h3>
                <p class="p">' . $name . '</p>';
            fclose($fil);
            echo '</div></div>';
          }
          ?>

    </div>
  </div>

  <div class="fill-0">
    <div class="container mt-3">
      <h1 class="h1">
        <h1>
          <h2 class="h2">Placement</h2>
          <?php
          $path = $pathachiv;
          $array = scandir($path . "/placement/");
          $list = count($array);
          for ($i = 2; $i < $list; $i++) {
            echo '<div class="row">
                <div class="col-sm">';
            $fil = fopen($path . "/placement/" . $array[$i], "r");
            $data = fgets($fil);
            $title = strtok($data, ":");
            $name = strtok(":");
            echo '<h3 class="h3">' . $title . '</h3>
                <p class="p">' . $name . '</p>';
            fclose($fil);
            echo '</div></div>';
          }
          ?>
    </div>
  </div>
</body>
</html>
<?php include 'gototop.php'; ?>