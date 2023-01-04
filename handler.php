<?php
$file1 = 'function.txt';
$download_rate = 20.5;
if(file_exists($file1) && is_file($file1))
{

    $file = fopen($file1, "r");
    while(!feof($file))
    {
        echo fread($file, round($download_rate * 1024));
    }
    fclose($file);}
else {
   die('ERROR');
}

?>
