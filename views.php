<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "lib.php"; ?>
    <title>BioNaP Group-IISER Kolkata: Views</title>
    <link rel="stylesheet" href="./static/css/views.css" type="text/css">
    <script src="./static/js/views.js" type="text/javascript"></script>
</head>

<body>
    <?php
    $i = $_GET["i"];
    ?>
    <div class="container">
        <div class="img-zoom-container">
            <div class="row">
                <div class="col-sm">
                    <?php
                    echo "<img id = 'image' src = './image/research/$i' alt = ''>"
                    ?>
                </div>
                <div class="col-sm">
                    <div id="result" class="img-zoom-result">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        imageZoom("image", "result");
    </script>
</body>

</html>