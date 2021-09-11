<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Members</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="statics/css/members.css" type="text/css">
    <script>
        $(document).ready(function() {
            $('#someLinkId').click();
         });
    </script>

</head>
<body>
<div class="sidenav">
    <a href="#groupleader">Group leader</a>
    <a href="#currentmembers">Current members</a>
    <a href="#formalphd">Formal PhD</a>
    <a href="#formelstudents">Formel Students</a>
</div>


<div class="main">
    <div class="container mt-3">
        <h2 id="groupleader">Grad students</h2>
        <p></p>
        <?php
            $path="C:/xampp/htdocs/labWebsite/bionapdata";
            $array=scandir($path."/grplead/");
            $list=count($array);
            for ($i=2; $i<$list; $i++){
                $fil=fopen($path."/grplead/".$array[$i]."/data.txt","r");
                $data=fgets($fil);
                $name=strtok($data,"`");
                $qualification=strtok("`");
                $email=strtok("`");
                $webpage=strtok("`");
                $FB=strtok("`");
                $tw=strtok("`");
                $fill=strtok("`");
                fclose($fil);
            
        

                if ($i%2 == 0){
                    echo "<div class='row'>
                        <div class='col-sm'>";
                    if ($qualification=="#"){
                        echo "<h3>".$name."</h3>"; 
                    }
                    else{
                        echo "<h3>".$name.','.$qualification."</h3>";
                    }
                    echo"<img src='image/members/img_".$name.".jpg' style='height:100px'>";
               
                    if ($FB != "#"){ 
                        echo "<p><a href=" .$FB. "> Facebook </a></p><br>";
                    }
                    if ($tw != "#"){
                        echo "<p><a href=" .$tw. "> Twitter </a></p>";
                    }
                
                    echo"<p>". $fill."</p>";
                    echo"</div>
                        </div>";
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
            $path="C:/xampp/htdocs/labWebsite/bionapdata";
            $array=scandir($path."/grad/");
            $list=count($array);
            for ($i=2; $i<$list; $i++){
                $fil=fopen($path."/grad/".$array[$i]."/data.txt","r");
                $data=fgets($fil);
                $name=strtok($data,"`");
                $qualification=strtok("`");
                $email=strtok("`");
                $webpage=strtok("`");
                $FB=strtok("`");
                $tw=strtok("`");
                $fill=strtok("`");
                fclose($fil);
            
        

                if ($i%2 == 0){
                    echo "<div class='row'>
                        <div class='col-sm'>";
                    if ($qualification=="#"){
                        echo "<h3>".$name."</h3>"; 
                    }
                    else{
                        echo "<h3>".$name.','.$qualification."</h3>";
                    }
                    echo"<img src='image/members/img_".$name.".jpg' style='height:100px'>";
               
                    if ($FB != "#"){ 
                        echo "<p><a href=" .$FB. "> Facebook </a></p><br>";
                    }
                    if ($tw != "#"){
                        echo "<p><a href=" .$tw. "> Twitter </a></p>";
                    }
                
                    echo"<p>". $fill."</p>";
                    echo"</div>";
                }
                else{
                    echo "<div class='col-sm'>";
                    if ($qualification=="#"){
                        echo "<h3>".$name."</h3>"; 
                    }
                    else{
                        echo "<h3>".$name.','.$qualification."</h3>";
                    }
                    echo"<img src='image/members/img_".$name.".jpg' style='height:100px'>";
           
                    if ($FB != "#"){ 
                        echo "<p><a href=" .$FB. "> Facebook </a></p><br>";
                    }
                    if ($tw != "#"){
                        echo "<p><a href=" .$tw. "> Twitter </a></p>";
                    }
            
                    echo"<p>". $fill."</p>";
                echo"</div>
                    </div>";
                }

            }
        ?>
    </div>
</div>


<div class="main">
    <div class="container mt-3">
        <h2 id="formalphd">Formel PhD students</h2>
        <p></p>
        <?php
            $path="C:/xampp/htdocs/labWebsite/bionapdata";
            $array=scandir($path."/Former PhD and Post-Docs/");
            $list=count($array);
            for ($i=2; $i<$list; $i++){
                $fil=fopen($path."/Former PhD and Post-Docs/".$array[$i]."/data.txt","r");
                $data=fgets($fil);
                $name=strtok($data,"`");
                $qualification=strtok("`");
                $email=strtok("`");
                $webpage=strtok("`");
                $FB=strtok("`");
                $tw=strtok("`");
                $fill=strtok("`");
                fclose($fil);
            
        

                if ($i%2 == 0){
                    echo "<div class='row'>
                        <div class='col-sm'>";
                    if ($qualification=="#"){
                        echo "<h3>".$name."</h3>"; 
                    }
                    else{
                        echo "<h3>".$name.','.$qualification."</h3>";
                    }
                    echo"<img src='image/members/img_".$name.".jpg' style='height:100px'>";
               
                    if ($FB != "#"){ 
                        echo "<p><a href=" .$FB. "> Facebook </a></p><br>";
                    }
                    if ($tw != "#"){
                        echo "<p><a href=" .$tw. "> Twitter </a></p>";
                    }
                
                    echo"<p>". $fill."</p>";
                    echo"</div>";
                }
                else{
                    echo "<div class='col-sm'>";
                    if ($qualification=="#"){
                        echo "<h3>".$name."</h3>"; 
                    }
                    else{
                        echo "<h3>".$name.','.$qualification."</h3>";
                    }
                    echo"<img src='image/members/img_".$name.".jpg' style='height:100px'>";
           
                    if ($FB != "#"){ 
                        echo "<p><a href=" .$FB. "> Facebook </a></p><br>";
                    }
                    if ($tw != "#"){
                        echo "<p><a href=" .$tw. "> Twitter </a></p>";
                    }
            
                    echo"<p>". $fill."</p>";
                echo"</div>
                    </div>";
                }

            }
        ?>
    </div>
</div>


<div class="main">
    <div class="container mt-3">
        <h2 id="formelstudents">Formel PhD students</h2>
        <p></p>
        <?php
            $path="C:/xampp/htdocs/labWebsite/bionapdata";
            $array=scandir($path."/former/");
            $list=count($array);
            for ($i=2; $i<$list; $i++){
                $fil=fopen($path."/former/".$array[$i]."/data.txt","r");
                $data=fgets($fil);
                $name=strtok($data,"`");
                $qualification=strtok("`");
                $email=strtok("`");
                $webpage=strtok("`");
                $FB=strtok("`");
                $tw=strtok("`");
                $fill=strtok("`");
                fclose($fil);
            
        

                if ($i%2 == 0){
                    echo "<div class='row'>
                        <div class='col-sm'>";
                    if ($qualification=="#"){
                        echo "<h3>".$name."</h3>"; 
                    }
                    else{
                        echo "<h3>".$name.','.$qualification."</h3>";
                    }
                    echo"<img src='image/members/img_".$name.".jpg' style='height:100px'>";
               
                    if ($FB != "#"){ 
                        echo "<p><a href=" .$FB. "> Facebook </a></p><br>";
                    }
                    if ($tw != "#"){
                        echo "<p><a href=" .$tw. "> Twitter </a></p>";
                    }
                
                    echo"<p>". $fill."</p>";
                    echo"</div>";
                }
                else{
                    echo "<div class='col-sm'>";
                    if ($qualification=="#"){
                        echo "<h3>".$name."</h3>"; 
                    }
                    else{
                        echo "<h3>".$name.','.$qualification."</h3>";
                    }
                    echo"<img src='image/members/img_".$name.".jpg' style='height:100px'>";
           
                    if ($FB != "#"){ 
                        echo "<p><a href=" .$FB. "> Facebook </a></p><br>";
                    }
                    if ($tw != "#"){
                        echo "<p><a href=" .$tw. "> Twitter </a></p>";
                    }
            
                    echo"<p>". $fill."</p>";
                echo"</div>
                    </div>";
                }

            }
        ?>
    </div>
</div>
</body>
</html>