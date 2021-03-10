<?php

//opendir() funksiyasi bir qovlugu gormek ve ya oxumaq meqsedi acmaq ucundur
//readir() funksiyasi bir qovlugu oxmaqimiz ucundur
//closedir() funksiyasi qovlugu baqlamaq ucundur

$dizin = "dosya/";
$ac = opendir($dizin);
while ($dosya = readdir($ac)){
    echo "<li>{$dosya}</li>";
}

closedir($ac);

?> 