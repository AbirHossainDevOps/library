<?php 
session_start(); 
$text = 99999; 
$_SESSION["vercode"] = $text; 
$height = 25; 
$width = 65;   
$font_size = 14; 
imagestring($image_p, $font_size, 5, 5, $text, $white); 
imagejpeg($image_p, null, 80); 
?>
