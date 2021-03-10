<?php

$a = "Salam";
$b = 3;
$c = 10;
echo gettype($a)."<br>";//gettype() funksiyası elementin tipini təyin edir.
settype($b, "string");//settype() funksisayası elementin tipinini dəyişmək üçün istifadə olunur.
echo gettype($b)."<br>";
echo gettype($c)."<br>";

$e = 55.5;

if(is_double($e)){
    echo "bu reel sayidir";
}else{
    echo "bu reel sayi deyildir";
}

$i = 5;
unset($i);//deyiskeni silen funksiya

if(isset($i)){ //isset() funksiyasi deyiskenin varligini yoxlayir.
    echo "<br>Bele deyisken var";
}else{
   echo "<br>yoxdur";
}

$j = "";

if(empty($j)){ //empty() funksiyasi deyiskenin dolu ya bosh olduqunu yoxlayir.
    echo "<br> deyisken bos";
}else{
   echo "<br>deyisken dolu";
}

$xc = "sds";
$xz = "";

if(empty($xc) || empty($xz)){ //empty() funksiyasi deyiskenin dolu ya bosh olduqunu yoxlayir.
    echo "<br> deyisken bos";
}else{
   echo "<br>deyisken dolu";
}

$yx = "    Baku";
echo "<br>".$yx.trim($yx); //trim() funksiyasi biraxilmis bosluqlari aradan qaldirir.
 

?>