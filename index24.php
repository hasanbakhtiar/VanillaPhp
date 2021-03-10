<?php include("ayarlar.php");?>
<html>
<head>
<title>Hasan.com</title>
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