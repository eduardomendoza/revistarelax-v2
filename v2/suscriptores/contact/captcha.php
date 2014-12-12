<?php
//captcha.php


session_start();
function randomText($length) {
    $pattern = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for($i=0;$i<$length;$i++) {
      $key .= $pattern{rand(0,45)};
    }
    return $key;
}

$_SESSION['tmptxt'] = randomText(4); //Cantidad de caracteres
$captcha = imagecreatefromgif("bgcaptcha.gif");
/*
$colText = imagecolorallocate($captcha, 0xFF, 0xff, 0xff);
$tamanno= 9;
imagestring($captcha, $tamanno, 3, 5, $_SESSION['tmptxt'], $colText);
*/
$fuente = 'arial.ttf';
$blanco = imagecolorallocate($captcha, 255, 255, 255);

imagettftext($captcha, 19, 0, 8, 22, $blanco, $fuente, $_SESSION['tmptxt']);



//header("Content-type: image/gif");
header("Content-type: image/jpeg");
//imagegif($captcha);
imagejpeg($captcha);
?>