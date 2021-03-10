<?php 
//ayarlar dosyaso
include ("ayarlar.php");
//sayfa parametresi
$sayfa = @$_GET["s"];
//eqer sayfa boşsa ya da sayi deyilse
if (empty($sayfa) || !is_numeric($sayfa)) {
    $sayfa = 1;
}
//kacar kacar gosterilecek
$kacar = 2;
//toplam kayit sayisi
$ksayisi = mysql_num_rows(mysql_query("select id from mesajlar"));
//sayfa sayisini bulalim
$ssayisi = ceil($ksayisi/$kacar);//ceil() funksiyasi reqemleri yuvarlasdirir
//nerde baslasin
$nereden = ($sayfa*$kacar) -$kacar;

$bul = mysql_query("select * from mesajlar oreder by id desc limit $nereden,$kacar");
while ($goster = mysql_fetch_array($bul)) {
    extract($goster);
    echo "<div><strong>Gonderen:</strong> {$yazan}<br>
    <strong>Mail:</strong> {$eposta}<br>
    <strong>Mesaj:</strong> {$mesaj}</div>";
}
for ($i = 1; $i<=$ssayisi; $i++){
    echo "<a href='sayfala.php?={$i}'"
    if ($i == $sayfa) {
        echo "class='aktiv'";
    }
    echo">{$i}</a>";
}

?>