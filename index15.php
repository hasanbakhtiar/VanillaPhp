<?php
//array
$i = "Baku";
//array'lar birden chox melumati ozunde saxlaya bilen bir sistemdir
//arraylarin ilk index nomresi 0-dir.
$a = array("baku","seki","aqdash",70,true);
$a[5]="lenkaran<br>";
echo $a[5];
//count() funksiyasi array-in ichinde ne qeder element var onu gosterir.
$d = count($a);

//foreach dongusu
// for($w=0; $w<$d; $w++){
//     echo $a[$w]."<br>";
// }
foreach ($a as $c){
    echo $c."<br>";
}

//arrayin icinde elementleri adlandirmasi
$dizi = array(
        'ad' => "Hasan",
        'mekteb' => 295,
        'sinif' => "11b"
);

echo $dizi["sinif"];
echo "<br>";

foreach ($dizi as $ps => $pb){
    echo $ps." : ".$pb."<br>";
}

$folder = array(
            array("Hasan",295,"11b"),
            array("Eldar",293,"11a"),
            array("Samil",130,"11c")
);
echo var_dump($folder);//arrayin qurulusunu gosterir.

//ic ice olan arraylarde elementin tapilmasi
echo "<br>".$folder[0][0];

//dongu ile arraylari istifade etme

$folder1 = array(
    array("Hasan",295,"11b"),
    array("Eldar",293,"11a"),
    array("Samil",130,"11c")
);

for ($i=0; $i < 3; $i++) { 
    for ($x=0; $x < 3; $x++) { 
        echo $folder1[$i][$x]."<br>";
    }

}


?>