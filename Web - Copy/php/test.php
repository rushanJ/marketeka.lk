<?php
$myfile = fopen("76.png", "r") or die("Unable to open file!");
echo fread($myfile,filesize("76.png"));
$data= fread($myfile,filesize("76.png"));
fclose($myfile);
$myfile = fopen("newfile.png", "w") or die("Unable to open file!");
$txt = $data;
fwrite($myfile, $txt);
fclose($myfile);
?>