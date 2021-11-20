<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "lib.php";?>
  <title>The Bio-Optics and Nano-Photonics Group of IISER-K</title>
  <link rel="stylesheet" href="./static/css/index.css" type="text/css">
  <script src="./static/js/index.js" type = "text/javascript"></script>
</head>

<body>
  <?php include 'menu.php';
  echo "\n"; ?>
  <div class="index">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="image">
            <div class="row">
              <div class="col-sm image1"><img src="./image/index/index1.jpg"></div>
              <div class="col-sm image2"><img src="./image/index/index2.jpg"></div>
              <div class="col-sm image3"><img src="./image/index/index3.jpg"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm">
          <div class="welcome">
            <h2 class="h2">Welcome to the bioNaP lab!</h2>
            <p class="p">
              The Bio-Optics and Nano photonics group is led by Prof. Nirmalya Ghosh. We mainly focus on the fundamental aspects of polarization of light by studying spin-orbit interaction of light and performing weak measurement. We also explore its application in realizing nano-optical devices as well as in metrology.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          <div class="update">
            <!--
            <h2 class="h2">Latest updates:</h2>
            <ul class="ul">
              <li>Birefringent studies on self-healing piezo-electric crystal, <i>Science</i>, 2021, 373, 321–327.</li>
              <li>Prof. Nirmalya Ghosh received G.G. Stokes Award in Optical Polarization.</li>
            </ul>
            </h2>-->
            <div class="ticker-wrap">
              <div class="ticker">
                <div class="ticker__item">
                  <strong>Latest updates:</strong>
                </div>
                <div class="ticker__item">
                  Birefringent studies on self-healing piezo-electric crystal, <i>Science</i>, 2021, 373, 321–327.</li>
                </div>
                <div class="ticker__item">
                  Prof. Nirmalya Ghosh received G.G. Stokes Award in Optical Polarization.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          <div class="research">
            <h2 class="h2">Research interests</h2>
            <div class="row">
              <div class="col-sm" id="res1"><a href="./research.php#res1">
                  <figure>
                    <div class="img"><img src="./image/index/r0.jpg" alt=""></div>
                    <figcaption>Polarization and singular optics</figcaption>
                  </figure>
                </a>
                <p class="write"><a href="./research.php#res1">Polarization and singular optics</a></p>
              </div>
              <div class="col-sm" id="res2"><a href="./research.php#res2">
                  <figure>
                    <div class="img"><img src="./image/index/r1.png" alt=""></div>
                    <figcaption>Weak measurements</figcaption>
                  </figure>
                </a>
                <p class="write"><a href="./research.php#res1">Weak measurements</a></p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm" id="res3"><a href="./research.php#res3">
                  <figure>
                    <div class="img"><img src="./image/index/r2.png" alt=""></div>
                    <figcaption>Nano-optics</figcaption>
                  </figure>
                </a>
                <p class="write"><a href="./research.php#res1">Nano-optics</a></p>
              </div>
              <div class="col-sm" id="res4"><a href="./research.php#res4">
                  <figure>
                    <div class="img"><img src="./image/index/r3.png" alt=""></div>
                    <figcaption>Computational optics</figcaption>
                  </figure>
                </a>
                <p class="write"><a href="./research.php#res1">Computational optics</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<?php include 'gototop.php'; ?>