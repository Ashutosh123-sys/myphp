<?php
$mfile=fopen("for.php","r") or die("File not pressent in path");
echo fread($mfile,filesize(for.php));
?>