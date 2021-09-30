<!DOCTYPE html>
<?php include 'menu.php' ?>
<?php require "path.php" ?>
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
  <link rel="stylesheet" href="./static/css/lightbox.css" type="text/css">
  <script src="./static/js/lightbox.js"></script>
  <link rel="shortcut icon" href="image/logo.png">
  <script>
    document.addEventListener('contextmenu', event => event.preventDefault());
  </script>
</head>

<body>
  <div class="fill-0">
    <div class="container mt-3">
      <h1 class="h1">Lightbox</h1>
      <p class="p1"></p>
      <?php
      $path = $pathlight;
      $photo = scandir($path, 1);
      $count = count($photo);
      for ($i = 0; $i < $count - 2; $i++) {
        if ($i % 5 == 0) {
          echo '<div class="row">
              <div class="col-sm padding-0" style="padding:0">
          <img src="image/lightbox/' . $photo[$i] . '" onclick="openModal();currentSlide(' . ($i + 1) . ')" class="hover-shadow cursor">
          </div>';
        } else {
          echo '<div class="col-sm padding-0" style="padding:0">
          <img src="image/lightbox/' . $photo[$i] . '" onclick="openModal();currentSlide(' . ($i + 1) . ')" class="hover-shadow cursor">
          </div>';
          if (($i + 1) % 5 == 0) {
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
        for ($i = 0; $i < $count - 2; $i++) {
          echo '<div class="mySlides">
        <div class="numbertext">' . ($i + 1) . ' / 20</div>
        <img src="image/lightbox/' . $photo[$i] . '">
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
      echo '<div class="row">';
      for ($i = 0; $i < $count - 2; $i++) {
        if ($i % 1 == 0) {
          echo '
          <div class="col-sm padding-1">
          <img class="demo cursor" src="image/lightbox/' . $photo[$i] . '" onclick="currentSlide(' . ($i + 1) . ')" alt="">
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
  <script src="./static/js/lightbox.js"></script>
</body>

</html>