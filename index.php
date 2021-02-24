<?php

include 'phpqrcode/qrlib.php'; 
$text = "Arian D."; 

$path = 'images'; 

if(!is_dir($path)) 
    mkdir($path,0755);

$file = $path."/".uniqid().".png"; 
  
$ecc = 'L'; 
$pixel_size = 10; 
$frame_size = 10; 
  
QRcode::png($text, $file, $ecc, $pixel_size, $frame_size); 
  
?>