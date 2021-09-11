<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "meta.php" ?>
    <title>BioNaP Group-IISER Kolkata: Members</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="statics/css/members.css" type="text/css">
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
    <a href="#groupleader">Group leader</a>
    <a href="#currentmembers">Current members</a>
    <a href="#formerphd">Former PhD</a>
    <a href="#formerstudents">Former Students</a>
</div>


<div class="main">
    <div class="container mt-3">
        <h2 id="groupleader">Group leader</h2>
        <p></p>
        <?php
            $path=$pathmem;
            $folder="/grplead/";
            $array=scandir($path.$folder);
            $list=count($array);
            for ($i=2; $i<$list; $i++){
                $fil=fopen($path.$folder.$array[$i]."/data.txt","r");
                $data=fgets($fil);
                $name=strtok($data,"`");
                $qualification=strtok("`");
                $email=strtok("`");
                $webpage=strtok("`");
                $FB=strtok("`");
                $tw=strtok("`");
                $fill=strtok("`");
                fclose($fil);
            
        

                if ($i%2 == 0|| $i%2 == 1){
                    echo '<div class="row">
                        <div class="col-sm">';
                    if ($qualification=="#"){
                        echo '<h3>'.$name.'</h3>'; 
                    }
                    else{
                        echo '<h3>'.$name.','.$qualification.'</h3></div>';
                    }
                    echo'<div class="row">
                            <div class="col-sm-3">
                                <div class="container">
                                <img src="image/members/img_'.$name.'.jpg" >
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <ul>';
                                echo '<div class="img-icon">';
                                    if ($webpage != "#"){ 
                                        
                                        echo '<li><a href=' .$webpage. '> <img src="image/icon/domain.png">Webpage </a></li>';
                                    }
                                        
                                    if ($FB != "#"){ 
                                        echo '<li><a href=' .$FB. '><img src="image/icon/Facebook-logo-500x350.png"> Facebook </a></li>';
                                    }
                                    if ($tw != "#"){ 
                                        echo '<li><a href=' .$tw. '><img src="image/icon/twitter-icon-circle-blue-logo-preview.png"> Twitter </a></li>';
                                    }
                                echo '</div>';
                    echo      '<ul>
                            <div>
                        </div></div>';              
                
                    echo'<div class="row"><div class="col-sm"><p>'. $fill.'</p></div></div>';
                    echo'</div>
                        </div>';
                }
            }
        ?>
    </div>
</div>
<div class="main">
    <div class="container mt-3">
        <h2 id="currentmembers">Grad students</h2>
        <p></p>
        <?php
            $folder="/grad/";
            $array=scandir($path.$folder);
            $list=count($array);
            for ($i=2; $i<$list; $i++){
                $fil=fopen($path.$folder.$array[$i]."/data.txt","r");
                $data=fgets($fil);
                $name=strtok($data,"`");
                $qualification=strtok("`");
                $email=strtok("`");
                $webpage=strtok("`");
                $FB=strtok("`");
                $tw=strtok("`");
                $fill=strtok("`");
                fclose($fil);
            
        

                if ($i%2 == 0|| $i%2 ==1){
                    echo '<div class="row">
                        <div class="col-sm">';
                    if ($qualification=="#"){
                        echo '<h3>'.$name.'</h3>'; 
                    }
                    else{
                        echo '<h3>'.$name.','.$qualification.'</h3></div>';
                    }
                    echo'<div class="row">
                            <div class="col-sm-3">
                                <img src="image/members/img_'.$name.'.jpg" >
                            </div>
                            <div class="col-sm-9">
                                <ul>';
                                echo '<div class="img-icon">';
                                    if ($webpage != "#"){ 
                                        echo '<li><a href=' .$webpage. '> <img src="image/icon/domain.png">Webpage </a></li>';
                                    }
                                    if ($FB != "#"){ 
                                        echo '<li><a href=' .$FB. '><img src="image/icon/Facebook-logo-500x350.png"> Facebook </a></li>';
                                    }
                                    if ($tw != "#"){ 
                                        echo '<li><a href=' .$tw. '><img src="image/icon/twitter-icon-circle-blue-logo-preview.png"> Twitter </a></li>';
                                    }
                                echo '</div>';
                    echo      '<ul>
                            <div>
                        </div>
                        </div>';
               
                
                    echo'<div class="row"><div class="col-sm"><p>'. $fill.'</p></div></div>';
                    echo'</div>
                        </div>';
                }

            }
        ?>
    </div>
</div>




