<?php

//Goruntu tanimlayicisini qurmaq
$tuval = ImageCreateTrueColor(400,200);

//Renkleri Belirtmek
$kara = ImageColorAllocate($tuval, 0, 0, 0);
$sari = ImageColorAllocate($tuval, 255, 255, 254);

//Tuvali Boyuyalim
ImageFill($tuval, 0, 0, $kara);

//cizgi cizmek
ImageLine($tuval, 0, 0, 400, 200, $sari);

//Yazi Yazmaq
$yazi = rand(0, 9999999);
ImageString($tuval, 5, 270, 175, $yazi /*"Bura soz yaza bilirik"*/, $sari);

//Ciktisini alalim
header("Content-type: image/png");
ImagePng($tuval);

?>