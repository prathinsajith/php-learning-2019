<?php
$myfile=fopen("m1.php","r") or die("unable to openfile");
echo fread($myfile,filesize("m1.php"));
fclose($myfile);
?>