<?php

require 'vendor/autoload.php';

$qrcode = new Zxing\QrReader("images/603610118fafa.png");

$text = $qrcode->text();

echo $text;