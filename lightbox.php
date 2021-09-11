<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "meta.php" ?>
    <title>BioNaP Group-IISER Kolkata:: Lightbox</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="statics/css/lightbox.css" type="text/css">
    <link rel="shortcut icon" href="image/logo.png">
    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());
    </script>
    </head>
<body>
<?php include 'menu.php' ?>
<?php require "path.php" ?>
<div class="fill-0">
  <div class="container-fluid mt-3">
    <h1 class="h1">Lightbox</h1>
    <p class="p1"></p>
    <?php
    $path=$pathlight;
    $photo=scandir($path,1);
    $count=count($photo);
    for ($i=0; $i<$count-2; $i++){
      if ($i%5==0){
        echo '<div class="row">
              <div class="col-sm padding-0" style="padding:0">
          <img src="image/lightbox/'.$photo[$i].'" onclick="openModal();currentSlide('.($i+1).')" class="hover-shadow cursor">
          </div>';
      }
      else{
        echo '<div class="col-sm padding-0" style="padding:0">
          <img src="image/lightbox/'.$photo[$i].'" onclick="openModal();currentSlide('.($i+1).')" class="hover-shadow cursor">
          </div>';
          if (($i+1)%5==0){
            echo '</div>';
          }
      }
    }
    
    ?>
  </div>
</div>
<?php include "footer.php" ?>
<div id="myModal" class="modal ">
  <span class="close cursor color-fbg" onclick="closeModal()">&times;</span>
  <div class="modal-content view-img">
    <td>
    <?php
    for ($i=0; $i<$count-2; $i++){
      echo'<div class="mySlides">
        <div class="numbertext">'.($i+1).' / 20</div>
        <img src="image/lightbox/'.$photo[$i].'">
        </div>';
    }
  
    ?>
    </td>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
    <div class="caption-container">
      <p id="caption"></p>
    </div>
  </div>
  <div class="container-fluid mt-3 model scroll">
    <?php
     echo'<div class="row">';
    for ($i=0; $i<$count-2; $i++){
      if ($i%1==0){
        echo'
          <div class="col-sm padding-1">
          <img class="demo cursor" src="image/lightbox/'.$photo[$i].'" onclick="currentSlide('.($i+1).')" alt="">
          </div>';
      }
     /* else{
        echo'
          <div class="col-sm padding-1">
          <img class="demo cursor" src="image/lightbox/'.$photo[$i].'" onclick="currentSlide('.($i+1).')" alt="Nature and sunrise">
          </div>';
        if (($i+1)%10==0){
            echo "</div>";
        }
      }*/
    }
    echo '</div>';
    ?>
  
  </div>
  <?php include "footer.php" ?>   
</div>
<script src="statics/js/lightbox.js"></script>
</body>
</html>