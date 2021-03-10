<?php


$baglan = mysql_select_db("oturum", mysql_connect("localhost","root")) or die(mysql_error());

// Bir seyfede log in log out meselesi olacaqsa session_start(); funksiyasi olmaslidi
session_start();

if ($_POST) {
    $kadi = $_POST["kadi"];
    $sifre = $_POST["sifre"];

    $bul = mysql_query("select * from uye where kadi = '$kadi' && sifre = '$sifre'");
    $say = mysql_num_row($bul);
    if ($say > 0) {
        $goster = mysql_fetch_array($bul);
        $_SESSION["oturum"] = true;
        $_SESSION["kadi"] = $kadi;
        $_SESSION["sifre"] = $sifre;
        $_SESSION["eposta"] = $goster["eposta"];
        $_SESSION["rutbe"] = $goster["rutbe"];
        header("Location:index34.php");

    }else{
        echo '<font color="red">Giris Basarisiz oldu!</font>';
    }

}else
{
    if (isset($_SESSION["oturum"])) {
       //oturum acanlarin gore bileceqi hisse
       echo 'Salam, Xosgeldiniz <strong>'.$_SESSION["kadi"].'</strong>[<a href = "index34_1.php"]';
       if ($_SESSION["rutbe"] == 1){
           //yanliz adminlere gorsenir.
           echo '<a href = "admin.php">Admin Panel</a>';
       }
    }
    if (!isset($_SESSION["oturum"])) {
        echo '<form action="">
        <table cellpadding = "5" cellspacing = "5">
            <tr>
                <td>Kullanici Adi:</td>
                <td><input type="text" name="kadi"></td>
            </tr>
    
            <tr>
             <td>Kullanici Adi:</td>
             <td><input type="password" name="sifre"></td>
         </tr>
    
         <tr>
             <td><input type="submit" value="Giris"></td>
         </tr>
        </table>
    </form>';
    }
    
}




?>