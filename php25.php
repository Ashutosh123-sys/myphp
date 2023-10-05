<?php
/*
if  (file_exists("for.php")){
    echo "the file exists";
} else {
     echo "the file does not exists";
}*/
/*$mfile=fopen("for.php","r") or die("File not pressent in path");
// echo fread($mfile,filesize("for.php"));
while(!feof($mfile)){
    // echo fgets($mfile);
    echo fgetc($mfile);
}
*/
$mfile=fopen("practice.php","a") or die("File not pressent in path");
$txt="Ashutosh";
fwrite($mfile,"\n");
fwrite($mfile,$txt);
fwrite($mfile,"\n");
$txt="Shukla";
fwrite($mfile,$txt);
fclose($mfile);

?>