<div class="main">
    <div class="container mt-3">
        <h2 id="">Under graduate</h2>
        <p></p>
        <?php
            $folder="/undergrad/";
            $array=scandir($path.$folder);
            $list=count($array);
            for ($i=2; $i<$list; $i++){
                $fil=fopen($path.$folder.$array[$i]."/data.txt","r");
                $data=fgets($fil);
                $name=strtok($data,"`");
                $qualification=strtok("`");
                $email=strtok("`");
                $webpage=strtok("`");
                $FB=strtok("`");
                $tw=strtok("`");
                $fill=strtok("`");
                fclose($fil);
            
        

                
                if ($i%2 == 0 || $i%2 == 1){
                    echo '<div class="row">
                        <div class="col-sm">';
                    if ($qualification=="#"){
                        echo '<h3>'.$name.'</h3>'; 
                    }
                    else{
                        echo '<h3>'.$name.','.$qualification.'</h3></div>';
                    }
                    echo'<div class="row">
                            <div class="col-sm-3">
                                <img src="image/members/img_'.$name.'.jpg" >
                            </div>
                            <div class="col-sm-9">
                                <ul>';
                                echo '<div class="img-icon">';
                                    if ($webpage != "#"){ 
                                        echo '<li><a href=' .$webpage. '> <img src="image/icon/domain.png">Webpage </a></li>';
                                    }
                                    if ($FB != "#"){ 
                                        echo '<li><a href=' .$FB. '><img src="image/icon/Facebook-logo-500x350.png"> Facebook </a></li>';
                                    }
                                    if ($tw != "#"){ 
                                        echo '<li><a href=' .$tw. '><img src="image/icon/twitter-icon-circle-blue-logo-preview.png"> Twitter </a></li>';
                                    }
                                    echo '</div>';
                    echo        '<ul>
                            <div>
                        </div>
                        </div>';
               
                
                echo'<div class="row"><div class="col-sm"><p>'. $fill.'</p></div></div>';
                echo'</div>
                    </div>';
                }
                

            }
        ?>
    </div>
</div>

<div class="main">
    <div class="container mt-3">
        <h2 id="formerphd">Former PhD & Post-Doc students</h2>
        <p></p>
        <?php
            $folder="/Former PhD and Post-Docs/";
            $array=scandir($path.$folder);
            $list=count($array);
            for ($i=2; $i<$list; $i++){
                $fil=fopen($path.$folder.$array[$i]."/data.txt","r");
                $data=fgets($fil);
                $name=strtok($data,"`");
                $qualification=strtok("`");
                $email=strtok("`");
                $webpage=strtok("`");
                $FB=strtok("`");
                $tw=strtok("`");
                $fill=strtok("`");
                fclose($fil);
            
        

                
                if ($i%2 == 0 || $i%2 == 1){
                    echo '<div class="row">
                        <div class="col-sm">';
                    if ($qualification=="#"){
                        echo '<h3>'.$name.'</h3>'; 
                    }
                    else{
                        echo '<h3>'.$name.','.$qualification.'</h3></div>';
                    }
                    echo'<div class="row">
                            <div class="col-sm-3">
                                <img src="image/members/img_'.$name.'.jpg" >
                            </div>
                            <div class="col-sm-9">
                                <ul>';
                                echo '<div class="img-icon">';
                                    if ($webpage != "#"){ 
                                        echo '<li><a href=' .$webpage. '> <img src="image/icon/domain.png">Webpage </a></li>';
                                    }
                                    if ($FB != "#"){ 
                                        echo '<li><a href=' .$FB. '><img src="image/icon/Facebook-logo-500x350.png"> Facebook </a></li>';
                                    }
                                    if ($tw != "#"){ 
                                        echo '<li><a href=' .$tw. '><img src="image/icon/twitter-icon-circle-blue-logo-preview.png"> Twitter </a></li>';
                                    }
                                    echo '</div>';
                    echo        '<ul>
                            <div>
                        </div>
                        </div>';
               
                
                echo'<div class="row"><div class="col-sm"><p>'. $fill.'</p></div></div>';
                echo'</div>
                    </div>';
                }
                

            }
        ?>
    </div>
</div>


<div class="main">
    <div class="container mt-3">
        <h2 id="formerstudents">Former students</h2>
        <p></p>
        <?php
            $folder="/former/";
            $array=scandir($path.$folder);
            $list=count($array);
            for ($i=2; $i<$list; $i++){
                $fil=fopen($path.$folder.$array[$i]."/data.txt","r");
                $data=fgets($fil);
                $name=strtok($data,"`");
                $qualification=strtok("`");
                $email=strtok("`");
                $webpage=strtok("`");
                $FB=strtok("`");
                $tw=strtok("`");
                $fill=strtok("`");
                fclose($fil);
            
        

                
                if ($i%2 == 0 || $i%2 == 1){
                    echo '<div class="row">
                        <div class="col-sm">';
                    if ($qualification=="#"){
                        echo '<h3>'.$name.'</h3>'; 
                    }
                    else{
                        echo '<h3>'.$name.','.$qualification.'</h3></div>';
                    }
                    echo'<div class="row">
                            <div class="col-sm-3">
                                <img src="image/members/img_'.$name.'.jpg" >
                            </div>
                            <div class="col-sm-9">
                                <ul>';
                                echo '<div class="img-icon">';
                                    if ($webpage != "#"){ 
                                        echo '<li><a href=' .$webpage. '> <img src="image/icon/domain.png">Webpage </a></li>';
                                    }
                                    if ($FB != "#"){ 
                                        echo '<li><a href=' .$FB. '><img src="image/icon/Facebook-logo-500x350.png"> Facebook </a></li>';
                                    }
                                    if ($tw != "#"){ 
                                        echo '<li><a href=' .$tw. '><img src="image/icon/twitter-icon-circle-blue-logo-preview.png"> Twitter </a></li>';
                                    }
                                    echo '</div>';
                    echo        '<ul>
                            <div>
                        </div>
                        </div>';
               
                
                    echo'<div class="row"><div class="col-sm"><p>'. $fill.'</p></div></div>';
                    echo'</div>
                        </div>';
                }
                

            }
        ?>
    </div>
</div>
<?php include "gototop.php" ?>
<?php include "footer.php" ?>
<!-- <script src="./statics/js/menu.js"></script>-->
<script src="statics/js/members.js"></script>
</body>
</html>