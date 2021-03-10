<?php 
include("ayarlar.php");

$kelime = $_POST["kelime"];

if (empty($kelime)) {
    echo '<font color="red">Lutfen bios birakmayin..</font>';
}else{
    $bul = mysql_query("select * from mesajlar where yazan LIKE '%kelime%'");
$toplam = mysql_num_rows($bul);

if($toplam > 0){
    echo "<font color ='green'Toplam {$toplam} sonuc bulundu!!</font><br>";
    while($goster = mysql_fetch_array($bul)){
        extract($goster);
        echo "<div class = 'yazan'";
        if($onay == 0){echo 'style = "background-color: #f1f1d3';}
        echo " <strong>Gonderen:</strong> {$yazan}<br>
        <strong>Mail:</strong> {$eposta}<br>
        <strong>Mesaj:</strong> {$mesaj}
        </div>";
    } 
}else {
    echo '<font color="red">Hic sonuc bulunamadi!</font>';
}
}
?>