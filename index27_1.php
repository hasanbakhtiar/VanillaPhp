<?php include("ayarlar.php");?>
<html>
<head>
<title>Hasan.com</title>
<style>
.yazan{border: 2px solid #ddd; padding: 10px; margin-bottom:10px;}
</style>
</head>
<body>
<?php

 if ($_POST) {
     $adsoyad = $_POST["adsoyad"];
     $eposta = $_POST["eposta"];
     $mesaj = $_POST["mesaj"];

     if (!empty($adsoyad) && !empty($eposta) && !empty($mesaj)){
         //veriler artirsin
         $artir = mysqli_query("insert into mesajlar (yazan,eposta,mesaj,onay) values('$adsoyad','$eposta','$mesaj',0)");
         if($artir){
             echo "<font color='green'>Artirildi</font>";
         }else{
             echo "<font color='red'>Artirilmadi</font>";
         }
     }

 }else{

    //verileri cekme
    //mysql_query()
    //mysql_fetch_array()

    $bul = mysql_query("select * from mesajlar WHERE onay = '1' && eposta='hasan.doctype@gmail.com' ORDER BY id DESC LIMIT 1,2");
    //$toplam = mysql_num_rows($bul); datani hesablamaq ucun
 while($goster = mysql_fetch_array($bul)){
    echo "<div class='yazan'>
    <strong>Gonderen:</strong> {goster["yazan"]}<br>
    <strong>Mail:</strong> {goster["eposta"]}<br>
    <strong>Mesaj:</strong> {goster["mesaj"]}<br>
    <a href = 'duzenle.php?id = {$id}'>[Bu mesaji duzenle]</a> | <a href = 'inedx27.php?={$id}'>[Mesaji Sil]</a>
   
</div>";
 }
 


    echo '
    <h1>Mesaj Gonder</h1>
    <form action="">
    <table cellpadding="5" cellspacing="5">
<tr>
        <td>Ad-Soyad:</td>
        <td><input type="text" name="adsoyad"></td>
    </tr>
    <tr>
        <td>E-Posta:</td>
        <td><input type="text" name="eposta"></td>
    </tr>
    <tr>
        <td>Mesaj:</td>
        <td><textarea name="mesaj" cols="30" rows="10"></textarea></td>
    </tr>
    <tr>
        <td><input type="submit" value="gonder"></td>
    </tr>
    </table>
</form>';
 } 
 ?>
</body>
</html>