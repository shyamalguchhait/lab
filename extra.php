<!DOCTYPE html>
<?php require "path.php" ?>
<html>

<head>
    <?php include "lib.php" ?>
    <title>BioNaP Group-IISER Kolkata: Extra</title>
    <link rel="stylesheet" href="./static/css/extra.css" type="text/css">
    <script src="./static/jsextra.js" type= "text/javascript"></script>
    <script>
        /*$(document).ready(function() {
            $('#someLinkId').click();
        });*/
    </script>
</head>

<body>
    <?php include "menu.php" ?>
    <!--
    <div class="sidenav">
        <a href="#collaborator">collaborator</a>
        <a href="#visitor">Traveling lecturer</a>
    </div>-->
    <div class="extra">
        <div class="row-img">
            <div class="container mt-3">

                <h2></h2>
                <p></p>
                <div class="row">
                    <div class="col-sm padding-0"><img src="image/extra/vis/vis0.jpg"></div>
                    <div class="col-sm padding-0"><img src="image/extra/vis/vis1.jpg"></div>
                    <div class="col-sm padding-0"><img src="image/extra/vis/vis2.jpg"></div>
                    <div class="col-sm padding-0"><img src="image/extra/vis/vis3.jpg"></div>
                </div>
                <div class="row">
                    <div class="col-sm padding-0"><img src="image/extra/vis/vis4.jpg"></div>
                    <div class="col-sm padding-0"><img src="image/extra/vis/vis5.jpg"></div>
                    <div class="col-sm padding-0"><img src="image/extra/vis/vis6.jpg"></div>
                    <div class="col-sm padding-0"><img src="image/extra/vis/vis7.jpg"></div>
                </div>
                <!--<div class="row row-img">
            <div class="col-sm padding-0"><img src="image/extra/vis/vis0.jpg"></div>
            <div class="col-sm padding-0"><img src="image/extra/vis/vis1.jpg"></div>
            <div class="col-sm padding-0"><img src="image/extra/vis/vis1.jpg"></div>
            <div class="col-sm padding-0"><img src="image/extra/vis/vis1.jpg"></div>
        </div>
        <div class="row row-img">
            <div class="col-sm padding-0"><img src="image/extra/vis/vis0.jpg"></div>
            <div class="col-sm padding-0"><img src="image/extra/vis/vis1.jpg"></div>
            <div class="col-sm padding-0"><img src="image/extra/vis/vis1.jpg"></div>
            <div class="col-sm padding-0"><img src="image/extra/vis/vis1.jpg"></div>
        </div>-->
            </div>
        </div>


        <div class="main">
            <div class="container mt-3">
                <h2 id="collaborator" class="h2">Collaborator</h2>
                <p></p>
                <?php
                $path = $pathext;
                $folder = "/col/";
                $array = scandir($path . $folder);
                $list = count($array);
                if (($list - 2) % 2 != 0) {
                    $liste = $list + 1;
                } else {
                    $liste = $list;
                }
                for ($i = 2; $i < $liste; $i++) {
                    if (($list - 2) % 2 != 0 && $i == $liste - 1) {
                        $data = ' ` ` ` `#';
                    } else {
                        $fil = fopen($path . $folder . $array[$i] . "/data.txt", "r") or die("Unable to open!");
                        $data = fgets($fil);
                        fclose($fil);
                    }
                    $name = strtok($data, "`");
                    $department = strtok("`");
                    $institute = strtok("`");
                    $country = strtok("`");
                    $webpage = strtok("`");

                    if ($i % 2 == 0) {
                        echo '<div class="row">
                            <div class="col-sm">';
                        echo    '<div class = "info"><h3><a href = ' . $webpage . '>' . $name . '</a></h3>';
                        //echo    '<img src="image/members/img_'.$name.'.jpg" >';
                        echo        '<p>' . $department . '</p>
                                <p>' . $institute . '</p>
                                <p>' . $country . '</p>';

                        echo        '<div class="img-icon">';
                        echo        '</div></div></div>';
                    } else {
                        echo    '<div class="col-sm">';
                        echo    '<div class = "info"><h3><a href = ' . $webpage . '>' . $name . '</a></h3>';
                        //echo        '<img src="image/members/img_'.$name.'.jpg" >';
                        echo        '<p>' . $department . '</p>
                                <p>' . $institute . '</p>
                                <p>' . $country . '</p>';

                        echo        '<div class="img-icon">';
                        echo        '</div></div></div>';
                        if (($i + 1) % 2 == 0) {
                            echo    '</div>';
                        }
                    }
                }
                ?>
            </div>

            <div class="container mt-3">
                <h2 id="visitor" class="h2">OSA traveling lecturer</h2>
                <p></p>
                <?php
                $folder = "/vis/";
                $array = scandir($path . $folder);
                $list = count($array);
                if (($list - 2) % 2 != 0) {
                    $liste = $list + 1;
                } else {
                    $liste = $list;
                }
                for ($i = 2; $i < $liste; $i++) {
                    if (($list - 2) % 2 != 0 && $i == $liste - 1) {
                        $data = ' ` ` ` `#';
                    } else {
                        $fil = fopen($path . $folder . $array[$i] . "/data.txt", "r") or die("Unable to open!");
                        $data = fgets($fil);
                        fclose($fil);
                    }
                    $name = strtok($data, "`");
                    $department = strtok("`");
                    $institute = strtok("`");
                    $country = strtok("`");
                    $webpage = strtok("`");

                    if ($i % 2 == 0) {
                        echo '<div class="row">
                            <div class="col-sm">';
                        echo    '<div class = "info"><h3><a href = ' . $webpage . '>' . $name . '</a></h3>';
                        //echo    '<img src="image/members/img_'.$name.'.jpg" >';
                        echo        '<p>' . $department . '</p>
                                <p>' . $institute . '</p>
                                <p>' . $country . '</p>';

                        echo        '<div class="img-icon">';
                        echo        '</div></div></div>';
                    } else {
                        echo    '<div class="col-sm">';
                        echo    '<div class = "info"><h3><a href = ' . $webpage . '>' . $name . '</a></h3>';
                        //echo        '<img src="image/members/img_'.$name.'.jpg" >';
                        echo        '<p>' . $department . '</p>
                                <p>' . $institute . '</p>
                                <p>' . $country . '</p>';

                        echo        '<div class="img-icon">';
                        echo        '</div></div></div>';
                        if (($i + 1) % 2 == 0) {
                            echo    '</div>';
                        }
                    }
                }
                ?>
            </div>
        </div>

        <!-- <script src="./statics/js/menu.js"></script>-->
        <script src="./static/js/members.js"></script>
</body>

</html>
<?php include 'gototop.php'; ?>