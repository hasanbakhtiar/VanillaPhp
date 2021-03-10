<?php
$sayfa = @$_GET["sayfa"];

echo '<a href = "index7_3.php?sayfa=haqqimizda">Haqqimizda</a> | <a href = "index7_5.php?sayfa=elaqe">Əlaqə</a> | <a href = "index7_5.php?sayfa=referanslar">Referanslar</a>';

if($sayfa == "haqqimizda"){
    echo "<h1>Salam</h1><p>Biz web saytlar hazırlanması üzrə peşəkar qurumuq.</p>";
}elseif($sayfa == "elaqe"){
    echo "<h1>Əlaqə</h1><p>Əlaqə üçün:<a href='mailto:hasan01bakhtar@gmail.com'>mailto:hasan01bakhtar@gmail.com</a></p>";
}elseif($sayfa == "referanslar"){
    echo "<h1>Referanslar</h1><p>Referanslar coming soon</p>";
}
else{
    echo "<p>Səhv yerə daxil oldunuz.</p>"
}


?>