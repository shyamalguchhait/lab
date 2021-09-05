<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "meta.php" ?>
    <title>BioNaP Group-IISER Kolkata: Publication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="statics/css/publications.css" type="text/css">
    <link rel="shortcut icon" href="image/logo.png">
</head>
<body>
<?php include 'menu.php'; ?>
<?php require "path.php"; ?>
<div class="fill-0">
  <div class="container mt-3">
    <h1 class="h1">Selected publications</h1>
    <h2 class="h2">Journal publications</h2>
    <?php
      $path = $pathpub;
      $folder = "/journal/";
      $array=scandir($path.$folder,1);
      $list=count($array);
        for ($i=0; $i<$list-2; $i++){
          echo '<div class="row">
                <div class="col-sm padding-1 ol-group" > 
                <h3 class="h3"> Year: '.$array[$i].'</h3></div></div>';
          $pathn=$path.$folder.$array[$i];
          $arrayn=scandir($pathn); // year folder
          $listn=count($arrayn);
          for ($n=2; $n<$listn; $n++){
            $fil=fopen($path.$folder.$array[$i]."/".$arrayn[$n],"r");
            $data=fgets($fil);
            $title=strtok($data,"`");
            $author=strtok("`");
            $journal=strtok("`");
            $year=strtok("`");
            $link=strtok("`");
            echo '<div class="row">
                  <div class="col-sm padding-1 ol-group" > ';
            echo '<ul>
                    <li class="title">'.$title.'</li>
                    <li class="author">'.$author.'</li>
                    <li class="journal">'.$journal.'</li>
                    <li class="year">'.$year.'</li>
                    <li class="link"><a href='.$link.' target="_blank">online</a></li>
                  </ul>';
            fclose($fil);
            echo'</div></div>';
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
      $array=scandir($path.$folder,1);
      $list=count($array);
        for ($i=0; $i<$list-2; $i++){
          echo '<div class="row">
                <div class="col-sm padding-1 ol-group" > 
                <h3 class="h3"> Year: '.$array[$i].'</h3></div></div>';
          $pathn=$path.$folder.$array[$i];
          $arrayn=scandir($pathn); // year folder
          $listn=count($arrayn);
          for ($n=2; $n<$listn; $n++){
            $fil=fopen($path.$folder.$array[$i]."/".$arrayn[$n],"r");
            $data=fgets($fil);
            $title=strtok($data,"`");
            $author=strtok("`");
            $journal=strtok("`");
            $year=strtok("`");
            $link=strtok("`");
            echo '<div class="row">
                  <div class="col-sm padding-1 ol-group" > ';
            echo '<ul>
                    <li class="title">'.$title.'</li>
                    <li class="author">'.$author.'</li>
                    <li class="journal">'.$journal.'</li>
                    <li class="year">'.$year.'</li>';
                  if (!empty($link)){
                  
                    echo '<li class="link"><a href='.$link.'>online</a></li>';
                  }
                  echo '</ul>';

            fclose($fil);
            echo'</div></div>';
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
      $folder="/book/";
      $array=scandir($path.$folder,1);
      $list=count($array);
        for ($i=0; $i<$list-2; $i++){
          echo '<div class="row">
                <div class="col-sm padding-1 ol-group" > 
                <h3 class="h3"> Year: '.$array[$i].'</h3></div></div>';
          $pathn=$path.$folder.$array[$i];
          $arrayn=scandir($pathn); // year folder
          $listn=count($arrayn);
          for ($n=2; $n<$listn; $n++){
            $fil=fopen($path.$folder.$array[$i]."/".$arrayn[$n],"r");
            $data=fgets($fil);
            $title=strtok($data,"`");
            $author=strtok("`");
            $journal=strtok("`");
            $year=strtok("`");
            $link=strtok("`");
            echo '<div class="row">
                  <div class="col-sm padding-1 ol-group" > ';
            echo '<ul>
                    <li class="title">'.$title.'</li>
                    <li class="author">'.$author.'</li>
                    <li class="journal">'.$journal.'</li>
                    <li class="year">'.$year.'</li>';
                  if (!empty($link)){
                  
                    echo '<li class="link"><a href='.$link.'>online</a></li>';
                  }
                  echo '</ul>';

            fclose($fil);
            echo'</div></div>';
          }
        }
    ?>

  </div>
</div>
<?php include "gototop.php"?>
<?php include 'footer.php' ?>
</body>
</html>