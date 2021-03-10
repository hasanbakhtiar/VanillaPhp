<?php
$dizi = array("Azer","Qelbi","Ruslan","Faiq","Zaman");
//sort() A-Z e kimi siralamaq ucun funksiyadir.Bu funksiyada boyuk herfler kicik herflerden once gelir.Bu funksiyada reqemleride boyukden kiciye duzmek mumkundur.
sort($dizi);
foreach ($dizi as $a) {
    echo $a."<br>";
}
echo var_dump($dizi);

$food = array('pomidor' => 2, 'badimcan' => 1, 'erik' => 5, 'ciyelek' => 10);
asort($food);//asort()boyukden kiciye reqem ardicilligina gore siralayir
arsort($food);//arsort()kicikden boyuka reqem ardicilligina gore siralayir
foreach($food as $j => $b){
    echo "<br>".$j."-".$b."<br>";
}

$food1 = array('pomidor' => 2, 'badimcan' => 1, 'erik' => 5, 'ciyelek' => 10);
ksort($food1);//ksort() A-Z elifba ardicilligina gore siralayir
krsort($food1);//krsort() Z-A elifba ardicilligina gore siralayir
foreach($food1 as $j1 => $b1){
    echo "<br>".$j1."-".$b1."<br>";
}

$dizi1 = array(5,1,7,0,4,2);
//rsort() Z-A e kimi siralamaq ucun funksiyadir.Bu funksiyadareqemleri de kicikden boyuka duzmek mumkundur.
rsort($dizi1);
foreach ($dizi1 as $a1) {
    echo $a1."<br>";
}

$addlar = array("Ali","Eldar","Movlud","Namiq","Elgul");
shuffle($addlar);//rast gele melumatlari uze cixardir.
for ($i=0; $i < 5; $i++) { 
   echo $addlar[$i]."<br>";
}


//arraya yeni element artirma funksiyasi - array_push()

$qovluq = array();
echo var_dump($qovluq);
for ($i=0; $i < 4; $i++) { 
   array_push($qovluq,$i);//array_push(1hansi array, 2artlrilacaq elemet);
}
echo var_dump($qovluq);

//count() ve sizeof() funksiyalari arrayin icindeki elementleri saymaq ucundur
$addlar1 = array("Ali","Eldar","Movlud","Namiq","Elgul");
echo "<br>".count($addlar1);
echo "<br>".sizeof($addlar1);

//array_count_values() funksiyasi bir arrayda olan eyni elementlerin sayini gosterir

$addlar2 = array("Ali","Eldar","Ali","Movlud","Namiq","Elgul","Namiq");
echo var_dump($addlar2);
$er = array_count_values($addlar2);
echo var_dump($er);

//extract() funksiyasi array'da acar sozlerin icindeki elementleri gostermek ucundur
$meyveler = array('nar' => '5manat', 'heyva' => '10 manat', 'encir' => '15manat');
extract($meyveler);
echo "<br>".$nar;


?>
