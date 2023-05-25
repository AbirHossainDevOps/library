<?php
header("Content-Type: image/png");
session_start(); 
$text = 99999; 
$_SESSION["vercode"] = $text; 
?>
