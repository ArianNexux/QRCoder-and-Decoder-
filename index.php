<?php
// Include the qrlib file 
include 'phpqrcode/qrlib.php'; 
$text = uniqid(); 
  
// $path variable store the location where to  
// store image and $file creates directory name 
// of the QR code file by using 'uniqid' 
// uniqid creates unique id based on microtime
$path = 'images'; 

if(!is_dir($path)) 
    mkdir($path,0755);

$file = $path."/".uniqid().".png"; 
  
// $ecc stores error correction capability('L') 
$ecc = 'L'; 
$pixel_size = 10; 
$frame_size = 10; 
  
// Generates QR Code and Stores it in directory given 
QRcode::png($text, $file, $ecc, $pixel_size, $frame_size); 
  
?>