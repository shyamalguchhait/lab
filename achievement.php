<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "meta.php" ?>
    <title>BioNaP Group-IISER Kolkata: Achievement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="statics/css/achievement.css" type="text/css">
    <link rel="shortcut icon" href="image/logo.png">

</head>
<body>
<?php include 'menu.php'; ?>
<?php require "path.php"?>

<div class="fill-0">
  <div class="container mt-3">
    <h1 class="h1">Student's archievement<h1>
    <h2 class="h2">Scholarship Fellowships & Awards</h2>
    <?php
      $path=$pathachiv;
      $array=scandir($path."/international/");
      $list=count($array);
        for ($i=2; $i<$list; $i++){
          echo '<div class="row">
                <div class="col-sm padding-1 ol-group" >';          
       
          $fil=fopen($path."/international/".$array[$i],"r");
          $data=fgets($fil);
          $title=strtok($data,":");
          $name=strtok(":");
          echo '<h3 class="h3">'.$title.'</h3>
                <p class="p">'.$name.'</p>';
          fclose($fil);
          echo'</div></div>';
          
        }
    ?>

  </div>
</div>

<div class="fill-0">
  <div class="container mt-3">
    <h1 class="h1"><h1>
    <h2 class="h2">Placement</h2>
    <?php
      $path=$pathachiv;
      $array=scandir($path."/placement/");
      $list=count($array);
        for ($i=2; $i<$list; $i++){
          echo '<div class="row">
                <div class="col-sm padding-1 ol-group" >';          
       
          $fil=fopen($path."/placement/".$array[$i],"r");
          $data=fgets($fil);
          $title=strtok($data,":");
          $name=strtok(":");
          echo '<h3 class="h3">'.$title.'</h3>
                <p class="p">'.$name.'</p>';
          fclose($fil);
          echo'</div></div>';
          
        }
    ?>

  </div>
</div>

<?php include 'footer.php' ?>
</body>
</html>