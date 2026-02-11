<?php
echo "<h3>File Modes Demo</h3>";

$f = fopen("mode.txt","w");
fwrite($f,"Written using w mode\n");
fclose($f);

$f = fopen("mode.txt","a");
fwrite($f,"Append using a mode\n");
fclose($f);

$f = fopen("mode.txt","r");
echo nl2br(fread($f,filesize("mode.txt")));
fclose($f);
?>