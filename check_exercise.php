<?php
$myfile = fopen("main.py", "r") or die("Unable to open file!");
echo fread($myfile,filesize("main.py"));
fclose($myfile);
?>