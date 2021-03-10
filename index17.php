<?php
 if ($_POST) {
     $diger = 'MIME-Version: 1.0'."\r\n";
     $diger .= 'Content-type: text/html; charset=iso-8859-9'."\r\n";
     $adsoyad = $_POST["adsoyad"];
     $email = $_POST["email"];
     $mesaj = $_POST["mesaj"];
     $movzu = "Əlaqə Xəbərdarlığı";
     $kime = "hasan.doctype@gmail.com";
     $icindeki = "Göndərən:".$adsoyad."<br> 
                  Email:".$email."<br>
                  Mövzu:".$movzu;
    $diger .= 'From: '.$email;

    $gonder = mail($kime,$movzu,$icindeki);
    if($gonder){
        echo "İSMARICINIZ UĞURLA ÇATDIRILDI";
    }else{
        echo "Sistem Xətası";
    }

 }else{
     echo '<form action=" " method="post">
     <h2> Əlaqə Formu </h2>
     <table cellpadding="5" callspacing="5">
        <tr>
        <td>Ad-Soyad:</td>
        <td><input type="text" name="adsoyad" /></td>
     </tr>
     
     <tr>
        <td>E-Mail:</td>
        <td><input type="text" name="email" /></td>
     </tr>

     <tr>
        <td>İsmarıcınız:</td>
        <td><textarea row="3" cols="30" name="mesaj"></textarea></td>
     </tr>
     
     <tr>
     <td></td>
     <td><input type="submit" value="Göndər"></td>
     </tr>
     </table>
     </form>';
 }


?>