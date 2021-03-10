<?php

$a = "hasan.doctype@gmail.com";
echo $a; 
//explode() funksiyasi array sistemi ile ayirma islerini gorur.
$b = explode("@",$a);
if ($b[1] = "gmail.com"){
    echo "<br>Bu dogru mail unvani";
}else{
    echo "Bu unvan dogu deyil"."<br>";
}


$etiket = "psd, css, sass, php, js, flutter ";
$ayir = explode(",", $etiket);
foreach($ayir as $c){
    echo $c."<br>";
}
//implode() funksiyasi array sistemi ile birlesdirme islerini gorur.

$birlesdir = implode("#",$ayir);
echo $birlesdir;

//substr() funksiyasi sozlerin icinden istediyimiz hisseni almaq ucun istifade olunur.
//portotipi: substr(deyisken,baslangic,limit);
$s = "loremimpsum";
echo substr($s,4,5);//axidan sayi ucun menfi(-) istifade olunur.

//strlen() funksiyasi deyiskenin icinde ne qeder element istifade olunub onu hesablayir uzunluqunu yeni
$za = "123";
echo "<br>".strlen($za);

//strstr() funksiyasi ifade icinde ifade axtarmaq ucun istifade olunur.
//portotipi: strstr(axtracagimiz yer,axtaracagimiz element);
$zx = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
echo "<br>".strstr($zx,"text");

//strpos() funsiyasi axtardiginiz ifadenin necenci setirden sonra basladigini gosterir.
$zc = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
echo "<br>".strpos($zc, "ext");

//str_replace() funksiyasi istediyimiz ifadeni deyismek ucun istifade olunur
//portotipi: str_replace(deyiseceyimiz ifade,ne ile deyisecek, haradaki ifade deyisedcek);
$renq = "<font color='<<boya>>'>Lorem</font>";
echo "<br>".str_replace("<<boya>>","red",$renq);

//cox ifadenin yerini deyismek bunu array vasitesi ile edirik
$az = "Salam men Hasan PHP dersleri kecmekden zovq aliram.";
$tap = array("PHP","dersleri","kecmekden");
$deyisdir = array("JS","teliminin","teshkilinden");
echo "<br>".str_replace($tap,$deyisdir,$az);




?>