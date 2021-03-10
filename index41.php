<?php

// Date() funksiyasi
echo date("d.m.Y, H:i")."<br>";

//Localtime() funksiyasi

$zaman = localtime(time(), false);
print_r($zaman);
echo "<br>";
echo $zaman[5];

//getdate() funksiyasi
$vaxt = getdate();
echo "<br>";
print_r($vaxt);

//setlocale() funksiyasi movcud vaxti ayarlayir
setlocale(LC_TIME, "az_AZ", "az", "azeri");
echo "<br>";
//strftime() funksiyasi
echo strftime("%d %B %Y");

// date_default_timezone_set(),date_default_timezone_get() funksiyasi
echo "<br>";
date_default_timezone_set("Asia/Baku");
echo date_default_timezone_get();

// date.timezone = 'Asia/Baku';
?>
<?php
// microtime() funksiayasi
$baslangic = microtime(TRUE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p> deneme </p> <br><br>
</body>
</html>
<?php $bitis = microtime(TRUE);
$sonuc = $bitis-$baslangic;
echo "Bu sayfa {$sonuc} saniyede yuklemisdir..";
?>

