<?php 
//FUNKISYALAR
//funksiya yazmaq ucun function name() sozunu yazmaliyiq ve ad vermeliyik amma adlar boyuk ve kicik herfe duyarli deyil.
//funksiya icinde funksiya istifade ede bilirik tanimlanmis funksiyalari bele

// function ad(){
//         echo "Hello World";
// }
//  ad();

function a($c,$q=5){
        $total = strlen($c);
    if($total > $q){
                $c = substr($c,0,$q)."...";//ders index19.php
    }
    return $c;//ifadeni geri dondurmek ucundur.
}

$b = "Menim adim Hasan size ders kecirem.Bu kurs size PHP'nin temel bilgilerini verir.";

echo a($b,20);

?>