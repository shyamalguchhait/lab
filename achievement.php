<!DOCTYPE html>
<html>

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
  <link rel="stylesheet" href="./static/css/achievement.css" type="text/css">
  <script href="./static/js/index.js"></script>
  <link rel="shortcut icon" href="./image/logo.png">

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