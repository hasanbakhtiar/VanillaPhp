<?php
//formdan gələn məlumatları alaq
//$_GET (link panleində məlumatlar görsənir)
//$_POST (link panleində məlumatlar görsənmir)
//$_REQUEST (<form method=""> bölümündə həm $_GET həm də $_POST işlənə bilir. )

$adsoyad = $_POST["adsoyad"];
$yas = $_POST["yas"];
$sehir = $_POST["sehir"];

echo "Salam, ".$adsoyad." Sayta ".$sehir." şəhərindən qatılırsız və ".$yas." yaşındasız..";


?>