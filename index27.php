<?php
include("ayarlar"); 

$id = @$_GET["id"];

$sil = mysql_query("DELETE FROM mesajlar WHERE id ='$id'");
if($sil){
    echo '<font color = "green">Basariyla Silindi!</font>';
    header("Refresh:2; url =index27_1.php");
}else{
    echo '<font color="red">Basarisiz oldu<br>'.mysql_error().'</font>';
}

?>