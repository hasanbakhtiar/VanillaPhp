<?php
//Operatorlar
/*Aritmatik operatorlar 
Bunlara aiddir: 
toplama(+),
çıxma (-),
vurma(*),
bölmə(/),
modul(%)-yəni bölgü zamanı qalan qalığı
göstərir. 
Misallar:
*/
$a = 10;
$b = 5;

echo "Aritmatik operatorları <br>";
echo $a+$b."<br>";
echo $a-$b."<br>";
echo $a*$b."<br>";
echo $a/$b."<br>";
echo $a%$b."<br>";

/*Kararkter Katarı operatoru
Buna aiddir:
nöqtə(.)-birləşdimə,
*/

echo "<br>Kararkter Katarı operatorları <br>";
$c = "Hasan";
$p = " Bakhtiar";

echo $c.$p."<br>";


/* Birləşik Atama operatorlar
Buna aiddir
+=
-=
*=
/=
%=
*/
echo "<br>Birləşik Atama operatorları <br>";
$i = 5;
$e = 10;
echo $i +=$e; // $i = $i + $e
echo "<br>";
echo $i -=$e; //$i = $i - $e
echo "<br>";
echo $i *=$e; //$i = $i * $e
echo "<br>";
echo $i /=$e; //$i = $i / $e
echo "<br>";
echo $i %=$e; //$i = $i % $e
echo "<br>";
echo $i .=$e; //$i = $i.$e
echo "<br>";

/*Öndən və sondan artırma və ya əksiltmə
Buna aiddir
 --
 ++
 */

 $q = 5;
 $j = 5;
 echo ++$q."<br>";
 echo --$j."<br>";

 // Referanslar ampersant'la(&) işarə edilir.
 $ab = 5;
 $az = &$ab;
 $ab = 7;
 echo $ab."<br>";
 echo $az;

 /*Qarşılaşdırma operatorları
 Bunlara aiddir
 Bərabər (=)
 1= atamaq bir məlumatı dəyişkənin içinə yerləşdirmək üçün istifadə olunur.
 2== məlumatların bir birinə bərabər olması üçün istifadə olunur(qeyd:tipləri xaric).
 3=== məlumatların həm özləri həm də tipləri bir-birinə bərabər olsun deyə istifadə olunur.
 Nida bərabər(!=)isə bərbərliyin olmadığını bildirir.
 Kiçikdir(<)
 Böyükdür(>)
 Kiçikbərabərdir(<=)
 Bğyükbərabərdir(>=)
*/
$sd = 5;
$sa = 10;
$sd == $sa;
$sd === $sa;
$sd != $sa;
$sd !== $sa;
$sd > $sa;
$sd < $sa;
$sd <= $sa;
$sd >= $sa;

/*Məntiqi operatorlar
Bunlara aiddir:
!(not)
&&(və)
||(ya)
AND(və)
OR(ya)

Misal olaraq aşağıdakı kimi:
&& = $a>0 && $a<10;
|| = $av == "yaxshi" || $bk == "ela";
*/
/*Üçlu operatorlar
kosul ? true : false*/
echo "<br>Üçlu operatorlar<br>";
$pl = 3;
$netice = ($pl>4 ? 'pl 4dən böyükdür.' : 'pl 4dən kiçikdir.');
echo $netice;











?>