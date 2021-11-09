<?php

header("Content-Type: image/png");

$img = imagecreatetruecolor(200, 200);

$blanco = imagecolorallocate($img, 255, 255, 255);
$black = imagecolorallocate($img, 0, 0, 0);
$red = imagecolorallocate($img, 255, 0, 0);


$rgb = str_split(substr($_GET['color'], 1), 2);
//$rgb = array_map("hexdec", $rgb);
$r = hexdec($rgb[0]);
$g = hexdec($rgb[1]);
//$b = hexdec($rgb[2]);

$user_color = imagecolorallocate($img, 100, 200, 100);

//$user_color = imagecolorallocate($img, "0xFF", "0xFF", "0xFF");

imagefill($img, 0, 0, $blanco);

imagefilledrectangle($img, 50, 50, 150, 150, $user_color);

imagerectangle($img, 50, 50, 150, 150, $black);

imagepng($img);

?>