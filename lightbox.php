<!DOCTYPE html>
<?php require "path.php" ?>
<html lang="en">

<head>
  <?php include "lib.php"; ?>
  <title>BioNaP Group-IISER Kolkata: Lightbox</title>
  <link rel="stylesheet" href="./static/css/index.css" type="text/css">
  <link rel="stylesheet" href="./static/css/lightbox.css" type="text/css">
  <script src="./static/js/lightbox.js"></script>
  <script src="./static/bootstrap-5.0.2-dist/swiped-events-master/src/swiped-events.js"></script>
  <script>
    //document.addEventListener('contextmenu', event => event.preventDefault());
  </script>
</head>

<body>
  <?php include 'menu.php' ?>
  <div class="lightbox">
    <div id="lightbox" class="container mt-3">
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


  <div class="lightbox">
    <div id="modal" class="modal">
      <?php include 'menu.php' ?>
      <div class="container mt-3">
        <div class="row">
          <div class="col-sm-9">
            <div class="close">
              <span class="color-fbg" onclick="closeModal()">&times;</span>
            </div>
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
  </div>
</body>

</html>
<?php include 'gototop.php'; ?>