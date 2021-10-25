<?php 
    $file = file_get_contents("prl.bib");
    $array = preg_split("/\},/", $file);
    echo $array[1]
?>
