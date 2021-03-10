<?php
// fgetcsv funksiyasi
$ac = fopen("sifaris.txt", "r");

while ($see = fgetcsv($ac, 999, "\t")) {
    $say = count($see);
    for($i=0; $i<$say; $i++){
        echo $see[$i]."<br/>";
    }
    
}

//readfile() fayli oxumaq ucundur
readfile("sifaris.txt");

//fpassthtru() fayli oxumaq ucundur bunun ferqi odur ki il once fayli acmaq lazimdir sonra funksiya calisir
$aj = fopen("sifaris.txt", "r");
fpassthru($aj);

//file() funksiyasi
echo file("sifaris.txt");

//file_get_contents() funksiyasi
echo file_get_contents("sifaris.txt");

//file_exists() faylin movcudluqunu yoxlayir
if(file_exists("sifaris.txt")){
    echo "Fayil movcuddur";
}else{
    echo "Fayil movcud deyil";
    
}

// filesize() faylin olcusunu hesablayib gosterir.
echo filesize("sifaris.txt");

//touch() yeni fayil yaradir.
$new = touch("demo.css");
if(!$new){
    echo "yeni fayl yaradilmadi"
}

//unlink() fayli silir.
$del = unlink("demo.css");
if(!$del){
    echo "fayl siline bilmedi"
}

?>