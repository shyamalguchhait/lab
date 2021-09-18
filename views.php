<!DOCTYPE html>
<html lang="en">
<head>
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
    <!--<link rel="stylesheet" href="./static/css/index.css" type="text/css">-->
    <link rel="stylesheet" href="./static/css/views.css" type="text/css">
    <link rel="shortcut icon" href="./image/logo.png">
</head>
<body>
    <?php 
        $i = $_GET["i"];
    ?>
   <?php 
    echo "<image src = ".$i.">"
   ?>
</body>
</html>