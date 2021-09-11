<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Members</title>
    <link href="./static/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="./static/bootstrap-5.0.2-dist/popperjs/popper.min.js" type="text/javascript"></script>
    <script src="./static/bootstrap-5.0.2-dist/popperjs/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
    <script src="./static/bootstrap-5.0.2-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="./static/css/members.css" type="text/css">
    <script>
        $(document).ready(function() {
            $('#someLinkId').click();
        });
    </script>

</head>

<body>
    <?php include "menu.php"; ?>
    <?php include "path.php"; ?>
    <div class="main">
        <div class="container">
            <div>
                <h2>Group Leader</h2>
                <p></p>
                <?php
                $path = $pathmem;
                $folder = "/grplead/";
                $array = scandir($path . $folder);
                $list = count($array);
                for ($i = 2; $i < $list; $i++) {
                    $fil = fopen($path . $folder . $array[$i] . "/data.txt", "r");
                    $data = fgets($fil);
                    $name = strtok($data, "`");
                    $qualification = strtok("`");
                    $email = strtok("`");
                    $webpage = strtok("`");
                    $FB = strtok("`");
                    $tw = strtok("`");
                    $fill = strtok("`");
                    fclose($fil);
                ?>
                    <?php if ($i % 2 == 0) { ?>
                        <div class="row">
                            <div class="col-sm">
                                <div class="pf-img">
                                    <img src="./image/members/img_<?php echo $name ?>.jpg" alt="<?php echo $name ?>">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="info">
                                    <div class="name">
                                        <?php if ($qualification == "#") { ?>
                                            <a href="/<?php echo $name ?>"><?php echo $name ?></a>
                                        <?php } else { ?>
                                            <a href="/<?php echo $name ?>"><?php echo $name ?></a>
                                        <?php } ?>
                                    </div>
                                    <div class="email">
                                        <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm"></div>
                            <div class="col-sm"></div>
                        </div>
                <?php }
                } ?>
            </div>
            <hr>
            <div>
                <h2>PhD</h2>
                <p></p>
                <?php
                $path = $pathmem;
                $folder = "/grad/";
                $array = scandir($path . $folder);
                $list = count($array);
                for ($i = 2; $i < $list; $i++) {
                    $fil = fopen($path . $folder . $array[$i] . "/data.txt", "r");
                    $data = fgets($fil);
                    $name = strtok($data, "`");
                    $qualification = strtok("`");
                    $email = strtok("`");
                    $webpage = strtok("`");
                    $FB = strtok("`");
                    $tw = strtok("`");
                    $fill = strtok("`");
                    fclose($fil);
                ?>
                    <?php if ($i % 2 == 0) { ?>
                        <div class="row">
                            <div class="col-sm">
                                <div class="pf-img">
                                    <img src="./image/members/img_<?php echo $name ?>.jpg" alt="<?php echo $name ?>">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="info">
                                    <div class="name">
                                        <?php if ($qualification == "#") { ?>
                                            <a href="/<?php echo $name ?>"><?php echo $name ?></a>
                                        <?php } else { ?>
                                            <a href="/<?php echo $name ?>"><?php echo $name ?></a>
                                        <?php } ?>
                                    </div>
                                    <div class="email">
                                        <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="col-sm">
                                <div class="pf-img">
                                    <img src="./image/members/img_<?php echo $name ?>.jpg" alt="<?php echo $name ?>">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="info">
                                    <div class="name">
                                        <?php if ($qualification == "#") { ?>
                                            <a href="/<?php echo $name ?>"><?php echo $name ?></a>
                                        <?php } else { ?>
                                            <a href="/<?php echo $name ?>"><?php echo $name ?></a>
                                        <?php } ?>
                                    </div>
                                    <div class="email">
                                        <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
            <hr>
        </div>
    </div>
</body>

</html>