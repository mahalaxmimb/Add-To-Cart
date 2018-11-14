<?php
session_start();
$possible = '0123456789abcdfghjkmnpqrstvwxyz';
$text = '';
$i = 0;
while($i < 5) { 
$text.=substr($possible, mt_rand(0,strlen($possible)-1), 1);
	$i++;
}

$_SESSION["vercode"] = $text; 
$height = 40;
$width = 120;
  
$image_p = imagecreate($width, $height);

$black = imagecolorallocate($image_p, 0, 0, 0);
$white = imagecolorallocate($image_p, 255, 255, 255);

imagestring($image_p, 10, 20, 10, $text, $white); 
imagejpeg($image_p, null, 80); n//null -> location of the file where the img saved.

?>


