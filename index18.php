<?php
if($_POST){

    //trim() funksiyasi boshluqlari temizleyir
    //ltrim() funksiyasi soldaki bosluqlari temizleyir
    //rtrim() funksiyasi  sagdaki bosluqlari temizleyir
        $a = trim($_POST["a"]);
        if (empty($a)) {
            echo "Bos ola bilmez";
        }else {
            echo "gonderildi";
        }
}else {
   echo '<form action="" method="post">
    <input type="text" name="a">
    <input type="submit" value="gonder">
    </form>';
    
    
}
//nl2br() funksiyasi her yeni setir basi ara (<br>) buraxir.

$ara = "Lorem Ipsum is simply dummy text of the printing and

 typesetting industry. Lorem Ipsum has been the industry's

  standard dummy text ever since the 1500s, when an unknown
  a







   printer took a galley of type and scrambled it to make a
    type specimen book. It has survived not only five centuries, 
    but also the leap into electronic typesetting, remaining essentially
     unchanged. It was popularised in the 1960s with the release of Letraset 
     sheets containing Lorem Ipsum passages, and more recently with desktop 
publishing software like Aldus PageMaker including versions of Lorem Ipsum.

";

 echo nl2br($ara);

 //printf() funksiyasi ekrana yazdirmaq ucun istifade olunur. Bunun ferqi true/false dondurur.

 $aj = "Bakhtiar";
 echo "Hasan ".$aj."<br>"
 ;
 printf("Hasan %s",$aj /*deyiselecek karakter katari */); //%s bu bir donusum sipisfasyondur yeni bir karakter katari ile deyisdir demek

 /*%% - Returns a percent sign
%b - Binary number
%c - The character according to the ASCII value
%d - Signed decimal number (negative, zero or positive)
%e - Scientific notation using a lowercase (e.g. 1.2e+2)
%E - Scientific notation using a uppercase (e.g. 1.2E+2)
%u - Unsigned decimal number (equal to or greather than zero)
%f - Floating-point number (local settings aware)
%F - Floating-point number (not local settings aware)
%g - shorter of %e and %f
%G - shorter of %E and %f
%o - Octal number
%s - String
%x - Hexadecimal number (lowercase letters)
%X - Hexadecimal number (uppercase letters) */
 $b = 2.1;
 printf("<br>Toplam: %.1f", $b);// burada %.1(2,3,4,ve.s)f reqemin arxasinca yazilan reqmqlerin sayini idare edi.

 $c = "Hasan";
 printf("<br>Toplam: %.1f <br> Alici: %s", $b,$c);//buradaki ardicilliq eyni olamlidir ki reqemler bir birini tapa bilsin.

 //eger speclerle reqlqmlerin yerini deyiserken faiz(%) isaretinden sonra necenci olacaqsa onu yazmaliyiq ve ardindan ters slas(\) ve bir de dollar($) isareti  yazmaliyiq
 printf("<br>Toplam: %2\$.1f <br> Alici: %1\$s <br>", $c,$b);

 //strtoupper() funksiyasi butun herfleri boyutmek ucun istifade olunur
 $z = "Hasan";
 echo strtoupper($z)."<br>";

 //strtolower() funksiyasi butun herfleri kiciltmek ucun istifade olunur
 $x = "HASAN";
 echo strtolower($x)."<br>";

 $xz = "lorem ipsum is simply dummy text of the printing";
//ucfirst() funksiyasi cumlenin yanliz ilk sozunun ilk herfini boyudur.
 echo ucfirst($xz)."<br>";

//ucwords() funksiyasi cumlenin her sozunun ilk herfini boyudur.
 echo ucwords($xz)."<br>";
 
 // addcslashes() funksiyasi dirnaq isharelrinin yanina slash elave edir 

 $zm = 'lorem ipsum is simply dummy "text" of the printing';
 echo addslashes($zm);

  // stripslashes() funksiyasi dirnaq isharelrinin yanindaki slashlari silir. 

  $zb = 'lorem ipsum is simply dummy \"text\" of the printing';
  echo "<br>".stripslashes($zb);






?>