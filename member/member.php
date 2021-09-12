<?php require "path.php" ?>
<?php
$folder = "/grad/";
$array = scandir($pathmem . $folder);
$list = count($array);
for ($i = 2; $i < $list; $i++) {
    $fil = fopen($pathmem . $folder . $array[$i] . "/data.txt", "r");
    $data = fgets($fil);
    $name = strtok($data, "`");
    $qualification = strtok("`");
    $email = strtok("`");
    $webpage = strtok("`");
    $FB = strtok("`");
    $tw = strtok("`");
    $fill = strtok("`");
    fclose($fil);
    $image = "../image/members/img_" . $name . ".jpg";
    $temp = file_get_contents("template.php");
    $search = array("nname", "eemail", "iimage");
    $replace = array($name, $email, $image);
    $str = str_replace($search, $replace, $temp);
    echo $str;

    $filename = $path . "/member/" . $array[$i] . ".php";
    echo $filename;
    $file = fopen($filename, "w") or die("Unable to open file!");
    echo fwrite($file, $str);
    fclose($file);
    //file_put_contents($folder . "php", $str);
}
