<?php
//cookie de ve sessionda dizileri saxlayib nece olarla elaqe saxlaya bilerik
session_start();

$_SESSION["array"] = array(
    "uye_id" => 1,
    "uye_kadi" => "Hasan Bakhtiar",
    "uye_eposta" => "hasan.doctype@gmail.com"
);

echo $_SESSION["array"]["uye_kadi"]."<br>";

setcookie("array[uye_id]", "1");
setcookie("array[uye_kadi]", "Bakhtiar");
setcookie("array[uye_eposta]", "hasan.doctype@gmail.com");

// print_r($_COOKIE["array"]);

echo $_COOKIE["array"]["uye_eposta"];


?>