<?php
//fgets() funksiyasi txt metnleri oxumaq ucun istifade olunur
$ac = fopen("sifaris.txt", "r");
$oxu = fgets($ac,999);
echo $oxu;

//fgtess() funksiyasi butun php ve html kodlatrini yox edir sadece metnleri saxlayir
//eger fgetss() funksiyasinda istisna kod etmek isteyirsinizse 3cu elementi artiririq misal
//fgetss("metn.txt",999,<br>/istisna etdiyimiz kod);

$oxu = fgetss($ac,999,"<br>");
echo $oxu;




?>