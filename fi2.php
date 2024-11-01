<?php
$myfile=fopen("new.txt","w") or die("unable to open!");
$txt="hai /n";
fwrite($myfile,$txt);
$txt="my name is";
fwrite($myfile,$txt);
$txt="anju";
fwrite($myfile,$txt);
fclose($myfile);
?>