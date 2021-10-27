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
    //document.addEventListener('contextmenu', event => event.preventDefault());
  </script>
</head>

<body>
  <div class="container mt-3">
    <div id="fill-0" class="fill-0">
      <h1 class="h1">Lightbox</h1>
      <p class="p1"></p>
      <?php
      $path = $pathlight;
      $photo = scandir($path, 1);
      $count = count($photo);
      for ($i = 0; $i < $count - 2; $i++) {
        if ($i % 5 == 0) {
          echo '<div class="row">
              <div class="col-sm padding-0 imggrid" style="padding:0">
          <img src="image/lightbox/' . $photo[$i] . '" class="hover-shadow cursor">
          </div>';
        } else {
          echo '<div class="col-sm padding-0 imggrid" style="padding:0">
          <img src="image/lightbox/' . $photo[$i] . '" class="hover-shadow cursor">
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
  <div class="container mt-3">
    <div id="modal" class="modal">
      <div class="row">
        <div class="col-sm-9">
          <span class="close color-fbg" onclick="closeModal()">&times;</span>
          <div class="modal-content view-img" id="scrollspy">
            <td>
              <?php
              for ($i = 0; $i < $count - 2; $i++) {
                echo '<div class="slides">
                      <div class="numbertext">' . ($i + 1) . ' / 20</div>
                      <figure><img src="image/lightbox/' . $photo[$i] . '"><figcaption></figcaption></figure>
                      </div>';
              }
              ?>
            </td>
            <a id="prev" class="prev">&#10094;</a>
            <a id="next" class="next">&#10095;</a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="scroll">
            <?php
            for ($i = 0; $i < $count - 2; $i++) {
              if ($i % 1 == 0) {
                echo '
              <div class = "row">
              <div class="col-sm image-small-show">
              <img class = "img" src="image/lightbox/' . $photo[$i] . '" alt="">
              </div></div>';
              }
              /* else{
            echo'
            <div class="col-sm image-small-show">
            <img class="demo cursor" src="image/lightbox/'.$photo[$i].'" onclick="currentSlide('.($i+1).')" alt="Nature and sunrise">
            </div>';
            if (($i+1)%10==0){
            echo "</div>";
            }
          }*/
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>