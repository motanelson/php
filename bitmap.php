<?php
$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 0, 255, 0);
imagestring($im, 1, 5, 0,  'A Simple Text String', $text_color);
header('Content-Type: image/jpeg');
imagejpeg($im);
imagedestroy($im);
?>
