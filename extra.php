<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "meta.php" ?>
    <title>BioNaP Group-IISER Kolkata: Extra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="statics/css/extra.css" type="text/css">
    <link rel="shortcut icon" href="image/logo.png">
    <script>
        /*$(document).ready(function() {
            $('#someLinkId').click();
         });*/
    </script>
</head>
<body>
<?php include "menu.php" ?>
<?php require "path.php" ?>
<div class="sidenav">
    <a href="#collaborator">collaborator</a>
    <a href="#visitor">Traveling lecturer</a>
</div>

<div>
  <div class="fill-0">
    <div class="container-fluid mt-3">
        <h2></h2>
        <p></p>
        <div class="row row-img">
            <div class="col-sm padding-0"><img src="image/extra/vis/vis0.jpg"></div>
            <div class="col-sm padding-0"><img src="image/extra/vis/vis1.jpg"></div>
            <div class="col-sm padding-0"><img src="image/extra/vis/vis2.jpg"></div>
            <div class="col-sm padding-0"><img src="image/extra/vis/vis3.jpg"></div>
        </div>
        <div class="row row-img">
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
</div>

<div class="main">
    <div class="container mt-3">
        <h2 id="collaborator" class="h2">Collaborator</h2>
        <p></p>
        <?php
            $path = $pathext;
            $folder = "/col/";
            $array=scandir($path.$folder);
            $list=count($array);
            if(($list-2)%2 !=0){
                $liste=$list+1;
            }
            else{
                $liste=$list;
            }
            for ($i=2; $i<$liste; $i++){
                if(($list-2)%2 !=0 && $i==$liste-1){
                    $data=' ` ` ` `#';
                }
                else{
                    $fil=fopen($path.$folder.$array[$i]."/data.txt","r") or die("Unable to open!");
                    $data=fgets($fil);
                    fclose($fil);  
                }
                $name=strtok($data,"`");
                $department=strtok("`");
                $institute=strtok("`");
                $country=strtok("`");
                $webpage=strtok("`");
                     
                if ($i%2 == 0){
                    echo '<div class="row">
                            <div class="col-sm">';
                    echo    '<h3>'.$name.'</h3>'; 
                    //echo    '<img src="image/members/img_'.$name.'.jpg" >';
                    echo        '<p>'.$department.'</p>
                                <p>'.$institute.'</p>
                                <p>'.$country.'</p>';

                    echo        '<div class="img-icon">';
                                if ($webpage != "#"){        
                                    echo '<li><a href=' .$webpage. '> <img src="image/icon/domain.png">Webpage </a></li>';
                                }
                    echo        '</div></div>';
    
               
                }
                else{
                    echo    '<div class="col-sm">';
                    echo    '<h3>'.$name.'</h3>'; 
                    //echo        '<img src="image/members/img_'.$name.'.jpg" >';
                    echo        '<p>'.$department.'</p>
                                <p>'.$institute.'</p>
                                <p>'.$country.'</p>';

                    echo        '<div class="img-icon">';
                                if ($webpage != "#"){        
                                    echo '<li><a href=' .$webpage. '> <img src="image/icon/domain.png">Webpage </a></li>';
                                }
                    echo        '</div></div>';
                    if (($i+1)%2==0){
                        echo    '</div>';
                    }  
                }
 

            }
        ?>
    </div>
</div>


<div class="main">
    <div class="container mt-3">
        <h2 id="visitor" class="h2">OSA traveling lecturer</h2>
        <p></p>
        <?php
            $folder = "/vis/";
            $array=scandir($path.$folder);
            $list=count($array);
            if(($list-2)%2 !=0){
                $liste=$list+1;
            }
            else{
                $liste=$list;
            }
            for ($i=2; $i<$liste; $i++){
                if(($list-2)%2 !=0 && $i==$liste-1){
                    $data=' ` ` ` `#';
                }
                else{
                    $fil=fopen($path.$folder.$array[$i]."/data.txt","r") or die("Unable to open!");
                    $data=fgets($fil);
                    fclose($fil);  
                }
                $name=strtok($data,"`");
                $department=strtok("`");
                $institute=strtok("`");
                $country=strtok("`");
                $webpage=strtok("`");
                     
                if ($i%2 == 0){
                    echo '<div class="row">
                            <div class="col-sm">';
                    echo    '<h3>'.$name.'</h3>'; 
                    //echo    '<img src="image/members/img_'.$name.'.jpg" >';
                    echo        '<p>'.$department.'</p>
                                <p>'.$institute.'</p>
                                <p>'.$country.'</p>';

                    echo        '<div class="img-icon">';
                                if ($webpage != "#"){        
                                    echo '<li><a href=' .$webpage. '> <img src="image/icon/domain.png">Webpage </a></li>';
                                }
                    echo        '</div></div>';
    
               
                }
                else{
                    echo    '<div class="col-sm">';
                    echo    '<h3>'.$name.'</h3>'; 
                    //echo        '<img src="image/members/img_'.$name.'.jpg" >';
                    echo        '<p>'.$department.'</p>
                                <p>'.$institute.'</p>
                                <p>'.$country.'</p>';

                    echo        '<div class="img-icon">';
                                if ($webpage != "#"){        
                                    echo '<li><a href=' .$webpage. '> <img src="image/icon/domain.png">Webpage </a></li>';
                                }
                    echo        '</div></div>';
                    if (($i+1)%2==0){
                        echo    '</div>';
                    }  
                }
 

            }
        ?>
    </div>
</div>



<?php include "footer.php" ?>
<!-- <script src="./statics/js/menu.js"></script>-->
<script src="statics/js/members.js"></script>
</body>
</html>