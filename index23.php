<?php

//mysql_connect() funksiyasi MYSQL a baglanmaq ucun istifade olunur.
$baglan = mysql_connect("localhost","root","");
if($baglan){
    echo "<font color='green'>Data Base baglanti quruldu.</font><br>";

    //mysql_select_db() funksiyasi MYSQL i secmek ucun istifade olunur.

    $vt_sec = mysql_select_db("test",$baglan);
    if($vt_sec){
        echo "<font color='green'>Data Base Secildi.</font><br>";
    }else{
        die("Data Base secilmedi");
    }
}else{
    die("Baglanti qurulmadi");
}


//mysql_close() funksiyasi MYSQL i baglamaq ve sonlandirmaq ucun istifade olunur.
 mysql_close($baglan);
 echo "<font color='green'>MYSQL sonlandi.</font><br>";


?>