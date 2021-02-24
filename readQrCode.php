<?php

require 'vendor/autoload.php';
require 'vendor/khanamiryan/qrcode-detector-decoder/lib/QrReader.php';

$qrcode = new Zxing\QrReader("images/603610118fafa.png");

$text = $qrcode->text();

echo $text;