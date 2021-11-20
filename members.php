<!DOCTYPE html>
<?php require "path.php"; ?>
<html>

<head>
    <?php include "lib.php"; ?>
    <title>BioNaP Group-IISER Kolkata: Team</title>
    <link rel="stylesheet" href="./static/css/members.css" type="text/css">
    <script src = "./static/js/members.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#someLinkId').click();
        });
    </script>

</head>

<body>
    <?php include "menu.php"; ?>
    <div class="members">
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
                                            <a href="./member/<?php echo $array[$i] ?>.php" target = "_blank"><?php echo $name ?></a>
                                        <?php } else { ?>
                                            <a href="./member/<?php echo $array[$i] ?>.php" target = "_blank"><?php echo $name ?></a>
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
                <h2>Grad</h2>
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
                                            <a href="./member/<?php echo $array[$i] ?>.php" target = "_blank"><?php echo $name ?></a>
                                        <?php } else { ?>
                                            <a href="./member/<?php echo $array[$i] ?>.php" target = "_blank"><?php echo $name ?></a>
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
                                            <a href="./member/<?php echo $array[$i] ?>.php" target = "_blank"><?php echo $name ?></a>
                                        <?php } else { ?>
                                            <a href="./member/<?php echo $array[$i] ?>.php" target = "_blank"><?php echo $name ?></a>
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

            <div>
                <h2>Undergrad</h2>
                <p></p>
                <?php
                $path = $pathmem;
                $folder = "/undergrad/";
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
                                            <a href="./member/<?php echo $array[$i] ?>.php" target = "_blank"><?php echo $name ?></a>
                                        <?php } else { ?>
                                            <a href="./member/<?php echo $array[$i] ?>.php" target = "_blank"><?php echo $name ?></a>
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
                                            <a href="./member/<?php echo $array[$i] ?>.php" target = "_blank"><?php echo $name ?></a>
                                        <?php } else { ?>
                                            <a href="./member/<?php echo $array[$i] ?>.php" target = "_blank"><?php echo $name ?></a>
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

            <div>
                <h2>Project</h2>
                <p></p>
                <?php
                $path = $pathmem;
                $folder = "/prjct/";
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
                                            <a href="./member/<?php echo $array[$i] ?>.php"><?php echo $name ?></a>
                                        <?php } else { ?>
                                            <a href="./member/<?php echo $array[$i] ?>.php"><?php echo $name ?></a>
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
                                            <a href="./member/<?php echo $array[$i] ?>.php"><?php echo $name ?></a>
                                        <?php } else { ?>
                                            <a href="./member/<?php echo $array[$i] ?>.php"><?php echo $name ?></a>
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

            <div>
                <h2>Former</h2>
                <p></p>
                <?php
                $path = $pathmem;
                $folder = "/former/";
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
                    $cp = strtok("`");
                    $position = strtok("`");
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
                                            <a href="./member/<?php echo $array[$i] ?>.php"><?php echo $name ?></a>
                                        <?php } else { ?>
                                            <a href="./member/<?php echo $array[$i] ?>.php"><?php echo $name ?></a>
                                        <?php } ?>
                                    </div>
                                    <div class="email">
                                        <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                                    </div>
                                    <?php if ($cp != "#") { ?>
                                        <div class="current-position"><?php echo $cp, ", ", $position ?></div>
                                    <?php } ?>
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
                                            <a href="./member/<?php echo $array[$i] ?>.php"><?php echo $name ?></a>
                                        <?php } else { ?>
                                            <a href="./member/<?php echo $array[$i] ?>.php"><?php echo $name ?></a>
                                        <?php } ?>
                                    </div>
                                    <div class="email">
                                        <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                                    </div>
                                    <?php if ($cp != "#") { ?>
                                        <div class="current-position"><?php echo $cp, ", ", $position ?></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>

        </div>
    </div>
</body>

</html>
<?php include 'gototop.php'; ?>