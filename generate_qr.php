<?php
// Include the QR Code library (e.g., PHP QR Code)
include('phpqrcode/qrlib.php');

// Generate the QR code with a URL (the page URL where form data is displayed)
$url = "http://localhost/zhiroweb/index.html"; // Change to your actual website URL
QRcode::png($url);
?>
