<?php

set_time_limit(3000);


// form bilgilerini alalim
$ftp_server = $_POST["ftp_server"];
$ftp_kadi = $_POST["ftp_kadi"];
$ftp_sifre = $_POST["ftp_sifre"];
$ftp_dyolu = $_POST["ftp_dyolu"];
$gecici_dosya = $_FILES["dosya"["tmp_name"];
$dosya_adi = rand(1,9999);
$dosya_uzantisi = substr($_FILE["ftp_dsec"]["name"], -4);

//ftpye baglan
$baglan = ftp_connect($ftp_server);
if ($baglan){
    $giris = ftp_login($baglan,$ftp_kadi,$ftp_sifre);
    if($giris){
            //Dosyalari ftpye yukleyelim
            $yukle = ftp_put($baglan,$ftp_dyolu."/".$dosya_adi,$gecici_dosya, FTP_BINARY);
            if($yukle){
                echo "Ftpye <strong>".$dosya_adi."</strong> adli dosya yuklendi";
            }else{
                "Dosya yukleme basarisiz";
            }

    }else{
        echo "Ftp giris xeta";
    }
}else{
    echo "Ftp de xeta";
}

?>