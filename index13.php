<?php
/*
r	Dosyayı okumak için açar. (read)
r+	Dosyayı hem okumak hem de yazmak için açar. (read)
w	Dosyayı yazmak için açar. Var olan içeriği siler (write)
w+	Dosyayı hem yazmak hem de okumak için açar. Var olan içeriği siler, baştan yazar. (write)
a	Dosyayı yazmak için açar. Var olan içeriği silmez sonuna ekler. (append)
a+	Dosyayı hem yazmak hem de okumak için açar. Var olan içeriği silmez sonuna ekler. (append)
x	Dosyayı oluşturur ve yazmak için açar. Eğer dosya zaten varsa FALSE döner.
x+	Dosyayı oluşturur, yazmak ve okumak için açar. Eğer dosya zaten varsa FALSE döner.

*/
$ac = @fopen("metn.txt", "a"/*bu kipdir */);//fopen() dosyani acmaq ucundur.

if(!$ac){
    echo "melumat acilmadi";
}
$i = "Baku\n";
fwrite($ac, $i);//fwrite() funksiyasi dosyani yazmaq ucundur.
fclose($ac); //fclose() funkiyasi dosyan baglamaq ucundur.

$aj = file_get_contents("metn.txt");//metnin icine daxil olur.
$aj .= "Hasan\n";
file_put_contents("metn.txt",$aj); //metnini icine melumati yerlesdirir.





?>