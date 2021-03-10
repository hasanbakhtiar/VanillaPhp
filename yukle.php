<?php

//$_FILES
//tmp_name 
//name
//size
//type
//is_upladed_file()
//move_upladed_file()

$maxBoyut = 500000;
$dosyaUzantisi = substr($_FILES["dosya"]["name"],-4,4);
$dosyaAdi = rand(0,9999999).$dosyaUzantisi;
$dosyaYolu = "dosya/".$dosyaAdi;

if ($_FILES["dosya"]["size"] > $maxBoyut) {
    echo "Dosya boyutu en fazla <b>500kb</b> olabilir...";
}else{
    $d = $_FILES["dosya"]["type"];
    if ($d == "image/jpeg" || $d == "image/png" || $d == "image/gif"){
            if (is_uploaded_file($_FILES["dosya"]["tmp_name"])) {
                $tasi = move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyaYolu);

                if ($tasi) {
                    echo "<b>{$dosyaAdi}</b> adli doya uqurla yuklendi.<br>
                    <img src='/'{$dosyaYolu}' alt = 'img'";
                }
                else{
                    echo "Dosya yuklenmedi";
                }
            }else{
                echo "dosyada problem var";
            }
    }else{
        echo "Dosya formati <b>GIF, PNG ya JPG</b> formatinda olamlidir!";
    }
}

?>