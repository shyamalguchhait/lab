<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nname</title>
    <link href="../static/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="../static/bootstrap-5.0.2-dist/popperjs/popper.min.js" type="text/javascript"></script>
    <script src="../static/bootstrap-5.0.2-dist/popperjs/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
    <script src="../static/bootstrap-5.0.2-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../static/css/member.css" type="text/css">
    <link rel="shortcut icon" href="../static/image/logo.png">
</head>

<body>
    <?php include "./menu.php" ?>
    <?php include "../path.php" ?>
    <div class="container">
        <div class="member">
            <div class="bg-img">
                <img src="iimage" alt="nname">
            </div>
            <div class="info">
                <div class="row">
                    <div class="col-sm">
                        <div class="name">nname</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm email">
                        <div class="base">Email</div>
                    </div>
                    <div class="col-sm email">
                        <div class="value"><a href="mailto:eemail">eemail</a></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm position">
                        <div class="base">Curent position</div>
                    </div>
                    <div class="col-sm position">
                        <div class="value">$position</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>