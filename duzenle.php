<?php $id = @$_GET["id"]; 
include ("ayarlar.php");
//mesaji bul
$bul = mysql_query("select * from mesajlar where id='$di'");
$goster = mysql_fetch_array($bul);
extract($goster);
echo '  <table cellpadding="5" cellspacing="5">
<tr>
        <td>Ad-Soyad:</td>
        <td>
        <input type="text" name="adsoyad" value="yazan">
        </td>
    </tr>
    </table> ';
?>