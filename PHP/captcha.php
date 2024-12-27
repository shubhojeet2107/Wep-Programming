<!-- A php program to generate a captcha code -->



<?php
// Generate a random CAPTCHA code
$captcha = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'), 0, 6);

// Display the CAPTCHA code
echo "CAPTCHA Code: " . $captcha;
?>
